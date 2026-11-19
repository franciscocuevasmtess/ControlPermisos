<?php

/**
 * ============================================================
 * RECHAZAR PERMISO / VACACIÓN POR JEFATURA INMEDIATA
 * ============================================================
 *
 * Flujo:
 *
 * 1. El jefe hace clic en "Rechazar" desde el correo.
 * 2. Se abre esta página, pero NO se modifica todavía la BD.
 * 3. El jefe debe escribir obligatoriamente el motivo.
 * 4. Al confirmar:
 *      - estado = RECHAZADO
 *      - resultado_decision = RECHAZADO
 *      - fecha_decision = NOW()
 *      - decidido_por = jefe
 *      - jefe_motivo_rechazo = motivo informado
 * 5. Se notifica al funcionario por correo.
 *
 * IMPORTANTE:
 * El rechazo ya no se realiza mediante un simple GET.
 * La modificación definitiva se hace únicamente mediante POST.
 */


// ============================================================
// INCLUSIONES
// ============================================================
require_once("include/dbcommon.php");
require_once(getabspath("include/email_utils.php"));


// ============================================================
// IDENTIFICAR MÉTODO HTTP
// ============================================================
$esPost = (
    isset($_SERVER["REQUEST_METHOD"])
    && strtoupper($_SERVER["REQUEST_METHOD"]) === "POST"
);


// ============================================================
// OBTENER PARÁMETROS
// ============================================================
if ($esPost) {
    $permisoId = isset($_POST["id"]) ? (int)$_POST["id"] : 0;
    $email_jefe_id = isset($_POST["email_jefe_id"]) ? (int)$_POST["email_jefe_id"] : 0;
} else {
    $permisoId = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
    $email_jefe_id = isset($_GET["email_jefe_id"]) ? (int)$_GET["email_jefe_id"] : 0;
}


// ============================================================
// VALIDACIONES BÁSICAS
// ============================================================
if ($permisoId <= 0) {
    mostrarMensaje("Error", "ID de permiso inválido.", "error");
    exit;
}


if ($email_jefe_id <= 0) {
    mostrarMensaje("Error","No se pudo identificar a la jefatura responsable.","error");
    exit;
}


