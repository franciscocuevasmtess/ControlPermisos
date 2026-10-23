<?php

/**
 * Plantilla de correo:
 * rechazo de solicitud por parte del jefe inmediato.
 */

function generarPlantillaRechazoJefe($datosRechazo)
{
    // ============================================================
    // EXTRAER Y SANITIZAR DATOS
    // ============================================================
    $nombreFuncionario = isset($datosRechazo["nombre_funcionario"])
        ? htmlspecialchars($datosRechazo["nombre_funcionario"])
        : "";

    $nombreJefe = isset($datosRechazo["nombre_jefe"])
        ? htmlspecialchars($datosRechazo["nombre_jefe"])
        : "Jefatura inmediata";

    $fechaDesde = isset($datosRechazo["fecha_desde"])
        ? htmlspecialchars($datosRechazo["fecha_desde"])
        : "";

    $fechaHasta = isset($datosRechazo["fecha_hasta"])
        ? htmlspecialchars($datosRechazo["fecha_hasta"])
        : "";

    $horaDesde = isset($datosRechazo["hora_desde"])
        ? htmlspecialchars($datosRechazo["hora_desde"])
        : "";

    $horaHasta = isset($datosRechazo["hora_hasta"])
        ? htmlspecialchars($datosRechazo["hora_hasta"])
        : "";

    $motivo = isset($datosRechazo["motivo"])
        ? htmlspecialchars($datosRechazo["motivo"])
        : "";

    $dependencia = isset($datosRechazo["dependencia"])
        ? htmlspecialchars($datosRechazo["dependencia"])
        : "";

    $observacion = isset($datosRechazo["observacion"])
        ? htmlspecialchars($datosRechazo["observacion"])
        : "";

    $motivoRechazoJefe = isset($datosRechazo["motivo_rechazo_jefe"])
        ? htmlspecialchars($datosRechazo["motivo_rechazo_jefe"], ENT_QUOTES, "UTF-8")
    : "";

    // ============================================================
    // HTML
    // ============================================================
    $html = '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de Permiso Rechazada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .header {
            background-color: #dc3545;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 23px;
        }

        .content {
            padding: 30px;
        }

        .content p {
            color: #333333;
            line-height: 1.6;
        }

        .info-row {
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eeeeee;
        }

        .info-label {
            font-weight: bold;
            color: #333333;
            font-size: 14px;
        }

        .info-value {
            color: #666666;
            margin-top: 5px;
            font-size: 14px;
        }

        .alert {
            background-color: #f8d7da;
            border: 1px solid #f5c2c7;
            color: #842029;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        .footer {
            background-color: #f9f9f9;
            padding: 15px;
            text-align: center;
            color: #999999;
            font-size: 12px;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Solicitud de Permiso Rechazada</h1>
    </div>
    <div class="content">
        <p>Estimado/a <strong>' . $nombreFuncionario . '</strong>:</p>
        <div class="alert">
            Le informamos que su solicitud de permiso ha sido
            <strong>rechazada por su jefatura inmediata</strong>.
        </div>';

        if (!empty($motivoRechazoJefe)) {
            $html .= '
                <div class="info-row">
                    <div class="info-label">Motivo del rechazo informado por la jefatura:</div>
                    <div class="info-value" style="
                            background:#fff3f3;
                            border-left:4px solid #dc3545;
                            padding:12px;
                            color:#842029;
                            white-space:pre-line;
                    ">' . $motivoRechazoJefe . '</div>
                </div>';
        }

        $html .= '
        <div class="info-row">
            <div class="info-label">Funcionario:</div>
            <div class="info-value">' . $nombreFuncionario . '</div>
        </div>
        <div class="info-row">
            <div class="info-label">Jefatura que procesó la solicitud:</div>
            <div class="info-value">' . $nombreJefe . '</div>
        </div>
        <div class="info-row">
            <div class="info-label">Dependencia:</div>
            <div class="info-value">' . $dependencia . '</div>
        </div>
        <div class="info-row">
            <div class="info-label">Desde:</div>
            <div class="info-value">
                ' . $fechaDesde . ' ' . $horaDesde . '
            </div>
        </div>
        <div class="info-row">
            <div class="info-label">Hasta:</div>
            <div class="info-value">
                ' . $fechaHasta . ' ' . $horaHasta . '
            </div>
        </div>
        <div class="info-row">
            <div class="info-label">Motivo de la solicitud:</div>
            <div class="info-value">' . $motivo . '</div>
        </div>';

    if (!empty($observacion)) {
        $html .= '
        <div class="info-row">
            <div class="info-label">Observación de la solicitud:</div>
            <div class="info-value">' . $observacion . '</div>
        </div>';
    }

    $html .= '
        <p style="margin-top:25px;">
            Esta comunicación es exclusivamente informativa.
        </p>
    </div>
    <div class="footer">
        <p>
            Este es un correo automático, por favor no responder.
        </p>
        <p>
            Sistema de Control de Permisos - MTESS
        </p>
    </div>
</div>
</body>
</html>';

    return $html;
}
