<?php
$tdataview_comisionamiento = array();
$tdataview_comisionamiento[".searchableFields"] = array();
$tdataview_comisionamiento[".ShortName"] = "view_comisionamiento";
$tdataview_comisionamiento[".OwnerID"] = "id_funcionario";
$tdataview_comisionamiento[".OriginalTable"] = "rrhh_permisos.permisos_funcionarios";


$tdataview_comisionamiento[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataview_comisionamiento[".originalPagesByType"] = $tdataview_comisionamiento[".pagesByType"];
$tdataview_comisionamiento[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataview_comisionamiento[".originalPages"] = $tdataview_comisionamiento[".pages"];
$tdataview_comisionamiento[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataview_comisionamiento[".originalDefaultPages"] = $tdataview_comisionamiento[".defaultPages"];

//	field labels
$fieldLabelsview_comisionamiento = array();
$fieldToolTipsview_comisionamiento = array();
$pageTitlesview_comisionamiento = array();
$placeHoldersview_comisionamiento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsview_comisionamiento["Spanish"] = array();
	$fieldToolTipsview_comisionamiento["Spanish"] = array();
	$placeHoldersview_comisionamiento["Spanish"] = array();
	$pageTitlesview_comisionamiento["Spanish"] = array();
	$fieldLabelsview_comisionamiento["Spanish"]["id"] = "ID";
	$fieldToolTipsview_comisionamiento["Spanish"]["id"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["id"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["id_funcionario"] = "Funcionario";
	$fieldToolTipsview_comisionamiento["Spanish"]["id_funcionario"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["id_funcionario"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["per_nombre"] = "Per Nombre";
	$fieldToolTipsview_comisionamiento["Spanish"]["per_nombre"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["per_nombre"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["per_apellido"] = "Per Apellido";
	$fieldToolTipsview_comisionamiento["Spanish"]["per_apellido"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["per_apellido"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["per_ci"] = "Cédula de identidad";
	$fieldToolTipsview_comisionamiento["Spanish"]["per_ci"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["per_ci"] = "Ingrese número de Documento";
	$fieldLabelsview_comisionamiento["Spanish"]["tipo_vinculacion"] = "Tipo de Vinculación";
	$fieldToolTipsview_comisionamiento["Spanish"]["tipo_vinculacion"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["tipo_vinculacion"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipsview_comisionamiento["Spanish"]["nombre_completo"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["nombre_completo"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["dependencia_id"] = "Dependencia";
	$fieldToolTipsview_comisionamiento["Spanish"]["dependencia_id"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["dependencia_id"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["fecha_desde"] = "Fecha desde";
	$fieldToolTipsview_comisionamiento["Spanish"]["fecha_desde"] = "Seleccione el día en que inicia el permiso.";
	$placeHoldersview_comisionamiento["Spanish"]["fecha_desde"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["hora_desde"] = "🕒 Hora de inicio";
	$fieldToolTipsview_comisionamiento["Spanish"]["hora_desde"] = "Seleccione la hora en que inicia el permiso.";
	$placeHoldersview_comisionamiento["Spanish"]["hora_desde"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["fecha_hasta"] = "Fecha hasta";
	$fieldToolTipsview_comisionamiento["Spanish"]["fecha_hasta"] = "Seleccione el último día del permiso.";
	$placeHoldersview_comisionamiento["Spanish"]["fecha_hasta"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["hora_hasta"] = "🕒 Hora de fin";
	$fieldToolTipsview_comisionamiento["Spanish"]["hora_hasta"] = "Seleccione la hora de finalización del permiso.";
	$placeHoldersview_comisionamiento["Spanish"]["hora_hasta"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["motivo_id"] = "Tipo de permiso o justificación";
	$fieldToolTipsview_comisionamiento["Spanish"]["motivo_id"] = "Indique el motivo por el cual solicita el permiso.";
	$placeHoldersview_comisionamiento["Spanish"]["motivo_id"] = "Seleccione el motivo de su solicitud";
	$fieldLabelsview_comisionamiento["Spanish"]["comision_servicios"] = "¿Es comisión de servicios?";
	$fieldToolTipsview_comisionamiento["Spanish"]["comision_servicios"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["comision_servicios"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["comision_servicios_descripcion"] = "Descripción de la comisión de servicios";
	$fieldToolTipsview_comisionamiento["Spanish"]["comision_servicios_descripcion"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["comision_servicios_descripcion"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["observacion"] = "Observaciones adicionales";
	$fieldToolTipsview_comisionamiento["Spanish"]["observacion"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["observacion"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["estado"] = "Estado";
	$fieldToolTipsview_comisionamiento["Spanish"]["estado"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["estado"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["archivo_adjunto"] = "📎 Adjuntar respaldo (opcional)";
	$fieldToolTipsview_comisionamiento["Spanish"]["archivo_adjunto"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["archivo_adjunto"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["email_jefe"] = "📧  Correo electrónico del superior inmediato";
	$fieldToolTipsview_comisionamiento["Spanish"]["email_jefe"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["email_jefe"] = "correo@mtess.gov.py";
	$fieldLabelsview_comisionamiento["Spanish"]["descripcion_dependencia"] = "Dependencia";
	$fieldToolTipsview_comisionamiento["Spanish"]["descripcion_dependencia"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["descripcion_dependencia"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["descripcion_tipo_vinculacion"] = "Tipo de Vinculación";
	$fieldToolTipsview_comisionamiento["Spanish"]["descripcion_tipo_vinculacion"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["descripcion_tipo_vinculacion"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["solicitado_por"] = "Solicitado Por";
	$fieldToolTipsview_comisionamiento["Spanish"]["solicitado_por"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["solicitado_por"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["fecha_solicitud"] = "Fecha de la Solicitud";
	$fieldToolTipsview_comisionamiento["Spanish"]["fecha_solicitud"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["fecha_solicitud"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["email_jefe_id"] = "Email Jefe Id";
	$fieldToolTipsview_comisionamiento["Spanish"]["email_jefe_id"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["email_jefe_id"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["resultado_decision"] = "👨‍💼 Aprobación del jefe inmediato";
	$fieldToolTipsview_comisionamiento["Spanish"]["resultado_decision"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["resultado_decision"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["horas_compensar"] = "Horas a compensar";
	$fieldToolTipsview_comisionamiento["Spanish"]["horas_compensar"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["horas_compensar"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["nombre_completo_edit"] = "Nombre Completo";
	$fieldToolTipsview_comisionamiento["Spanish"]["nombre_completo_edit"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["nombre_completo_edit"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["descripcion_dependencia_edit"] = "Descripcion Dependencia Edit";
	$fieldToolTipsview_comisionamiento["Spanish"]["descripcion_dependencia_edit"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["descripcion_dependencia_edit"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["rrhh_resultado_decision"] = "🏢 Aprobación de Recursos Humanos";
	$fieldToolTipsview_comisionamiento["Spanish"]["rrhh_resultado_decision"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["rrhh_resultado_decision"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["rrhh_motivo_rechazo"] = "Motivo de Rechazo(RRHH)";
	$fieldToolTipsview_comisionamiento["Spanish"]["rrhh_motivo_rechazo"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["rrhh_motivo_rechazo"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["antiguedad_laboral"] = "Antiguedad Laboral";
	$fieldToolTipsview_comisionamiento["Spanish"]["antiguedad_laboral"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["antiguedad_laboral"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["car_descri"] = "Cargo Actual";
	$fieldToolTipsview_comisionamiento["Spanish"]["car_descri"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["car_descri"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["sed_descripcion"] = "Sede Laboral";
	$fieldToolTipsview_comisionamiento["Spanish"]["sed_descripcion"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["sed_descripcion"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["cantidad_dias_permiso"] = "";
	$fieldToolTipsview_comisionamiento["Spanish"]["cantidad_dias_permiso"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["cantidad_dias_permiso"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["cantidad_permisos_mes"] = "Cantidad de permisos solicitados en el mes";
	$fieldToolTipsview_comisionamiento["Spanish"]["cantidad_permisos_mes"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["cantidad_permisos_mes"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["fecha_decision"] = "Fecha de Aprobación del jefe";
	$fieldToolTipsview_comisionamiento["Spanish"]["fecha_decision"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["fecha_decision"] = "";
	$fieldLabelsview_comisionamiento["Spanish"]["rrhh_fecha_decision"] = "Fecha de Aprobación RRHH";
	$fieldToolTipsview_comisionamiento["Spanish"]["rrhh_fecha_decision"] = "";
	$placeHoldersview_comisionamiento["Spanish"]["rrhh_fecha_decision"] = "";
	if (count($fieldToolTipsview_comisionamiento["Spanish"]))
		$tdataview_comisionamiento[".isUseToolTips"] = true;
}


	$tdataview_comisionamiento[".NCSearch"] = true;



$tdataview_comisionamiento[".shortTableName"] = "view_comisionamiento";
$tdataview_comisionamiento[".nSecOptions"] = 0;

$tdataview_comisionamiento[".mainTableOwnerID"] = "id_funcionario";
$tdataview_comisionamiento[".entityType"] = 1;
$tdataview_comisionamiento[".connId"] = "dbtalentos_at_192_168_123_51";


$tdataview_comisionamiento[".strOriginalTableName"] = "rrhh_permisos.permisos_funcionarios";

	



$tdataview_comisionamiento[".showAddInPopup"] = false;

$tdataview_comisionamiento[".showEditInPopup"] = false;

$tdataview_comisionamiento[".showViewInPopup"] = false;

$tdataview_comisionamiento[".listAjax"] = false;
//	temporary
//$tdataview_comisionamiento[".listAjax"] = false;

	$tdataview_comisionamiento[".audit"] = false;

	$tdataview_comisionamiento[".locking"] = false;


$pages = $tdataview_comisionamiento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataview_comisionamiento[".edit"] = true;
	$tdataview_comisionamiento[".afterEditAction"] = 1;
	$tdataview_comisionamiento[".closePopupAfterEdit"] = 1;
	$tdataview_comisionamiento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataview_comisionamiento[".add"] = true;
$tdataview_comisionamiento[".afterAddAction"] = 1;
$tdataview_comisionamiento[".closePopupAfterAdd"] = 1;
$tdataview_comisionamiento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataview_comisionamiento[".list"] = true;
}



$tdataview_comisionamiento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataview_comisionamiento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataview_comisionamiento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataview_comisionamiento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataview_comisionamiento[".printFriendly"] = true;
}



$tdataview_comisionamiento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataview_comisionamiento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataview_comisionamiento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataview_comisionamiento[".isUseAjaxSuggest"] = true;



						

$tdataview_comisionamiento[".ajaxCodeSnippetAdded"] = false;

$tdataview_comisionamiento[".buttonsAdded"] = false;

$tdataview_comisionamiento[".addPageEvents"] = true;

// use timepicker for search panel
$tdataview_comisionamiento[".isUseTimeForSearch"] = true;


$tdataview_comisionamiento[".badgeColor"] = "6493EA";


$tdataview_comisionamiento[".allSearchFields"] = array();
$tdataview_comisionamiento[".filterFields"] = array();
$tdataview_comisionamiento[".requiredSearchFields"] = array();

$tdataview_comisionamiento[".googleLikeFields"] = array();
$tdataview_comisionamiento[".googleLikeFields"][] = "id";
$tdataview_comisionamiento[".googleLikeFields"][] = "id_funcionario";
$tdataview_comisionamiento[".googleLikeFields"][] = "per_nombre";
$tdataview_comisionamiento[".googleLikeFields"][] = "per_apellido";
$tdataview_comisionamiento[".googleLikeFields"][] = "nombre_completo";
$tdataview_comisionamiento[".googleLikeFields"][] = "per_ci";
$tdataview_comisionamiento[".googleLikeFields"][] = "tipo_vinculacion";
$tdataview_comisionamiento[".googleLikeFields"][] = "dependencia_id";
$tdataview_comisionamiento[".googleLikeFields"][] = "fecha_desde";
$tdataview_comisionamiento[".googleLikeFields"][] = "hora_desde";
$tdataview_comisionamiento[".googleLikeFields"][] = "fecha_hasta";
$tdataview_comisionamiento[".googleLikeFields"][] = "hora_hasta";
$tdataview_comisionamiento[".googleLikeFields"][] = "motivo_id";
$tdataview_comisionamiento[".googleLikeFields"][] = "comision_servicios";
$tdataview_comisionamiento[".googleLikeFields"][] = "comision_servicios_descripcion";
$tdataview_comisionamiento[".googleLikeFields"][] = "observacion";
$tdataview_comisionamiento[".googleLikeFields"][] = "estado";
$tdataview_comisionamiento[".googleLikeFields"][] = "archivo_adjunto";
$tdataview_comisionamiento[".googleLikeFields"][] = "email_jefe";
$tdataview_comisionamiento[".googleLikeFields"][] = "descripcion_dependencia";
$tdataview_comisionamiento[".googleLikeFields"][] = "descripcion_tipo_vinculacion";
$tdataview_comisionamiento[".googleLikeFields"][] = "solicitado_por";
$tdataview_comisionamiento[".googleLikeFields"][] = "fecha_solicitud";
$tdataview_comisionamiento[".googleLikeFields"][] = "email_jefe_id";
$tdataview_comisionamiento[".googleLikeFields"][] = "resultado_decision";
$tdataview_comisionamiento[".googleLikeFields"][] = "horas_compensar";
$tdataview_comisionamiento[".googleLikeFields"][] = "nombre_completo_edit";
$tdataview_comisionamiento[".googleLikeFields"][] = "descripcion_dependencia_edit";
$tdataview_comisionamiento[".googleLikeFields"][] = "rrhh_resultado_decision";
$tdataview_comisionamiento[".googleLikeFields"][] = "rrhh_motivo_rechazo";
$tdataview_comisionamiento[".googleLikeFields"][] = "antiguedad_laboral";
$tdataview_comisionamiento[".googleLikeFields"][] = "car_descri";
$tdataview_comisionamiento[".googleLikeFields"][] = "sed_descripcion";
$tdataview_comisionamiento[".googleLikeFields"][] = "cantidad_permisos_mes";
$tdataview_comisionamiento[".googleLikeFields"][] = "cantidad_dias_permiso";
$tdataview_comisionamiento[".googleLikeFields"][] = "fecha_decision";
$tdataview_comisionamiento[".googleLikeFields"][] = "rrhh_fecha_decision";



$tdataview_comisionamiento[".tableType"] = "list";

$tdataview_comisionamiento[".printerPageOrientation"] = 0;
$tdataview_comisionamiento[".nPrinterPageScale"] = 100;

$tdataview_comisionamiento[".nPrinterSplitRecords"] = 40;

$tdataview_comisionamiento[".geocodingEnabled"] = false;










$tdataview_comisionamiento[".pageSize"] = 20;

$tdataview_comisionamiento[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY pf.id DESC";
$tdataview_comisionamiento[".strOrderBy"] = $tstrOrderBy;

$tdataview_comisionamiento[".orderindexes"] = array();
			$tdataview_comisionamiento[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "pf.id");


$tdataview_comisionamiento[".sqlHead"] = "SELECT pf.id,  pf.id_funcionario,  p.per_nombre,  p.per_apellido,  p.per_nombre || ' ' || p.per_apellido AS nombre_completo,  p.per_ci,  pf.tipo_vinculacion,  pf.dependencia_id,  pf.fecha_desde,  pf.hora_desde,  pf.fecha_hasta,  pf.hora_hasta,  pf.motivo_id,  pf.comision_servicios,  pf.comision_servicios_descripcion,  pf.observacion,  pf.estado,  pf.archivo_adjunto,  '' AS email_jefe,  '' AS descripcion_dependencia,  '' AS descripcion_tipo_vinculacion,  pf.solicitado_por,  pf.fecha_solicitud,  '' AS email_jefe_id,  pf.resultado_decision,  pf.horas_compensar,  '' AS nombre_completo_edit,  '' AS descripcion_dependencia_edit,  pf.rrhh_resultado_decision,  pf.rrhh_motivo_rechazo,  '' AS antiguedad_laboral,  '' AS car_descri,  '' AS sed_descripcion,  '' AS cantidad_permisos_mes,  '' AS cantidad_dias_permiso,  pf.fecha_decision,  pf.rrhh_fecha_decision";
$tdataview_comisionamiento[".sqlFrom"] = "FROM rrhh_permisos.permisos_funcionarios AS pf  LEFT OUTER JOIN \"public\".personales AS p ON pf.id_funcionario = p.per_cod";
$tdataview_comisionamiento[".sqlWhereExpr"] = "";
$tdataview_comisionamiento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataview_comisionamiento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataview_comisionamiento[".arrGroupsPerPage"] = $arrGPP;

$tdataview_comisionamiento[".highlightSearchResults"] = true;

$tableKeysview_comisionamiento = array();
$tableKeysview_comisionamiento[] = "id";
$tdataview_comisionamiento[".Keys"] = $tableKeysview_comisionamiento;


$tdataview_comisionamiento[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["id"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "id";
//	id_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_funcionario";
	$fdata["GoodName"] = "id_funcionario";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","id_funcionario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_funcionario";

		$fdata["sourceSingle"] = "id_funcionario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.id_funcionario";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["id_funcionario"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "id_funcionario";
//	per_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "per_nombre";
	$fdata["GoodName"] = "per_nombre";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","per_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.per_nombre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["per_nombre"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "per_nombre";
//	per_apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "per_apellido";
	$fdata["GoodName"] = "per_apellido";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","per_apellido");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_apellido";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.per_apellido";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["per_apellido"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "per_apellido";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","nombre_completo");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "nombre_completo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.per_nombre || ' ' || p.per_apellido";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["nombre_completo"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "nombre_completo";
//	per_ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "per_ci";
	$fdata["GoodName"] = "per_ci";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","per_ci");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_ci";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.per_ci";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["per_ci"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "per_ci";
//	tipo_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tipo_vinculacion";
	$fdata["GoodName"] = "tipo_vinculacion";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","tipo_vinculacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_vinculacion";

		$fdata["sourceSingle"] = "tipo_vinculacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.tipo_vinculacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.tipo_funcionario";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "tfun_cod";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tfun_descri";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["tipo_vinculacion"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "tipo_vinculacion";
//	dependencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dependencia_id";
	$fdata["GoodName"] = "dependencia_id";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","dependencia_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dependencia_id";

		$fdata["sourceSingle"] = "dependencia_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.dependencia_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.dependencias";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "dep_cod";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "dep_descripcion_corta || ' - ' || dep_descripcion";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["dependencia_id"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "dependencia_id";
//	fecha_desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fecha_desde";
	$fdata["GoodName"] = "fecha_desde";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","fecha_desde");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_desde";

		$fdata["sourceSingle"] = "fecha_desde";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.fecha_desde";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["fecha_desde"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "fecha_desde";
//	hora_desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "hora_desde";
	$fdata["GoodName"] = "hora_desde";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","hora_desde");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "hora_desde";

		$fdata["sourceSingle"] = "hora_desde";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.hora_desde";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["hora_desde"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "hora_desde";
//	fecha_hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fecha_hasta";
	$fdata["GoodName"] = "fecha_hasta";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","fecha_hasta");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_hasta";

		$fdata["sourceSingle"] = "fecha_hasta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.fecha_hasta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["fecha_hasta"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "fecha_hasta";
//	hora_hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "hora_hasta";
	$fdata["GoodName"] = "hora_hasta";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","hora_hasta");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "hora_hasta";

		$fdata["sourceSingle"] = "hora_hasta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.hora_hasta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["hora_hasta"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "hora_hasta";
//	motivo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "motivo_id";
	$fdata["GoodName"] = "motivo_id";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","motivo_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "motivo_id";

		$fdata["sourceSingle"] = "motivo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.motivo_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.tipos_ocurrencias";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "tip_cod";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tip_descripcion";

				$edata["LookupWhere"] = "tip_descripcion in('Permiso por Adopción', 'Omisión de Registro de Entrada y/o Salida', 'Acompañamiento familiar por consulta médica', 'Permiso Particular', 'Licencia Sindical', 'Permiso por Paternidad', 'Permiso por Duelo', 'Permiso por Capacitación', 'Permiso por Matrimonio', 'Permiso Académico', 'Acompañamiento Familiar', 'Consulta y/o Estudios Médicos', 'Examén Ginecologíco/Mamografía/Urologico', 'Reposo Médico', 'Permiso por Maternidad', 'Permiso particular a compensar', 'Permiso particular justificado', 'Permiso particular parcial a compensar', 'Permiso particular parcial justificado', 'Llegada tardía a compensar', 'Omisión de registro de entrada', 'Omisión de registro de salida', 'Consulta médica', 'Acompañamiento familiar por reposo')";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["motivo_id"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "motivo_id";
//	comision_servicios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "comision_servicios";
	$fdata["GoodName"] = "comision_servicios";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","comision_servicios");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "comision_servicios";

		$fdata["sourceSingle"] = "comision_servicios";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.comision_servicios";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdataview_comisionamiento["comision_servicios"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "comision_servicios";
//	comision_servicios_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "comision_servicios_descripcion";
	$fdata["GoodName"] = "comision_servicios_descripcion";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","comision_servicios_descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "comision_servicios_descripcion";

		$fdata["sourceSingle"] = "comision_servicios_descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.comision_servicios_descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["comision_servicios_descripcion"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "comision_servicios_descripcion";
//	observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "observacion";
	$fdata["GoodName"] = "observacion";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","observacion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "observacion";

		$fdata["sourceSingle"] = "observacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.observacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["observacion"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "observacion";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado";

		$fdata["sourceSingle"] = "estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["estado"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "estado";
//	archivo_adjunto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "archivo_adjunto";
	$fdata["GoodName"] = "archivo_adjunto";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","archivo_adjunto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "archivo_adjunto";

		$fdata["sourceSingle"] = "archivo_adjunto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.archivo_adjunto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["archivo_adjunto"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "archivo_adjunto";
//	email_jefe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "email_jefe";
	$fdata["GoodName"] = "email_jefe";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","email_jefe");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "email_jefe";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["email_jefe"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "email_jefe";
//	descripcion_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "descripcion_dependencia";
	$fdata["GoodName"] = "descripcion_dependencia";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","descripcion_dependencia");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "descripcion_dependencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["descripcion_dependencia"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "descripcion_dependencia";
//	descripcion_tipo_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "descripcion_tipo_vinculacion";
	$fdata["GoodName"] = "descripcion_tipo_vinculacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","descripcion_tipo_vinculacion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "descripcion_tipo_vinculacion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["descripcion_tipo_vinculacion"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "descripcion_tipo_vinculacion";
//	solicitado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "solicitado_por";
	$fdata["GoodName"] = "solicitado_por";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","solicitado_por");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "solicitado_por";

		$fdata["sourceSingle"] = "solicitado_por";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.solicitado_por";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["solicitado_por"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "solicitado_por";
//	fecha_solicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "fecha_solicitud";
	$fdata["GoodName"] = "fecha_solicitud";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","fecha_solicitud");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_solicitud";

		$fdata["sourceSingle"] = "fecha_solicitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.fecha_solicitud";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["fecha_solicitud"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "fecha_solicitud";
//	email_jefe_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "email_jefe_id";
	$fdata["GoodName"] = "email_jefe_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","email_jefe_id");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "email_jefe_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["email_jefe_id"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "email_jefe_id";
//	resultado_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "resultado_decision";
	$fdata["GoodName"] = "resultado_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","resultado_decision");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "resultado_decision";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.resultado_decision";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["resultado_decision"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "resultado_decision";
//	horas_compensar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "horas_compensar";
	$fdata["GoodName"] = "horas_compensar";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","horas_compensar");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "horas_compensar";

		$fdata["sourceSingle"] = "horas_compensar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.horas_compensar";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["horas_compensar"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "horas_compensar";
//	nombre_completo_edit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "nombre_completo_edit";
	$fdata["GoodName"] = "nombre_completo_edit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","nombre_completo_edit");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "nombre_completo_edit";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["nombre_completo_edit"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "nombre_completo_edit";
//	descripcion_dependencia_edit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "descripcion_dependencia_edit";
	$fdata["GoodName"] = "descripcion_dependencia_edit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","descripcion_dependencia_edit");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "descripcion_dependencia_edit";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["descripcion_dependencia_edit"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "descripcion_dependencia_edit";
//	rrhh_resultado_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "rrhh_resultado_decision";
	$fdata["GoodName"] = "rrhh_resultado_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","rrhh_resultado_decision");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rrhh_resultado_decision";

		$fdata["sourceSingle"] = "rrhh_resultado_decision";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.rrhh_resultado_decision";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["rrhh_resultado_decision"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "rrhh_resultado_decision";
//	rrhh_motivo_rechazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "rrhh_motivo_rechazo";
	$fdata["GoodName"] = "rrhh_motivo_rechazo";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","rrhh_motivo_rechazo");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "rrhh_motivo_rechazo";

		$fdata["sourceSingle"] = "rrhh_motivo_rechazo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.rrhh_motivo_rechazo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["rrhh_motivo_rechazo"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "rrhh_motivo_rechazo";
//	antiguedad_laboral
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "antiguedad_laboral";
	$fdata["GoodName"] = "antiguedad_laboral";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","antiguedad_laboral");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "antiguedad_laboral";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["antiguedad_laboral"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "antiguedad_laboral";
//	car_descri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "car_descri";
	$fdata["GoodName"] = "car_descri";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","car_descri");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "car_descri";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["car_descri"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "car_descri";
//	sed_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "sed_descripcion";
	$fdata["GoodName"] = "sed_descripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","sed_descripcion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "sed_descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["sed_descripcion"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "sed_descripcion";
//	cantidad_permisos_mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "cantidad_permisos_mes";
	$fdata["GoodName"] = "cantidad_permisos_mes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","cantidad_permisos_mes");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "cantidad_permisos_mes";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["cantidad_permisos_mes"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "cantidad_permisos_mes";
//	cantidad_dias_permiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "cantidad_dias_permiso";
	$fdata["GoodName"] = "cantidad_dias_permiso";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","cantidad_dias_permiso");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "cantidad_dias_permiso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["cantidad_dias_permiso"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "cantidad_dias_permiso";
//	fecha_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "fecha_decision";
	$fdata["GoodName"] = "fecha_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","fecha_decision");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_decision";

		$fdata["sourceSingle"] = "fecha_decision";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.fecha_decision";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["fecha_decision"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "fecha_decision";
//	rrhh_fecha_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "rrhh_fecha_decision";
	$fdata["GoodName"] = "rrhh_fecha_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("view_comisionamiento","rrhh_fecha_decision");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "rrhh_fecha_decision";

		$fdata["sourceSingle"] = "rrhh_fecha_decision";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.rrhh_fecha_decision";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataview_comisionamiento["rrhh_fecha_decision"] = $fdata;
		$tdataview_comisionamiento[".searchableFields"][] = "rrhh_fecha_decision";


$tables_data["view_comisionamiento"]=&$tdataview_comisionamiento;
$field_labels["view_comisionamiento"] = &$fieldLabelsview_comisionamiento;
$fieldToolTips["view_comisionamiento"] = &$fieldToolTipsview_comisionamiento;
$placeHolders["view_comisionamiento"] = &$placeHoldersview_comisionamiento;
$page_titles["view_comisionamiento"] = &$pageTitlesview_comisionamiento;


changeTextControlsToDate( "view_comisionamiento" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["view_comisionamiento"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["view_comisionamiento"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_view_comisionamiento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pf.id,  pf.id_funcionario,  p.per_nombre,  p.per_apellido,  p.per_nombre || ' ' || p.per_apellido AS nombre_completo,  p.per_ci,  pf.tipo_vinculacion,  pf.dependencia_id,  pf.fecha_desde,  pf.hora_desde,  pf.fecha_hasta,  pf.hora_hasta,  pf.motivo_id,  pf.comision_servicios,  pf.comision_servicios_descripcion,  pf.observacion,  pf.estado,  pf.archivo_adjunto,  '' AS email_jefe,  '' AS descripcion_dependencia,  '' AS descripcion_tipo_vinculacion,  pf.solicitado_por,  pf.fecha_solicitud,  '' AS email_jefe_id,  pf.resultado_decision,  pf.horas_compensar,  '' AS nombre_completo_edit,  '' AS descripcion_dependencia_edit,  pf.rrhh_resultado_decision,  pf.rrhh_motivo_rechazo,  '' AS antiguedad_laboral,  '' AS car_descri,  '' AS sed_descripcion,  '' AS cantidad_permisos_mes,  '' AS cantidad_dias_permiso,  pf.fecha_decision,  pf.rrhh_fecha_decision";
$proto0["m_strFrom"] = "FROM rrhh_permisos.permisos_funcionarios AS pf  LEFT OUTER JOIN \"public\".personales AS p ON pf.id_funcionario = p.per_cod";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY pf.id DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto6["m_sql"] = "pf.id";
$proto6["m_srcTableName"] = "view_comisionamiento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_funcionario",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto8["m_sql"] = "pf.id_funcionario";
$proto8["m_srcTableName"] = "view_comisionamiento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "per_nombre",
	"m_strTable" => "p",
	"m_srcTableName" => "view_comisionamiento"
));

$proto10["m_sql"] = "p.per_nombre";
$proto10["m_srcTableName"] = "view_comisionamiento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "per_apellido",
	"m_strTable" => "p",
	"m_srcTableName" => "view_comisionamiento"
));

$proto12["m_sql"] = "p.per_apellido";
$proto12["m_srcTableName"] = "view_comisionamiento";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "p.per_nombre || ' ' || p.per_apellido"
));

$proto14["m_sql"] = "p.per_nombre || ' ' || p.per_apellido";
$proto14["m_srcTableName"] = "view_comisionamiento";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "nombre_completo";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "per_ci",
	"m_strTable" => "p",
	"m_srcTableName" => "view_comisionamiento"
));

$proto16["m_sql"] = "p.per_ci";
$proto16["m_srcTableName"] = "view_comisionamiento";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_vinculacion",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto18["m_sql"] = "pf.tipo_vinculacion";
$proto18["m_srcTableName"] = "view_comisionamiento";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencia_id",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto20["m_sql"] = "pf.dependencia_id";
$proto20["m_srcTableName"] = "view_comisionamiento";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_desde",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto22["m_sql"] = "pf.fecha_desde";
$proto22["m_srcTableName"] = "view_comisionamiento";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_desde",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto24["m_sql"] = "pf.hora_desde";
$proto24["m_srcTableName"] = "view_comisionamiento";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hasta",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto26["m_sql"] = "pf.fecha_hasta";
$proto26["m_srcTableName"] = "view_comisionamiento";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_hasta",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto28["m_sql"] = "pf.hora_hasta";
$proto28["m_srcTableName"] = "view_comisionamiento";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "motivo_id",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto30["m_sql"] = "pf.motivo_id";
$proto30["m_srcTableName"] = "view_comisionamiento";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "comision_servicios",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto32["m_sql"] = "pf.comision_servicios";
$proto32["m_srcTableName"] = "view_comisionamiento";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "comision_servicios_descripcion",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto34["m_sql"] = "pf.comision_servicios_descripcion";
$proto34["m_srcTableName"] = "view_comisionamiento";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "observacion",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto36["m_sql"] = "pf.observacion";
$proto36["m_srcTableName"] = "view_comisionamiento";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto38["m_sql"] = "pf.estado";
$proto38["m_srcTableName"] = "view_comisionamiento";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "archivo_adjunto",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto40["m_sql"] = "pf.archivo_adjunto";
$proto40["m_srcTableName"] = "view_comisionamiento";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto42["m_sql"] = "''";
$proto42["m_srcTableName"] = "view_comisionamiento";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "email_jefe";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto44["m_sql"] = "''";
$proto44["m_srcTableName"] = "view_comisionamiento";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "descripcion_dependencia";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto46["m_sql"] = "''";
$proto46["m_srcTableName"] = "view_comisionamiento";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "descripcion_tipo_vinculacion";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "solicitado_por",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto48["m_sql"] = "pf.solicitado_por";
$proto48["m_srcTableName"] = "view_comisionamiento";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_solicitud",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto50["m_sql"] = "pf.fecha_solicitud";
$proto50["m_srcTableName"] = "view_comisionamiento";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto52["m_sql"] = "''";
$proto52["m_srcTableName"] = "view_comisionamiento";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "email_jefe_id";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "resultado_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto54["m_sql"] = "pf.resultado_decision";
$proto54["m_srcTableName"] = "view_comisionamiento";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "horas_compensar",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto56["m_sql"] = "pf.horas_compensar";
$proto56["m_srcTableName"] = "view_comisionamiento";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto58["m_sql"] = "''";
$proto58["m_srcTableName"] = "view_comisionamiento";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "nombre_completo_edit";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto60["m_sql"] = "''";
$proto60["m_srcTableName"] = "view_comisionamiento";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "descripcion_dependencia_edit";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "rrhh_resultado_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto62["m_sql"] = "pf.rrhh_resultado_decision";
$proto62["m_srcTableName"] = "view_comisionamiento";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "rrhh_motivo_rechazo",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto64["m_sql"] = "pf.rrhh_motivo_rechazo";
$proto64["m_srcTableName"] = "view_comisionamiento";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto66["m_sql"] = "''";
$proto66["m_srcTableName"] = "view_comisionamiento";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "antiguedad_laboral";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto68["m_sql"] = "''";
$proto68["m_srcTableName"] = "view_comisionamiento";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "car_descri";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto70["m_sql"] = "''";
$proto70["m_srcTableName"] = "view_comisionamiento";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "sed_descripcion";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto72["m_sql"] = "''";
$proto72["m_srcTableName"] = "view_comisionamiento";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "cantidad_permisos_mes";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto74["m_sql"] = "''";
$proto74["m_srcTableName"] = "view_comisionamiento";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "cantidad_dias_permiso";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto76["m_sql"] = "pf.fecha_decision";
$proto76["m_srcTableName"] = "view_comisionamiento";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "rrhh_fecha_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto78["m_sql"] = "pf.rrhh_fecha_decision";
$proto78["m_srcTableName"] = "view_comisionamiento";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto80=array();
$proto80["m_link"] = "SQLL_MAIN";
			$proto81=array();
$proto81["m_strName"] = "rrhh_permisos.permisos_funcionarios";
$proto81["m_srcTableName"] = "view_comisionamiento";
$proto81["m_columns"] = array();
$proto81["m_columns"][] = "id";
$proto81["m_columns"][] = "id_funcionario";
$proto81["m_columns"][] = "tipo_vinculacion";
$proto81["m_columns"][] = "dependencia_id";
$proto81["m_columns"][] = "fecha_desde";
$proto81["m_columns"][] = "hora_desde";
$proto81["m_columns"][] = "fecha_hasta";
$proto81["m_columns"][] = "hora_hasta";
$proto81["m_columns"][] = "motivo_id";
$proto81["m_columns"][] = "comision_servicios";
$proto81["m_columns"][] = "comision_servicios_descripcion";
$proto81["m_columns"][] = "observacion";
$proto81["m_columns"][] = "estado";
$proto81["m_columns"][] = "fecha_actualizacion";
$proto81["m_columns"][] = "archivo_adjunto";
$proto81["m_columns"][] = "solicitado_por";
$proto81["m_columns"][] = "fecha_solicitud";
$proto81["m_columns"][] = "fecha_decision";
$proto81["m_columns"][] = "decidido_por";
$proto81["m_columns"][] = "resultado_decision";
$proto81["m_columns"][] = "horas_compensar";
$proto81["m_columns"][] = "acompensar";
$proto81["m_columns"][] = "rrhh_decidido_por";
$proto81["m_columns"][] = "rrhh_fecha_decision";
$proto81["m_columns"][] = "rrhh_resultado_decision";
$proto81["m_columns"][] = "rrhh_motivo_rechazo";
$proto81["m_columns"][] = "ocu_cod";
$obj = new SQLTable($proto81);

$proto80["m_table"] = $obj;
$proto80["m_sql"] = "rrhh_permisos.permisos_funcionarios AS pf";
$proto80["m_alias"] = "pf";
$proto80["m_srcTableName"] = "view_comisionamiento";
$proto82=array();
$proto82["m_sql"] = "";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

$proto80["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto80);

$proto0["m_fromlist"][]=$obj;
												$proto84=array();
$proto84["m_link"] = "SQLL_LEFTJOIN";
			$proto85=array();
$proto85["m_strName"] = "public.personales";
$proto85["m_srcTableName"] = "view_comisionamiento";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "per_cod";
$proto85["m_columns"][] = "categoria_cat_codigo";
$proto85["m_columns"][] = "departamentos_dep_cod";
$proto85["m_columns"][] = "dependencias_dep_cod";
$proto85["m_columns"][] = "paises_pai_cod";
$proto85["m_columns"][] = "ciudades_ciu_cod";
$proto85["m_columns"][] = "profesiones_pro_cod";
$proto85["m_columns"][] = "per_profesional";
$proto85["m_columns"][] = "tipo_funcionario_tfun_cod";
$proto85["m_columns"][] = "per_institucion_origen";
$proto85["m_columns"][] = "cargos_car_cod";
$proto85["m_columns"][] = "per_nombre";
$proto85["m_columns"][] = "per_apellido";
$proto85["m_columns"][] = "per_ci";
$proto85["m_columns"][] = "per_sexo";
$proto85["m_columns"][] = "per_nacimiento";
$proto85["m_columns"][] = "per_est_civil";
$proto85["m_columns"][] = "per_gruposangre";
$proto85["m_columns"][] = "per_pcd";
$proto85["m_columns"][] = "per_domicilio";
$proto85["m_columns"][] = "per_barrio";
$proto85["m_columns"][] = "per_teleparticular";
$proto85["m_columns"][] = "per_telecelular";
$proto85["m_columns"][] = "per_email_part";
$proto85["m_columns"][] = "per_email_instit";
$proto85["m_columns"][] = "per_ruc";
$proto85["m_columns"][] = "per_contacto_eme";
$proto85["m_columns"][] = "per_tele_emer";
$proto85["m_columns"][] = "per_ingreso";
$proto85["m_columns"][] = "per_nombramiento";
$proto85["m_columns"][] = "per_estado";
$proto85["m_columns"][] = "per_usuario";
$proto85["m_columns"][] = "per_sede";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "LEFT OUTER JOIN \"public\".personales AS p ON pf.id_funcionario = p.per_cod";
$proto84["m_alias"] = "p";
$proto84["m_srcTableName"] = "view_comisionamiento";
$proto86=array();
$proto86["m_sql"] = "p.per_cod = pf.id_funcionario";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "per_cod",
	"m_strTable" => "p",
	"m_srcTableName" => "view_comisionamiento"
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "= pf.id_funcionario";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto84["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto84);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto88=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "pf",
	"m_srcTableName" => "view_comisionamiento"
));

$proto88["m_column"]=$obj;
$proto88["m_bAsc"] = 0;
$proto88["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto88);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="view_comisionamiento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_view_comisionamiento = createSqlQuery_view_comisionamiento();


	
		;

																																					

$tdataview_comisionamiento[".sqlquery"] = $queryData_view_comisionamiento;



include_once(getabspath("include/view_comisionamiento_events.php"));
$tdataview_comisionamiento[".hasEvents"] = true;

?>