<?php
$tdatavacacion = array();
$tdatavacacion[".searchableFields"] = array();
$tdatavacacion[".ShortName"] = "vacacion";
$tdatavacacion[".OwnerID"] = "id_funcionario";
$tdatavacacion[".OriginalTable"] = "rrhh_permisos.permisos_funcionarios";


$tdatavacacion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavacacion[".originalPagesByType"] = $tdatavacacion[".pagesByType"];
$tdatavacacion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavacacion[".originalPages"] = $tdatavacacion[".pages"];
$tdatavacacion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavacacion[".originalDefaultPages"] = $tdatavacacion[".defaultPages"];

//	field labels
$fieldLabelsvacacion = array();
$fieldToolTipsvacacion = array();
$pageTitlesvacacion = array();
$placeHoldersvacacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvacacion["Spanish"] = array();
	$fieldToolTipsvacacion["Spanish"] = array();
	$placeHoldersvacacion["Spanish"] = array();
	$pageTitlesvacacion["Spanish"] = array();
	$fieldLabelsvacacion["Spanish"]["id"] = "🔢 ID";
	$fieldToolTipsvacacion["Spanish"]["id"] = "";
	$placeHoldersvacacion["Spanish"]["id"] = "";
	$fieldLabelsvacacion["Spanish"]["id_funcionario"] = "Funcionario";
	$fieldToolTipsvacacion["Spanish"]["id_funcionario"] = "";
	$placeHoldersvacacion["Spanish"]["id_funcionario"] = "";
	$fieldLabelsvacacion["Spanish"]["per_nombre"] = "Per Nombre";
	$fieldToolTipsvacacion["Spanish"]["per_nombre"] = "";
	$placeHoldersvacacion["Spanish"]["per_nombre"] = "";
	$fieldLabelsvacacion["Spanish"]["per_apellido"] = "Per Apellido";
	$fieldToolTipsvacacion["Spanish"]["per_apellido"] = "";
	$placeHoldersvacacion["Spanish"]["per_apellido"] = "";
	$fieldLabelsvacacion["Spanish"]["per_ci"] = "🆔 Cédula de identidad";
	$fieldToolTipsvacacion["Spanish"]["per_ci"] = "";
	$placeHoldersvacacion["Spanish"]["per_ci"] = "Ingrese número de Documento";
	$fieldLabelsvacacion["Spanish"]["tipo_vinculacion"] = "🔗 Tipo de Vinculación";
	$fieldToolTipsvacacion["Spanish"]["tipo_vinculacion"] = "";
	$placeHoldersvacacion["Spanish"]["tipo_vinculacion"] = "";
	$fieldLabelsvacacion["Spanish"]["nombre_completo"] = "🧾Nombre Completo";
	$fieldToolTipsvacacion["Spanish"]["nombre_completo"] = "";
	$placeHoldersvacacion["Spanish"]["nombre_completo"] = "";
	$fieldLabelsvacacion["Spanish"]["dependencia_id"] = "🏛️ Dependencia";
	$fieldToolTipsvacacion["Spanish"]["dependencia_id"] = "";
	$placeHoldersvacacion["Spanish"]["dependencia_id"] = "";
	$fieldLabelsvacacion["Spanish"]["fecha_desde"] = "📅 Fecha desde";
	$fieldToolTipsvacacion["Spanish"]["fecha_desde"] = "Seleccione el día en que inicia el permiso.";
	$placeHoldersvacacion["Spanish"]["fecha_desde"] = "";
	$fieldLabelsvacacion["Spanish"]["hora_desde"] = "🕒 Hora de inicio";
	$fieldToolTipsvacacion["Spanish"]["hora_desde"] = "Seleccione la hora en que inicia el permiso.";
	$placeHoldersvacacion["Spanish"]["hora_desde"] = "";
	$fieldLabelsvacacion["Spanish"]["fecha_hasta"] = "📅 Fecha hasta";
	$fieldToolTipsvacacion["Spanish"]["fecha_hasta"] = "Seleccione el último día del permiso.";
	$placeHoldersvacacion["Spanish"]["fecha_hasta"] = "";
	$fieldLabelsvacacion["Spanish"]["hora_hasta"] = "🕒 Hora de fin";
	$fieldToolTipsvacacion["Spanish"]["hora_hasta"] = "Seleccione la hora de finalización del permiso.";
	$placeHoldersvacacion["Spanish"]["hora_hasta"] = "";
	$fieldLabelsvacacion["Spanish"]["motivo_id"] = "📝 Tipo de permiso o justificación";
	$fieldToolTipsvacacion["Spanish"]["motivo_id"] = "Indique el motivo por el cual solicita el permiso.";
	$placeHoldersvacacion["Spanish"]["motivo_id"] = "Seleccione el motivo de su solicitud";
	$fieldLabelsvacacion["Spanish"]["comision_servicios"] = "🧳¿Es comisión de servicios?";
	$fieldToolTipsvacacion["Spanish"]["comision_servicios"] = "";
	$placeHoldersvacacion["Spanish"]["comision_servicios"] = "";
	$fieldLabelsvacacion["Spanish"]["comision_servicios_descripcion"] = "📄 Descripción de la comisión de servicios";
	$fieldToolTipsvacacion["Spanish"]["comision_servicios_descripcion"] = "";
	$placeHoldersvacacion["Spanish"]["comision_servicios_descripcion"] = "";
	$fieldLabelsvacacion["Spanish"]["observacion"] = "💬 Observaciones adicionales";
	$fieldToolTipsvacacion["Spanish"]["observacion"] = "";
	$placeHoldersvacacion["Spanish"]["observacion"] = "";
	$fieldLabelsvacacion["Spanish"]["estado"] = "Estado";
	$fieldToolTipsvacacion["Spanish"]["estado"] = "";
	$placeHoldersvacacion["Spanish"]["estado"] = "";
	$fieldLabelsvacacion["Spanish"]["archivo_adjunto"] = "📎 Adjuntar respaldo (opcional)";
	$fieldToolTipsvacacion["Spanish"]["archivo_adjunto"] = "";
	$placeHoldersvacacion["Spanish"]["archivo_adjunto"] = "";
	$fieldLabelsvacacion["Spanish"]["email_jefe"] = "📧  Correo electrónico del superior inmediato";
	$fieldToolTipsvacacion["Spanish"]["email_jefe"] = "Su solicitud será enviada automáticamente a su jefe inmediato superior. El mismo deberá revisar y aprobar o rechazar el permiso.";
	$placeHoldersvacacion["Spanish"]["email_jefe"] = "correo@mtess.gov.py";
	$fieldLabelsvacacion["Spanish"]["descripcion_dependencia"] = "🏛️ Dependencia";
	$fieldToolTipsvacacion["Spanish"]["descripcion_dependencia"] = "";
	$placeHoldersvacacion["Spanish"]["descripcion_dependencia"] = "";
	$fieldLabelsvacacion["Spanish"]["descripcion_tipo_vinculacion"] = "🔗 Tipo de Vinculación";
	$fieldToolTipsvacacion["Spanish"]["descripcion_tipo_vinculacion"] = "";
	$placeHoldersvacacion["Spanish"]["descripcion_tipo_vinculacion"] = "";
	$fieldLabelsvacacion["Spanish"]["solicitado_por"] = "Solicitado Por";
	$fieldToolTipsvacacion["Spanish"]["solicitado_por"] = "";
	$placeHoldersvacacion["Spanish"]["solicitado_por"] = "";
	$fieldLabelsvacacion["Spanish"]["fecha_solicitud"] = "📅 Fecha de la Solicitud";
	$fieldToolTipsvacacion["Spanish"]["fecha_solicitud"] = "";
	$placeHoldersvacacion["Spanish"]["fecha_solicitud"] = "";
	$fieldLabelsvacacion["Spanish"]["email_jefe_id"] = "Email Jefe Id";
	$fieldToolTipsvacacion["Spanish"]["email_jefe_id"] = "";
	$placeHoldersvacacion["Spanish"]["email_jefe_id"] = "";
	$fieldLabelsvacacion["Spanish"]["resultado_decision"] = "👨‍💼 Aprobación del jefe inmediato";
	$fieldToolTipsvacacion["Spanish"]["resultado_decision"] = "";
	$placeHoldersvacacion["Spanish"]["resultado_decision"] = "";
	$fieldLabelsvacacion["Spanish"]["horas_compensar"] = "⏱ Horas a compensar";
	$fieldToolTipsvacacion["Spanish"]["horas_compensar"] = "";
	$placeHoldersvacacion["Spanish"]["horas_compensar"] = "";
	$fieldLabelsvacacion["Spanish"]["nombre_completo_edit"] = "Nombre Completo";
	$fieldToolTipsvacacion["Spanish"]["nombre_completo_edit"] = "";
	$placeHoldersvacacion["Spanish"]["nombre_completo_edit"] = "";
	$fieldLabelsvacacion["Spanish"]["descripcion_dependencia_edit"] = "Descripcion Dependencia Edit";
	$fieldToolTipsvacacion["Spanish"]["descripcion_dependencia_edit"] = "";
	$placeHoldersvacacion["Spanish"]["descripcion_dependencia_edit"] = "";
	$fieldLabelsvacacion["Spanish"]["rrhh_resultado_decision"] = "🏢 Aprobación de Recursos Humanos";
	$fieldToolTipsvacacion["Spanish"]["rrhh_resultado_decision"] = "";
	$placeHoldersvacacion["Spanish"]["rrhh_resultado_decision"] = "";
	$fieldLabelsvacacion["Spanish"]["rrhh_motivo_rechazo"] = "📝 Motivo de Rechazo (RRHH)";
	$fieldToolTipsvacacion["Spanish"]["rrhh_motivo_rechazo"] = "";
	$placeHoldersvacacion["Spanish"]["rrhh_motivo_rechazo"] = "";
	$fieldLabelsvacacion["Spanish"]["antiguedad_laboral"] = "⏳ Antiguedad Laboral";
	$fieldToolTipsvacacion["Spanish"]["antiguedad_laboral"] = "";
	$placeHoldersvacacion["Spanish"]["antiguedad_laboral"] = "";
	$fieldLabelsvacacion["Spanish"]["car_descri"] = "💼 Cargo Actual";
	$fieldToolTipsvacacion["Spanish"]["car_descri"] = "";
	$placeHoldersvacacion["Spanish"]["car_descri"] = "";
	$fieldLabelsvacacion["Spanish"]["sed_descripcion"] = "📍 Sede Laboral";
	$fieldToolTipsvacacion["Spanish"]["sed_descripcion"] = "";
	$placeHoldersvacacion["Spanish"]["sed_descripcion"] = "";
	$fieldLabelsvacacion["Spanish"]["cantidad_dias_permiso"] = "";
	$fieldToolTipsvacacion["Spanish"]["cantidad_dias_permiso"] = "";
	$placeHoldersvacacion["Spanish"]["cantidad_dias_permiso"] = "";
	$fieldLabelsvacacion["Spanish"]["fecha_decision"] = "📅 Fecha de Aprobación del jefe";
	$fieldToolTipsvacacion["Spanish"]["fecha_decision"] = "";
	$placeHoldersvacacion["Spanish"]["fecha_decision"] = "";
	$fieldLabelsvacacion["Spanish"]["rrhh_fecha_decision"] = "📅 Fecha de Aprobación (RRHH)";
	$fieldToolTipsvacacion["Spanish"]["rrhh_fecha_decision"] = "";
	$placeHoldersvacacion["Spanish"]["rrhh_fecha_decision"] = "";
	$fieldLabelsvacacion["Spanish"]["intentos_correccion"] = "Intentos Correccion";
	$fieldToolTipsvacacion["Spanish"]["intentos_correccion"] = "";
	$placeHoldersvacacion["Spanish"]["intentos_correccion"] = "";
	$fieldLabelsvacacion["Spanish"]["decidido_por"] = "👨‍💼 Decidido por (Jefe)";
	$fieldToolTipsvacacion["Spanish"]["decidido_por"] = "";
	$placeHoldersvacacion["Spanish"]["decidido_por"] = "";
	$fieldLabelsvacacion["Spanish"]["sex_descripcion"] = "Sex Descripcion";
	$fieldToolTipsvacacion["Spanish"]["sex_descripcion"] = "";
	$placeHoldersvacacion["Spanish"]["sex_descripcion"] = "";
	$fieldLabelsvacacion["Spanish"]["vac_dias_pedidos"] = "🏷️ Cantidad de días";
	$fieldToolTipsvacacion["Spanish"]["vac_dias_pedidos"] = "";
	$placeHoldersvacacion["Spanish"]["vac_dias_pedidos"] = "";
	$pageTitlesvacacion["Spanish"]["add"] = "🌴 FORMULARIO DE SOLICITUD DE VACACIONES";
	if (count($fieldToolTipsvacacion["Spanish"]))
		$tdatavacacion[".isUseToolTips"] = true;
}


	$tdatavacacion[".NCSearch"] = true;



