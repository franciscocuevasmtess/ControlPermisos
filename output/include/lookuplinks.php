<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["public.tipo_funcionario"] ) ) {
			$lookupTableLinks["public.tipo_funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["public.tipo_funcionario"]["permisos_funcionarios.tipo_vinculacion"] )) {
			$lookupTableLinks["public.tipo_funcionario"]["permisos_funcionarios.tipo_vinculacion"] = array();
		}
		$lookupTableLinks["public.tipo_funcionario"]["permisos_funcionarios.tipo_vinculacion"]["edit"] = array("table" => "rrhh_permisos.permisos_funcionarios", "field" => "tipo_vinculacion", "page" => "edit");
		if( !isset( $lookupTableLinks["public.dependencias"] ) ) {
			$lookupTableLinks["public.dependencias"] = array();
		}
		if( !isset( $lookupTableLinks["public.dependencias"]["permisos_funcionarios.dependencia_id"] )) {
			$lookupTableLinks["public.dependencias"]["permisos_funcionarios.dependencia_id"] = array();
		}
		$lookupTableLinks["public.dependencias"]["permisos_funcionarios.dependencia_id"]["edit"] = array("table" => "rrhh_permisos.permisos_funcionarios", "field" => "dependencia_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.tipos_ocurrencias"] ) ) {
			$lookupTableLinks["public.tipos_ocurrencias"] = array();
		}
		if( !isset( $lookupTableLinks["public.tipos_ocurrencias"]["permisos_funcionarios.motivo_id"] )) {
			$lookupTableLinks["public.tipos_ocurrencias"]["permisos_funcionarios.motivo_id"] = array();
		}
		$lookupTableLinks["public.tipos_ocurrencias"]["permisos_funcionarios.motivo_id"]["edit"] = array("table" => "rrhh_permisos.permisos_funcionarios", "field" => "motivo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.personales"] ) ) {
			$lookupTableLinks["public.personales"] = array();
		}
		if( !isset( $lookupTableLinks["public.personales"]["permisos_funcionarios.decidido_por"] )) {
			$lookupTableLinks["public.personales"]["permisos_funcionarios.decidido_por"] = array();
		}
		$lookupTableLinks["public.personales"]["permisos_funcionarios.decidido_por"]["edit"] = array("table" => "rrhh_permisos.permisos_funcionarios", "field" => "decidido_por", "page" => "edit");
		if( !isset( $lookupTableLinks["public.tipo_funcionario"] ) ) {
			$lookupTableLinks["public.tipo_funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["public.tipo_funcionario"]["solicitudes_vacaciones.tipo_vinculacion"] )) {
			$lookupTableLinks["public.tipo_funcionario"]["solicitudes_vacaciones.tipo_vinculacion"] = array();
		}
		$lookupTableLinks["public.tipo_funcionario"]["solicitudes_vacaciones.tipo_vinculacion"]["edit"] = array("table" => "rrhh_permisos.solicitudes_vacaciones", "field" => "tipo_vinculacion", "page" => "edit");
		if( !isset( $lookupTableLinks["public.dependencias"] ) ) {
			$lookupTableLinks["public.dependencias"] = array();
		}
		if( !isset( $lookupTableLinks["public.dependencias"]["solicitudes_vacaciones.dependencia_id"] )) {
			$lookupTableLinks["public.dependencias"]["solicitudes_vacaciones.dependencia_id"] = array();
		}
		$lookupTableLinks["public.dependencias"]["solicitudes_vacaciones.dependencia_id"]["edit"] = array("table" => "rrhh_permisos.solicitudes_vacaciones", "field" => "dependencia_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.roles"] ) ) {
			$lookupTableLinks["public.roles"] = array();
		}
		if( !isset( $lookupTableLinks["public.roles"]["usuarios.rol"] )) {
			$lookupTableLinks["public.roles"]["usuarios.rol"] = array();
		}
		$lookupTableLinks["public.roles"]["usuarios.rol"]["edit"] = array("table" => "public.usuarios", "field" => "rol", "page" => "edit");
		if( !isset( $lookupTableLinks["public.tipo_funcionario"] ) ) {
			$lookupTableLinks["public.tipo_funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["public.tipo_funcionario"]["comisionamiento.tipo_vinculacion"] )) {
			$lookupTableLinks["public.tipo_funcionario"]["comisionamiento.tipo_vinculacion"] = array();
		}
		$lookupTableLinks["public.tipo_funcionario"]["comisionamiento.tipo_vinculacion"]["edit"] = array("table" => "comisionamiento", "field" => "tipo_vinculacion", "page" => "edit");
		if( !isset( $lookupTableLinks["public.dependencias"] ) ) {
			$lookupTableLinks["public.dependencias"] = array();
		}
		if( !isset( $lookupTableLinks["public.dependencias"]["comisionamiento.dependencia_id"] )) {
			$lookupTableLinks["public.dependencias"]["comisionamiento.dependencia_id"] = array();
		}
		$lookupTableLinks["public.dependencias"]["comisionamiento.dependencia_id"]["edit"] = array("table" => "comisionamiento", "field" => "dependencia_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.tipos_ocurrencias"] ) ) {
			$lookupTableLinks["public.tipos_ocurrencias"] = array();
		}
		if( !isset( $lookupTableLinks["public.tipos_ocurrencias"]["comisionamiento.motivo_id"] )) {
			$lookupTableLinks["public.tipos_ocurrencias"]["comisionamiento.motivo_id"] = array();
		}
		$lookupTableLinks["public.tipos_ocurrencias"]["comisionamiento.motivo_id"]["edit"] = array("table" => "comisionamiento", "field" => "motivo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.departamentos"] ) ) {
			$lookupTableLinks["public.departamentos"] = array();
		}
		if( !isset( $lookupTableLinks["public.departamentos"]["personales.departamentos_dep_cod"] )) {
			$lookupTableLinks["public.departamentos"]["personales.departamentos_dep_cod"] = array();
		}
		$lookupTableLinks["public.departamentos"]["personales.departamentos_dep_cod"]["edit"] = array("table" => "public.personales", "field" => "departamentos_dep_cod", "page" => "edit");
		if( !isset( $lookupTableLinks["public.dependencias"] ) ) {
			$lookupTableLinks["public.dependencias"] = array();
		}
		if( !isset( $lookupTableLinks["public.dependencias"]["personales.dependencias_dep_cod"] )) {
			$lookupTableLinks["public.dependencias"]["personales.dependencias_dep_cod"] = array();
		}
		$lookupTableLinks["public.dependencias"]["personales.dependencias_dep_cod"]["edit"] = array("table" => "public.personales", "field" => "dependencias_dep_cod", "page" => "edit");
		if( !isset( $lookupTableLinks["public.paises"] ) ) {
			$lookupTableLinks["public.paises"] = array();
		}
		if( !isset( $lookupTableLinks["public.paises"]["personales.paises_pai_cod"] )) {
			$lookupTableLinks["public.paises"]["personales.paises_pai_cod"] = array();
		}
		$lookupTableLinks["public.paises"]["personales.paises_pai_cod"]["edit"] = array("table" => "public.personales", "field" => "paises_pai_cod", "page" => "edit");
		if( !isset( $lookupTableLinks["public.ciudades"] ) ) {
			$lookupTableLinks["public.ciudades"] = array();
		}
		if( !isset( $lookupTableLinks["public.ciudades"]["personales.ciudades_ciu_cod"] )) {
			$lookupTableLinks["public.ciudades"]["personales.ciudades_ciu_cod"] = array();
		}
		$lookupTableLinks["public.ciudades"]["personales.ciudades_ciu_cod"]["edit"] = array("table" => "public.personales", "field" => "ciudades_ciu_cod", "page" => "edit");
		if( !isset( $lookupTableLinks["public.profesiones"] ) ) {
			$lookupTableLinks["public.profesiones"] = array();
		}
		if( !isset( $lookupTableLinks["public.profesiones"]["personales.profesiones_pro_cod"] )) {
			$lookupTableLinks["public.profesiones"]["personales.profesiones_pro_cod"] = array();
		}
		$lookupTableLinks["public.profesiones"]["personales.profesiones_pro_cod"]["edit"] = array("table" => "public.personales", "field" => "profesiones_pro_cod", "page" => "edit");
		if( !isset( $lookupTableLinks["public.tipo_funcionario"] ) ) {
			$lookupTableLinks["public.tipo_funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["public.tipo_funcionario"]["personales.tipo_funcionario_tfun_cod"] )) {
			$lookupTableLinks["public.tipo_funcionario"]["personales.tipo_funcionario_tfun_cod"] = array();
		}
		$lookupTableLinks["public.tipo_funcionario"]["personales.tipo_funcionario_tfun_cod"]["edit"] = array("table" => "public.personales", "field" => "tipo_funcionario_tfun_cod", "page" => "edit");
		if( !isset( $lookupTableLinks["public.instituciones_origen"] ) ) {
			$lookupTableLinks["public.instituciones_origen"] = array();
		}
		if( !isset( $lookupTableLinks["public.instituciones_origen"]["personales.per_institucion_origen"] )) {
			$lookupTableLinks["public.instituciones_origen"]["personales.per_institucion_origen"] = array();
		}
		$lookupTableLinks["public.instituciones_origen"]["personales.per_institucion_origen"]["edit"] = array("table" => "public.personales", "field" => "per_institucion_origen", "page" => "edit");
		if( !isset( $lookupTableLinks["public.cargos"] ) ) {
			$lookupTableLinks["public.cargos"] = array();
		}
		if( !isset( $lookupTableLinks["public.cargos"]["personales.cargos_car_cod"] )) {
			$lookupTableLinks["public.cargos"]["personales.cargos_car_cod"] = array();
		}
		$lookupTableLinks["public.cargos"]["personales.cargos_car_cod"]["edit"] = array("table" => "public.personales", "field" => "cargos_car_cod", "page" => "edit");
		if( !isset( $lookupTableLinks["public.sedes"] ) ) {
			$lookupTableLinks["public.sedes"] = array();
		}
		if( !isset( $lookupTableLinks["public.sedes"]["personales.per_sede"] )) {
			$lookupTableLinks["public.sedes"]["personales.per_sede"] = array();
		}
		$lookupTableLinks["public.sedes"]["personales.per_sede"]["edit"] = array("table" => "public.personales", "field" => "per_sede", "page" => "edit");
}

?>