<?php

include_once("include/dbcommon.php");

header("Content-Type: application/json; charset=utf-8");

$respuesta = array(
    "ok" => false,
    "dias" => 0,
    "mensaje" => ""
);

try {

    $fechaDesde = isset($_GET["fecha_desde"]) ? trim((string)$_GET["fecha_desde"]) : "";
    $fechaHasta = isset($_GET["fecha_hasta"]) ? trim((string)$_GET["fecha_hasta"]) : "";

    /*
     * ============================================================
     * VALIDAR QUE AMBAS FECHAS ESTÉN INFORMADAS
     * ============================================================
     */
    if ($fechaDesde === "" || $fechaHasta === "") {
        throw new Exception("Debe seleccionar la fecha desde y la fecha hasta.");
    }


    /*
     * ============================================================
     * VALIDAR FORMATO YYYY-MM-DD
     * ============================================================
     */
    $desdeObj = DateTime::createFromFormat("Y-m-d", $fechaDesde);
    $hastaObj = DateTime::createFromFormat("Y-m-d", $fechaHasta);

    if (!$desdeObj
        || !$hastaObj
        || $desdeObj->format("Y-m-d") !== $fechaDesde
        || $hastaObj->format("Y-m-d") !== $fechaHasta
    ) {
        throw new Exception("Las fechas recibidas no tienen un formato válido.");
    }


    /*
     * ============================================================
     * VALIDAR ORDEN DE FECHAS
     * ============================================================
     */
    if ($desdeObj > $hastaObj) {
        throw new Exception("La fecha desde no puede ser posterior a la fecha hasta.");
    }


    /*
     * ============================================================
     * CALCULAR DÍAS HÁBILES
     *
     * Se consideran:
     * - lunes a viernes
     * - excluyendo feriados registrados en public.feriados
     * ============================================================
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
        throw new Exception("No fue posible calcular los días hábiles.");
    }

    $data = $rs->fetchAssoc();

    if (!$data) {
        throw new Exception("No fue posible obtener el resultado del cálculo.");
    }

    $respuesta["ok"] = true;
    $respuesta["dias"] = (int)$data["dias_habiles"];
    $respuesta["mensaje"] = "";

} catch (Exception $e) {
    $respuesta["ok"] = false;
    $respuesta["dias"] = 0;
    $respuesta["mensaje"] = $e->getMessage();
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);

exit;
