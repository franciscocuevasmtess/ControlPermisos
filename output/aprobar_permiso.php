<?php

/**
 * Handler para Aprobar Permiso
 * Este archivo se ejecuta cuando el jefe hace clic en "Aprobar" desde el correo
 */

// ============================================================================
// PARTE 1: IMPORTAR LIBRERÍAS NECESARIAS
// ============================================================================
require_once("include/dbcommon.php");
require_once(getabspath("include/email_utils.php"));


/*==============================================================
=            FUNCIÓN AUXILIAR PARA DEPURACIÓN                  =
==============================================================*/
/**
 * Imprime información en la consola del navegador.
 * Útil SOLO en desarrollo para verificar valores.
 *
 * @param mixed  $data    Datos a mostrar
 * @param string $context Texto descriptivo del contexto
 */
function debug_to_console($data, $context = 'Debug in Console')
{
    ob_start();
    $output  = 'console.info(\'' . $context . ':\');';
    $output .= 'console.log(' . json_encode($data) . ');';
    $output  = sprintf('<script>%s</script>', $output);
    echo $output;
}


// ============================================================================
// PARTE 2: OBTENER EL ID DEL PERMISO DESDE LA URL
// ============================================================================
// La URL viene así: aprobar_permiso.php?id=123
// $_GET['id'] obtiene el valor 123
// intval() convierte a entero para prevenir SQL injection
$permisoId = isset($_GET['id']) ? intval($_GET['id']) : 0;

$email_jefe_id = isset($_GET['email_jefe_id']) ? intval($_GET['email_jefe_id']) : 0;


// ============================================================================
// PARTE 3: VALIDAR QUE EL ID SEA VÁLIDO
// ============================================================================
if ($permisoId <= 0) {
    mostrarMensaje("Error", "ID de permiso inválido", "error");
    exit;
}

