<?php

/**
 * Handler para Aprobar Permiso
 * Este archivo se ejecuta cuando el jefe hace clic en "Aprobar" desde el correo
 */

// ============================================================================
// PARTE 1: IMPORTAR LIBRERÍAS NECESARIAS
// ============================================================================
require_once("include/dbcommon.php");



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
    $sqlVerificar = DB::PrepareSQL("SELECT * 
                                    FROM rrhh_permisos.permisos_funcionarios 
                                    WHERE id = ':1'", $permisoId);
    $resultVerificar = DB::Query($sqlVerificar);
    $permiso = $resultVerificar->fetchAssoc();

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
    //function lista_dias($inicio, $fin)
    //{
    //    $rango = array();
    //    if (is_string($inicio) === true) $inicio = strtotime($inicio);
    //    if (is_string($fin) === true) $fin = strtotime($fin);

    //    if ($inicio > $fin) return createDateRangeArray($fin, $inicio);

    //    do {
    //        $rango[] = date('Y-m-d', $inicio);
    //        $inicio = strtotime("+ 1 day", $inicio);
    //    } while ($inicio <= $fin);

    //    return $rango;
    //}

    //function lista_feriados()
    //{
    //    $lista_feriados = array();
    //    $sql_feriados = "select fer_fecha from feriados";
    //    $resultado_feriados = CustomQuery($sql_feriados);
    //    while ($feriado = db_fetch_array($resultado_feriados)) {
    //        array_push($lista_feriados, $feriado['fer_fecha']);
    //    }

    //    return $lista_feriados;
    //}

    //function gasto_dias($lista_dias, $tipo_dias)
    //{
    //    $resultado = array();
    //    $meses_gasto = array();
    //    $cantida_total_meses = 0;
    //    $mes = 0;
    //    $anho = 0;
    //    $dias = 0;
    //    $cantidad_dias = 0;
    //    $corridos = $tipo_dias;
    //    $feriados = lista_feriados();

    //    foreach ($lista_dias as $valor) {
    //        if (
    //            ((date('w', strtotime($valor)) != 6) and (date('w', strtotime($valor)) != 0) and array_search($valor, $feriados, true) === FALSE)
    //            or
    //            $corridos == 1
    //        ) {
    //            $dias = $dias + 1;
    //            $cantidad_dias = $dias;

    //            if ($anho == 0 or $anho <> date("Y", strtotime($valor))) {
    //                $anho = date("Y", strtotime($valor));
    //                $mes = number_format(date("m", strtotime($valor)));
    //                $cantida_total_meses = $cantida_total_meses + 1;
    //                $dias = 1;
    //            }

    //            if ($mes <> date("m", strtotime($valor))) {
    //                $mes = number_format(date("m", strtotime($valor)));
    //                $cantida_total_meses = $cantida_total_meses + 1;
    //                $dias = 1;
    //                $cantidad_dias = 1;
    //            }

    //            $meses_gasto[$cantida_total_meses][0] = $anho;
    //            $meses_gasto[$cantida_total_meses][1] = $mes;
    //            $meses_gasto[$cantida_total_meses][2] = $cantidad_dias;
    //        }
    //    }

    //    return $meses_gasto;
    //}

    // función que genera lista de días entre fechas
    //function calcular_maximos($lista_dias, $tipo_dias)
    //{
    //    $resultado = array();
    //    $meses_gasto = array();
    //    $cantida_total_meses = 0;
    //    $maximo_mes = 0;
    //    $maximo_anho = 0;
    //    $suma_mes = 0;
    //    $suma_anho = 0;
    //    $mes = 0;
    //    $anho = 0;
    //    $corridos = $tipo_dias;
    //    $mes_registrado = 0;
    //    $feriados = lista_feriados();

    //    foreach ($lista_dias as $valor) {
    //        if (
    //            ((date('w', strtotime($valor)) != 6) and (date('w', strtotime($valor)) != 0) and array_search($valor, $feriados, true) === FALSE)
    //            or
    //            $corridos == 1
    //        ) {
    //            if ($anho == 0) {
    //                $cantida_total_meses = $cantida_total_meses + 1;
    //                $mes_registrado = $cantida_total_meses;
    //                $anho = date("Y", strtotime($valor));
    //                $mes = date("m", strtotime($valor));
    //                $suma_anho = $suma_anho + 1;
    //                $maximo_anho = 0;
    //                $suma_mes = $suma_mes + 1;
    //                $maximo_mes = 0;
    //            } else {
    //                if ($anho == date("Y", strtotime($valor))) {
    //                    if ($mes == date("m", strtotime($valor))) {
    //                        $suma_mes = $suma_mes + 1;
    //                    } else {
    //                        $cantida_total_meses = $cantida_total_meses + 1;
    //                        $suma_mes = 0;
    //                        $mes = date("m", strtotime($valor));
    //                        $suma_mes = $suma_mes + 1;
    //                    }
    //                    $suma_anho = $suma_anho + 1;
    //                } else {
    //                    $cantida_total_meses = $cantida_total_meses + 1;
    //                    $meses_gasto[$cantida_total_meses][0] = $anho;
    //                    $meses_gasto[$cantida_total_meses][1] = $mes;
    //                    $meses_gasto[$cantida_total_meses][2] = $maximo_mes;
    //                    $cantidad_anhos = $cantidad_anhos + 1;
    //                    $cantidad_meses = $cantidad_meses + 1;
    //                    $suma_anho = 0;
    //                    $suma_mes = 0;
    //                    $anho = date("Y", strtotime($valor));
    //                    $mes = date("m", strtotime($valor));
    //                    $suma_anho = $suma_anho + 1;
    //                    $suma_mes = $suma_mes + 1;
    //                }
    //            }

    //            if ($mes_registrado != $cantida_total_meses) {
    //                $meses_gasto[$cantida_total_meses][0] = $anho;
    //                $meses_gasto[$cantida_total_meses][1] = $mes_registrado;
    //                $fecha_final = $anho . "-" . $mes . "-" . "01";
    //                $cantidad_maxima_mes = date("t", strtotime($fecha_final));
    //                $meses_gasto[$cantida_total_meses][2] = $cantidad_maxima_mes;
    //                $mes_registrado = $cantida_total_meses;
    //            }

    //            if ($maximo_anho < $suma_anho) {
    //                $maximo_anho = $suma_anho;
    //            }

    //            if ($maximo_mes < $suma_mes) {
    //                $maximo_mes = $suma_mes;
    //                $meses_gasto[$cantida_total_meses][0] = $anho;
    //                $meses_gasto[$cantida_total_meses][1] = $mes;
    //                $meses_gasto[$cantida_total_meses][2] = $maximo_mes;
    //            }
    //        }
    //    } //end foreach

    //    $resultado[0] = $maximo_mes;
    //    $resultado[1] = $maximo_anho;
    //    $resultado[2] = gasto_dias($lista_dias, $tipo_dias);

    //    return $resultado;
    //}

    //$resultado_maximo = array();
    // Consulta cantidades de dias permitidos por permiso
    //$sql_cantidades = "SELECT tip_cantidad_maxima_mes, tip_cantidad_maxima_anho, tip_dias from tipos_ocurrencias where tip_cod = " . $permiso['motivo_id'];
    //$resultados_cantidades = CustomQuery($sql_cantidades);
    //$fila_cantidades = db_fetch_array($resultados_cantidades);
    //$lista_dias = lista_dias($permiso['fecha_desde'], $permiso['fecha_hasta']);
    //$resultado_maximo = calcular_maximos($lista_dias, $fila_cantidades['tip_dias']);

    //if ($resultado_maximo[0] > $fila_cantidades['tip_cantidad_maxima_mes']) {
    //    $message = "Cantidad máxima por mes alcanzada. Cantidad máxima:" . $fila_cantidades['tip_cantidad_maxima_mes'] . "  Cantidad actual: " . $resultado_maximo[0];
    //    return false;
    //} else {
    //    foreach ($resultado_maximo[2] as $valores_mes) {
    //        $sql_total_meses = "SELECT COALESCE(SUM(det_dias_gastados), 0) AS total_dias
    //                                                            FROM (SELECT*,
    //                                                                                (SELECT tip_cod_tipo_sumatoria FROM tipos_ocurrencias WHERE tip_cod = ocu_tipo) AS ocu_cod_tipo_sumatoria
    //                                                                                    FROM ocurrencias
    //                                                                                        JOIN detalle_ocurrencias ON ocu_cod = det_cod_ocurrencia
    //                                                                        ) AS novedades
    //                                                            WHERE (ocu_tipo = " . $permiso['motivo_id'] . " OR ocu_cod_tipo_sumatoria = " . $permiso['motivo_id'] . ")
    //                                                            AND det_anho_gasto = " . $valores_mes[0] . "
    //                        AND det_mes_gasto = " . $valores_mes[1] . "
    //                        AND det_cod_persona = " . $permiso['id_funcionario'] . "";
    //        $resultado_total_meses = CustomQuery($sql_total_meses);
    //        $fila_total_mes = db_fetch_array($resultado_total_meses);

    //        if ($fila_cantidades["tip_cantidad_maxima_mes"] < ($fila_total_mes["total_dias"] + $valores_mes[2])) {
    //            $message = "Cantidad máxima por mes alcanzada. Cantidad máxima: " . $fila_cantidades['tip_cantidad_maxima_mes'] . " Cantidad actual en mes número: " . $valores_mes[1] . " es de: " . ($fila_total_mes["total_dias"] + $valores_mes[2]);
    //            //return false;
    //        }
    //    }
    //}

    //$cantidad_anhos = 0;
    //$anho_actual = 0;
    //$lista_anhos_valores = array();
    //$valor_anho = array();

    //foreach ($resultado_maximo[2] as $valores_anho) {
    //    if ($anho_actual == 0) {
    //        $anho_actual = $valores_anho[0];
    //    }

    //    if ($anho_actual != $valores_anho[0]) {
    //        $valor_anho[1] = $cantidad_anhos;
    //        $valor_anho[0] = $anho_actual;
    //        array_push($lista_anhos_valores, $valor_anho);
    //        $valor_anho = array();
    //    } else {
    //        $cantidad_anhos = $valores_anho[2];
    //    }
    //}

    //$valor_anho[1] = $cantidad_anhos;
    //$valor_anho[0] = $anho_actual;
    //array_push($lista_anhos_valores, $valor_anho);

    //foreach ($lista_anhos_valores as $gastados_anho) {
    //    $sql_suma = "SELECT COALESCE(SUM(det_dias_gastados), 0) AS suma_anho
    //                                        FROM (SELECT *,
    //                                                    (SELECT tip_cod_tipo_sumatoria FROM tipos_ocurrencias WHERE tip_cod = ocu_tipo) AS ocu_cod_tipo_sumatoria
    //                                                        FROM ocurrencias
    //                                                            JOIN detalle_ocurrencias ON ocu_cod = det_cod_ocurrencia
    //                                                ) AS novedades
    //                                        WHERE (ocu_tipo = " . $permiso['motivo_id'] . " OR ocu_cod_tipo_sumatoria = " . $permiso['motivo_id'] . ")
    //                AND det_anho_gasto = " . $valores_mes[0] . "
    //                AND det_cod_persona = " . $permiso['id_funcionario'] . "";
    //    $resultado_suma = CustomQuery($sql_suma);
    //    $fila_suma = db_fetch_array($resultado_suma);
    //    if (($fila_suma['suma_anho'] + $gastados_anho[1]) > $fila_cantidades['tip_cantidad_maxima_anho']) {
    //        $valor = $fila_suma['suma_anho'] + $gastados_anho[1];
    //        $message = "Cantidad máxima por año:" . $fila_cantidades['tip_cantidad_maxima_anho'] . " Cantidad Actual: " . $valor;
    //        //return false;
    //        error_log("Cantidad máxima por año:" . $fila_cantidades['tip_cantidad_maxima_anho'] . " Cantidad Actual: " . $valor);
    //        mostrarMensaje("Error", "Cantidad máxima por año:" . $fila_cantidades['tip_cantidad_maxima_anho'] . " Cantidad Actual: " . $valor, "error");
    //    }
    //}

    //$_SESSION['lista_anhos_valores'] = $resultado_maximo[2];

    /**/



    // ========================================================================
    // INSERTAR EN LA TABLA DE OCURRENCIAS DEL SIAP
    // ========================================================================
    //$sqlInsertOcurrencia = DB::PrepareSQL(
    //    "INSERT INTO public.ocurrencias (
    //        ocu_cod_persona, 
    //        ocu_fecha_desde, 
    //        ocu_fecha_hasta, 
    //        ocu_hora_desde, 
    //        ocu_hora_hasta, 
    //        ocu_tipo, 
    //        ocu_descripcion, 
    //        ocu_archivo
    //    ) 
    //    VALUES (':1', ':2', ':3', ':4', ':5', ':6', ':7', ':8')
    //    RETURNING ocu_cod",
    //    $permiso['id_funcionario'], // Este es el ID de persona.
    //    $permiso['fecha_desde'],
    //    $permiso['fecha_hasta'],
    //    $permiso['hora_desde'],
    //    $permiso['hora_hasta'],
    //    $permiso['motivo_id'],
    //    $permiso['observacion'],
    //    $permiso['archivo_adjunto']
    //);
    ////DB::Exec($sqlInsertOcurrencia);
    //$rs = DB::Query($sqlInsertOcurrencia);
    //$data = $rs->fetchAssoc();
    //$ocu_cod = $data['ocu_cod'];



    /**/
    //foreach ($_SESSION['lista_anhos_valores'] as $valor) {
    //    $sql_insert = "insert into detalle_ocurrencias (det_cod_ocurrencia, 
    //                                                    det_mes_gasto, 
    //                                                    det_anho_gasto, 
    //                                                    det_dias_gastados, 
    //                                                    det_cod_persona)
    //		            values(" . $ocu_cod . ", " . $valor[1] . ", " . $valor[0] . ", " . $valor[2] . ", " . $permiso['id_funcionario'] . ")";
    //    CustomQuery($sql_insert);
    //}

    //ESTE IF ESTABA LUEGO COMENTADO...
    //if ($permiso['motivo_id'] == 9) {
    //    $sql_salud =
    //        "SELECT sum(det_dias_gastados) as cantidad 
    //        FROM (SELECT *
    //                    FROM ocurrencias
    //                    WHERE (ocu_tipo = 9 OR ocu_tipo = 25)
    //                    AND ocu_cod_persona = " . intval($permiso['id_funcionario']) . "
    //                ) AS ocurrencias
    //            JOIN (
    //                SELECT * 
    //                FROM detalle_ocurrencias 
    //                WHERE det_anho_gasto = EXTRACT(YEAR FROM DATE '" . $permiso['fecha_desde'] . "')
    //            ) AS detalle_ocurrencias ON ocurrencias.ocu_cod = detalle_ocurrencias.det_cod_ocurrencia";
    //    debug_to_console($sql_salud);
    //    $resultado_salud = CustomQuery($sql_salud);
    //    $fila_salud = db_fetch_array($resultado_salud);
    //
    //    if ($fila_salud["cantidad"] > 9) {
    //        $pageObject->setMessage("La cantidad actual de permisos por salud es de: " . $fila_salud["cantidad"]);
    //        error_log("La cantidad actual de permisos por salud es de: " . $fila_salud["cantidad"]);
    //        mostrarMensaje("Error", "La cantidad actual de permisos por salud es de: " . $fila_salud["cantidad"], "error");
    //    }
    //}

    //$actualizar_dias_gastado =
    //    'UPDATE ocurrencias
    //    SET ocu_dias_gastados = (SELECT dias_gastados(
    //                                                    tipos_ocurrencias.tip_dias,
    //                                                    ocurrencias.ocu_fecha_desde,
    //                                                    ocurrencias.ocu_fecha_hasta)
    //                                FROM tipos_ocurrencias
    //                                WHERE tipos_ocurrencias.tip_cod = ocurrencias.ocu_tipo)
    //    WHERE ocu_cod = ' . intval($ocu_cod);
    //CustomQuery($actualizar_dias_gastado);


    ////if (!empty($values['ocu_horas_compensacion']) and !is_null($values['ocu_horas_compensacion'])) {
    ////if (!empty($permiso['horas_compensar']) and !is_null($permiso['horas_compensar'])) {
    //$sql_compensacion =
    //    "INSERT INTO compensaciones (com_cod_ocurrencia, com_fecha, com_cod_personal, com_cantidad_horas)
    //        SELECT " . intval($ocu_cod) . ", fecha, " . intval($permiso['id_funcionario']) . ", '" . $permiso['horas_compensar'] . "' 
    //        FROM (SELECT fecha 
    //                FROM (SELECT fecha 
    //                        FROM (SELECT ('" . $permiso["fecha_hasta"] . "'::DATE + INTERVAL '1 day' * dia_sumar)::DATE AS fecha, 
    //                                        dia_habil(('\"" . $permiso["fecha_hasta"] . "'::DATE + INTERVAL '1 day' * dia_sumar)::DATE) AS habil
    //                                FROM dias
    //                                ORDER BY dia_cod) AS listado 
    //                                WHERE habil = 1 
    //                                ORDER BY fecha 
    //                                LIMIT 9) AS listado
    //                ) AS listado;";
    //CustomQuery($sql_compensacion);
    //$sql_compensacion_fecha_fin = "select actualizar_fecha_fin_compensacion(" . $ocu_cod . "); ";
    //CustomQuery($sql_compensacion_fecha_fin);

    //$sql_compensacion_fecha_inicio = "select actualizar_fecha_inicio_compensacion(" . $ocu_cod . "); ";
    //CustomQuery($sql_compensacion_fecha_inicio);

    // insert en tabla de compensaciones completas 
    //$ocu_cod_persona = pg_escape_string($permiso['id_funcionario']);
    //$ocu_fecha_desde = pg_escape_string($permiso['fecha_desde']);
    //$ocu_horas_compensacion = pg_escape_string($permiso['horas_compensar']);
    //$sql_compensacion_completa =
    //    "INSERT INTO public.compensaciones_completas (com_cod_personal, 
    //                                                    com_fecha_generacion, 
    //                                                    com_mes, 
    //                                                    com_anio, 
    //                                                    com_horas_a_compensar, 
    //                                                    com_cod_ocurrencia) 
    //            VALUES ($ocu_cod_persona, 
    //                        '$ocu_fecha_desde', 
    //                        EXTRACT(MONTH FROM DATE '$ocu_fecha_desde'), 
    //                        EXTRACT(YEAR FROM DATE '$ocu_fecha_desde'), 
    //                        INTERVAL '$ocu_horas_compensacion', 
    //                        $ocu_cod)";
    //CustomQuery($sql_compensacion_completa);
    ////}
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
