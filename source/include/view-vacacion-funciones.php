<?php
// ======================================================
// IMPORTACIÓN DE LIBRERÍAS DE PHPRUNNER
// ======================================================
include_once("include/dbcommon.php");

//function debug_to_console($data, $context = 'Debug in Console')
//{
//    ob_start();
//    $output  = 'console.info(\'' . $context . ':\');';
//    $output .= 'console.log(' . json_encode($data) . ');';
//    $output  = sprintf('<script>%s</script>', $output);
//    echo $output;
//}


/** 
 * Definición de constante para el motivo de vacaciones.
 */
$sqlCONSTANTE1 = "SELECT tip_cod 
                    FROM public.tipos_ocurrencias 
                    WHERE tip_descripcion = 'Vacaciones'";
$rsCONSTANTE1 = DB::Query($sqlCONSTANTE1);
$dataCONSTANTE1 = $rsCONSTANTE1->fetchAssoc();
define("MOTIVO_VACACIONES", $dataCONSTANTE1["tip_cod"]);


/**
 * Obtiene la cantidad de días de vacaciones que le corresponden
 * al funcionario según los años cumplidos de antigüedad. 
 * 
 * @param int $antiguedad Años cumplidos.
 * @return int Cantidad de días de vacaciones permitidos.
 */
function calcularDiasPorAntiguedad($antiguedad)
{
    if ($antiguedad >= 1 && $antiguedad <= 5) {
        return 12;
    } elseif ($antiguedad >= 6 && $antiguedad <= 10) {
        return 18;
    } elseif ($antiguedad > 10) {
        return 30;
    }
    return 0;
}


/**
 * Calcula la cantidad de días hábiles de vacaciones
 * comprendidos entre dos fechas, inclusive.
 *
 * Se consideran días hábiles:
 * - lunes a viernes;
 * - excluyendo las fechas registradas en public.feriados.
 *
 * Esta función NO modifica datos.
 *
 * @param string $fechaDesde Fecha inicial en formato YYYY-MM-DD.
 * @param string $fechaHasta Fecha final en formato YYYY-MM-DD.
 * @return int Cantidad de días hábiles.
 *
 * @throws Exception Si las fechas son inválidas o no puede realizarse el cálculo.
 */
function calcularDiasHabilesVacaciones($fechaDesde, $fechaHasta)
{
    $fechaDesde = trim((string)$fechaDesde);
    $fechaHasta = trim((string)$fechaHasta);

    /*
     * Validar que ambas fechas estén informadas.
     */
    if ($fechaDesde === "" || $fechaHasta === "") {
        throw new Exception(
            "No se puede calcular los días hábiles porque las fechas están incompletas."
        );
    }

    /*
     * Normalizar las fechas.
     *
     * En caso de que PHPRunner entregue también una parte horaria,
     * tomamos solamente YYYY-MM-DD.
     */
    $fechaDesde = substr($fechaDesde, 0, 10);
    $fechaHasta = substr($fechaHasta, 0, 10);

    /*
     * Validar formato y existencia real de las fechas.
     */
    $desdeObj = DateTime::createFromFormat("Y-m-d", $fechaDesde);
    $hastaObj = DateTime::createFromFormat("Y-m-d", $fechaHasta);

    if (
        !$desdeObj
        || !$hastaObj
        || $desdeObj->format("Y-m-d") !== $fechaDesde
        || $hastaObj->format("Y-m-d") !== $fechaHasta
    ) {
        throw new Exception(
            "No se puede calcular los días hábiles porque alguna de las fechas no es válida."
        );
    }

    /*
     * La fecha desde no puede ser posterior a la fecha hasta.
     */
    if ($desdeObj > $hastaObj) {
        throw new Exception("La fecha desde no puede ser posterior a la fecha hasta.");
    }

    /*
     * PostgreSQL realiza el cálculo:
     *
     * 1. genera todas las fechas del intervalo;
     * 2. conserva solamente lunes a viernes;
     * 3. excluye cualquier fecha existente en public.feriados.
     *
     * El intervalo es inclusivo:
     * fecha_desde y fecha_hasta forman parte del cálculo.
     */
    $sql = DB::PrepareSQL(
        "
        SELECT COUNT(*)::int AS dias_habiles
        FROM generate_series(
            ':1'::date,
            ':2'::date,
            INTERVAL '1 day'
        ) AS d(fecha)
        WHERE EXTRACT(ISODOW FROM d.fecha) BETWEEN 1 AND 5
          AND NOT EXISTS (
              SELECT 1
              FROM public.feriados f
              WHERE f.fer_fecha::date = d.fecha::date
          )
        ",
        $fechaDesde,
        $fechaHasta
    );
    $rs = DB::Query($sql);

    if (!$rs) {
        throw new Exception("No fue posible calcular los días hábiles de vacaciones.");
    }

    $data = $rs->fetchAssoc();

    if (!$data) {
        throw new Exception(
            "No fue posible obtener el resultado del cálculo de días hábiles."
        );
    }

    return (int)$data["dias_habiles"];
}


