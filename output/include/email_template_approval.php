<?php

/**
 * Plantilla de Email para Aprobación de Permiso
 * Genera el HTML del correo electrónico de solicitud de aprobación
 */

function generarPlantillaAprobacion($datosPermiso, $urlAprobar, $urlRechazar)
{
    // ========================================================================
    // PARTE 1: EXTRAER Y SANITIZAR DATOS DEL PERMISO
    // ========================================================================
    // htmlspecialchars() previene ataques XSS convirtiendo caracteres especiales
    $nombreFuncionario = isset($datosPermiso['nombre_funcionario']) ? htmlspecialchars($datosPermiso['nombre_funcionario']) : 'N/A';
    $fechaInicio = isset($datosPermiso['fecha_desde']) ? htmlspecialchars($datosPermiso['fecha_desde']) : 'N/A';
    $horaInicio = isset($datosPermiso['hora_desde']) ? htmlspecialchars($datosPermiso['hora_desde']) : '';
    $fechaFin = isset($datosPermiso['fecha_hasta']) ? htmlspecialchars($datosPermiso['fecha_hasta']) : 'N/A';
    $horaFin = isset($datosPermiso['hora_hasta']) ? htmlspecialchars($datosPermiso['hora_hasta']) : '';
    $motivo = isset($datosPermiso['motivo']) ? htmlspecialchars($datosPermiso['motivo']) : 'N/A';
    $observacion = isset($datosPermiso['observacion']) ? htmlspecialchars($datosPermiso['observacion']) : '';
    $dependencia = isset($datosPermiso['dependencia']) ? htmlspecialchars($datosPermiso['dependencia']) : 'N/A';

    $tipoSolicitud = $datosPermiso['tipo_solicitud'];

    // ========================================================================
    // PARTE 2: FORMATEAR FECHAS CON HORA
    // ========================================================================
    // Combinar fecha y hora si existe
    $fechaInicioCompleta = $fechaInicio;
    if (!empty($horaInicio)) {
        $fechaInicioCompleta .= ' ' . $horaInicio;
    }

    $fechaFinCompleta = $fechaFin;
    if (!empty($horaFin)) {
        $fechaFinCompleta .= ' ' . $horaFin;
    }



    if ($tipoSolicitud === 'permiso') {
        $titulo = 'Aprobación de Permiso';
        $encabezado = 'Solicitud de Aprobación de Permiso';
    } elseif ($tipoSolicitud === 'vacaciones') {
        $titulo = 'Aprobación de Vacaciones';
        $encabezado = 'Solicitud de Aprobación de Vacaciones';
    } //else {
        //$titulo = 'Aprobación de Permiso';
        //$encabezado = 'Solicitud de Aprobación de Permiso';
    //}



    // ========================================================================
    // PARTE 3: GENERAR HTML DEL CORREO
    // ========================================================================
    $html = '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . $titulo . '</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        /* Contenedor principal */
        .container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        /* Encabezado verde */
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        
        /* Contenido del correo */
        .content {
            padding: 30px;
        }
        .content p {
            color: #333333;
            line-height: 1.6;
        }
        
        /* Filas de información */
        .info-row {
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eeeeee;
        }
        .info-row:last-of-type {
            border-bottom: none;
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
        
        /* Contenedor de botones */
        .buttons {
            text-align: center;
            margin-top: 30px;
            padding: 20px 0;
        }
        
        /* Estilos de botones */
        .btn {
            display: inline-block;
            padding: 12px 30px;
            margin: 0 10px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 16px;
            transition: all 0.3s;
        }
        .btn-aprobar {
            background-color: #4CAF50;
            color: white;
        }
        .btn-aprobar:hover {
            background-color: #45a049;
        }
        .btn-rechazar {
            background-color: #f44336;
            color: white;
        }
        .btn-rechazar:hover {
            background-color: #da190b;
        }
        
        /* Footer */
        .footer {
            background-color: #f9f9f9;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #999999;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- ENCABEZADO -->
        <div class="header">
            <h1>' . $encabezado . '</h1>
        </div>
        
        <!-- CONTENIDO -->
        <div class="content">
            <p>Se ha recibido una nueva solicitud de permiso que requiere su aprobación:</p>
            
            <!-- Información del funcionario -->
            <div class="info-row">
                <div class="info-label">Funcionario:</div>
                <div class="info-value">' . $nombreFuncionario . '</div>
            </div>
            
            <!-- Dependencia -->
            <div class="info-row">
                <div class="info-label">Dependencia:</div>
                <div class="info-value">' . $dependencia . '</div>
            </div>
            
            <!-- Fecha y hora de inicio -->
            <div class="info-row">
                <div class="info-label">Fecha y Hora de Inicio:</div>
                <div class="info-value">' . $fechaInicioCompleta . '</div>
            </div>
            
            <!-- Fecha y hora de fin -->
            <div class="info-row">
                <div class="info-label">Fecha y Hora de Fin:</div>
                <div class="info-value">' . $fechaFinCompleta . '</div>
            </div>
            
            <!-- Motivo -->
            <div class="info-row">
                <div class="info-label">Motivo:</div>
                <div class="info-value">' . $motivo . '</div>
            </div>';

    // Agregar observación solo si existe
    if (!empty($observacion)) {
        $html .= '
            <div class="info-row">
                <div class="info-label">Observación:</div>
                <div class="info-value">' . $observacion . '</div>
            </div>';
    }

    // Botones de acción
    $html .= '
            <!-- BOTONES DE APROBACIÓN/RECHAZO -->
            <div class="buttons" style="text-align: center; margin-top: 30px; padding: 20px 0;">
                <!-- Botón Aprobar -->
                <a href="' . htmlspecialchars($urlAprobar) . '" style="background-color: #4CAF50; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 16px; display: inline-block; margin: 0 10px;">
                    ✓ Aprobar
                </a>
                
                <!-- Botón Rechazar -->
                <a href="' . htmlspecialchars($urlRechazar) . '" style="background-color: #f44336; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 16px; display: inline-block; margin: 0 10px;">
                    ✗ Rechazar
                </a>
            </div>
        </div>
        
        <!-- FOOTER -->
        <div class="footer">
            <p>Este es un correo automático, por favor no responder.</p>
            <p>Sistema de Control de Permisos - MTESS</p>
        </div>
    </div>
</body>
</html>';

    // ========================================================================
    // PARTE 4: RETORNAR EL HTML COMPLETO
    // ========================================================================
    return $html;
}
