<?php

/**
 * Email Utilities Class
 * Clase utilitaria para el envío de correos electrónicos
 */

class EmailUtils
{

    // Función auxiliar para depuración, muestra datos en la consola del navegador (útil en desarrollo).
    public static function debug_to_console($data, $context = 'Debug in Console')
    {
        ob_start();
        $output  = 'console.info(\'' . $context . ':\');';
        $output .= 'console.log(' . json_encode($data) . ');';
        $output  = sprintf('<script>%s</script>', $output);
        echo $output;
    }


    /**
     * Envía un correo electrónico HTML
     * 
     * @param string $to Dirección de correo del destinatario
     * @param string $subject Asunto del correo
     * @param string $htmlBody Contenido HTML del correo
     * @param string $fromEmail Email del remitente (opcional)
     * @param string $fromName Nombre del remitente (opcional)
     * @return bool True si el correo se envió exitosamente, False en caso contrario
     */
    public static function sendHTMLEmail(
        $to,
        $subject,
        $htmlBody,
        $fromEmail = 'noreply@mtess.gov.py',
        $fromName = 'Sistema de Control de Permisos'
    ) {
        try {
            // Configurar headers para correo HTML
            $headers = array();
            $headers[] = "MIME-Version: 1.0";
            $headers[] = "Content-type: text/html; charset=UTF-8";
            $headers[] = "From: " . $fromName . " <" . $fromEmail . ">";
            $headers[] = "Reply-To: " . $fromEmail;
            $headers[] = "X-Mailer: PHP/" . phpversion();

            // Unir headers
            $headersString = implode("\r\n", $headers);

            // Enviar correo
            $result = mail($to, $subject, $htmlBody, $headersString);
            //debug_to_console("Resultado: " . $result);

            // Log del resultado
            if ($result) {
                error_log("Email enviado exitosamente a: " . $to);
                //debug_to_console("Email enviado exitosamente a: " . $to);
            } else {
                error_log("Error al enviar email a: " . $to);
                //debug_to_console("Error al enviar email a: " . $to);
            }

            return $result;
        } catch (Exception $e) {
            error_log("Excepción al enviar email: " . $e->getMessage());
            //debug_to_console("Excepción al enviar email: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Genera el HTML para el correo de solicitud de aprobación de permiso
     * 
     * @param array $datosPermiso Array con los datos del permiso
     * @param string $urlAprobar URL para aprobar el permiso
     * @param string $urlRechazar URL para rechazar el permiso
     * @return string HTML del correo
     */
    public static function generarEmailAprobacionPermiso($datosPermiso, $urlAprobar, $urlRechazar)
    {
        // Cargar la plantilla
        require_once('email_template_approval.php');
        return generarPlantillaAprobacion($datosPermiso, $urlAprobar, $urlRechazar);
    }

    /**
     * Envía notificación de solicitud de permiso al jefe
     * 
     * @param array $datosPermiso Datos del permiso solicitado
     * @param int $permisoId ID del permiso creado
     * @param string $emailJefe Email del jefe (temporal: franciscocuevas@mtess.gov.py)
     * @return bool True si se envió exitosamente
     */
    public static function enviarNotificacionSolicitudPermiso(
        $datosPermiso,
        $permisoId,
        $emailJefe
    ) {
        // Obtener la URL base del sistema
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $protocol . "://" . $host . dirname($_SERVER['PHP_SELF']);

        $email_jefe_id = $datosPermiso['email_jefe_id'];

        // Generar URLs de aprobación y rechazo
        $urlAprobar = $baseUrl . "/aprobar_permiso.php?id=" . $permisoId . '&email_jefe_id=' . $email_jefe_id;
        $urlRechazar = $baseUrl . "/rechazar_permiso.php?id=" . $permisoId . '&email_jefe_id=' . $email_jefe_id;

        // Generar el HTML del correo
        $htmlBody = self::generarEmailAprobacionPermiso($datosPermiso, $urlAprobar, $urlRechazar);

        // Asunto del correo
        $subject = "Nueva Solicitud de Permiso - " . $datosPermiso['nombre_funcionario'];

        // Enviar el correo
        return self::sendHTMLEmail($emailJefe, $subject, $htmlBody);
    }

    /**
     * Formatea una fecha en formato legible
     * 
     * @param string $fecha Fecha en formato YYYY-MM-DD
     * @return string Fecha formateada
     */
    public static function formatearFecha($fecha)
    {
        if (empty($fecha)) return 'N/A';

        $timestamp = strtotime($fecha);
        if ($timestamp === false) return $fecha;

        $meses = array(
            1 => 'Enero',
            2 => 'Febrero',
            3 => 'Marzo',
            4 => 'Abril',
            5 => 'Mayo',
            6 => 'Junio',
            7 => 'Julio',
            8 => 'Agosto',
            9 => 'Septiembre',
            10 => 'Octubre',
            11 => 'Noviembre',
            12 => 'Diciembre'
        );

        $dia = date('d', $timestamp);
        $mes = $meses[(int)date('m', $timestamp)];
        $anio = date('Y', $timestamp);

        return $dia . ' de ' . $mes . ' de ' . $anio;
    }
}
