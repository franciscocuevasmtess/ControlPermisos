<?php

/**
 * ARCHIVO: sii_ci_new.php
 * MÓDULO: Permisos de Funcionarios (RRHH)
 *
 * OBJETIVO:
 * Recibir una cédula de identidad (CI) vía GET y consultar
 * los datos personales del funcionario en la base de datos
 * externa "dbtalentos".
 *
 * FLUJO:
 * JavaScript (OnLoad) → AJAX GET → este archivo → respuesta al JS
 *
 * IMPORTANTE:
 * - Este script es consumido por JavaScript mediante AJAX.
 * - Devuelve los datos en formato texto plano separados por ":".
 * - El formato de salida es crítico y esperado por el frontend.
 *
 * FORMATO DE RESPUESTA:
 * id_persona:nombre:apellido:cedula:origen
 *
 * EJEMPLO:
 * 12345:JUAN:PEREZ:1234567:BASE
 */

// ======================================================
// IMPORTACIÓN DE LIBRERÍAS DE PHPRUNNER
// ======================================================
include("include/dbcommon.php");

// ======================================================
// OBTENCIÓN DEL PARÁMETRO CI DESDE LA PETICIÓN GET
// ======================================================
$CI = isset($_GET["ci"]) ? $_GET["ci"] : null;

// ======================================================
// VALIDACIÓN BÁSICA DEL PARÁMETRO
// ======================================================
if ($CI) {

	/**
	 * CONEXIÓN A BASE DE DATOS EXTERNA
	 * --------------------------------
	 * Base: dbtalentos
	 * Uso: Consulta de datos personales oficiales
	 *
	 * NOTA:
	 * - Esta conexión es independiente de la conexión principal de PHPRunner.
	 * - Actualmente configurada para entorno de DESARROLLO.
	 */
	// DESARROLLO
	$link = pg_connect(
		"dbname=dbtalentos host=192.168.123.51 user=postgres password=mLxnvGxLX0ND4i2I"
	);
	// PRODUCCIÓN
	// $link = pg_connect(
	// 	"dbname=dbtalentos host=192.168. user=postgres password="
	// );


	// ======================================================
	// CONSULTA DE DATOS PERSONALES POR CÉDULA
	// ======================================================
	$result = pg_exec($link, "SELECT p.per_cod, p.per_nombre, p.per_apellido, p.per_ci
								FROM dbtalentos.public.personales p
								WHERE p.per_ci = upper('" . trim(pg_escape_string($CI)) . "')");
	// Obtener todos los resultados como arreglo.
	$array_result = pg_fetch_all($result);

	// ======================================================
	// SI SE ENCONTRARON DATOS
	// ======================================================
	if ($array_result) {

		/**
		 * NOTA:
		 * Aunque se espera un solo registro por CI,
		 * se utiliza un loop por seguridad.
		 */
		while ($row = pg_fetch_row($result)) {
			$person_id = $row[0];
			$nombre = $row[1];
			$apellido = $row[2];
			$cedula = $row[3];
		}

		// ======================================================
		// RESPUESTA AL CLIENTE (JavaScript)
		// ======================================================
		echo utf8_encode(trim($person_id))
			. ":" . utf8_encode(trim($nombre))
			. ":" . utf8_encode(trim($apellido))
			. ":" . utf8_encode(trim($cedula))
			. ":BASE"; // Indica que los datos provienen de la base oficial
	}
} else {
	/**
	 * RESPUESTA CUANDO NO SE RECIBE PARÁMETRO CI
	 * (No debería ocurrir en condiciones normales)
	 */
	echo '<font size="5" face="Arial"><strong> NADA QUE MOSTRAR</strong></font>';
}