/**
 * Obtiene la cantidad de días comprometidos por un funcionario
 * para un período determinado.
 *
 * La función considera tres fuentes:
 *
 * 1. Solicitudes PENDIENTES:
 *    rrhh_permisos.permisos_funcionarios
 *
 * 2. Vacaciones históricas que todavía NO tienen registros
 *    en public.vacaciones_consumo:
 *    public.vacaciones
 *
 * 3. Vacaciones que YA tienen consumo registrado:
 *    public.vacaciones_consumo
 *
 * IMPORTANTE:
 * Una vacación que ya tiene registros en vacaciones_consumo
 * NO vuelve a contabilizar sus vac_dias_pedidos de public.vacaciones,
 * para evitar duplicar el compromiso.
 *
 * @param int $idFuncionario Identificador del funcionario.
 * @param int $periodo Período de vacaciones.
 * @param int $idSolicitudExcluir Opcional: identificador de una solicitud a excluir.
 * @return array Retorna el detalle de días comprometidos.
 */
// function obtenerDiasComprometidosVacaciones($idFuncionario, $periodo, $idSolicitudExcluir = 0)
// {
//     $idFuncionario = (int)$idFuncionario;
//     $periodo = (int)$periodo;
//     $idSolicitudExcluir = (int)$idSolicitudExcluir;

//     /*
//      * ============================================================
//      * 1. SOLICITUDES APROBADAS POR JEFATURA Y PENDIENTES DE DGTH
//      * ============================================================
//      *
//      * Estas solicitudes todavía no existen en vacaciones_consumo,
//      * pero ya constituyen días comprometidos.
//      *
//      * Cuando estamos aprobando una solicitud concreta en DGTH,
//      * esa misma solicitud debe excluirse para no descontarla dos
//      * veces antes de distribuir su consumo.
//      */

//     $condicionExcluir = "";

//     if ($idSolicitudExcluir > 0) {
//         $condicionExcluir = " AND id <> " . $idSolicitudExcluir;
//     }

//     $sqlPermisos = "
//         SELECT COALESCE(SUM(vac_dias_pedidos), 0) AS dias
//         FROM rrhh_permisos.permisos_funcionarios
//         WHERE id_funcionario = " . $idFuncionario . "
//         AND vac_periodo_solicitado = " . $periodo . "
//         AND motivo_id = '" . MOTIVO_VACACIONES . "'
//         AND estado = 'APROBADO'
//         AND resultado_decision = 'APROBADO'
//         AND rrhh_resultado_decision = 'PENDIENTE'
//         " . $condicionExcluir;

//     $diasPermisos = 0;

//     $rsPermisos = DB::Query($sqlPermisos);

//     if ($rsPermisos) {
//         if ($data = $rsPermisos->fetchAssoc()) {
//             $diasPermisos = (int)$data["dias"];
//         }
//     }


//     /*
//      * ============================================================
//      * 2. CONSUMOS YA REGISTRADOS
//      * ============================================================
//      */

//     $sqlConsumos = "
//         SELECT COALESCE(SUM(vc.dias_consumidos), 0) AS dias
//         FROM public.vacaciones_consumo vc
//             INNER JOIN public.vacaciones v ON v.vac_cod = vc.vac_cod
//         WHERE v.vac_cod_personal = " . $idFuncionario . "
//         AND vc.periodo = " . $periodo;

//     $diasConsumos = 0;

//     $rsConsumos = DB::Query($sqlConsumos);

//     if ($rsConsumos) {
//         if ($data = $rsConsumos->fetchAssoc()) {
//             $diasConsumos = (int)$data["dias"];
//         }
//     }


//     /*
//      * ============================================================
//      * 3. VACACIONES HISTÓRICAS SIN CONSUMO
//      * ============================================================
//      */

//     $sqlVacaciones = "
//         SELECT COALESCE(SUM(v.vac_dias_pedidos), 0) AS dias
//         FROM public.vacaciones v
//         WHERE v.vac_cod_personal = " . $idFuncionario . "
//         AND v.vac_periodo = " . $periodo . "
//         AND NOT EXISTS (
//             SELECT 1
//             FROM public.vacaciones_consumo vc
//             WHERE vc.vac_cod = v.vac_cod
//         )";

//     $diasVacaciones = 0;

//     $rsVacaciones = DB::Query($sqlVacaciones);

//     if ($rsVacaciones) {
//         if ($data = $rsVacaciones->fetchAssoc()) {
//             $diasVacaciones = (int)$data["dias"];
//         }
//     }