// ============================================================
// PROCESO PRINCIPAL
// ============================================================
try {

    // ========================================================
    // OBTENER SOLICITUD
    // ========================================================
    $sqlVerificar = DB::PrepareSQL(
        "SELECT pf.id,
                pf.id_funcionario,
                pf.estado,
                pf.resultado_decision,
                pf.fecha_desde,
                pf.hora_desde,
                pf.fecha_hasta,
                pf.hora_hasta,
                pf.observacion,
                pf.motivo_id,
                pf.dependencia_id,
                pf.jefe_motivo_rechazo,
                TRIM(
                    COALESCE(p.per_nombre, '') || ' ' ||
                    COALESCE(p.per_apellido, '')
                ) AS nombre_funcionario,
                TRIM(COALESCE(p.per_email_instit, '')) AS email_funcionario,
                d.dep_descripcion AS dependencia,
                t.tip_descripcion AS motivo
            FROM rrhh_permisos.permisos_funcionarios pf
                LEFT JOIN public.personales p ON p.per_cod = pf.id_funcionario
                LEFT JOIN public.dependencias d ON d.dep_cod = pf.dependencia_id
                LEFT JOIN public.tipos_ocurrencias t ON t.tip_cod::text = TRIM(pf.motivo_id)
            WHERE pf.id = ':1'",
        $permisoId
    );
    $resultVerificar = DB::Query($sqlVerificar);

    if (!$resultVerificar) {
        error_log("ControlPermisos - Error consultando permiso ID " . $permisoId . ": " . DB::LastError());
        throw new Exception("No se pudo consultar la solicitud.");
    }

    $permiso = $resultVerificar->fetchAssoc();

    if (!$permiso) {
        mostrarMensaje("Error", "La solicitud indicada no existe.", "error");
        exit;
    }


    // ========================================================
    // VALIDAR QUE EL SUPERIOR ESTÉ AUTORIZADO
    // ========================================================

    $idFuncionarioSolicitud = (int)$permiso["id_funcionario"];

    $sqlValidarSuperior = DB::PrepareSQL(
        "SELECT superior_cod
            FROM public.vw_personales_superiores
            WHERE funcionario_cod = ':1'
            AND superior_cod = ':2'
            LIMIT 1",
        $idFuncionarioSolicitud,
        $email_jefe_id
    );

    $rsValidarSuperior = DB::Query($sqlValidarSuperior);

    if (!$rsValidarSuperior) {
        throw new Exception("No se pudo validar al superior inmediato.");
    }

    $superiorAutorizado = $rsValidarSuperior->fetchAssoc();

    if (!$superiorAutorizado) {
        throw new Exception("El superior indicado no está autorizado para rechazar esta solicitud.");
    }








    // ========================================================
    // OBTENER DATOS DEL JEFE
    // ========================================================
    $nombreJefe = "Jefatura inmediata";

    $sqlJefe = DB::PrepareSQL(
        "SELECT TRIM(
                COALESCE(per_nombre, '') || ' ' ||
                COALESCE(per_apellido, '')
            ) AS nombre_jefe
        FROM public.personales
        WHERE per_cod = ':1'",
        $email_jefe_id
    );
    $resultJefe = DB::Query($sqlJefe);

    if ($resultJefe) {
        $rowJefe = $resultJefe->fetchAssoc();

        if ($rowJefe && !empty(trim((string)$rowJefe["nombre_jefe"]))) {
            $nombreJefe = trim((string)$rowJefe["nombre_jefe"]);
        }
    } else {
        error_log("ControlPermisos - Error consultando jefe ID " . $email_jefe_id . ": " . DB::LastError());
    }


    // ========================================================
    // VALIDAR QUE TODAVÍA PUEDA SER PROCESADA
    // ========================================================
    $estadoActual = strtoupper(trim((string)$permiso["estado"]));
    $resultadoActual = strtoupper(trim((string)$permiso["resultado_decision"]));

    if ($estadoActual === "APROBADO") {
        mostrarMensaje("Información","Esta solicitud ya fue aprobada anteriormente.","info");
        exit;
    }

    if ($estadoActual === "RECHAZADO") {
        mostrarMensaje("Información","Esta solicitud ya fue rechazada anteriormente.","warning");
        exit;
    }

    if ($estadoActual !== "PENDIENTE" || $resultadoActual !== "PENDIENTE") {
        mostrarMensaje("Información","Esta solicitud ya no se encuentra pendiente de decisión de la jefatura.","warning");
        exit;
    }


    // ========================================================
    // GET:
    // MOSTRAR FORMULARIO, SIN MODIFICAR LA BASE DE DATOS
    // ========================================================
    if (!$esPost) {
        mostrarFormularioRechazo($permiso, $nombreJefe, $email_jefe_id);
        exit;
    }

    // ========================================================
    // POST:
    // VALIDAR MOTIVO DEL RECHAZO
    // ========================================================
    $motivoRechazo = isset($_POST["motivo_rechazo"]) ? trim((string)$_POST["motivo_rechazo"]) : "";
    
    if ($motivoRechazo === "") {
        mostrarFormularioRechazo(
            $permiso,
            $nombreJefe,
            $email_jefe_id,
            "Debe indicar obligatoriamente el motivo del rechazo.",
            $motivoRechazo
        );
        exit;
    }

    // Validar longitud máxima
    // Se permite hasta 2.000 caracteres
    if (mb_strlen($motivoRechazo) > 2000) {
        mostrarFormularioRechazo(
            $permiso,
            $nombreJefe,
            $email_jefe_id,
            "El motivo del rechazo no puede superar los 2.000 caracteres.",
            $motivoRechazo
        );
        exit;
    }

    
    // ========================================================
    // REGISTRAR RECHAZO
    //
    // Se vuelve a exigir estado PENDIENTE en el UPDATE.
    // Esto evita una segunda decisión si dos peticiones llegan
    // prácticamente al mismo tiempo.
    // ========================================================
    $sqlRechazar = DB::PrepareSQL(
        "UPDATE rrhh_permisos.permisos_funcionarios
            SET estado = 'RECHAZADO',
                fecha_decision = NOW(),
                resultado_decision = 'RECHAZADO',
                decidido_por = ':1',
                jefe_motivo_rechazo = ':2'
        WHERE id = ':3'
        AND estado = 'PENDIENTE'
        AND resultado_decision = 'PENDIENTE'
        RETURNING id
        ",
        $email_jefe_id,
        $motivoRechazo,
        $permisoId
    );
    $resultRechazo = DB::Query($sqlRechazar);

    if (!$resultRechazo) {
        throw new Exception("No se pudo registrar el rechazo. " . DB::LastError());
    }

    $rechazoRegistrado = $resultRechazo->fetchAssoc();

    if (!$rechazoRegistrado || empty($rechazoRegistrado["id"])) {
        throw new Exception("La solicitud ya fue procesada o dejó de estar pendiente.");
    }
    
    
    // ========================================================
    // NOTIFICAR AL FUNCIONARIO
    // ========================================================

    /*
     * El rechazo ya quedó registrado.
     *
     * Si el correo falla, NO revertimos la decisión.
     */
    try {
        $emailFuncionario = isset($permiso["email_funcionario"]) ? trim((string)$permiso["email_funcionario"]) : "";
        
        if ($emailFuncionario !== "" && filter_var($emailFuncionario, FILTER_VALIDATE_EMAIL)) {
            $datosRechazo = array(
                "nombre_funcionario" => trim((string)$permiso["nombre_funcionario"]),
                "nombre_jefe" => $nombreJefe,
                "fecha_desde" => $permiso["fecha_desde"],
                "hora_desde" => $permiso["hora_desde"],
                "fecha_hasta" => $permiso["fecha_hasta"],
                "hora_hasta" => $permiso["hora_hasta"],
                "motivo" => $permiso["motivo"],
                "observacion" => $permiso["observacion"],
                "dependencia" => $permiso["dependencia"],
                "motivo_rechazo_jefe" => $motivoRechazo,
                "tipo_solicitud" => "rechazo_jefe"
            );
            
            $emailEnviado = EmailUtils::enviarNotificacionRechazoJefe($datosRechazo, $emailFuncionario);

            if ($emailEnviado) {
                error_log(
                    "ControlPermisos - Notificación de rechazo enviada. "
                    . "Permiso ID: " . $permisoId
                    . " - Funcionario: " . $permiso["id_funcionario"]
                    . " - Destinatario: " . $emailFuncionario
                );

            } else {
                error_log(
                    "ControlPermisos - El rechazo fue registrado, "
                    . "pero no pudo enviarse la notificación. "
                    . "Permiso ID: " . $permisoId
                );
            }
        } else {
            error_log(
                "ControlPermisos - Rechazo registrado SIN correo. "
                . "Funcionario sin email institucional válido. "
                . "Permiso ID: " . $permisoId
                . " - Email encontrado: [" . $emailFuncionario . "]"
            );
        }
    } catch (Throwable $e) {
        error_log(
            "ControlPermisos - Error enviando correo "
            . "de rechazo del jefe. Permiso ID: " . $permisoId
            . " - Error: "
            . $e->getMessage()
        );
    }


    // ========================================================
    // LOG
    // ========================================================
    error_log("ControlPermisos - Permiso ID " . $permisoId . " rechazado por jefe ID " . $email_jefe_id);


    // ========================================================
    // MENSAJE FINAL
    // ========================================================
    mostrarMensaje("Solicitud rechazada", "El rechazo fue registrado correctamente junto con el motivo indicado.", "warning");

} catch (Throwable $e) {
    error_log("ControlPermisos - Error al rechazar permiso: " . $e->getMessage());
    mostrarMensaje("Error", "Ocurrió un error al procesar el rechazo: " . $e->getMessage(), "error");
}


