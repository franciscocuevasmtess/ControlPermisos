<?php

/**
 * Notificación al funcionario cuando su jefatura inmediata
 * aprueba la solicitud.
 */

function generarPlantillaAprobacionJefe($datos)
{
    $nombreFuncionario = isset($datos["nombre_funcionario"])
        ? htmlspecialchars($datos["nombre_funcionario"])
        : "";

    $nombreJefe = isset($datos["nombre_jefe"])
        ? htmlspecialchars($datos["nombre_jefe"])
        : "Jefatura inmediata";

    $dependencia = isset($datos["dependencia"])
        ? htmlspecialchars($datos["dependencia"])
        : "";

    $fechaDesde = isset($datos["fecha_desde"])
        ? htmlspecialchars($datos["fecha_desde"])
        : "";

    $horaDesde = isset($datos["hora_desde"])
        ? htmlspecialchars($datos["hora_desde"])
        : "";

    $fechaHasta = isset($datos["fecha_hasta"])
        ? htmlspecialchars($datos["fecha_hasta"])
        : "";

    $horaHasta = isset($datos["hora_hasta"])
        ? htmlspecialchars($datos["hora_hasta"])
        : "";

    $motivo = isset($datos["motivo"])
        ? htmlspecialchars($datos["motivo"])
        : "";

    $observacion = isset($datos["observacion"])
        ? htmlspecialchars($datos["observacion"])
        : "";


    $html = '<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Solicitud aprobada por jefatura</title>
</head>
<body style="
    margin:0;
    padding:0;
    background:#f4f4f4;
    font-family:Arial,sans-serif;
">
<div style="
    max-width:600px;
    margin:30px auto;
    background:#ffffff;
    border-radius:8px;
    overflow:hidden;
">
    <div style="
        background:#198754;
        color:#ffffff;
        padding:22px;
        text-align:center;
    ">
        <h2 style="margin:0;">
            Solicitud aprobada por su Jefatura
        </h2>
    </div>
    <div style="padding:30px;color:#333;line-height:1.6;">
        <p>
            Estimado/a <strong>' . $nombreFuncionario . '</strong>:
        </p>
        <div style="
            background:#d1e7dd;
            border:1px solid #badbcc;
            padding:16px;
            border-radius:6px;
            margin:20px 0;
            color:#0f5132;
        ">
            Su solicitud de permiso fue
            <strong>APROBADA por su jefatura inmediata</strong>.
        </div>
        <p>
            La solicitud continuará ahora con el proceso correspondiente
            ante <strong>Recursos Humanos</strong> para su revisión y
            resolución definitiva.
        </p>
        <p>
            <strong>Importante:</strong>
            esta aprobación corresponde a la jefatura inmediata y
            todavía no constituye la aprobación definitiva de Recursos Humanos.
        </p>
        <hr style="border:0;border-top:1px solid #eee;margin:25px 0;">
        <p>
            <strong>Funcionario:</strong><br>
            ' . $nombreFuncionario . '
        </p>
        <p>
            <strong>Jefatura que aprobó:</strong><br>
            ' . $nombreJefe . '
        </p>
        <p>
            <strong>Dependencia:</strong><br>
            ' . $dependencia . '
        </p>
        <p>
            <strong>Desde:</strong><br>
            ' . $fechaDesde . ' ' . $horaDesde . '
        </p>
        <p>
            <strong>Hasta:</strong><br>
            ' . $fechaHasta . ' ' . $horaHasta . '
        </p>
        <p>
            <strong>Motivo:</strong><br>
            ' . $motivo . '
        </p>';

    if ($observacion !== "") {
        $html .= '
        <p>
            <strong>Observación:</strong><br>
            ' . $observacion . '
        </p>';
    }

    $html .= '
    </div>
    <div style="
        background:#f9f9f9;
        padding:15px;
        text-align:center;
        font-size:12px;
        color:#999;
    ">
        <p>Este es un correo automático, por favor no responder.</p>
        <p>Sistema de Control de Permisos - MTESS</p>
    </div>
</div>
</body>
</html>';

    return $html;
}