//     /*
//      * ============================================================
//      * 4. TOTAL
//      * ============================================================
//      */

//     $totalDias = $diasPermisos + $diasConsumos + $diasVacaciones;

//     return [
//         "dias_permisos"   => $diasPermisos,
//         "dias_consumos"   => $diasConsumos,
//         "dias_vacaciones" => $diasVacaciones,
//         "total_dias"      => $totalDias
//     ];
// }
function obtenerDiasComprometidosVacaciones($idFuncionario, $periodo, $idSolicitudExcluir = 0) {
    $idFuncionario = (int)$idFuncionario;
    $periodo = (int)$periodo;
    $idSolicitudExcluir = (int)$idSolicitudExcluir;

    /*
     * ============================================================
     * IMPORTANTE
     * ============================================================
     *
     * Las solicitudes aprobadas por jefatura y pendientes de DGTH
     * YA NO se descuentan aquí por vac_periodo_solicitado.
     *
     * Esas reservas se distribuirán posteriormente por FIFO dentro
     * de obtenerSaldosVacacionesPorPeriodo().
     *
     * Aquí calculamos solamente:
     *
     * 1. consumos reales registrados en vacaciones_consumo;
     * 2. vacaciones históricas que todavía no tienen consumo.
     */

    $diasPermisos = 0;


    /*
     * ============================================================
     * 1. CONSUMOS YA REGISTRADOS
     * ============================================================
     */

    $sqlConsumos = "
        SELECT COALESCE(SUM(vc.dias_consumidos), 0) AS dias
        FROM public.vacaciones_consumo vc
        INNER JOIN public.vacaciones v
            ON v.vac_cod = vc.vac_cod
        WHERE v.vac_cod_personal = " . $idFuncionario . "
        AND vc.periodo = " . $periodo;

    $diasConsumos = 0;

    $rsConsumos = DB::Query($sqlConsumos);

    if ($rsConsumos) {
        if ($data = $rsConsumos->fetchAssoc()) {
            $diasConsumos = (int)$data["dias"];
        }
    }


    /*
     * ============================================================
     * 2. VACACIONES HISTÓRICAS SIN CONSUMO
     * ============================================================
     */

    $sqlVacaciones = "
        SELECT COALESCE(SUM(v.vac_dias_pedidos), 0) AS dias
        FROM public.vacaciones v
        WHERE v.vac_cod_personal = " . $idFuncionario . "
        AND v.vac_periodo = " . $periodo . "
        AND NOT EXISTS (
            SELECT 1
            FROM public.vacaciones_consumo vc
            WHERE vc.vac_cod = v.vac_cod
        )";

    $diasVacaciones = 0;

    $rsVacaciones = DB::Query($sqlVacaciones);

    if ($rsVacaciones) {
        if ($data = $rsVacaciones->fetchAssoc()) {
            $diasVacaciones = (int)$data["dias"];
        }
    }


    /*
     * ============================================================
     * 3. TOTAL REAL DEL PERÍODO
     * ============================================================
     */

    $totalDias = $diasConsumos + $diasVacaciones;

    return array(
        "dias_permisos"   => $diasPermisos,
        "dias_consumos"   => $diasConsumos,
        "dias_vacaciones" => $diasVacaciones,
        "total_dias"      => $totalDias
    );
}


/**
 * Calcula el saldo disponible de vacaciones
 * para un funcionario y un período determinado.
 * 
 * @param int $idFuncionario Identificador del funcionario.
 * @param int $periodo Período de vacaciones (año).
 * @param int $diasPermitidos Días que le corresponden por ley/antigüedad para ese período.
 * @param int $idSolicitudExcluir Opcional: ID de solicitud a excluir del cálculo.
 * @return array Retorna un arreglo con la información del saldo de vacaciones.
 */
function calcularSaldoVacacionesConDias($idFuncionario, $periodo, $diasPermitidos, $idSolicitudExcluir = 0)
{
    $comprometidos = obtenerDiasComprometidosVacaciones(
        $idFuncionario,
        $periodo,
        $idSolicitudExcluir
    );

    $saldo = $diasPermitidos - $comprometidos["total_dias"];

    if ($saldo < 0) {
        $saldo = 0;
    }

    return [
        "dias_permitidos" => $diasPermitidos,
        "comprometidos"   => $comprometidos["total_dias"],
        "saldo_dias"      => $saldo,
        "detalle"         => $comprometidos
    ];
}