// ============================================================
// FORMULARIO PARA INGRESAR MOTIVO DEL RECHAZO
// ============================================================
function mostrarFormularioRechazo($permiso, $nombreJefe, $emailJefeId, $error = "", $motivoAnterior = "") {
    $permisoId = (int)$permiso["id"];
    $nombreFuncionario = htmlspecialchars(trim((string)$permiso["nombre_funcionario"]), ENT_QUOTES, "UTF-8");
    $nombreJefeSeguro = htmlspecialchars(trim((string)$nombreJefe), ENT_QUOTES, "UTF-8");
    $dependencia = htmlspecialchars((string)$permiso["dependencia"], ENT_QUOTES, "UTF-8");
    $motivoSolicitud = htmlspecialchars((string)$permiso["motivo"], ENT_QUOTES, "UTF-8");
    $fechaDesde = htmlspecialchars((string)$permiso["fecha_desde"], ENT_QUOTES, "UTF-8");
    $fechaHasta = htmlspecialchars((string)$permiso["fecha_hasta"], ENT_QUOTES, "UTF-8");
    $motivoAnteriorSeguro = htmlspecialchars((string)$motivoAnterior, ENT_QUOTES, "UTF-8");

    $errorHtml = "";

    if ($error !== "") {
        $errorHtml = '<div class="error">' . htmlspecialchars($error, ENT_QUOTES, "UTF-8") . '</div>';
    }
    
    echo '
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Rechazar solicitud</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background: #f4f4f4;
                        margin: 0;
                        padding: 20px;
                    }

                    .container {
                        max-width: 650px;
                        margin: 30px auto;
                        background: white;
                        border-radius: 10px;
                        box-shadow: 0 2px 12px rgba(0,0,0,.12);
                        overflow: hidden;
                    }

                    .header {
                        background: #dc3545;
                        color: white;
                        padding: 22px 30px;
                    }

                    .header h1 {
                        margin: 0;
                        font-size: 23px;
                    }

                    .content {
                        padding: 30px;
                    }

                    .info {
                        background: #f8f9fa;
                        border-radius: 8px;
                        padding: 18px;
                        margin-bottom: 25px;
                    }

                    .info-row {
                        margin-bottom: 10px;
                    }

                    .info-row:last-child {
                        margin-bottom: 0;
                    }

                    .label {
                        font-weight: bold;
                        color: #333;
                    }

                    textarea {
                        width: 100%;
                        box-sizing: border-box;
                        min-height: 130px;
                        resize: vertical;
                        padding: 12px;
                        border: 1px solid #ced4da;
                        border-radius: 6px;
                        font-family: Arial, sans-serif;
                        font-size: 15px;
                    }

                    textarea:focus {
                        border-color: #dc3545;
                        outline: none;
                    }

                    .required {
                        color: #dc3545;
                    }

                    .error {
                        background: #f8d7da;
                        border: 1px solid #f5c2c7;
                        color: #842029;
                        padding: 12px;
                        border-radius: 6px;
                        margin-bottom: 20px;
                    }

                    .help {
                        color: #666;
                        font-size: 13px;
                        margin-top: 7px;
                    }

                    .actions {
                        margin-top: 25px;
                        text-align: center;
                    }

                    .btn {
                        border: 0;
                        border-radius: 6px;
                        padding: 12px 25px;
                        font-size: 15px;
                        font-weight: bold;
                        cursor: pointer;
                    }

                    .btn-danger {
                        background: #dc3545;
                        color: white;
                    }

                    .btn-danger:hover {
                        background: #bb2d3b;
                    }

                    .footer {
                        background: #f9f9f9;
                        color: #999;
                        padding: 15px;
                        text-align: center;
                        font-size: 12px;
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <div class="header">
                        <h1>Rechazo de solicitud</h1>
                    </div>
                    <div class="content">
                        ' . $errorHtml . '
                        <div class="info">
                            <div class="info-row">
                                <span class="label">Funcionario:</span>
                                ' . $nombreFuncionario . '
                            </div>
                            <div class="info-row">
                                <span class="label">Jefatura:</span>
                                ' . $nombreJefeSeguro . '
                            </div>
                            <div class="info-row">
                                <span class="label">Dependencia:</span>
                                ' . $dependencia . '
                            </div>
                            <div class="info-row">
                                <span class="label">Motivo:</span>
                                ' . $motivoSolicitud . '
                            </div>
                            <div class="info-row">
                                <span class="label">Desde:</span>
                                ' . $fechaDesde . '
                            </div>
                            <div class="info-row">
                                <span class="label">Hasta:</span>
                                ' . $fechaHasta . '
                            </div>
                        </div>
                        <form method="post" action="rechazar_permiso.php">
                            <input type="hidden" name="id" value="' . $permisoId . '">
                            <input type="hidden" name="email_jefe_id" value="' . (int)$emailJefeId . '">
                            <label for="motivo_rechazo">
                                <strong>
                                    Motivo del rechazo
                                    <span class="required">*</span>
                                </strong>
                            </label>
                            <br><br>
                            <textarea
                                id="motivo_rechazo"
                                name="motivo_rechazo"
                                maxlength="2000"
                                required
                                placeholder="Indique el motivo por el cual rechaza la solicitud..."
                            >' . $motivoAnteriorSeguro . '</textarea>
                            <div class="help">
                                Este campo es obligatorio.
                            </div>
                            <div class="actions">
                                <button type="submit" class="btn btn-danger">
                                    Confirmar rechazo
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="footer">
                        Sistema de Control de Permisos - MTESS
                    </div>
                </div>
            </body>
        </html>
    ';
}


