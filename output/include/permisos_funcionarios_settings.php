<?php
$tdatapermisos_funcionarios = array();
$tdatapermisos_funcionarios[".searchableFields"] = array();
$tdatapermisos_funcionarios[".ShortName"] = "permisos_funcionarios";
$tdatapermisos_funcionarios[".OwnerID"] = "id_funcionario";
$tdatapermisos_funcionarios[".OriginalTable"] = "rrhh_permisos.permisos_funcionarios";


$tdatapermisos_funcionarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapermisos_funcionarios[".originalPagesByType"] = $tdatapermisos_funcionarios[".pagesByType"];
$tdatapermisos_funcionarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapermisos_funcionarios[".originalPages"] = $tdatapermisos_funcionarios[".pages"];
$tdatapermisos_funcionarios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapermisos_funcionarios[".originalDefaultPages"] = $tdatapermisos_funcionarios[".defaultPages"];

//	field labels
$fieldLabelspermisos_funcionarios = array();
$fieldToolTipspermisos_funcionarios = array();
$pageTitlespermisos_funcionarios = array();
$placeHolderspermisos_funcionarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspermisos_funcionarios["Spanish"] = array();
	$fieldToolTipspermisos_funcionarios["Spanish"] = array();
	$placeHolderspermisos_funcionarios["Spanish"] = array();
	$pageTitlespermisos_funcionarios["Spanish"] = array();
	$fieldLabelspermisos_funcionarios["Spanish"]["id"] = "ID";
	$fieldToolTipspermisos_funcionarios["Spanish"]["id"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["id"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["id_funcionario"] = "Funcionario";
	$fieldToolTipspermisos_funcionarios["Spanish"]["id_funcionario"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["id_funcionario"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["per_nombre"] = "Per Nombre";
	$fieldToolTipspermisos_funcionarios["Spanish"]["per_nombre"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["per_nombre"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["per_apellido"] = "Per Apellido";
	$fieldToolTipspermisos_funcionarios["Spanish"]["per_apellido"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["per_apellido"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["per_ci"] = "🆔 Cédula de identidad";
	$fieldToolTipspermisos_funcionarios["Spanish"]["per_ci"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["per_ci"] = "Ingrese número de Documento";
	$fieldLabelspermisos_funcionarios["Spanish"]["tipo_vinculacion"] = "🔗 Tipo de Vinculación";
	$fieldToolTipspermisos_funcionarios["Spanish"]["tipo_vinculacion"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["tipo_vinculacion"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["nombre_completo"] = "🧾Nombre Completo";
	$fieldToolTipspermisos_funcionarios["Spanish"]["nombre_completo"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["nombre_completo"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["dependencia_id"] = "🏛️ Dependencia";
	$fieldToolTipspermisos_funcionarios["Spanish"]["dependencia_id"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["dependencia_id"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["fecha_desde"] = "📅 Fecha desde";
	$fieldToolTipspermisos_funcionarios["Spanish"]["fecha_desde"] = "Seleccione el día en que inicia el permiso.";
	$placeHolderspermisos_funcionarios["Spanish"]["fecha_desde"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["hora_desde"] = "🕒 Hora de inicio";
	$fieldToolTipspermisos_funcionarios["Spanish"]["hora_desde"] = "Seleccione la hora en que inicia el permiso.";
	$placeHolderspermisos_funcionarios["Spanish"]["hora_desde"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["fecha_hasta"] = "📅 Fecha hasta";
	$fieldToolTipspermisos_funcionarios["Spanish"]["fecha_hasta"] = "Seleccione el último día del permiso.";
	$placeHolderspermisos_funcionarios["Spanish"]["fecha_hasta"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["hora_hasta"] = "🕒 Hora de fin";
	$fieldToolTipspermisos_funcionarios["Spanish"]["hora_hasta"] = "Seleccione la hora de finalización del permiso.";
	$placeHolderspermisos_funcionarios["Spanish"]["hora_hasta"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["motivo_id"] = "📝 Tipo de permiso o justificación";
	$fieldToolTipspermisos_funcionarios["Spanish"]["motivo_id"] = "Indique el motivo por el cual solicita el permiso.";
	$placeHolderspermisos_funcionarios["Spanish"]["motivo_id"] = "Seleccione el motivo de su solicitud";
	$fieldLabelspermisos_funcionarios["Spanish"]["comision_servicios"] = "🧳¿Es comisión de servicios?";
	$fieldToolTipspermisos_funcionarios["Spanish"]["comision_servicios"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["comision_servicios"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["comision_servicios_descripcion"] = "📄 Descripción de la comisión de servicios";
	$fieldToolTipspermisos_funcionarios["Spanish"]["comision_servicios_descripcion"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["comision_servicios_descripcion"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["observacion"] = "💬 Observaciones adicionales";
	$fieldToolTipspermisos_funcionarios["Spanish"]["observacion"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["observacion"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["estado"] = "Estado";
	$fieldToolTipspermisos_funcionarios["Spanish"]["estado"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["estado"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["archivo_adjunto"] = "📎 Adjuntar respaldo (opcional)";
	$fieldToolTipspermisos_funcionarios["Spanish"]["archivo_adjunto"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["archivo_adjunto"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["email_jefe"] = "📧  Correo electrónico del superior inmediato";
	$fieldToolTipspermisos_funcionarios["Spanish"]["email_jefe"] = "Su solicitud será enviada automáticamente a su jefe inmediato superior. El mismo deberá revisar y aprobar o rechazar el permiso.";
	$placeHolderspermisos_funcionarios["Spanish"]["email_jefe"] = "correo@mtess.gov.py";
	$fieldLabelspermisos_funcionarios["Spanish"]["descripcion_dependencia"] = "🏛️ Dependencia";
	$fieldToolTipspermisos_funcionarios["Spanish"]["descripcion_dependencia"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["descripcion_dependencia"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["descripcion_tipo_vinculacion"] = "🔗 Tipo de Vinculación";
	$fieldToolTipspermisos_funcionarios["Spanish"]["descripcion_tipo_vinculacion"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["descripcion_tipo_vinculacion"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["solicitado_por"] = "Solicitado Por";
	$fieldToolTipspermisos_funcionarios["Spanish"]["solicitado_por"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["solicitado_por"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["fecha_solicitud"] = "📅 Fecha de la Solicitud";
	$fieldToolTipspermisos_funcionarios["Spanish"]["fecha_solicitud"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["fecha_solicitud"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["email_jefe_id"] = "Email Jefe Id";
	$fieldToolTipspermisos_funcionarios["Spanish"]["email_jefe_id"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["email_jefe_id"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["resultado_decision"] = "👨‍💼 Aprobación del jefe inmediato";
	$fieldToolTipspermisos_funcionarios["Spanish"]["resultado_decision"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["resultado_decision"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["horas_compensar"] = "⏱ Horas a compensar";
	$fieldToolTipspermisos_funcionarios["Spanish"]["horas_compensar"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["horas_compensar"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["nombre_completo_edit"] = "Nombre Completo";
	$fieldToolTipspermisos_funcionarios["Spanish"]["nombre_completo_edit"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["nombre_completo_edit"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["descripcion_dependencia_edit"] = "Descripcion Dependencia Edit";
	$fieldToolTipspermisos_funcionarios["Spanish"]["descripcion_dependencia_edit"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["descripcion_dependencia_edit"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["rrhh_resultado_decision"] = "🏢 Aprobación de Recursos Humanos";
	$fieldToolTipspermisos_funcionarios["Spanish"]["rrhh_resultado_decision"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["rrhh_resultado_decision"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["rrhh_motivo_rechazo"] = "📝 Motivo de Rechazo (RRHH)";
	$fieldToolTipspermisos_funcionarios["Spanish"]["rrhh_motivo_rechazo"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["rrhh_motivo_rechazo"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["antiguedad_laboral"] = "⏳ Antiguedad Laboral";
	$fieldToolTipspermisos_funcionarios["Spanish"]["antiguedad_laboral"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["antiguedad_laboral"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["car_descri"] = "💼 Cargo Actual";
	$fieldToolTipspermisos_funcionarios["Spanish"]["car_descri"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["car_descri"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["sed_descripcion"] = "📍 Sede Laboral";
	$fieldToolTipspermisos_funcionarios["Spanish"]["sed_descripcion"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["sed_descripcion"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["cantidad_dias_permiso"] = "";
	$fieldToolTipspermisos_funcionarios["Spanish"]["cantidad_dias_permiso"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["cantidad_dias_permiso"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["cantidad_permisos_mes"] = "📊 Cantidad de permisos solicitados en el mes";
	$fieldToolTipspermisos_funcionarios["Spanish"]["cantidad_permisos_mes"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["cantidad_permisos_mes"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["fecha_decision"] = "📅 Fecha de Aprobación del jefe";
	$fieldToolTipspermisos_funcionarios["Spanish"]["fecha_decision"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["fecha_decision"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["rrhh_fecha_decision"] = "📅 Fecha de Aprobación (RRHH)";
	$fieldToolTipspermisos_funcionarios["Spanish"]["rrhh_fecha_decision"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["rrhh_fecha_decision"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["intentos_correccion"] = "Intentos Correccion";
	$fieldToolTipspermisos_funcionarios["Spanish"]["intentos_correccion"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["intentos_correccion"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["decidido_por"] = "👨‍💼 Decidido por (Jefe)";
	$fieldToolTipspermisos_funcionarios["Spanish"]["decidido_por"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["decidido_por"] = "";
	$fieldLabelspermisos_funcionarios["Spanish"]["sex_descripcion"] = "Sex Descripcion";
	$fieldToolTipspermisos_funcionarios["Spanish"]["sex_descripcion"] = "";
	$placeHolderspermisos_funcionarios["Spanish"]["sex_descripcion"] = "";
	$pageTitlespermisos_funcionarios["Spanish"]["add"] = "FORMULARIO DE PERMISOS Y JUSTIFICACIONES";
	$pageTitlespermisos_funcionarios["Spanish"]["view"] = "SOLICIUTD DE PERMISOS Y JUSTIFICACIONES NUMERO: {%id}";
	$pageTitlespermisos_funcionarios["Spanish"]["edit"] = "FORMULARIO DE PERMISOS Y JUSTIFICACIONES, EDITAR [{%id}]";
	if (count($fieldToolTipspermisos_funcionarios["Spanish"]))
		$tdatapermisos_funcionarios[".isUseToolTips"] = true;
}


	$tdatapermisos_funcionarios[".NCSearch"] = true;



$tdatapermisos_funcionarios[".shortTableName"] = "permisos_funcionarios";
$tdatapermisos_funcionarios[".nSecOptions"] = 1;

$tdatapermisos_funcionarios[".mainTableOwnerID"] = "id_funcionario";
$tdatapermisos_funcionarios[".entityType"] = 0;
$tdatapermisos_funcionarios[".connId"] = "dbtalentos_at_192_168_123_51";


$tdatapermisos_funcionarios[".strOriginalTableName"] = "rrhh_permisos.permisos_funcionarios";

	



$tdatapermisos_funcionarios[".showAddInPopup"] = false;

$tdatapermisos_funcionarios[".showEditInPopup"] = false;

$tdatapermisos_funcionarios[".showViewInPopup"] = false;

$tdatapermisos_funcionarios[".listAjax"] = false;
//	temporary
//$tdatapermisos_funcionarios[".listAjax"] = false;

	$tdatapermisos_funcionarios[".audit"] = false;

	$tdatapermisos_funcionarios[".locking"] = false;


$pages = $tdatapermisos_funcionarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapermisos_funcionarios[".edit"] = true;
	$tdatapermisos_funcionarios[".afterEditAction"] = 1;
	$tdatapermisos_funcionarios[".closePopupAfterEdit"] = 1;
	$tdatapermisos_funcionarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapermisos_funcionarios[".add"] = true;
$tdatapermisos_funcionarios[".afterAddAction"] = 1;
$tdatapermisos_funcionarios[".closePopupAfterAdd"] = 1;
$tdatapermisos_funcionarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapermisos_funcionarios[".list"] = true;
}



$tdatapermisos_funcionarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapermisos_funcionarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapermisos_funcionarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapermisos_funcionarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapermisos_funcionarios[".printFriendly"] = true;
}



$tdatapermisos_funcionarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapermisos_funcionarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapermisos_funcionarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapermisos_funcionarios[".isUseAjaxSuggest"] = true;



						

$tdatapermisos_funcionarios[".ajaxCodeSnippetAdded"] = false;

$tdatapermisos_funcionarios[".buttonsAdded"] = false;

$tdatapermisos_funcionarios[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapermisos_funcionarios[".isUseTimeForSearch"] = true;


$tdatapermisos_funcionarios[".badgeColor"] = "D2AF80";


$tdatapermisos_funcionarios[".allSearchFields"] = array();
$tdatapermisos_funcionarios[".filterFields"] = array();
$tdatapermisos_funcionarios[".requiredSearchFields"] = array();

$tdatapermisos_funcionarios[".googleLikeFields"] = array();
$tdatapermisos_funcionarios[".googleLikeFields"][] = "id";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "id_funcionario";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "per_nombre";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "per_apellido";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "nombre_completo";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "per_ci";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "tipo_vinculacion";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "dependencia_id";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "fecha_desde";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "hora_desde";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "fecha_hasta";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "hora_hasta";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "motivo_id";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "comision_servicios";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "comision_servicios_descripcion";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "observacion";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "estado";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "archivo_adjunto";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "email_jefe";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "descripcion_dependencia";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "descripcion_tipo_vinculacion";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "solicitado_por";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "fecha_solicitud";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "email_jefe_id";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "resultado_decision";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "horas_compensar";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "nombre_completo_edit";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "descripcion_dependencia_edit";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "rrhh_resultado_decision";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "rrhh_motivo_rechazo";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "antiguedad_laboral";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "car_descri";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "sed_descripcion";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "cantidad_permisos_mes";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "cantidad_dias_permiso";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "fecha_decision";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "rrhh_fecha_decision";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "intentos_correccion";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "decidido_por";
$tdatapermisos_funcionarios[".googleLikeFields"][] = "sex_descripcion";



$tdatapermisos_funcionarios[".tableType"] = "list";

$tdatapermisos_funcionarios[".printerPageOrientation"] = 0;
$tdatapermisos_funcionarios[".nPrinterPageScale"] = 100;

$tdatapermisos_funcionarios[".nPrinterSplitRecords"] = 40;

$tdatapermisos_funcionarios[".geocodingEnabled"] = false;










$tdatapermisos_funcionarios[".pageSize"] = 20;

$tdatapermisos_funcionarios[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY pf.id DESC";
$tdatapermisos_funcionarios[".strOrderBy"] = $tstrOrderBy;

$tdatapermisos_funcionarios[".orderindexes"] = array();
			$tdatapermisos_funcionarios[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "pf.id");


$tdatapermisos_funcionarios[".sqlHead"] = "SELECT pf.id,  pf.id_funcionario,  p.per_nombre,  p.per_apellido,  p.per_nombre || ' ' || p.per_apellido AS nombre_completo,  p.per_ci,  pf.tipo_vinculacion,  pf.dependencia_id,  pf.fecha_desde,  pf.hora_desde,  pf.fecha_hasta,  pf.hora_hasta,  pf.motivo_id,  pf.comision_servicios,  pf.comision_servicios_descripcion,  pf.observacion,  pf.estado,  pf.archivo_adjunto,  '' AS email_jefe,  '' AS descripcion_dependencia,  '' AS descripcion_tipo_vinculacion,  pf.solicitado_por,  pf.fecha_solicitud,  '' AS email_jefe_id,  pf.resultado_decision,  pf.horas_compensar,  '' AS nombre_completo_edit,  '' AS descripcion_dependencia_edit,  pf.rrhh_resultado_decision,  pf.rrhh_motivo_rechazo,  '' AS antiguedad_laboral,  '' AS car_descri,  '' AS sed_descripcion,  '' AS cantidad_permisos_mes,  '' AS cantidad_dias_permiso,  pf.fecha_decision,  pf.rrhh_fecha_decision,  pf.intentos_correccion,  pf.decidido_por,  '' AS sex_descripcion";
$tdatapermisos_funcionarios[".sqlFrom"] = "FROM rrhh_permisos.permisos_funcionarios AS pf  LEFT OUTER JOIN \"public\".personales AS p ON pf.id_funcionario = p.per_cod";
$tdatapermisos_funcionarios[".sqlWhereExpr"] = "";
$tdatapermisos_funcionarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapermisos_funcionarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapermisos_funcionarios[".arrGroupsPerPage"] = $arrGPP;

$tdatapermisos_funcionarios[".highlightSearchResults"] = true;

$tableKeyspermisos_funcionarios = array();
$tableKeyspermisos_funcionarios[] = "id";
$tdatapermisos_funcionarios[".Keys"] = $tableKeyspermisos_funcionarios;


$tdatapermisos_funcionarios[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","id");
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


	$tdatapermisos_funcionarios["id"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "id";
//	id_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_funcionario";
	$fdata["GoodName"] = "id_funcionario";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","id_funcionario");
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


	$tdatapermisos_funcionarios["id_funcionario"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "id_funcionario";
//	per_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "per_nombre";
	$fdata["GoodName"] = "per_nombre";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","per_nombre");
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


	$tdatapermisos_funcionarios["per_nombre"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "per_nombre";
//	per_apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "per_apellido";
	$fdata["GoodName"] = "per_apellido";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","per_apellido");
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


	$tdatapermisos_funcionarios["per_apellido"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "per_apellido";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","nombre_completo");
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


	$tdatapermisos_funcionarios["nombre_completo"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "nombre_completo";
//	per_ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "per_ci";
	$fdata["GoodName"] = "per_ci";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","per_ci");
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


	$tdatapermisos_funcionarios["per_ci"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "per_ci";
//	tipo_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tipo_vinculacion";
	$fdata["GoodName"] = "tipo_vinculacion";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","tipo_vinculacion");
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


	$tdatapermisos_funcionarios["tipo_vinculacion"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "tipo_vinculacion";
//	dependencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dependencia_id";
	$fdata["GoodName"] = "dependencia_id";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","dependencia_id");
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


	$tdatapermisos_funcionarios["dependencia_id"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "dependencia_id";
//	fecha_desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fecha_desde";
	$fdata["GoodName"] = "fecha_desde";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","fecha_desde");
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


	$tdatapermisos_funcionarios["fecha_desde"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "fecha_desde";
//	hora_desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "hora_desde";
	$fdata["GoodName"] = "hora_desde";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","hora_desde");
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


	$tdatapermisos_funcionarios["hora_desde"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "hora_desde";
//	fecha_hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fecha_hasta";
	$fdata["GoodName"] = "fecha_hasta";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","fecha_hasta");
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


	$tdatapermisos_funcionarios["fecha_hasta"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "fecha_hasta";
//	hora_hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "hora_hasta";
	$fdata["GoodName"] = "hora_hasta";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","hora_hasta");
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


	$tdatapermisos_funcionarios["hora_hasta"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "hora_hasta";
//	motivo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "motivo_id";
	$fdata["GoodName"] = "motivo_id";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","motivo_id");
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


	
	$edata["LookupOrderBy"] = "tip_descripcion";

	
	
	
	

	
	
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


	$tdatapermisos_funcionarios["motivo_id"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "motivo_id";
//	comision_servicios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "comision_servicios";
	$fdata["GoodName"] = "comision_servicios";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","comision_servicios");
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


	$tdatapermisos_funcionarios["comision_servicios"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "comision_servicios";
//	comision_servicios_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "comision_servicios_descripcion";
	$fdata["GoodName"] = "comision_servicios_descripcion";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","comision_servicios_descripcion");
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


	$tdatapermisos_funcionarios["comision_servicios_descripcion"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "comision_servicios_descripcion";
//	observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "observacion";
	$fdata["GoodName"] = "observacion";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","observacion");
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


	$tdatapermisos_funcionarios["observacion"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "observacion";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","estado");
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


	$tdatapermisos_funcionarios["estado"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "estado";
//	archivo_adjunto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "archivo_adjunto";
	$fdata["GoodName"] = "archivo_adjunto";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","archivo_adjunto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "archivo_adjunto";

		$fdata["sourceSingle"] = "archivo_adjunto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.archivo_adjunto";

	
	
		$fdata["UploadCodeExpression"] = true;

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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("doc");
						$edata["acceptFileTypesHtml"] = ".doc";
			$edata["acceptFileTypes"][] = strtoupper("docx");
						$edata["acceptFileTypesHtml"] .= ",.docx";
			$edata["acceptFileTypes"][] = strtoupper("gif");
						$edata["acceptFileTypesHtml"] .= ",.gif";
			$edata["acceptFileTypes"][] = strtoupper("jpg");
						$edata["acceptFileTypesHtml"] .= ",.jpg";
			$edata["acceptFileTypes"][] = strtoupper("pdf");
						$edata["acceptFileTypesHtml"] .= ",.pdf";
			$edata["acceptFileTypes"][] = strtoupper("png");
						$edata["acceptFileTypesHtml"] .= ",.png";
			$edata["acceptFileTypes"][] = strtoupper("rtf");
						$edata["acceptFileTypesHtml"] .= ",.rtf";
			$edata["acceptFileTypes"][] = strtoupper("txt");
						$edata["acceptFileTypesHtml"] .= ",.txt";

		$edata["maxNumberOfFiles"] = 10;

	
	
	
	
	
	
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


	$tdatapermisos_funcionarios["archivo_adjunto"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "archivo_adjunto";
//	email_jefe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "email_jefe";
	$fdata["GoodName"] = "email_jefe";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","email_jefe");
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapermisos_funcionarios["email_jefe"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "email_jefe";
//	descripcion_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "descripcion_dependencia";
	$fdata["GoodName"] = "descripcion_dependencia";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","descripcion_dependencia");
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


	$tdatapermisos_funcionarios["descripcion_dependencia"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "descripcion_dependencia";
//	descripcion_tipo_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "descripcion_tipo_vinculacion";
	$fdata["GoodName"] = "descripcion_tipo_vinculacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","descripcion_tipo_vinculacion");
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


	$tdatapermisos_funcionarios["descripcion_tipo_vinculacion"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "descripcion_tipo_vinculacion";
//	solicitado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "solicitado_por";
	$fdata["GoodName"] = "solicitado_por";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","solicitado_por");
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


	$tdatapermisos_funcionarios["solicitado_por"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "solicitado_por";
//	fecha_solicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "fecha_solicitud";
	$fdata["GoodName"] = "fecha_solicitud";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","fecha_solicitud");
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


	$tdatapermisos_funcionarios["fecha_solicitud"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "fecha_solicitud";
//	email_jefe_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "email_jefe_id";
	$fdata["GoodName"] = "email_jefe_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","email_jefe_id");
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


	$tdatapermisos_funcionarios["email_jefe_id"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "email_jefe_id";
//	resultado_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "resultado_decision";
	$fdata["GoodName"] = "resultado_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","resultado_decision");
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


	$tdatapermisos_funcionarios["resultado_decision"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "resultado_decision";
//	horas_compensar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "horas_compensar";
	$fdata["GoodName"] = "horas_compensar";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","horas_compensar");
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


	$tdatapermisos_funcionarios["horas_compensar"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "horas_compensar";
//	nombre_completo_edit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "nombre_completo_edit";
	$fdata["GoodName"] = "nombre_completo_edit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","nombre_completo_edit");
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


	$tdatapermisos_funcionarios["nombre_completo_edit"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "nombre_completo_edit";
//	descripcion_dependencia_edit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "descripcion_dependencia_edit";
	$fdata["GoodName"] = "descripcion_dependencia_edit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","descripcion_dependencia_edit");
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


	$tdatapermisos_funcionarios["descripcion_dependencia_edit"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "descripcion_dependencia_edit";
//	rrhh_resultado_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "rrhh_resultado_decision";
	$fdata["GoodName"] = "rrhh_resultado_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","rrhh_resultado_decision");
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


	$tdatapermisos_funcionarios["rrhh_resultado_decision"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "rrhh_resultado_decision";
//	rrhh_motivo_rechazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "rrhh_motivo_rechazo";
	$fdata["GoodName"] = "rrhh_motivo_rechazo";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","rrhh_motivo_rechazo");
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


	$tdatapermisos_funcionarios["rrhh_motivo_rechazo"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "rrhh_motivo_rechazo";
//	antiguedad_laboral
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "antiguedad_laboral";
	$fdata["GoodName"] = "antiguedad_laboral";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","antiguedad_laboral");
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


	$tdatapermisos_funcionarios["antiguedad_laboral"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "antiguedad_laboral";
//	car_descri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "car_descri";
	$fdata["GoodName"] = "car_descri";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","car_descri");
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


	$tdatapermisos_funcionarios["car_descri"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "car_descri";
//	sed_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "sed_descripcion";
	$fdata["GoodName"] = "sed_descripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","sed_descripcion");
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


	$tdatapermisos_funcionarios["sed_descripcion"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "sed_descripcion";
//	cantidad_permisos_mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "cantidad_permisos_mes";
	$fdata["GoodName"] = "cantidad_permisos_mes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","cantidad_permisos_mes");
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


	$tdatapermisos_funcionarios["cantidad_permisos_mes"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "cantidad_permisos_mes";
//	cantidad_dias_permiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "cantidad_dias_permiso";
	$fdata["GoodName"] = "cantidad_dias_permiso";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","cantidad_dias_permiso");
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


	$tdatapermisos_funcionarios["cantidad_dias_permiso"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "cantidad_dias_permiso";
//	fecha_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "fecha_decision";
	$fdata["GoodName"] = "fecha_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","fecha_decision");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_decision";

		$fdata["sourceSingle"] = "fecha_decision";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.fecha_decision";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatapermisos_funcionarios["fecha_decision"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "fecha_decision";
//	rrhh_fecha_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "rrhh_fecha_decision";
	$fdata["GoodName"] = "rrhh_fecha_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","rrhh_fecha_decision");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "rrhh_fecha_decision";

		$fdata["sourceSingle"] = "rrhh_fecha_decision";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.rrhh_fecha_decision";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatapermisos_funcionarios["rrhh_fecha_decision"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "rrhh_fecha_decision";
//	intentos_correccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "intentos_correccion";
	$fdata["GoodName"] = "intentos_correccion";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","intentos_correccion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "intentos_correccion";

		$fdata["sourceSingle"] = "intentos_correccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.intentos_correccion";

	
	
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


	$tdatapermisos_funcionarios["intentos_correccion"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "intentos_correccion";
//	decidido_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "decidido_por";
	$fdata["GoodName"] = "decidido_por";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","decidido_por");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "decidido_por";

		$fdata["sourceSingle"] = "decidido_por";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.decidido_por";

	
	
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
	$edata["LookupTable"] = "public.personales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "per_cod";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "per_nombre || ' ' || per_apellido";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapermisos_funcionarios["decidido_por"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "decidido_por";
//	sex_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "sex_descripcion";
	$fdata["GoodName"] = "sex_descripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_permisos_funcionarios","sex_descripcion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "sex_descripcion";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatapermisos_funcionarios["sex_descripcion"] = $fdata;
		$tdatapermisos_funcionarios[".searchableFields"][] = "sex_descripcion";


$tables_data["rrhh_permisos.permisos_funcionarios"]=&$tdatapermisos_funcionarios;
$field_labels["rrhh_permisos_permisos_funcionarios"] = &$fieldLabelspermisos_funcionarios;
$fieldToolTips["rrhh_permisos_permisos_funcionarios"] = &$fieldToolTipspermisos_funcionarios;
$placeHolders["rrhh_permisos_permisos_funcionarios"] = &$placeHolderspermisos_funcionarios;
$page_titles["rrhh_permisos_permisos_funcionarios"] = &$pageTitlespermisos_funcionarios;


changeTextControlsToDate( "rrhh_permisos.permisos_funcionarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["rrhh_permisos.permisos_funcionarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["rrhh_permisos.permisos_funcionarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_permisos_funcionarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pf.id,  pf.id_funcionario,  p.per_nombre,  p.per_apellido,  p.per_nombre || ' ' || p.per_apellido AS nombre_completo,  p.per_ci,  pf.tipo_vinculacion,  pf.dependencia_id,  pf.fecha_desde,  pf.hora_desde,  pf.fecha_hasta,  pf.hora_hasta,  pf.motivo_id,  pf.comision_servicios,  pf.comision_servicios_descripcion,  pf.observacion,  pf.estado,  pf.archivo_adjunto,  '' AS email_jefe,  '' AS descripcion_dependencia,  '' AS descripcion_tipo_vinculacion,  pf.solicitado_por,  pf.fecha_solicitud,  '' AS email_jefe_id,  pf.resultado_decision,  pf.horas_compensar,  '' AS nombre_completo_edit,  '' AS descripcion_dependencia_edit,  pf.rrhh_resultado_decision,  pf.rrhh_motivo_rechazo,  '' AS antiguedad_laboral,  '' AS car_descri,  '' AS sed_descripcion,  '' AS cantidad_permisos_mes,  '' AS cantidad_dias_permiso,  pf.fecha_decision,  pf.rrhh_fecha_decision,  pf.intentos_correccion,  pf.decidido_por,  '' AS sex_descripcion";
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
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto6["m_sql"] = "pf.id";
$proto6["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_funcionario",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto8["m_sql"] = "pf.id_funcionario";
$proto8["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "per_nombre",
	"m_strTable" => "p",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto10["m_sql"] = "p.per_nombre";
$proto10["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "per_apellido",
	"m_strTable" => "p",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto12["m_sql"] = "p.per_apellido";
$proto12["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "p.per_nombre || ' ' || p.per_apellido"
));

$proto14["m_sql"] = "p.per_nombre || ' ' || p.per_apellido";
$proto14["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "nombre_completo";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "per_ci",
	"m_strTable" => "p",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto16["m_sql"] = "p.per_ci";
$proto16["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_vinculacion",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto18["m_sql"] = "pf.tipo_vinculacion";
$proto18["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencia_id",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto20["m_sql"] = "pf.dependencia_id";
$proto20["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_desde",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto22["m_sql"] = "pf.fecha_desde";
$proto22["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_desde",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto24["m_sql"] = "pf.hora_desde";
$proto24["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hasta",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto26["m_sql"] = "pf.fecha_hasta";
$proto26["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_hasta",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto28["m_sql"] = "pf.hora_hasta";
$proto28["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "motivo_id",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto30["m_sql"] = "pf.motivo_id";
$proto30["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "comision_servicios",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto32["m_sql"] = "pf.comision_servicios";
$proto32["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "comision_servicios_descripcion",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto34["m_sql"] = "pf.comision_servicios_descripcion";
$proto34["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "observacion",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto36["m_sql"] = "pf.observacion";
$proto36["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto38["m_sql"] = "pf.estado";
$proto38["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "archivo_adjunto",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto40["m_sql"] = "pf.archivo_adjunto";
$proto40["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto42["m_sql"] = "''";
$proto42["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "email_jefe";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto44["m_sql"] = "''";
$proto44["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "descripcion_dependencia";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto46["m_sql"] = "''";
$proto46["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "descripcion_tipo_vinculacion";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "solicitado_por",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto48["m_sql"] = "pf.solicitado_por";
$proto48["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_solicitud",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto50["m_sql"] = "pf.fecha_solicitud";
$proto50["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto52["m_sql"] = "''";
$proto52["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "email_jefe_id";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "resultado_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto54["m_sql"] = "pf.resultado_decision";
$proto54["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "horas_compensar",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto56["m_sql"] = "pf.horas_compensar";
$proto56["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto58["m_sql"] = "''";
$proto58["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "nombre_completo_edit";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto60["m_sql"] = "''";
$proto60["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "descripcion_dependencia_edit";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "rrhh_resultado_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto62["m_sql"] = "pf.rrhh_resultado_decision";
$proto62["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "rrhh_motivo_rechazo",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto64["m_sql"] = "pf.rrhh_motivo_rechazo";
$proto64["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto66["m_sql"] = "''";
$proto66["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "antiguedad_laboral";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto68["m_sql"] = "''";
$proto68["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "car_descri";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto70["m_sql"] = "''";
$proto70["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "sed_descripcion";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto72["m_sql"] = "''";
$proto72["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "cantidad_permisos_mes";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto74["m_sql"] = "''";
$proto74["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "cantidad_dias_permiso";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto76["m_sql"] = "pf.fecha_decision";
$proto76["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "rrhh_fecha_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto78["m_sql"] = "pf.rrhh_fecha_decision";
$proto78["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "intentos_correccion",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto80["m_sql"] = "pf.intentos_correccion";
$proto80["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "decidido_por",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto82["m_sql"] = "pf.decidido_por";
$proto82["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto84["m_sql"] = "''";
$proto84["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "sex_descripcion";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto86=array();
$proto86["m_link"] = "SQLL_MAIN";
			$proto87=array();
$proto87["m_strName"] = "rrhh_permisos.permisos_funcionarios";
$proto87["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto87["m_columns"] = array();
$proto87["m_columns"][] = "id";
$proto87["m_columns"][] = "id_funcionario";
$proto87["m_columns"][] = "tipo_vinculacion";
$proto87["m_columns"][] = "dependencia_id";
$proto87["m_columns"][] = "fecha_desde";
$proto87["m_columns"][] = "hora_desde";
$proto87["m_columns"][] = "fecha_hasta";
$proto87["m_columns"][] = "hora_hasta";
$proto87["m_columns"][] = "motivo_id";
$proto87["m_columns"][] = "comision_servicios";
$proto87["m_columns"][] = "comision_servicios_descripcion";
$proto87["m_columns"][] = "observacion";
$proto87["m_columns"][] = "estado";
$proto87["m_columns"][] = "fecha_actualizacion";
$proto87["m_columns"][] = "archivo_adjunto";
$proto87["m_columns"][] = "solicitado_por";
$proto87["m_columns"][] = "fecha_solicitud";
$proto87["m_columns"][] = "fecha_decision";
$proto87["m_columns"][] = "decidido_por";
$proto87["m_columns"][] = "resultado_decision";
$proto87["m_columns"][] = "horas_compensar";
$proto87["m_columns"][] = "acompensar";
$proto87["m_columns"][] = "rrhh_decidido_por";
$proto87["m_columns"][] = "rrhh_fecha_decision";
$proto87["m_columns"][] = "rrhh_resultado_decision";
$proto87["m_columns"][] = "rrhh_motivo_rechazo";
$proto87["m_columns"][] = "ocu_cod";
$proto87["m_columns"][] = "intentos_correccion";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "rrhh_permisos.permisos_funcionarios AS pf";
$proto86["m_alias"] = "pf";
$proto86["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto88=array();
$proto88["m_sql"] = "";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

$proto86["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto86);

$proto0["m_fromlist"][]=$obj;
												$proto90=array();
$proto90["m_link"] = "SQLL_LEFTJOIN";
			$proto91=array();
$proto91["m_strName"] = "public.personales";
$proto91["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "per_cod";
$proto91["m_columns"][] = "categoria_cat_codigo";
$proto91["m_columns"][] = "departamentos_dep_cod";
$proto91["m_columns"][] = "dependencias_dep_cod";
$proto91["m_columns"][] = "paises_pai_cod";
$proto91["m_columns"][] = "ciudades_ciu_cod";
$proto91["m_columns"][] = "profesiones_pro_cod";
$proto91["m_columns"][] = "per_profesional";
$proto91["m_columns"][] = "tipo_funcionario_tfun_cod";
$proto91["m_columns"][] = "per_institucion_origen";
$proto91["m_columns"][] = "cargos_car_cod";
$proto91["m_columns"][] = "per_nombre";
$proto91["m_columns"][] = "per_apellido";
$proto91["m_columns"][] = "per_ci";
$proto91["m_columns"][] = "per_sexo";
$proto91["m_columns"][] = "per_nacimiento";
$proto91["m_columns"][] = "per_est_civil";
$proto91["m_columns"][] = "per_gruposangre";
$proto91["m_columns"][] = "per_pcd";
$proto91["m_columns"][] = "per_domicilio";
$proto91["m_columns"][] = "per_barrio";
$proto91["m_columns"][] = "per_teleparticular";
$proto91["m_columns"][] = "per_telecelular";
$proto91["m_columns"][] = "per_email_part";
$proto91["m_columns"][] = "per_email_instit";
$proto91["m_columns"][] = "per_ruc";
$proto91["m_columns"][] = "per_contacto_eme";
$proto91["m_columns"][] = "per_tele_emer";
$proto91["m_columns"][] = "per_ingreso";
$proto91["m_columns"][] = "per_nombramiento";
$proto91["m_columns"][] = "per_estado";
$proto91["m_columns"][] = "per_usuario";
$proto91["m_columns"][] = "per_sede";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "LEFT OUTER JOIN \"public\".personales AS p ON pf.id_funcionario = p.per_cod";
$proto90["m_alias"] = "p";
$proto90["m_srcTableName"] = "rrhh_permisos.permisos_funcionarios";
$proto92=array();
$proto92["m_sql"] = "p.per_cod = pf.id_funcionario";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "per_cod",
	"m_strTable" => "p",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "= pf.id_funcionario";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto90);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto94=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "pf",
	"m_srcTableName" => "rrhh_permisos.permisos_funcionarios"
));

$proto94["m_column"]=$obj;
$proto94["m_bAsc"] = 0;
$proto94["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto94);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="rrhh_permisos.permisos_funcionarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_permisos_funcionarios = createSqlQuery_permisos_funcionarios();


	
		;

																																								

$tdatapermisos_funcionarios[".sqlquery"] = $queryData_permisos_funcionarios;



include_once(getabspath("include/permisos_funcionarios_events.php"));
$tdatapermisos_funcionarios[".hasEvents"] = true;

?>