/**
 * Obtiene el saldo de vacaciones por cada período del funcionario
 * utilizando la lógica robusta de cálculo anual y vigencia.
 * 
 * DESCRIPCIÓN: Calcula los días de vacaciones disponibles para cada período
 * de un funcionario, considerando los días ya utilizados y los que están
 * pendientes de aprobación.
 * 
 * Para cada período (desde el año de ingreso hasta el año actual)
 * calcula los días de vacaciones que le corresponden al funcionario
 * basándose en su antigüedad, y le resta los días ya utilizados
 * (en solicitudes aprobadas o pendientes).
 * 
 * 1. Busca per_ingreso.
 * 2. Calcula los años completos de antigüedad.
 * 3. Recorre cada período.
 * 4. Por cada año completo, calcula los días que le corresponden por ley/antigüedad.
 * 5. Determina el año del período y calcula los días permitidos según la antigüedad del funcionario en ese período.
 * 6. Calcula los días comprometidos (solicitudes aprobadas o pendientes).
 * 7. Calcula el saldo de vacaciones (días permitidos - días comprometidos).
 * 8. Si el saldo es mayor a 0, lo agrega al arreglo de resultados.
 * 9. Retorna un arreglo con el saldo de vacaciones por período.
 * 
 * @param int $idFuncionario Identificador del funcionario.
 * @return array Retorna un arreglo con el saldo de vacaciones por período.
 */