$tdatavacacion[".shortTableName"] = "vacacion";
$tdatavacacion[".nSecOptions"] = 0;

$tdatavacacion[".mainTableOwnerID"] = "id_funcionario";
$tdatavacacion[".entityType"] = 1;
$tdatavacacion[".connId"] = "dbtalentos_at_192_168_123_51";


$tdatavacacion[".strOriginalTableName"] = "rrhh_permisos.permisos_funcionarios";

	



$tdatavacacion[".showAddInPopup"] = false;

$tdatavacacion[".showEditInPopup"] = false;

$tdatavacacion[".showViewInPopup"] = false;

$tdatavacacion[".listAjax"] = false;
//	temporary
//$tdatavacacion[".listAjax"] = false;

	$tdatavacacion[".audit"] = false;

	$tdatavacacion[".locking"] = false;


$pages = $tdatavacacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavacacion[".edit"] = true;
	$tdatavacacion[".afterEditAction"] = 1;
	$tdatavacacion[".closePopupAfterEdit"] = 1;
	$tdatavacacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavacacion[".add"] = true;
$tdatavacacion[".afterAddAction"] = 1;
$tdatavacacion[".closePopupAfterAdd"] = 1;
$tdatavacacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavacacion[".list"] = true;
}



$tdatavacacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavacacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavacacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavacacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavacacion[".printFriendly"] = true;
}



$tdatavacacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavacacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavacacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavacacion[".isUseAjaxSuggest"] = true;



						

$tdatavacacion[".ajaxCodeSnippetAdded"] = false;

$tdatavacacion[".buttonsAdded"] = false;

$tdatavacacion[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavacacion[".isUseTimeForSearch"] = true;


$tdatavacacion[".badgeColor"] = "3CB371";


$tdatavacacion[".allSearchFields"] = array();
$tdatavacacion[".filterFields"] = array();
$tdatavacacion[".requiredSearchFields"] = array();

$tdatavacacion[".googleLikeFields"] = array();
$tdatavacacion[".googleLikeFields"][] = "id";
$tdatavacacion[".googleLikeFields"][] = "id_funcionario";
$tdatavacacion[".googleLikeFields"][] = "per_nombre";
$tdatavacacion[".googleLikeFields"][] = "per_apellido";
$tdatavacacion[".googleLikeFields"][] = "nombre_completo";
$tdatavacacion[".googleLikeFields"][] = "per_ci";
$tdatavacacion[".googleLikeFields"][] = "tipo_vinculacion";
$tdatavacacion[".googleLikeFields"][] = "dependencia_id";
$tdatavacacion[".googleLikeFields"][] = "fecha_desde";
$tdatavacacion[".googleLikeFields"][] = "hora_desde";
$tdatavacacion[".googleLikeFields"][] = "fecha_hasta";
$tdatavacacion[".googleLikeFields"][] = "hora_hasta";
$tdatavacacion[".googleLikeFields"][] = "motivo_id";
$tdatavacacion[".googleLikeFields"][] = "comision_servicios";
$tdatavacacion[".googleLikeFields"][] = "comision_servicios_descripcion";
$tdatavacacion[".googleLikeFields"][] = "observacion";
$tdatavacacion[".googleLikeFields"][] = "estado";
$tdatavacacion[".googleLikeFields"][] = "archivo_adjunto";
$tdatavacacion[".googleLikeFields"][] = "email_jefe";
$tdatavacacion[".googleLikeFields"][] = "descripcion_dependencia";
$tdatavacacion[".googleLikeFields"][] = "descripcion_tipo_vinculacion";
$tdatavacacion[".googleLikeFields"][] = "solicitado_por";
$tdatavacacion[".googleLikeFields"][] = "fecha_solicitud";
$tdatavacacion[".googleLikeFields"][] = "email_jefe_id";
$tdatavacacion[".googleLikeFields"][] = "resultado_decision";
$tdatavacacion[".googleLikeFields"][] = "horas_compensar";
$tdatavacacion[".googleLikeFields"][] = "nombre_completo_edit";
$tdatavacacion[".googleLikeFields"][] = "descripcion_dependencia_edit";
$tdatavacacion[".googleLikeFields"][] = "rrhh_resultado_decision";
$tdatavacacion[".googleLikeFields"][] = "rrhh_motivo_rechazo";
$tdatavacacion[".googleLikeFields"][] = "antiguedad_laboral";
$tdatavacacion[".googleLikeFields"][] = "car_descri";
$tdatavacacion[".googleLikeFields"][] = "sed_descripcion";
$tdatavacacion[".googleLikeFields"][] = "cantidad_dias_permiso";
$tdatavacacion[".googleLikeFields"][] = "fecha_decision";
$tdatavacacion[".googleLikeFields"][] = "rrhh_fecha_decision";
$tdatavacacion[".googleLikeFields"][] = "intentos_correccion";
$tdatavacacion[".googleLikeFields"][] = "decidido_por";
$tdatavacacion[".googleLikeFields"][] = "sex_descripcion";
$tdatavacacion[".googleLikeFields"][] = "vac_dias_pedidos";



$tdatavacacion[".tableType"] = "list";

$tdatavacacion[".printerPageOrientation"] = 0;
$tdatavacacion[".nPrinterPageScale"] = 100;

$tdatavacacion[".nPrinterSplitRecords"] = 40;

$tdatavacacion[".geocodingEnabled"] = false;










$tdatavacacion[".pageSize"] = 20;

$tdatavacacion[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY pf.id DESC";
$tdatavacacion[".strOrderBy"] = $tstrOrderBy;

$tdatavacacion[".orderindexes"] = array();
			$tdatavacacion[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "pf.id");


$tdatavacacion[".sqlHead"] = "SELECT pf.id,  pf.id_funcionario,  p.per_nombre,  p.per_apellido,  p.per_nombre || ' ' || p.per_apellido AS nombre_completo,  p.per_ci,  pf.tipo_vinculacion,  pf.dependencia_id,  pf.fecha_desde,  pf.hora_desde,  pf.fecha_hasta,  pf.hora_hasta,  pf.motivo_id,  pf.comision_servicios,  pf.comision_servicios_descripcion,  pf.observacion,  pf.estado,  pf.archivo_adjunto,  '' AS email_jefe,  '' AS descripcion_dependencia,  '' AS descripcion_tipo_vinculacion,  pf.solicitado_por,  pf.fecha_solicitud,  '' AS email_jefe_id,  pf.resultado_decision,  pf.horas_compensar,  '' AS nombre_completo_edit,  '' AS descripcion_dependencia_edit,  pf.rrhh_resultado_decision,  pf.rrhh_motivo_rechazo,  '' AS antiguedad_laboral,  '' AS car_descri,  '' AS sed_descripcion,  '' AS cantidad_dias_permiso,  pf.fecha_decision,  pf.rrhh_fecha_decision,  pf.intentos_correccion,  pf.decidido_por,  '' AS sex_descripcion,  pf.vac_dias_pedidos";
$tdatavacacion[".sqlFrom"] = "FROM rrhh_permisos.permisos_funcionarios AS pf  LEFT OUTER JOIN \"public\".personales AS p ON pf.id_funcionario = p.per_cod";
$tdatavacacion[".sqlWhereExpr"] = "(pf.motivo_id = '1')";
$tdatavacacion[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatavacacion[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavacacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavacacion[".arrGroupsPerPage"] = $arrGPP;

$tdatavacacion[".highlightSearchResults"] = true;

$tableKeysvacacion = array();
$tableKeysvacacion[] = "id";
$tdatavacacion[".Keys"] = $tableKeysvacacion;


$tdatavacacion[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","id");
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


	$tdatavacacion["id"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "id";
//	id_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_funcionario";
	$fdata["GoodName"] = "id_funcionario";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","id_funcionario");
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


	$tdatavacacion["id_funcionario"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "id_funcionario";
//	per_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "per_nombre";
	$fdata["GoodName"] = "per_nombre";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("vacacion","per_nombre");
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


	$tdatavacacion["per_nombre"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "per_nombre";
//	per_apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "per_apellido";
	$fdata["GoodName"] = "per_apellido";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("vacacion","per_apellido");
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


	$tdatavacacion["per_apellido"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "per_apellido";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacacion","nombre_completo");
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


	$tdatavacacion["nombre_completo"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "nombre_completo";
//	per_ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "per_ci";
	$fdata["GoodName"] = "per_ci";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("vacacion","per_ci");
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


	$tdatavacacion["per_ci"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "per_ci";
//	tipo_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tipo_vinculacion";
	$fdata["GoodName"] = "tipo_vinculacion";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","tipo_vinculacion");
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


	$tdatavacacion["tipo_vinculacion"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "tipo_vinculacion";
//	dependencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dependencia_id";
	$fdata["GoodName"] = "dependencia_id";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","dependencia_id");
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


	$tdatavacacion["dependencia_id"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "dependencia_id";
//	fecha_desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fecha_desde";
	$fdata["GoodName"] = "fecha_desde";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","fecha_desde");
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


	$tdatavacacion["fecha_desde"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "fecha_desde";
//	hora_desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "hora_desde";
	$fdata["GoodName"] = "hora_desde";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","hora_desde");
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


	$tdatavacacion["hora_desde"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "hora_desde";
//	fecha_hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fecha_hasta";
	$fdata["GoodName"] = "fecha_hasta";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","fecha_hasta");
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


	$tdatavacacion["fecha_hasta"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "fecha_hasta";
//	hora_hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "hora_hasta";
	$fdata["GoodName"] = "hora_hasta";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","hora_hasta");
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


	$tdatavacacion["hora_hasta"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "hora_hasta";
//	motivo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "motivo_id";
	$fdata["GoodName"] = "motivo_id";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","motivo_id");
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

				$edata["LookupWhere"] = "tip_descripcion in('Vacaciones')";


	
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


	$tdatavacacion["motivo_id"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "motivo_id";
//	comision_servicios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "comision_servicios";
	$fdata["GoodName"] = "comision_servicios";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","comision_servicios");
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


	$tdatavacacion["comision_servicios"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "comision_servicios";
//	comision_servicios_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "comision_servicios_descripcion";
	$fdata["GoodName"] = "comision_servicios_descripcion";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","comision_servicios_descripcion");
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


	$tdatavacacion["comision_servicios_descripcion"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "comision_servicios_descripcion";
//	observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "observacion";
	$fdata["GoodName"] = "observacion";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","observacion");
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


	$tdatavacacion["observacion"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "observacion";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","estado");
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


	$tdatavacacion["estado"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "estado";
//	archivo_adjunto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "archivo_adjunto";
	$fdata["GoodName"] = "archivo_adjunto";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","archivo_adjunto");
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
			$edata["acceptFileTypes"][] = strtoupper("jpeg");
						$edata["acceptFileTypesHtml"] .= ",.jpeg";
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

	
		$edata["maxTotalFilesSize"] = 3000;

	
	
	
	
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


	$tdatavacacion["archivo_adjunto"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "archivo_adjunto";
//	email_jefe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "email_jefe";
	$fdata["GoodName"] = "email_jefe";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacacion","email_jefe");
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


	$tdatavacacion["email_jefe"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "email_jefe";
//	descripcion_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "descripcion_dependencia";
	$fdata["GoodName"] = "descripcion_dependencia";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacacion","descripcion_dependencia");
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


	$tdatavacacion["descripcion_dependencia"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "descripcion_dependencia";
//	descripcion_tipo_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "descripcion_tipo_vinculacion";
	$fdata["GoodName"] = "descripcion_tipo_vinculacion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacacion","descripcion_tipo_vinculacion");
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


	$tdatavacacion["descripcion_tipo_vinculacion"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "descripcion_tipo_vinculacion";
//	solicitado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "solicitado_por";
	$fdata["GoodName"] = "solicitado_por";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","solicitado_por");
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


	$tdatavacacion["solicitado_por"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "solicitado_por";
//	fecha_solicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "fecha_solicitud";
	$fdata["GoodName"] = "fecha_solicitud";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","fecha_solicitud");
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


	$tdatavacacion["fecha_solicitud"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "fecha_solicitud";
//	email_jefe_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "email_jefe_id";
	$fdata["GoodName"] = "email_jefe_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacacion","email_jefe_id");
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


	$tdatavacacion["email_jefe_id"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "email_jefe_id";
//	resultado_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "resultado_decision";
	$fdata["GoodName"] = "resultado_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","resultado_decision");
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


	$tdatavacacion["resultado_decision"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "resultado_decision";
//	horas_compensar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "horas_compensar";
	$fdata["GoodName"] = "horas_compensar";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","horas_compensar");
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


	$tdatavacacion["horas_compensar"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "horas_compensar";
//	nombre_completo_edit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "nombre_completo_edit";
	$fdata["GoodName"] = "nombre_completo_edit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacacion","nombre_completo_edit");
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


	$tdatavacacion["nombre_completo_edit"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "nombre_completo_edit";
//	descripcion_dependencia_edit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "descripcion_dependencia_edit";
	$fdata["GoodName"] = "descripcion_dependencia_edit";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacacion","descripcion_dependencia_edit");
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


	$tdatavacacion["descripcion_dependencia_edit"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "descripcion_dependencia_edit";
//	rrhh_resultado_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "rrhh_resultado_decision";
	$fdata["GoodName"] = "rrhh_resultado_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","rrhh_resultado_decision");
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


	$tdatavacacion["rrhh_resultado_decision"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "rrhh_resultado_decision";
//	rrhh_motivo_rechazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "rrhh_motivo_rechazo";
	$fdata["GoodName"] = "rrhh_motivo_rechazo";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","rrhh_motivo_rechazo");
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


	$tdatavacacion["rrhh_motivo_rechazo"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "rrhh_motivo_rechazo";
//	antiguedad_laboral
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "antiguedad_laboral";
	$fdata["GoodName"] = "antiguedad_laboral";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacacion","antiguedad_laboral");
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


	$tdatavacacion["antiguedad_laboral"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "antiguedad_laboral";
//	car_descri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "car_descri";
	$fdata["GoodName"] = "car_descri";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacacion","car_descri");
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


	$tdatavacacion["car_descri"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "car_descri";
//	sed_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "sed_descripcion";
	$fdata["GoodName"] = "sed_descripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacacion","sed_descripcion");
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


	$tdatavacacion["sed_descripcion"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "sed_descripcion";
//	cantidad_dias_permiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "cantidad_dias_permiso";
	$fdata["GoodName"] = "cantidad_dias_permiso";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacacion","cantidad_dias_permiso");
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


	$tdatavacacion["cantidad_dias_permiso"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "cantidad_dias_permiso";
//	fecha_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "fecha_decision";
	$fdata["GoodName"] = "fecha_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","fecha_decision");
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


	$tdatavacacion["fecha_decision"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "fecha_decision";
//	rrhh_fecha_decision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "rrhh_fecha_decision";
	$fdata["GoodName"] = "rrhh_fecha_decision";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","rrhh_fecha_decision");
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


	$tdatavacacion["rrhh_fecha_decision"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "rrhh_fecha_decision";
//	intentos_correccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "intentos_correccion";
	$fdata["GoodName"] = "intentos_correccion";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","intentos_correccion");
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


	$tdatavacacion["intentos_correccion"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "intentos_correccion";
//	decidido_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "decidido_por";
	$fdata["GoodName"] = "decidido_por";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","decidido_por");
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


	$tdatavacacion["decidido_por"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "decidido_por";
//	sex_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "sex_descripcion";
	$fdata["GoodName"] = "sex_descripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vacacion","sex_descripcion");
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


	$tdatavacacion["sex_descripcion"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "sex_descripcion";
//	vac_dias_pedidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "vac_dias_pedidos";
	$fdata["GoodName"] = "vac_dias_pedidos";
	$fdata["ownerTable"] = "rrhh_permisos.permisos_funcionarios";
	$fdata["Label"] = GetFieldLabel("vacacion","vac_dias_pedidos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vac_dias_pedidos";

		$fdata["sourceSingle"] = "vac_dias_pedidos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pf.vac_dias_pedidos";

	
	
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


	$tdatavacacion["vac_dias_pedidos"] = $fdata;
		$tdatavacacion[".searchableFields"][] = "vac_dias_pedidos";


$tables_data["vacacion"]=&$tdatavacacion;
$field_labels["vacacion"] = &$fieldLabelsvacacion;
$fieldToolTips["vacacion"] = &$fieldToolTipsvacacion;
$placeHolders["vacacion"] = &$placeHoldersvacacion;
$page_titles["vacacion"] = &$pageTitlesvacacion;


changeTextControlsToDate( "vacacion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vacacion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vacacion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vacacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pf.id,  pf.id_funcionario,  p.per_nombre,  p.per_apellido,  p.per_nombre || ' ' || p.per_apellido AS nombre_completo,  p.per_ci,  pf.tipo_vinculacion,  pf.dependencia_id,  pf.fecha_desde,  pf.hora_desde,  pf.fecha_hasta,  pf.hora_hasta,  pf.motivo_id,  pf.comision_servicios,  pf.comision_servicios_descripcion,  pf.observacion,  pf.estado,  pf.archivo_adjunto,  '' AS email_jefe,  '' AS descripcion_dependencia,  '' AS descripcion_tipo_vinculacion,  pf.solicitado_por,  pf.fecha_solicitud,  '' AS email_jefe_id,  pf.resultado_decision,  pf.horas_compensar,  '' AS nombre_completo_edit,  '' AS descripcion_dependencia_edit,  pf.rrhh_resultado_decision,  pf.rrhh_motivo_rechazo,  '' AS antiguedad_laboral,  '' AS car_descri,  '' AS sed_descripcion,  '' AS cantidad_dias_permiso,  pf.fecha_decision,  pf.rrhh_fecha_decision,  pf.intentos_correccion,  pf.decidido_por,  '' AS sex_descripcion,  pf.vac_dias_pedidos";
$proto0["m_strFrom"] = "FROM rrhh_permisos.permisos_funcionarios AS pf  LEFT OUTER JOIN \"public\".personales AS p ON pf.id_funcionario = p.per_cod";
$proto0["m_strWhere"] = "(pf.motivo_id = '1')";
$proto0["m_strOrderBy"] = "ORDER BY pf.id DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "pf.motivo_id = '1'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "motivo_id",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= '1'";
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
	"m_srcTableName" => "vacacion"
));

$proto6["m_sql"] = "pf.id";
$proto6["m_srcTableName"] = "vacacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_funcionario",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto8["m_sql"] = "pf.id_funcionario";
$proto8["m_srcTableName"] = "vacacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "per_nombre",
	"m_strTable" => "p",
	"m_srcTableName" => "vacacion"
));

$proto10["m_sql"] = "p.per_nombre";
$proto10["m_srcTableName"] = "vacacion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "per_apellido",
	"m_strTable" => "p",
	"m_srcTableName" => "vacacion"
));

$proto12["m_sql"] = "p.per_apellido";
$proto12["m_srcTableName"] = "vacacion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "p.per_nombre || ' ' || p.per_apellido"
));

$proto14["m_sql"] = "p.per_nombre || ' ' || p.per_apellido";
$proto14["m_srcTableName"] = "vacacion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "nombre_completo";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "per_ci",
	"m_strTable" => "p",
	"m_srcTableName" => "vacacion"
));

$proto16["m_sql"] = "p.per_ci";
$proto16["m_srcTableName"] = "vacacion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_vinculacion",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto18["m_sql"] = "pf.tipo_vinculacion";
$proto18["m_srcTableName"] = "vacacion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencia_id",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto20["m_sql"] = "pf.dependencia_id";
$proto20["m_srcTableName"] = "vacacion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_desde",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto22["m_sql"] = "pf.fecha_desde";
$proto22["m_srcTableName"] = "vacacion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_desde",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto24["m_sql"] = "pf.hora_desde";
$proto24["m_srcTableName"] = "vacacion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hasta",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto26["m_sql"] = "pf.fecha_hasta";
$proto26["m_srcTableName"] = "vacacion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_hasta",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto28["m_sql"] = "pf.hora_hasta";
$proto28["m_srcTableName"] = "vacacion";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "motivo_id",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto30["m_sql"] = "pf.motivo_id";
$proto30["m_srcTableName"] = "vacacion";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "comision_servicios",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto32["m_sql"] = "pf.comision_servicios";
$proto32["m_srcTableName"] = "vacacion";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "comision_servicios_descripcion",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto34["m_sql"] = "pf.comision_servicios_descripcion";
$proto34["m_srcTableName"] = "vacacion";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "observacion",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto36["m_sql"] = "pf.observacion";
$proto36["m_srcTableName"] = "vacacion";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto38["m_sql"] = "pf.estado";
$proto38["m_srcTableName"] = "vacacion";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "archivo_adjunto",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto40["m_sql"] = "pf.archivo_adjunto";
$proto40["m_srcTableName"] = "vacacion";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto42["m_sql"] = "''";
$proto42["m_srcTableName"] = "vacacion";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "email_jefe";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto44["m_sql"] = "''";
$proto44["m_srcTableName"] = "vacacion";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "descripcion_dependencia";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto46["m_sql"] = "''";
$proto46["m_srcTableName"] = "vacacion";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "descripcion_tipo_vinculacion";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "solicitado_por",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto48["m_sql"] = "pf.solicitado_por";
$proto48["m_srcTableName"] = "vacacion";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_solicitud",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto50["m_sql"] = "pf.fecha_solicitud";
$proto50["m_srcTableName"] = "vacacion";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto52["m_sql"] = "''";
$proto52["m_srcTableName"] = "vacacion";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "email_jefe_id";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "resultado_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto54["m_sql"] = "pf.resultado_decision";
$proto54["m_srcTableName"] = "vacacion";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "horas_compensar",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto56["m_sql"] = "pf.horas_compensar";
$proto56["m_srcTableName"] = "vacacion";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto58["m_sql"] = "''";
$proto58["m_srcTableName"] = "vacacion";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "nombre_completo_edit";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto60["m_sql"] = "''";
$proto60["m_srcTableName"] = "vacacion";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "descripcion_dependencia_edit";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "rrhh_resultado_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto62["m_sql"] = "pf.rrhh_resultado_decision";
$proto62["m_srcTableName"] = "vacacion";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "rrhh_motivo_rechazo",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto64["m_sql"] = "pf.rrhh_motivo_rechazo";
$proto64["m_srcTableName"] = "vacacion";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto66["m_sql"] = "''";
$proto66["m_srcTableName"] = "vacacion";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "antiguedad_laboral";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto68["m_sql"] = "''";
$proto68["m_srcTableName"] = "vacacion";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "car_descri";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto70["m_sql"] = "''";
$proto70["m_srcTableName"] = "vacacion";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "sed_descripcion";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto72["m_sql"] = "''";
$proto72["m_srcTableName"] = "vacacion";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "cantidad_dias_permiso";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto74["m_sql"] = "pf.fecha_decision";
$proto74["m_srcTableName"] = "vacacion";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "rrhh_fecha_decision",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto76["m_sql"] = "pf.rrhh_fecha_decision";
$proto76["m_srcTableName"] = "vacacion";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "intentos_correccion",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto78["m_sql"] = "pf.intentos_correccion";
$proto78["m_srcTableName"] = "vacacion";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "decidido_por",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto80["m_sql"] = "pf.decidido_por";
$proto80["m_srcTableName"] = "vacacion";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto82["m_sql"] = "''";
$proto82["m_srcTableName"] = "vacacion";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "sex_descripcion";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "vac_dias_pedidos",
	"m_strTable" => "pf",
	"m_srcTableName" => "vacacion"
));

$proto84["m_sql"] = "pf.vac_dias_pedidos";
$proto84["m_srcTableName"] = "vacacion";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto86=array();
$proto86["m_link"] = "SQLL_MAIN";
			$proto87=array();
$proto87["m_strName"] = "rrhh_permisos.permisos_funcionarios";
$proto87["m_srcTableName"] = "vacacion";
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
$proto87["m_columns"][] = "vac_dias_pedidos";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "rrhh_permisos.permisos_funcionarios AS pf";
$proto86["m_alias"] = "pf";
$proto86["m_srcTableName"] = "vacacion";
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
$proto91["m_srcTableName"] = "vacacion";
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
$proto90["m_srcTableName"] = "vacacion";
$proto92=array();
$proto92["m_sql"] = "p.per_cod = pf.id_funcionario";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "per_cod",
	"m_strTable" => "p",
	"m_srcTableName" => "vacacion"
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
	"m_srcTableName" => "vacacion"
));

$proto94["m_column"]=$obj;
$proto94["m_bAsc"] = 0;
$proto94["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto94);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="vacacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vacacion = createSqlQuery_vacacion();


	
		;

																																								

$tdatavacacion[".sqlquery"] = $queryData_vacacion;



include_once(getabspath("include/vacacion_events.php"));
$tdatavacacion[".hasEvents"] = true;

?>