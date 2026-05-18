<?php
$tdatacomisionamiento = array();
$tdatacomisionamiento[".searchableFields"] = array();
$tdatacomisionamiento[".ShortName"] = "comisionamiento";
$tdatacomisionamiento[".OwnerID"] = "id_funcionario";
$tdatacomisionamiento[".OriginalTable"] = "rrhh_permisos.permisos_funcionarios";


$tdatacomisionamiento[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacomisionamiento[".originalPagesByType"] = $tdatacomisionamiento[".pagesByType"];
$tdatacomisionamiento[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacomisionamiento[".originalPages"] = $tdatacomisionamiento[".pages"];
$tdatacomisionamiento[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacomisionamiento[".originalDefaultPages"] = $tdatacomisionamiento[".defaultPages"];

//	field labels
$fieldLabelscomisionamiento = array();
$fieldToolTipscomisionamiento = array();
$pageTitlescomisionamiento = array();
$placeHolderscomisionamiento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscomisionamiento["Spanish"] = array();
	$fieldToolTipscomisionamiento["Spanish"] = array();
	$placeHolderscomisionamiento["Spanish"] = array();
	$pageTitlescomisionamiento["Spanish"] = array();
	$fieldLabelscomisionamiento["Spanish"]["id"] = "ID";
	$fieldToolTipscomisionamiento["Spanish"]["id"] = "";
	$placeHolderscomisionamiento["Spanish"]["id"] = "";
	$fieldLabelscomisionamiento["Spanish"]["id_funcionario"] = "Funcionario";
	$fieldToolTipscomisionamiento["Spanish"]["id_funcionario"] = "";
	$placeHolderscomisionamiento["Spanish"]["id_funcionario"] = "";
	$fieldLabelscomisionamiento["Spanish"]["per_nombre"] = "Per Nombre";
	$fieldToolTipscomisionamiento["Spanish"]["per_nombre"] = "";
	$placeHolderscomisionamiento["Spanish"]["per_nombre"] = "";
	$fieldLabelscomisionamiento["Spanish"]["per_apellido"] = "Per Apellido";
	$fieldToolTipscomisionamiento["Spanish"]["per_apellido"] = "";
	$placeHolderscomisionamiento["Spanish"]["per_apellido"] = "";
	$fieldLabelscomisionamiento["Spanish"]["per_ci"] = "Cédula de identidad";
	$fieldToolTipscomisionamiento["Spanish"]["per_ci"] = "";
	$placeHolderscomisionamiento["Spanish"]["per_ci"] = "Ingrese número de Documento";
	$fieldLabelscomisionamiento["Spanish"]["tipo_vinculacion"] = "Tipo de Vinculación";
	$fieldToolTipscomisionamiento["Spanish"]["tipo_vinculacion"] = "";
	$placeHolderscomisionamiento["Spanish"]["tipo_vinculacion"] = "";
	$fieldLabelscomisionamiento["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipscomisionamiento["Spanish"]["nombre_completo"] = "";
	$placeHolderscomisionamiento["Spanish"]["nombre_completo"] = "";
	$fieldLabelscomisionamiento["Spanish"]["dependencia_id"] = "Dependencia";
	$fieldToolTipscomisionamiento["Spanish"]["dependencia_id"] = "";
	$placeHolderscomisionamiento["Spanish"]["dependencia_id"] = "";
	$fieldLabelscomisionamiento["Spanish"]["fecha_desde"] = "Fecha desde";
	$fieldToolTipscomisionamiento["Spanish"]["fecha_desde"] = "Seleccione el día en que inicia el permiso.";
	$placeHolderscomisionamiento["Spanish"]["fecha_desde"] = "";
	$fieldLabelscomisionamiento["Spanish"]["hora_desde"] = "🕒 Hora de inicio";
	$fieldToolTipscomisionamiento["Spanish"]["hora_desde"] = "Seleccione la hora en que inicia el permiso.";
	$placeHolderscomisionamiento["Spanish"]["hora_desde"] = "";
	$fieldLabelscomisionamiento["Spanish"]["fecha_hasta"] = "Fecha hasta";
	$fieldToolTipscomisionamiento["Spanish"]["fecha_hasta"] = "Seleccione el último día del permiso.";
	$placeHolderscomisionamiento["Spanish"]["fecha_hasta"] = "";
	$fieldLabelscomisionamiento["Spanish"]["hora_hasta"] = "🕒 Hora de fin";
	$fieldToolTipscomisionamiento["Spanish"]["hora_hasta"] = "Seleccione la hora de finalización del permiso.";
	$placeHolderscomisionamiento["Spanish"]["hora_hasta"] = "";
	$fieldLabelscomisionamiento["Spanish"]["motivo_id"] = "Tipo de permiso o justificación";
	$fieldToolTipscomisionamiento["Spanish"]["motivo_id"] = "Indique el motivo por el cual solicita el permiso.";
	$placeHolderscomisionamiento["Spanish"]["motivo_id"] = "Seleccione el motivo de su solicitud";
	$fieldLabelscomisionamiento["Spanish"]["comision_servicios"] = "¿Es comisión de servicios?";
	$fieldToolTipscomisionamiento["Spanish"]["comision_servicios"] = "";
	$placeHolderscomisionamiento["Spanish"]["comision_servicios"] = "";
	$fieldLabelscomisionamiento["Spanish"]["comision_servicios_descripcion"] = "Descripción de la comisión de servicios";
	$fieldToolTipscomisionamiento["Spanish"]["comision_servicios_descripcion"] = "";
	$placeHolderscomisionamiento["Spanish"]["comision_servicios_descripcion"] = "";
	$fieldLabelscomisionamiento["Spanish"]["observacion"] = "Observaciones adicionales";
	$fieldToolTipscomisionamiento["Spanish"]["observacion"] = "";
	$placeHolderscomisionamiento["Spanish"]["observacion"] = "";
	$fieldLabelscomisionamiento["Spanish"]["estado"] = "Estado";
	$fieldToolTipscomisionamiento["Spanish"]["estado"] = "";
	$placeHolderscomisionamiento["Spanish"]["estado"] = "";
	$fieldLabelscomisionamiento["Spanish"]["archivo_adjunto"] = "📎 Adjuntar respaldo (opcional)";
	$fieldToolTipscomisionamiento["Spanish"]["archivo_adjunto"] = "";
	$placeHolderscomisionamiento["Spanish"]["archivo_adjunto"] = "";
	$fieldLabelscomisionamiento["Spanish"]["email_jefe"] = "📧  Correo electrónico del superior inmediato";
	$fieldToolTipscomisionamiento["Spanish"]["email_jefe"] = "";
	$placeHolderscomisionamiento["Spanish"]["email_jefe"] = "correo@mtess.gov.py";
	$fieldLabelscomisionamiento["Spanish"]["descripcion_dependencia"] = "Dependencia";
	$fieldToolTipscomisionamiento["Spanish"]["descripcion_dependencia"] = "";
	$placeHolderscomisionamiento["Spanish"]["descripcion_dependencia"] = "";
	$fieldLabelscomisionamiento["Spanish"]["descripcion_tipo_vinculacion"] = "Tipo de Vinculación";
	$fieldToolTipscomisionamiento["Spanish"]["descripcion_tipo_vinculacion"] = "";
	$placeHolderscomisionamiento["Spanish"]["descripcion_tipo_vinculacion"] = "";
	$fieldLabelscomisionamiento["Spanish"]["solicitado_por"] = "Solicitado Por";
	$fieldToolTipscomisionamiento["Spanish"]["solicitado_por"] = "";
	$placeHolderscomisionamiento["Spanish"]["solicitado_por"] = "";
	$fieldLabelscomisionamiento["Spanish"]["fecha_solicitud"] = "Fecha de la Solicitud";
	$fieldToolTipscomisionamiento["Spanish"]["fecha_solicitud"] = "";
	$placeHolderscomisionamiento["Spanish"]["fecha_solicitud"] = "";
	$fieldLabelscomisionamiento["Spanish"]["email_jefe_id"] = "Email Jefe Id";
	$fieldToolTipscomisionamiento["Spanish"]["email_jefe_id"] = "";
	$placeHolderscomisionamiento["Spanish"]["email_jefe_id"] = "";
	$fieldLabelscomisionamiento["Spanish"]["resultado_decision"] = "👨‍💼 Aprobación del jefe inmediato";
	$fieldToolTipscomisionamiento["Spanish"]["resultado_decision"] = "";
	$placeHolderscomisionamiento["Spanish"]["resultado_decision"] = "";
	$fieldLabelscomisionamiento["Spanish"]["horas_compensar"] = "⏱ Horas a compensar";
	$fieldToolTipscomisionamiento["Spanish"]["horas_compensar"] = "";
	$placeHolderscomisionamiento["Spanish"]["horas_compensar"] = "";
	$fieldLabelscomisionamiento["Spanish"]["nombre_completo_edit"] = "Nombre Completo";
	$fieldToolTipscomisionamiento["Spanish"]["nombre_completo_edit"] = "";
	$placeHolderscomisionamiento["Spanish"]["nombre_completo_edit"] = "";
	$fieldLabelscomisionamiento["Spanish"]["descripcion_dependencia_edit"] = "Descripcion Dependencia Edit";
	$fieldToolTipscomisionamiento["Spanish"]["descripcion_dependencia_edit"] = "";
	$placeHolderscomisionamiento["Spanish"]["descripcion_dependencia_edit"] = "";
	$fieldLabelscomisionamiento["Spanish"]["rrhh_resultado_decision"] = "🏢 Aprobación de Recursos Humanos";
	$fieldToolTipscomisionamiento["Spanish"]["rrhh_resultado_decision"] = "";
	$placeHolderscomisionamiento["Spanish"]["rrhh_resultado_decision"] = "";
	$fieldLabelscomisionamiento["Spanish"]["rrhh_motivo_rechazo"] = "Motivo de Rechazo(RRHH)";
	$fieldToolTipscomisionamiento["Spanish"]["rrhh_motivo_rechazo"] = "";
	$placeHolderscomisionamiento["Spanish"]["rrhh_motivo_rechazo"] = "";
	$fieldLabelscomisionamiento["Spanish"]["antiguedad_laboral"] = "Antiguedad Laboral";
	$fieldToolTipscomisionamiento["Spanish"]["antiguedad_laboral"] = "";
	$placeHolderscomisionamiento["Spanish"]["antiguedad_laboral"] = "";
	$fieldLabelscomisionamiento["Spanish"]["car_descri"] = "Cargo Actual";
	$fieldToolTipscomisionamiento["Spanish"]["car_descri"] = "";
	$placeHolderscomisionamiento["Spanish"]["car_descri"] = "";
	$fieldLabelscomisionamiento["Spanish"]["sed_descripcion"] = "Sede Laboral";
	$fieldToolTipscomisionamiento["Spanish"]["sed_descripcion"] = "";
	$placeHolderscomisionamiento["Spanish"]["sed_descripcion"] = "";
	$fieldLabelscomisionamiento["Spanish"]["cantidad_dias_permiso"] = "";
	$fieldToolTipscomisionamiento["Spanish"]["cantidad_dias_permiso"] = "";
	$placeHolderscomisionamiento["Spanish"]["cantidad_dias_permiso"] = "";
	$fieldLabelscomisionamiento["Spanish"]["cantidad_permisos_mes"] = "Cantidad de permisos solicitados en el mes";
	$fieldToolTipscomisionamiento["Spanish"]["cantidad_permisos_mes"] = "";
	$placeHolderscomisionamiento["Spanish"]["cantidad_permisos_mes"] = "";
	$fieldLabelscomisionamiento["Spanish"]["fecha_decision"] = "Fecha de Aprobación del jefe";
	$fieldToolTipscomisionamiento["Spanish"]["fecha_decision"] = "";
	$placeHolderscomisionamiento["Spanish"]["fecha_decision"] = "";
	$fieldLabelscomisionamiento["Spanish"]["rrhh_fecha_decision"] = "Fecha de Aprobación RRHH";
	$fieldToolTipscomisionamiento["Spanish"]["rrhh_fecha_decision"] = "";
	$placeHolderscomisionamiento["Spanish"]["rrhh_fecha_decision"] = "";
	if (count($fieldToolTipscomisionamiento["Spanish"]))
		$tdatacomisionamiento[".isUseToolTips"] = true;
}


	$tdatacomisionamiento[".NCSearch"] = true;



$tdatacomisionamiento[".shortTableName"] = "comisionamiento";
$tdatacomisionamiento[".nSecOptions"] = 0;

$tdatacomisionamiento[".mainTableOwnerID"] = "id_funcionario";
$tdatacomisionamiento[".entityType"] = 1;
$tdatacomisionamiento[".connId"] = "dbtalentos_at_192_168_123_51";


$tdatacomisionamiento[".strOriginalTableName"] = "rrhh_permisos.permisos_funcionarios";

	



$tdatacomisionamiento[".showAddInPopup"] = false;

$tdatacomisionamiento[".showEditInPopup"] = false;

$tdatacomisionamiento[".showViewInPopup"] = false;

$tdatacomisionamiento[".listAjax"] = false;
//	temporary
//$tdatacomisionamiento[".listAjax"] = false;

	$tdatacomisionamiento[".audit"] = false;

	$tdatacomisionamiento[".locking"] = false;


$pages = $tdatacomisionamiento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacomisionamiento[".edit"] = true;
	$tdatacomisionamiento[".afterEditAction"] = 1;
	$tdatacomisionamiento[".closePopupAfterEdit"] = 1;
	$tdatacomisionamiento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacomisionamiento[".add"] = true;
$tdatacomisionamiento[".afterAddAction"] = 1;
$tdatacomisionamiento[".closePopupAfterAdd"] = 1;
$tdatacomisionamiento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacomisionamiento[".list"] = true;
}



$tdatacomisionamiento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacomisionamiento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacomisionamiento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacomisionamiento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacomisionamiento[".printFriendly"] = true;
}



$tdatacomisionamiento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacomisionamiento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacomisionamiento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacomisionamiento[".isUseAjaxSuggest"] = true;



						

$tdatacomisionamiento[".ajaxCodeSnippetAdded"] = false;

$tdatacomisionamiento[".buttonsAdded"] = false;

$tdatacomisionamiento[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacomisionamiento[".isUseTimeForSearch"] = true;


$tdatacomisionamiento[".badgeColor"] = "EDCA00";


$tdatacomisionamiento[".allSearchFields"] = array();
$tdatacomisionamiento[".filterFields"] = array();
$tdatacomisionamiento[".requiredSearchFields"] = array();

$tdatacomisionamiento[".googleLikeFields"] = array();
$tdatacomisionamiento[".googleLikeFields"][] = "id";
$tdatacomisionamiento[".googleLikeFields"][] = "id_funcionario";
$tdatacomisionamiento[".googleLikeFields"][] = "per_nombre";
$tdatacomisionamiento[".googleLikeFields"][] = "per_apellido";
$tdatacomisionamiento[".googleLikeFields"][] = "nombre_completo";
$tdatacomisionamiento[".googleLikeFields"][] = "per_ci";
$tdatacomisionamiento[".googleLikeFields"][] = "tipo_vinculacion";
$tdatacomisionamiento[".googleLikeFields"][] = "dependencia_id";
$tdatacomisionamiento[".googleLikeFields"][] = "fecha_desde";
$tdatacomisionamiento[".googleLikeFields"][] = "hora_desde";
$tdatacomisionamiento[".googleLikeFields"][] = "fecha_hasta";
$tdatacomisionamiento[".googleLikeFields"][] = "hora_hasta";
$tdatacomisionamiento[".googleLikeFields"][] = "motivo_id";
$tdatacomisionamiento[".googleLikeFields"][] = "comision_servicios";
$tdatacomisionamiento[".googleLikeFields"][] = "comision_servicios_descripcion";
$tdatacomisionamiento[".googleLikeFields"][] = "observacion";
$tdatacomisionamiento[".googleLikeFields"][] = "estado";
$tdatacomisionamiento[".googleLikeFields"][] = "archivo_adjunto";
$tdatacomisionamiento[".googleLikeFields"][] = "email_jefe";
$tdatacomisionamiento[".googleLikeFields"][] = "descripcion_dependencia";
$tdatacomisionamiento[".googleLikeFields"][] = "descripcion_tipo_vinculacion";
$tdatacomisionamiento[".googleLikeFields"][] = "solicitado_por";
$tdatacomisionamiento[".googleLikeFields"][] = "fecha_solicitud";
$tdatacomisionamiento[".googleLikeFields"][] = "email_jefe_id";
$tdatacomisionamiento[".googleLikeFields"][] = "resultado_decision";
$tdatacomisionamiento[".googleLikeFields"][] = "horas_compensar";
$tdatacomisionamiento[".googleLikeFields"][] = "nombre_completo_edit";
$tdatacomisionamiento[".googleLikeFields"][] = "descripcion_dependencia_edit";
$tdatacomisionamiento[".googleLikeFields"][] = "rrhh_resultado_decision";
$tdatacomisionamiento[".googleLikeFields"][] = "rrhh_motivo_rechazo";
$tdatacomisionamiento[".googleLikeFields"][] = "antiguedad_laboral";
$tdatacomisionamiento[".googleLikeFields"][] = "car_descri";
$tdatacomisionamiento[".googleLikeFields"][] = "sed_descripcion";
$tdatacomisionamiento[".googleLikeFields"][] = "cantidad_permisos_mes";
$tdatacomisionamiento[".googleLikeFields"][] = "cantidad_dias_permiso";
$tdatacomisionamiento[".googleLikeFields"][] = "fecha_decision";
$tdatacomisionamiento[".googleLikeFields"][] = "rrhh_fecha_decision";



$tdatacomisionamiento[".tableType"] = "list";

$tdatacomisionamiento[".printerPageOrientation"] = 0;
$tdatacomisionamiento[".nPrinterPageScale"] = 100;

$tdatacomisionamiento[".nPrinterSplitRecords"] = 40;

$tdatacomisionamiento[".geocodingEnabled"] = false;










$tdatacomisionamiento[".pageSize"] = 20;

$tdatacomisionamiento[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY pf.id DESC";
$tdatacomisionamiento[".strOrderBy"] = $tstrOrderBy;

$tdatacomisionamiento[".orderindexes"] = array();
			$tdatacomisionamiento[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "pf.id");


$tdatacomisionamiento[".sqlHead"] = "SELECT pf.id,  pf.id_funcionario,  p.per_nombre,  p.per_apellido,  p.per_nombre || ' ' || p.per_apellido AS nombre_completo,  p.per_ci,  pf.tipo_vinculacion,  pf.dependencia_id,  pf.fecha_desde,  pf.hora_desde,  pf.fecha_hasta,  pf.hora_hasta,  pf.motivo_id,  pf.comision_servicios,  pf.comision_servicios_descripcion,  pf.observacion,  pf.estado,  pf.archivo_adjunto,  '' AS email_jefe,  '' AS descripcion_dependencia,  '' AS descripcion_tipo_vinculacion,  pf.solicitado_por,  pf.fecha_solicitud,  '' AS email_jefe_id,  pf.resultado_decision,  pf.horas_compensar,  '' AS nombre_completo_edit,  '' AS descripcion_dependencia_edit,  pf.rrhh_resultado_decision,  pf.rrhh_motivo_rechazo,  '' AS antiguedad_laboral,  '' AS car_descri,  '' AS sed_descripcion,  '' AS cantidad_permisos_mes,  '' AS cantidad_dias_permiso,  pf.fecha_decision,  pf.rrhh_fecha_decision";
$tdatacomisionamiento[".sqlFrom"] = "FROM rrhh_permisos.permisos_funcionarios AS pf  LEFT OUTER JOIN \"public\".personales AS p ON pf.id_funcionario = p.per_cod";
$tdatacomisionamiento[".sqlWhereExpr"] = "";
$tdatacomisionamiento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacomisionamiento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacomisionamiento[".arrGroupsPerPage"] = $arrGPP;

$tdatacomisionamiento[".highlightSearchResults"] = true;

$tableKeyscomisionamiento = array();
$tableKeyscomisionamiento[] = "id";
$tdatacomisionamiento[".Keys"] = $tableKeyscomisionamiento;


$tdatacomisionamiento[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","id");
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


	$tdatacomisionamiento["id"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "id";
//	id_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_funcionario";
	$fdata["GoodName"] = "id_funcionario";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","id_funcionario");
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


	$tdatacomisionamiento["id_funcionario"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "id_funcionario";
//	per_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "per_nombre";
	$fdata["GoodName"] = "per_nombre";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("comisionamiento","per_nombre");
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


	$tdatacomisionamiento["per_nombre"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "per_nombre";
//	per_apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "per_apellido";
	$fdata["GoodName"] = "per_apellido";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("comisionamiento","per_apellido");
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


	$tdatacomisionamiento["per_apellido"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "per_apellido";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("comisionamiento","nombre_completo");
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


	$tdatacomisionamiento["nombre_completo"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "nombre_completo";
//	per_ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "per_ci";
	$fdata["GoodName"] = "per_ci";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("comisionamiento","per_ci");
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


	$tdatacomisionamiento["per_ci"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "per_ci";
//	tipo_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tipo_vinculacion";
	$fdata["GoodName"] = "tipo_vinculacion";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","tipo_vinculacion");
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


	$tdatacomisionamiento["tipo_vinculacion"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "tipo_vinculacion";
//	dependencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dependencia_id";
	$fdata["GoodName"] = "dependencia_id";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","dependencia_id");
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


	$tdatacomisionamiento["dependencia_id"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "dependencia_id";
//	fecha_desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fecha_desde";
	$fdata["GoodName"] = "fecha_desde";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","fecha_desde");
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


	$tdatacomisionamiento["fecha_desde"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "fecha_desde";
//	hora_desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "hora_desde";
	$fdata["GoodName"] = "hora_desde";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","hora_desde");
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


	$tdatacomisionamiento["hora_desde"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "hora_desde";
//	fecha_hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fecha_hasta";
	$fdata["GoodName"] = "fecha_hasta";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","fecha_hasta");
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


	$tdatacomisionamiento["fecha_hasta"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "fecha_hasta";
//	hora_hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "hora_hasta";
	$fdata["GoodName"] = "hora_hasta";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","hora_hasta");
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


	$tdatacomisionamiento["hora_hasta"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "hora_hasta";
//	motivo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "motivo_id";
	$fdata["GoodName"] = "motivo_id";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","motivo_id");
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


	$tdatacomisionamiento["motivo_id"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "motivo_id";
//	comision_servicios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "comision_servicios";
	$fdata["GoodName"] = "comision_servicios";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","comision_servicios");
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


	$tdatacomisionamiento["comision_servicios"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "comision_servicios";
//	comision_servicios_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "comision_servicios_descripcion";
	$fdata["GoodName"] = "comision_servicios_descripcion";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","comision_servicios_descripcion");
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


	$tdatacomisionamiento["comision_servicios_descripcion"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "comision_servicios_descripcion";
//	observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "observacion";
	$fdata["GoodName"] = "observacion";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","observacion");
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


	$tdatacomisionamiento["observacion"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "observacion";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","estado");
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


	$tdatacomisionamiento["estado"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "estado";
//	archivo_adjunto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "archivo_adjunto";
	$fdata["GoodName"] = "archivo_adjunto";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","archivo_adjunto");
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


	$tdatacomisionamiento["archivo_adjunto"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "archivo_adjunto";
//	email_jefe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "email_jefe";
	$fdata["GoodName"] = "email_jefe";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("comisionamiento","email_jefe");
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


	$tdatacomisionamiento["email_jefe"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "email_jefe";
//	descripcion_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "descripcion_dependencia";
	$fdata["GoodName"] = "descripcion_dependencia";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("comisionamiento","descripcion_dependencia");
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


	$tdatacomisionamiento["descripcion_dependencia"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "descripcion_dependencia";
//	descripcion_tipo_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "descripcion_tipo_vinculacion";
	$fdata["GoodName"] = "descripcion_tipo_vinculacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("comisionamiento","descripcion_tipo_vinculacion");
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


	$tdatacomisionamiento["descripcion_tipo_vinculacion"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "descripcion_tipo_vinculacion";
//	solicitado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "solicitado_por";
	$fdata["GoodName"] = "solicitado_por";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","solicitado_por");
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


	$tdatacomisionamiento["solicitado_por"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "solicitado_por";
//	fecha_solicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "fecha_solicitud";
	$fdata["GoodName"] = "fecha_solicitud";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","fecha_solicitud");
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


	$tdatacomisionamiento["fecha_solicitud"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "fecha_solicitud";
//	email_jefe_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "email_jefe_id";
	$fdata["GoodName"] = "email_jefe_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("comisionamiento","email_jefe_id");
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


	$tdatacomisionamiento["email_jefe_id"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "email_jefe_id";
//	resultado_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "resultado_decision";
	$fdata["GoodName"] = "resultado_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","resultado_decision");
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


	$tdatacomisionamiento["resultado_decision"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "resultado_decision";
//	horas_compensar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "horas_compensar";
	$fdata["GoodName"] = "horas_compensar";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","horas_compensar");
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


	$tdatacomisionamiento["horas_compensar"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "horas_compensar";
//	nombre_completo_edit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "nombre_completo_edit";
	$fdata["GoodName"] = "nombre_completo_edit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("comisionamiento","nombre_completo_edit");
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


	$tdatacomisionamiento["nombre_completo_edit"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "nombre_completo_edit";
//	descripcion_dependencia_edit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "descripcion_dependencia_edit";
	$fdata["GoodName"] = "descripcion_dependencia_edit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("comisionamiento","descripcion_dependencia_edit");
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


	$tdatacomisionamiento["descripcion_dependencia_edit"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "descripcion_dependencia_edit";
//	rrhh_resultado_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "rrhh_resultado_decision";
	$fdata["GoodName"] = "rrhh_resultado_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","rrhh_resultado_decision");
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


	$tdatacomisionamiento["rrhh_resultado_decision"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "rrhh_resultado_decision";
//	rrhh_motivo_rechazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "rrhh_motivo_rechazo";
	$fdata["GoodName"] = "rrhh_motivo_rechazo";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","rrhh_motivo_rechazo");
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


	$tdatacomisionamiento["rrhh_motivo_rechazo"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "rrhh_motivo_rechazo";
//	antiguedad_laboral
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "antiguedad_laboral";
	$fdata["GoodName"] = "antiguedad_laboral";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("comisionamiento","antiguedad_laboral");
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


	$tdatacomisionamiento["antiguedad_laboral"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "antiguedad_laboral";
//	car_descri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "car_descri";
	$fdata["GoodName"] = "car_descri";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("comisionamiento","car_descri");
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


	$tdatacomisionamiento["car_descri"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "car_descri";
//	sed_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "sed_descripcion";
	$fdata["GoodName"] = "sed_descripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("comisionamiento","sed_descripcion");
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


	$tdatacomisionamiento["sed_descripcion"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "sed_descripcion";
//	cantidad_permisos_mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "cantidad_permisos_mes";
	$fdata["GoodName"] = "cantidad_permisos_mes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("comisionamiento","cantidad_permisos_mes");
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


	$tdatacomisionamiento["cantidad_permisos_mes"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "cantidad_permisos_mes";
//	cantidad_dias_permiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "cantidad_dias_permiso";
	$fdata["GoodName"] = "cantidad_dias_permiso";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("comisionamiento","cantidad_dias_permiso");
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


	$tdatacomisionamiento["cantidad_dias_permiso"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "cantidad_dias_permiso";
//	fecha_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "fecha_decision";
	$fdata["GoodName"] = "fecha_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","fecha_decision");
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


	$tdatacomisionamiento["fecha_decision"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "fecha_decision";
//	rrhh_fecha_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "rrhh_fecha_decision";
	$fdata["GoodName"] = "rrhh_fecha_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("comisionamiento","rrhh_fecha_decision");
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


	$tdatacomisionamiento["rrhh_fecha_decision"] = $fdata;
		$tdatacomisionamiento[".searchableFields"][] = "rrhh_fecha_decision";


$tables_data["comisionamiento"]=&$tdatacomisionamiento;
$field_labels["comisionamiento"] = &$fieldLabelscomisionamiento;
$fieldToolTips["comisionamiento"] = &$fieldToolTipscomisionamiento;
$placeHolders["comisionamiento"] = &$placeHolderscomisionamiento;
$page_titles["comisionamiento"] = &$pageTitlescomisionamiento;


changeTextControlsToDate( "comisionamiento" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["comisionamiento"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["comisionamiento"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_comisionamiento()
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
	"m_srcTableName" => "comisionamiento"
));

$proto6["m_sql"] = "pf.id";
$proto6["m_srcTableName"] = "comisionamiento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_funcionario",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto8["m_sql"] = "pf.id_funcionario";
$proto8["m_srcTableName"] = "comisionamiento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "per_nombre",
	"m_strTable" => "p",
	"m_srcTableName" => "comisionamiento"
));

$proto10["m_sql"] = "p.per_nombre";
$proto10["m_srcTableName"] = "comisionamiento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "per_apellido",
	"m_strTable" => "p",
	"m_srcTableName" => "comisionamiento"
));

$proto12["m_sql"] = "p.per_apellido";
$proto12["m_srcTableName"] = "comisionamiento";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "p.per_nombre || ' ' || p.per_apellido"
));

$proto14["m_sql"] = "p.per_nombre || ' ' || p.per_apellido";
$proto14["m_srcTableName"] = "comisionamiento";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "nombre_completo";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "per_ci",
	"m_strTable" => "p",
	"m_srcTableName" => "comisionamiento"
));

$proto16["m_sql"] = "p.per_ci";
$proto16["m_srcTableName"] = "comisionamiento";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_vinculacion",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto18["m_sql"] = "pf.tipo_vinculacion";
$proto18["m_srcTableName"] = "comisionamiento";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencia_id",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto20["m_sql"] = "pf.dependencia_id";
$proto20["m_srcTableName"] = "comisionamiento";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_desde",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto22["m_sql"] = "pf.fecha_desde";
$proto22["m_srcTableName"] = "comisionamiento";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_desde",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto24["m_sql"] = "pf.hora_desde";
$proto24["m_srcTableName"] = "comisionamiento";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hasta",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto26["m_sql"] = "pf.fecha_hasta";
$proto26["m_srcTableName"] = "comisionamiento";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_hasta",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto28["m_sql"] = "pf.hora_hasta";
$proto28["m_srcTableName"] = "comisionamiento";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "motivo_id",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto30["m_sql"] = "pf.motivo_id";
$proto30["m_srcTableName"] = "comisionamiento";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "comision_servicios",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto32["m_sql"] = "pf.comision_servicios";
$proto32["m_srcTableName"] = "comisionamiento";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "comision_servicios_descripcion",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto34["m_sql"] = "pf.comision_servicios_descripcion";
$proto34["m_srcTableName"] = "comisionamiento";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "observacion",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto36["m_sql"] = "pf.observacion";
$proto36["m_srcTableName"] = "comisionamiento";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto38["m_sql"] = "pf.estado";
$proto38["m_srcTableName"] = "comisionamiento";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "archivo_adjunto",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto40["m_sql"] = "pf.archivo_adjunto";
$proto40["m_srcTableName"] = "comisionamiento";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto42["m_sql"] = "''";
$proto42["m_srcTableName"] = "comisionamiento";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "email_jefe";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto44["m_sql"] = "''";
$proto44["m_srcTableName"] = "comisionamiento";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "descripcion_dependencia";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto46["m_sql"] = "''";
$proto46["m_srcTableName"] = "comisionamiento";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "descripcion_tipo_vinculacion";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "solicitado_por",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto48["m_sql"] = "pf.solicitado_por";
$proto48["m_srcTableName"] = "comisionamiento";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_solicitud",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto50["m_sql"] = "pf.fecha_solicitud";
$proto50["m_srcTableName"] = "comisionamiento";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto52["m_sql"] = "''";
$proto52["m_srcTableName"] = "comisionamiento";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "email_jefe_id";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "resultado_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto54["m_sql"] = "pf.resultado_decision";
$proto54["m_srcTableName"] = "comisionamiento";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "horas_compensar",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto56["m_sql"] = "pf.horas_compensar";
$proto56["m_srcTableName"] = "comisionamiento";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto58["m_sql"] = "''";
$proto58["m_srcTableName"] = "comisionamiento";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "nombre_completo_edit";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto60["m_sql"] = "''";
$proto60["m_srcTableName"] = "comisionamiento";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "descripcion_dependencia_edit";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "rrhh_resultado_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto62["m_sql"] = "pf.rrhh_resultado_decision";
$proto62["m_srcTableName"] = "comisionamiento";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "rrhh_motivo_rechazo",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto64["m_sql"] = "pf.rrhh_motivo_rechazo";
$proto64["m_srcTableName"] = "comisionamiento";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto66["m_sql"] = "''";
$proto66["m_srcTableName"] = "comisionamiento";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "antiguedad_laboral";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto68["m_sql"] = "''";
$proto68["m_srcTableName"] = "comisionamiento";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "car_descri";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto70["m_sql"] = "''";
$proto70["m_srcTableName"] = "comisionamiento";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "sed_descripcion";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto72["m_sql"] = "''";
$proto72["m_srcTableName"] = "comisionamiento";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "cantidad_permisos_mes";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto74["m_sql"] = "''";
$proto74["m_srcTableName"] = "comisionamiento";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "cantidad_dias_permiso";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto76["m_sql"] = "pf.fecha_decision";
$proto76["m_srcTableName"] = "comisionamiento";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "rrhh_fecha_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "comisionamiento"
));

$proto78["m_sql"] = "pf.rrhh_fecha_decision";
$proto78["m_srcTableName"] = "comisionamiento";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto80=array();
$proto80["m_link"] = "SQLL_MAIN";
			$proto81=array();
$proto81["m_strName"] = "rrhh_permisos.permisos_funcionarios";
$proto81["m_srcTableName"] = "comisionamiento";
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
$proto81["m_columns"][] = "intentos_correccion";
$obj = new SQLTable($proto81);

$proto80["m_table"] = $obj;
$proto80["m_sql"] = "rrhh_permisos.permisos_funcionarios AS pf";
$proto80["m_alias"] = "pf";
$proto80["m_srcTableName"] = "comisionamiento";
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
$proto85["m_srcTableName"] = "comisionamiento";
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
$proto84["m_srcTableName"] = "comisionamiento";
$proto86=array();
$proto86["m_sql"] = "p.per_cod = pf.id_funcionario";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "per_cod",
	"m_strTable" => "p",
	"m_srcTableName" => "comisionamiento"
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
	"m_srcTableName" => "comisionamiento"
));

$proto88["m_column"]=$obj;
$proto88["m_bAsc"] = 0;
$proto88["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto88);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="comisionamiento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_comisionamiento = createSqlQuery_comisionamiento();


	
		;

																																					

$tdatacomisionamiento[".sqlquery"] = $queryData_comisionamiento;



include_once(getabspath("include/comisionamiento_events.php"));
$tdatacomisionamiento[".hasEvents"] = true;

?>