function obtenerSaldosVacacionesPorPeriodo($idFuncionario, $idSolicitudExcluir = 0)
{
    // Inicializamos el arreglo con los saldos de vacaciones.
    $resultado = array();

    // Consultamos la fecha de ingreso del funcionario.
    $sql = "SELECT per_ingreso
            FROM public.personales
            WHERE per_cod = " . (int)$idFuncionario;
    $rs = DB::Query($sql);

    // Si no se encuentra la fecha de ingreso, retornamos el arreglo vacío.
    if (!$rs || !($data = $rs->fetchAssoc())) {
        return $resultado;
    }

    // Si la fecha de ingreso está vacía, retornamos el arreglo vacío.
    if (empty($data["per_ingreso"])) {
        return $resultado;
    }

    // Convertimos la fecha de ingreso y la fecha actual a objetos DateTime.
    $fechaIngresoObj = new DateTime($data["per_ingreso"]);
    $fechaActualObj  = new DateTime();

    // Si la fecha de ingreso es mayor a la fecha actual, retornamos el arreglo vacío.
    if ($fechaIngresoObj > $fechaActualObj) {
        return $resultado;
    }

    // Calcular la cantidad de años completos.
    $aniosCompletos = $fechaIngresoObj->diff($fechaActualObj)->y;

    // Si los años completos son menores a 1, retornamos el arreglo vacío.
    if ($aniosCompletos < 1) {
        return $resultado;
    }

    // Recorremos todos los períodos completos.
    for ($i = 1; $i <= $aniosCompletos; $i++) { // i: Años completos transcurridos.

        // Calcular la cantidad de días que le corresponden por ley/antigüedad para ese período.
        $diasPermitidos = calcularDiasPorAntiguedad($i); // Calcula los días que le corresponden por ley/antigüedad para ese período.

        // Calcular el año correspondiente al período (usando el año de fin del periodo o inicio)
        $inicioPeriodo = clone $fechaIngresoObj; // Inicializamos la fecha de ingreso. Ej: Fecha de ingreso 20/05/2021
        $inicioPeriodo->modify('+' . ($i - 1) . ' years'); // Sumamos los años completos menos 1 (por eso i-1). Ej: $i=1, 1-1=0, 0 años después: 20/05/2021

        $finPeriodo = clone $fechaIngresoObj; // Inicializamos la fecha de ingreso. Ej: Fecha de ingreso 20/05/2021
        $finPeriodo->modify('+' . $i . ' years'); // Sumamos los años completos. Ej: $i=1, 1 año después: 20/05/2022

        // El período fiscal/año de referencia puede tomarse como el año en que finaliza el período o el año de inicio.
        // Manteniendo la estructura numérica del compañero (ej. 2023, 2024), usaremos el año de fin del periodo:
        $periodoAnio = (int)$finPeriodo->format('Y'); // Obtenemos el año en formato entero.

        // Consultar saldos reales en base de datos para este período y año
        //$saldo = calcularSaldoVacacionesConDias($idFuncionario, $periodoAnio, $diasPermitidos);
        $saldo = calcularSaldoVacacionesConDias(
            $idFuncionario,
            $periodoAnio,
            $diasPermitidos,
            $idSolicitudExcluir
        );

        // Solo se permiten acumular los 2 últimos periodos; los anteriores prescriben (vigente = false o true)
        $vigente = ($i >= $aniosCompletos - 1); //  Si los años completos son 10, solo se permiten acumular los 2 últimos periodos (9 y 10).

        // Agregamos el período al resultado.
        // periodo: Año del período de vacaciones.
        // dias_permitidos: Días que le corresponden por ley/antigüedad para ese período.
        // dias_comprometidos: Sumatoria de dias_permisos + dias_vacaciones.
        // saldo_dias: Días disponibles para vacaciones.
        // vigente: Indica si el período está vigente (true) o si ha prescrito (false).
        $resultado[] = array(
            "periodo"            => $periodoAnio,
            "dias_permitidos"    => $saldo["dias_permitidos"],
            "dias_comprometidos" => $saldo["comprometidos"],
            "saldo_dias"         => $saldo["saldo_dias"],
            "vigente"            => $vigente
        );
    }


    /*
     * ============================================================
     * RESERVAS PENDIENTES DE DGTH - DISTRIBUCIÓN FIFO
     * ============================================================
     *
     * Las solicitudes ya aprobadas por jefatura pero todavía
     * pendientes de resolución de DGTH constituyen saldo reservado.
     *
     * IMPORTANTE:
     * No se utiliza vac_periodo_solicitado para decidir de qué
     * período se descuentan.
     *
     * La reserva se aplica FIFO:
     * primero al período vigente más antiguo y luego al siguiente.
     */

    $condicionExcluirReserva = "";

    if ((int)$idSolicitudExcluir > 0) {
        $condicionExcluirReserva = " AND pf.id <> " . (int)$idSolicitudExcluir;
    }

    $sqlReservasPendientes = "
        SELECT COALESCE(SUM(pf.vac_dias_pedidos), 0) AS dias
        FROM rrhh_permisos.permisos_funcionarios pf
        WHERE pf.id_funcionario = " . (int)$idFuncionario . "
        AND pf.motivo_id = '" . MOTIVO_VACACIONES . "'
        AND pf.estado = 'APROBADO'
        AND pf.resultado_decision = 'APROBADO'
        AND pf.rrhh_resultado_decision = 'PENDIENTE'
        " . $condicionExcluirReserva;
    $diasReservadosPendientes = 0;
    $rsReservasPendientes = DB::Query($sqlReservasPendientes);

    if ($rsReservasPendientes) {
        if ($dataReserva = $rsReservasPendientes->fetchAssoc()) {
            $diasReservadosPendientes =
                (int)$dataReserva["dias"];
        }
    }

    /*
     * Distribuir el total reservado siguiendo el mismo criterio
     * FIFO utilizado para el consumo definitivo.
     */
    $diasReservaRestantes = $diasReservadosPendientes;

    foreach ($resultado as &$saldoPeriodoReserva) {
        /*
         * Los períodos prescritos no pueden recibir reservas.
         */
        if (empty($saldoPeriodoReserva["vigente"])) {
            continue;
        }

        /*
         * Si ya distribuimos toda la reserva, terminamos.
         */
        if ($diasReservaRestantes <= 0) {
            break;
        }

        $saldoDisponiblePeriodo = (int)$saldoPeriodoReserva["saldo_dias"];
        if ($saldoDisponiblePeriodo <= 0) {
            continue;
        }

        /*
         * Consumir primero todo lo posible del período
         * vigente más antiguo.
         */
        $diasReservarPeriodo = min($saldoDisponiblePeriodo, $diasReservaRestantes);

        /*
         * Reducir saldo disponible.
         */
        $saldoPeriodoReserva["saldo_dias"] = $saldoDisponiblePeriodo - $diasReservarPeriodo;

        /*
         * Reflejar también la reserva dentro de los días
         * comprometidos mostrados para ese período.
         */
        $saldoPeriodoReserva["dias_comprometidos"] = (int)$saldoPeriodoReserva["dias_comprometidos"] + $diasReservarPeriodo;

        /*
         * Restar de la reserva todavía pendiente de distribuir.
         */
        $diasReservaRestantes -= $diasReservarPeriodo;
    }

    /*
     * Importante cuando foreach utiliza referencia.
     */
    unset($saldoPeriodoReserva);


    return $resultado;
}


///**
// * Calcula el saldo total disponible de vacaciones
// * y los períodos vigentes con saldo positivo.
// *
// * @param int $id_funcionario
// * @return array
// */
//function obtenerSaldoDisponibleVacaciones($id_funcionario)
//{
//    $saldos = obtenerSaldosVacacionesPorPeriodo($id_funcionario);

//    $totalDisponible = 0;
//    $periodosDisponibles = array();

//    foreach ($saldos as $saldo) {

        // Solo considerar períodos vigentes
//        if (!$saldo["vigente"]) {
//            continue;
//        }

//        // Solo considerar períodos que todavía tengan saldo
//        if ((int)$saldo["saldo_dias"] <= 0) {
//            continue;
//        }

//        $diasDisponibles = (int)$saldo["saldo_dias"];