// ============================================================================
// PARTE 4: PROCESAR LA APROBACIÓN
// ============================================================================
try {
    // Obtener datos del usuario actual (si está logueado)
    // Si no está logueado, $usuarioAprobador será null
    $usuarioAprobador = null;
    if (Security::hasLogin()) {
        $currentUserData = Security::currentUserData();
        $usuarioAprobador = isset($currentUserData["id"]) ? $currentUserData["id"] : null;
    }

    // ========================================================================
    // VERIFICAR QUE EL PERMISO EXISTE
    // ========================================================================
    // DB::PrepareSQL() previene SQL injection
    // ':1' es un placeholder que se reemplaza con $permisoId
    //$sqlVerificar = DB::PrepareSQL("SELECT * 
    //                                FROM rrhh_permisos.permisos_funcionarios 
    //                                WHERE id = ':1'", $permisoId);
    //$resultVerificar = DB::Query($sqlVerificar);
    //$permiso = $resultVerificar->fetchAssoc();
    $sqlVerificar = DB::PrepareSQL(
        "SELECT pf.*,
                TRIM(COALESCE(p.per_nombre, '') || ' ' || COALESCE(p.per_apellido, '')) AS nombre_funcionario,
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
        throw new Exception("No se pudo consultar la solicitud.");
    }

    $permiso = $resultVerificar->fetchAssoc();


    /**/
    $nombreJefe = "Jefatura inmediata";
    if ($email_jefe_id > 0) {
        $sqlJefe = DB::PrepareSQL(
            "SELECT TRIM(COALESCE(per_nombre, '') || ' ' || COALESCE(per_apellido, '')) AS nombre_jefe
            FROM public.personales
            WHERE per_cod = ':1'",
            $email_jefe_id
        );

        $resultJefe = DB::Query($sqlJefe);
        if ($resultJefe) {
            $rowJefe = $resultJefe->fetchAssoc();

            if ($rowJefe && !empty(trim($rowJefe["nombre_jefe"]))) {
                $nombreJefe = trim($rowJefe["nombre_jefe"]);
            }
        }
    }
    /**/




    // Si no existe el permiso, mostrar error
    if (!$permiso) {
        mostrarMensaje("Error", "El permiso solicitado no existe", "error");
        exit;
    }

    // ========================================================================
    // VERIFICAR QUE NO FUE PROCESADO ANTERIORMENTE
    // ========================================================================
    // Si ya fue aprobado, mostrar mensaje informativo
    if ($permiso['estado'] === 'APROBADO') {
        mostrarMensaje("Información", "Este permiso ya fue aprobado anteriormente", "info");
        exit;
    }

    // Si fue rechazado, no se puede aprobar
    if ($permiso['estado'] === 'RECHAZADO') {
        mostrarMensaje("Información", "Este permiso fue rechazado anteriormente y no puede ser aprobado", "warning");
        exit;
    }

    // ========================================================================
    // ACTUALIZAR EL ESTADO A "APROBADO"
    // ========================================================================
    // Actualiza 4 campos en la base de datos:
    // 1. estado = 'Aprobado'
    // 2. fecha_decision = NOW() (fecha y hora actual)
    // 3. decidido_por = ID del jefe
    // 4. resultado_decision = 'APROBADO'
    $sqlAprobar = DB::PrepareSQL(
        "UPDATE rrhh_permisos.permisos_funcionarios 
            SET estado = 'APROBADO',
                fecha_decision = NOW(),
                resultado_decision = 'APROBADO',
                decidido_por = ':1'
            WHERE id = ':2'",
        $email_jefe_id,
        $permisoId
    );

    // Ejecutar la actualización
    DB::Exec($sqlAprobar);


    /**/
    /*==============================================================
    =       NOTIFICAR APROBACIÓN AL FUNCIONARIO                   =
    ==============================================================*/
    try {
        $emailFuncionario = isset($permiso["email_funcionario"]) ? trim((string)$permiso["email_funcionario"]) : "";
        if ($emailFuncionario !== "" && filter_var($emailFuncionario, FILTER_VALIDATE_EMAIL)) {
            $datosAprobacion = array(
                "nombre_funcionario" => trim($permiso["nombre_funcionario"]),
                "nombre_jefe" => $nombreJefe,
                "fecha_desde" => $permiso["fecha_desde"],
                "hora_desde" => $permiso["hora_desde"],
                "fecha_hasta" => $permiso["fecha_hasta"],
                "hora_hasta" => $permiso["hora_hasta"],
                "motivo" => $permiso["motivo"],
                "observacion" => $permiso["observacion"],
                "dependencia" => $permiso["dependencia"]
            );

            $emailEnviado = EmailUtils::enviarNotificacionAprobacionJefe($datosAprobacion, $emailFuncionario);
            if ($emailEnviado) {
                error_log(
                    "ControlPermisos - Notificación de aprobación "
                        . "del jefe enviada correctamente. "
                        . "Permiso ID: " . $permisoId
                        . " - Destinatario: "
                        . $emailFuncionario
                );
            } else {
                error_log(
                    "ControlPermisos - No se pudo enviar "
                        . "la notificación de aprobación. "
                        . "Permiso ID: " . $permisoId
                        . " - Destinatario: "
                        . $emailFuncionario
                );
            }
        } else {
            error_log(
                "ControlPermisos - Aprobación registrada "
                    . "SIN notificación. "
                    . "Funcionario sin correo institucional válido. "
                    . "Permiso ID: " . $permisoId
                    . " - Funcionario: "
                    . $permiso["id_funcionario"]
                    . " - Email: ["
                    . $emailFuncionario
                    . "]"
            );
        }
    } catch (Throwable $e) {
        // La aprobación ya quedó registrada.
        // Un error de email NO debe deshacerla.
        error_log(
            "ControlPermisos - Error enviando correo "
                . "de aprobación del jefe. "
                . "Permiso ID: " . $permisoId
                . " - Error: "
                . $e->getMessage()
        );
    }
    /**/




    // ========================================================================
    // REGISTRAR EN EL LOG
    // ========================================================================
    // Esto ayuda para debugging y auditoría
    error_log("Permiso ID " . $permisoId . " aprobado por usuario " . ($usuarioAprobador ? $usuarioAprobador : 'desconocido'));

    // ========================================================================
    // MOSTRAR MENSAJE DE ÉXITO
    // ========================================================================
    mostrarMensaje("Éxito", "El permiso ha sido aprobado correctamente", "success");
} catch (Exception $e) {
    // Si hay algún error, capturarlo y mostrar mensaje
    error_log("Error al aprobar permiso: " . $e->getMessage());
    mostrarMensaje("Error", "Ocurrió un error al procesar la aprobación: " . $e->getMessage(), "error");
}

// ============================================================================
// FUNCIÓN PARA MOSTRAR MENSAJES HTML
// ============================================================================
/**
 * Muestra un mensaje HTML formateado con estilos
 * 
 * @param string $titulo Título del mensaje
 * @param string $mensaje Contenido del mensaje
 * @param string $tipo Tipo de mensaje: success, error, warning, info
 */
function mostrarMensaje($titulo, $mensaje, $tipo = "info")
{
    // Definir colores e iconos según el tipo de mensaje
    $colores = array(
        "success" => array("bg" => "#4CAF50", "icon" => "✓"),  // Verde
        "error" => array("bg" => "#f44336", "icon" => "✗"),    // Rojo
        "warning" => array("bg" => "#ff9800", "icon" => "⚠"),  // Naranja
        "info" => array("bg" => "#2196F3", "icon" => "ℹ")      // Azul
    );

    // Obtener el color correspondiente al tipo
    $color = isset($colores[$tipo]) ? $colores[$tipo] : $colores["info"];

    // Generar HTML de la página de confirmación
    echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . htmlspecialchars($titulo) . '</title>
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
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            margin: 20px;
        }
        .header {
            background-color: ' . $color["bg"] . ';
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
            color: #333333;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
        }
        .footer {
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: ' . $color["bg"] . ';
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="icon">' . $color["icon"] . '</div>
            <h1>' . htmlspecialchars($titulo) . '</h1>
        </div>
        <div class="content">
            <p>' . htmlspecialchars($mensaje) . '</p>
        </div>
        <div class="footer">
            <p style="color: #999; font-size: 12px;">Sistema de Control de Permisos - MTESS</p>
        </div>
    </div>
</body>
</html>';
}
