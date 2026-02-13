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
}

?>