//        $totalDisponible += $diasDisponibles;

//        $periodosDisponibles[] = array(
//            "periodo" => (int)$saldo["periodo"],
//            "saldo_dias" => $diasDisponibles
//        );
//    }

  //  return array(
//        "total" => $totalDisponible,
//        "periodos" => $periodosDisponibles
//    );
//}

/**
 * Calcula el saldo total disponible de vacaciones
 * y los períodos vigentes con saldo positivo.
 *
 * Cuando se está evaluando una solicitud concreta en DGTH,
 * puede excluirse dicha solicitud para evitar que se descuente
 * a sí misma como saldo comprometido.
 *
 * @param int $id_funcionario
 * @param int $idSolicitudExcluir
 * @return array
 */
function obtenerSaldoDisponibleVacaciones($id_funcionario, $idSolicitudExcluir = 0)
{
    $id_funcionario = (int)$id_funcionario;
    $idSolicitudExcluir = (int)$idSolicitudExcluir;

    $saldos = obtenerSaldosVacacionesPorPeriodo(
        $id_funcionario,
        $idSolicitudExcluir
    );

    $totalDisponible = 0;
    $periodosDisponibles = array();

    foreach ($saldos as $saldo) {

        // Solo considerar períodos vigentes.
        if (!$saldo["vigente"]) {
            continue;
        }

        // Solo considerar períodos que todavía tengan saldo.
        if ((int)$saldo["saldo_dias"] <= 0) {
            continue;
        }

        $diasDisponibles = (int)$saldo["saldo_dias"];

        $totalDisponible += $diasDisponibles;

        $periodosDisponibles[] = array(
            "periodo"   => (int)$saldo["periodo"],
            "saldo_dias" => $diasDisponibles
        );
    }

    return array(
        "total"    => $totalDisponible,
        "periodos" => $periodosDisponibles
    );
}












/**
 * Obtiene el historial de vacaciones de un funcionario.
 *
 * Esta función solamente obtiene las solicitudes registradas
 * en la tabla public.vacaciones.
 *
 * La información relacionada con saldos, días permitidos
 * y vigencia de los períodos se calcula por separado mediante
 * obtenerSaldosVacacionesPorPeriodo().
 *
 * @param int $idFuncionario Identificador del funcionario.
 * @return array Retorna un arreglo con el historial de vacaciones.
 */
function obtenerHistorialVacaciones($idFuncionario)
{
    // Inicializamos el arreglo del historial.
    $historial = array();

    // Validamos el identificador del funcionario.
    $idFuncionario = (int)$idFuncionario;

    if ($idFuncionario <= 0) {
        return $historial;
    }

    // Consulta del historial de vacaciones.
    $sql = "SELECT v.vac_cod,
                    v.vac_cod_personal,
                    p.per_nombre || ' ' || p.per_apellido AS nombre_completo,
                    v.vac_fecha_desde,
                    v.vac_fecha_hasta,
                    v.vac_dias_pedidos,
                    v.vac_periodo,
                    v.vac_descripcion,
                    v.vac_archivo
            FROM public.vacaciones v
                JOIN public.personales p ON p.per_cod = v.vac_cod_personal
            WHERE v.vac_cod_personal = " . $idFuncionario . "
            ORDER BY v.vac_periodo DESC, v.vac_fecha_desde DESC";

    // Ejecutamos la consulta.
    $rs = DB::Query($sql);

    // Si la consulta falla, retornamos el arreglo vacío.
    if (!$rs) {
        return $historial;
    }

    // Recorremos los resultados.
    while ($data = $rs->fetchAssoc()) {

        $historial[] = array(
            "vac_cod"          => $data["vac_cod"],
            "vac_cod_personal" => $data["vac_cod_personal"],
            "nombre_completo"  => $data["nombre_completo"],
            "vac_fecha_desde"  => $data["vac_fecha_desde"],
            "vac_fecha_hasta"  => $data["vac_fecha_hasta"],
            "vac_dias_pedidos" => $data["vac_dias_pedidos"],
            "vac_periodo"      => $data["vac_periodo"],
            "vac_descripcion"  => $data["vac_descripcion"],
            "vac_archivo"      => $data["vac_archivo"]
        );
    }

    return $historial;
}


/**
 * Busca la información de un período dentro del arreglo
 * generado por obtenerSaldosVacacionesPorPeriodo().
 *
 * No realiza ningún cálculo.
 *
 * @param array $periodos
 * @param int $periodo
 * @return array|null
 */
function buscarSaldoPorPeriodo($periodos, $periodo)
{
    $periodo = (int)$periodo;

    foreach ($periodos as $datosPeriodo) {

        if ((int)$datosPeriodo["periodo"] === $periodo) {
            return $datosPeriodo;
        }
    }

    return null;
}


