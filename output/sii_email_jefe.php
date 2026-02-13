<?php

include("include/dbcommon.php");

// Obtener el per_cod enviado por GET
$per_cod = isset($_GET["per_cod"]) ? $_GET["per_cod"] : null;

if ($per_cod) {
	// DESARROLLO
	$link = pg_connect(
		"dbname=dbtalentos host=192.168.123.51 user=postgres password=mLxnvGxLX0ND4i2I"
	);
	// PRODUCCIÓN
	// $link = pg_connect(
	// 	"dbname=dbtalentos host=192.168. user=postgres password="
	// );

	// Query para obtener el email institucional del jefe
	$sql = "
		SELECT pe.per_email_instit
		FROM public.personales pe
			JOIN public.cargos car 
				ON car.car_cod = pe.cargos_car_cod
			JOIN public.dependencias dep 
				ON dep.dep_cod = pe.dependencias_dep_cod
			JOIN public.personales pe1 
				ON pe1.dependencias_dep_cod = pe.dependencias_dep_cod
		WHERE car.car_cod_tipo_cargo = 1
		AND pe1.per_cod = " . intval($per_cod) . "
		LIMIT 1
	";
	$result = pg_query($link, $sql);

	if ($result && pg_num_rows($result) > 0) {

		$row = pg_fetch_assoc($result);

		// Devolvemos solo el email
		echo trim($row["per_email_instit"]);
	} else {
		// Valor de control cuando no hay email
		echo "SIN_EMAIL";
	}
} else {
	echo "SIN_EMAIL";
}