// ============================================================
// MENSAJES FINALES
// ============================================================

function mostrarMensaje($titulo, $mensaje, $tipo = "info") {
    
    $colores = array(
        "success" => array("bg" => "#4CAF50", "icon" => "✓"),
        "error" => array("bg" => "#f44336", "icon" => "✗"),
        "warning" => array("bg" => "#ff9800", "icon" => "⚠"),
        "info" => array("bg" => "#2196F3", "icon" => "ℹ")
    );
    
    $color = isset($colores[$tipo]) ? $colores[$tipo] : $colores["info"];
    
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>'. htmlspecialchars($titulo, ENT_QUOTES, "UTF-8"). '</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }

            .container {
                max-width: 500px;
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0,0,0,.1);
                overflow: hidden;
                margin: 20px;
            }

            .header {
                background-color: '. $color["bg"] . ';
                color: white;
                padding: 30px;
                text-align: center;
            }

            .header .icon {
                font-size: 48px;
                margin-bottom: 10px;
            }

            .header h1 {
                margin: 0;
                font-size: 24px;
            }

            .content {
                padding: 30px;
                text-align: center;
            }

            .content p {
                color: #333;
                font-size: 16px;
                line-height: 1.6;
                margin: 0;
            }

            .footer {
                padding: 20px;
                text-align: center;
                background-color: #f9f9f9;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="icon">'. $color["icon"]. '</div>
                <h1>'. htmlspecialchars($titulo, ENT_QUOTES, "UTF-8"). '</h1>
            </div>
            <div class="content">
                <p>'. htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8") . '</p>
            </div>
            <div class="footer">
                <p style="color:#999;font-size:12px;">
                    Sistema de Control de Permisos - MTESS
                </p>
            </div>
        </div>
    </body>
</html>';
}