/**
 * Prepara la información necesaria para mostrar el
 * resumen e historial de vacaciones de un funcionario.
 *
 * No realiza cálculos de días.
 * Reutiliza las funciones existentes.
 *
 * @param int $idFuncionario Identificador del funcionario.
 * @return array
 */
function prepararResumenHistorialVacaciones($idFuncionario)
{
    $resultado = array(
        "resumen_periodos" => array(),
        "historial"        => array()
    );

    $idFuncionario = (int)$idFuncionario;

    if ($idFuncionario <= 0) {
        return $resultado;
    }

    /*
     * 1. Obtener historial de solicitudes.
     */
    $historial = obtenerHistorialVacaciones($idFuncionario);

    /*
     * 2. Obtener saldos calculados por período.
     *
     * Esta función sigue siendo la responsable
     * de realizar todos los cálculos.
     */
    $saldos = obtenerSaldosVacacionesPorPeriodo($idFuncionario);

    /*
     * 3. Preparar el resumen de períodos.
     *
     * No hacemos ningún cálculo.
     * Simplemente reutilizamos la información
     * que devuelve obtenerSaldosVacacionesPorPeriodo().
     */
    foreach ($saldos as $datosPeriodo) {

        $resultado["resumen_periodos"][] = array(
            "periodo"             => $datosPeriodo["periodo"],
            "dias_permitidos"     => $datosPeriodo["dias_permitidos"],
            "dias_comprometidos"  => $datosPeriodo["dias_comprometidos"],
            "saldo_dias"          => $datosPeriodo["saldo_dias"],
            "vigente"             => $datosPeriodo["vigente"]
        );
    }

    /*
     * 4. Relacionar cada solicitud del historial
     *    con la información de su período.
     */
    foreach ($historial as &$vacacion) {

        $periodo = (int)$vacacion["vac_periodo"];

        $datosPeriodo = buscarSaldoPorPeriodo(
            $saldos,
            $periodo
        );

        if ($datosPeriodo !== null) {
            $vacacion["dias_permitidos"] = $datosPeriodo["dias_permitidos"];
            $vacacion["dias_comprometidos"] = $datosPeriodo["dias_comprometidos"];
            $vacacion["saldo_dias"] = $datosPeriodo["saldo_dias"];
            $vacacion["vigente"] = $datosPeriodo["vigente"];
        } else {
            $vacacion["dias_permitidos"] = null;
            $vacacion["dias_comprometidos"] = null;
            $vacacion["saldo_dias"] = null;
            $vacacion["vigente"] = null;
        }
    }

    /*
     * Rompemos la referencia utilizada por foreach.
     */
    unset($vacacion);

    /*
     * 5. Guardar el historial ya relacionado.
     */
    //$resultado["historial"] = $historial;

    /*
    * 5. Obtener el saldo disponible actual.
    *
    * Esta función toma únicamente los períodos
    * vigentes que todavía tienen saldo disponible.
    */
    $saldoDisponible = obtenerSaldoDisponibleVacaciones($idFuncionario);

    /*
    * 6. Guardar el historial ya relacionado.
    */
    $resultado["historial"] = $historial;

    /*
    * 7. Guardar el saldo disponible.
    */
    $resultado["saldo_disponible"] = $saldoDisponible;


    return $resultado;
}



/**
 * Distribuye automáticamente los días solicitados
 * consumiendo primero el período más antiguo vigente.
 * 
 * @param array $saldos Arreglo con los saldos de vacaciones por período.
 * @param int $diasSolicitados Cantidad de días solicitados.
 * @return array Retorna un arreglo con el detalle de los consumos por período y el saldo restante.
 */
function distribuirDiasVacaciones($saldos, $diasSolicitados)
{
    // Inicializamos el arreglo con los consumos.
    $consumos = array();

    // Inicializamos la cantidad de días restantes.
    $restante = $diasSolicitados;

    // Recorremos todos los períodos.
    foreach ($saldos as $saldo) {

        // Si el período no está vigente, lo saltamos.
        if (!$saldo["vigente"])
            continue;

        // Si no quedan días por distribuir, salimos del bucle.
        if ($restante <= 0)
            break;

        // Si el saldo del período es menor a 0, lo saltamos.
        if ($saldo["saldo_dias"] <= 0)
            continue;

        // Calcula la cantidad de días a consumir.
        $consumir = min(
            $saldo["saldo_dias"],
            $restante
        );

        // Agrega el consumo al arreglo.
        // periodo: Año del período de vacaciones.
        // saldo_inicial: Saldo inicial del período.
        // dias: Días a consumir.
        // saldo_final: Saldo final del período.
        $consumos[] = array(
            "periodo"       => $saldo["periodo"],
            "saldo_inicial" => $saldo["saldo_dias"],
            "dias"          => $consumir,
            "saldo_final"   => $saldo["saldo_dias"] - $consumir
        );

        // Resta los días consumidos del restante.
        $restante -= $consumir;
    }

    // Si quedan días por distribuir, retornamos error.
    if ($restante > 0) {
        return array(
            "ok" => false,
            "mensaje" => "El funcionario no posee saldo suficiente.",
            "faltan" => $restante,
            "consumos" => $consumos
        );
    }

    // Si no quedan días por distribuir, retornamos éxito.
    return array(
        "ok" => true,
        "consumos" => $consumos
    );
}


/**
 * Registra en la tabla vacaciones_consumo
 * los consumos generados por distribuirDiasVacaciones().
 *
 * Esta función NO calcula el consumo.
 * Solamente persiste en la base de datos
 * el resultado que ya fue calculado.
 *
 * @param int   $vacCod       ID de la solicitud de vacaciones.
 * @param array $resultado    Resultado de distribuirDiasVacaciones().
 *
 * @return array
 *   ok        => true/false
 *   consumos  => consumos registrados
 *   mensaje   => mensaje de error si corresponde
 */
function registrarConsumosVacaciones($vacCod, $resultado)
{
    // Convertimos el ID de la solicitud a entero.
    $vacCod = (int)$vacCod;

    // Validamos el ID de la solicitud.
    if ($vacCod <= 0) {
        return array(
            "ok" => false,
            "mensaje" => "El identificador de la solicitud de vacaciones no es válido."
        );
    }

    // Validamos que el resultado tenga la estructura esperada.
    if (!is_array($resultado) || empty($resultado["ok"])) {
        return array(
            "ok" => false,
            "mensaje" => "No existe un resultado válido de distribución de días."
        );
    }

    // Obtenemos los consumos calculados.
    $consumos = isset($resultado["consumos"])
        ? $resultado["consumos"]
        : array();

    // Si no existen consumos, no hay nada que registrar.
    if (empty($consumos)) {
        return array(
            "ok" => false,
            "mensaje" => "No existen consumos de vacaciones para registrar."
        );
    }

    // Aquí iremos acumulando los registros insertados.
    $registrados = array();

    /*
     * Registrar cada período consumido.
     */
    foreach ($consumos as $consumo) {

        $periodo = (int)$consumo["periodo"];
        $diasConsumidos = (int)$consumo["dias"];
        $saldoInicial = (int)$consumo["saldo_inicial"];
        $saldoFinal = (int)$consumo["saldo_final"];

        /*
         * Validaciones básicas antes del INSERT.
         */
        if ($periodo <= 0) {
            return array(
                "ok" => false,
                "mensaje" => "El período de vacaciones no es válido."
            );
        }

        if ($diasConsumidos <= 0) {
            return array(
                "ok" => false,
                "mensaje" => "La cantidad de días consumidos debe ser mayor que cero."
            );
        }

        if ($saldoInicial < 0 || $saldoFinal < 0) {
            return array(
                "ok" => false,
                "mensaje" => "Los saldos de vacaciones no pueden ser negativos."
            );
        }

        /*
         * Verificación adicional de consistencia.
         *
         * saldo_final debe ser:
         *
         * saldo_inicial - dias_consumidos
         */
        if ($saldoFinal != ($saldoInicial - $diasConsumidos)) {
            return array(
                "ok" => false,
                "mensaje" => "Existe una inconsistencia en el saldo del período " . $periodo . "."
            );
        }

        /*
         * Insertar el consumo.
         */
        $sql = "INSERT INTO public.vacaciones_consumo
                    (
                        vac_cod,
                        periodo,
                        dias_consumidos,
                        saldo_inicial,
                        saldo_final
                    )
                VALUES
                    (
                        " . $vacCod . ",
                        " . $periodo . ",
                        " . $diasConsumidos . ",
                        " . $saldoInicial . ",
                        " . $saldoFinal . "
                    )";

        $resultadoInsert = DB::Query($sql);

        /*
         * Si el INSERT falla, detenemos el proceso.
         */
        if (!$resultadoInsert) {
            return array(
                "ok" => false,
                "mensaje" => "No se pudo registrar el consumo correspondiente al período " . $periodo . ".",
                "consumos_registrados" => $registrados
            );
        }

        /*
         * Guardamos el consumo que efectivamente
         * fue registrado.
         */
        $registrados[] = array(
            "periodo" => $periodo,
            "dias_consumidos" => $diasConsumidos,
            "saldo_inicial" => $saldoInicial,
            "saldo_final" => $saldoFinal
        );
    }

    /*
     * Todo terminó correctamente.
     */
    return array(
        "ok" => true,
        "consumos" => $registrados
    );
}
