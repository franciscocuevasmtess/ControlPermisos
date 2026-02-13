<?php
$tdatasolicitudes_vacaciones = array();
$tdatasolicitudes_vacaciones[".searchableFields"] = array();
$tdatasolicitudes_vacaciones[".ShortName"] = "solicitudes_vacaciones";
$tdatasolicitudes_vacaciones[".OwnerID"] = "id_funcionario";
$tdatasolicitudes_vacaciones[".OriginalTable"] = "rrhh_permisos.solicitudes_vacaciones";


$tdatasolicitudes_vacaciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasolicitudes_vacaciones[".originalPagesByType"] = $tdatasolicitudes_vacaciones[".pagesByType"];
$tdatasolicitudes_vacaciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasolicitudes_vacaciones[".originalPages"] = $tdatasolicitudes_vacaciones[".pages"];
$tdatasolicitudes_vacaciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasolicitudes_vacaciones[".originalDefaultPages"] = $tdatasolicitudes_vacaciones[".defaultPages"];

//	field labels
$fieldLabelssolicitudes_vacaciones = array();
$fieldToolTipssolicitudes_vacaciones = array();
$pageTitlessolicitudes_vacaciones = array();
$placeHolderssolicitudes_vacaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssolicitudes_vacaciones["Spanish"] = array();
	$fieldToolTipssolicitudes_vacaciones["Spanish"] = array();
	$placeHolderssolicitudes_vacaciones["Spanish"] = array();
	$pageTitlessolicitudes_vacaciones["Spanish"] = array();
	$fieldLabelssolicitudes_vacaciones["Spanish"]["id"] = "ID";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["id"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["id"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["id_funcionario"] = "Id Funcionario";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["id_funcionario"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["id_funcionario"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["tipo_vinculacion"] = "Tipo de Vinculación";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["tipo_vinculacion"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["tipo_vinculacion"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["dependencia_id"] = "Dependencia";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["dependencia_id"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["dependencia_id"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["fecha_desde"] = "Fecha Desde";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["fecha_desde"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["fecha_desde"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["fecha_hasta"] = "Fecha Hasta";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["fecha_hasta"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["fecha_hasta"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["total_dias_habiles"] = "Total de días ";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["total_dias_habiles"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["total_dias_habiles"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["observacion"] = "Observación";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["observacion"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["observacion"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["estado"] = "Estado";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["estado"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["estado"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["fecha_creacion"] = "Fecha Creación";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["fecha_creacion"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["fecha_creacion"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["usuario_creador"] = "Usuario Creador";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["usuario_creador"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["usuario_creador"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["fecha_actualizacion"] = "Fecha Actualizacion";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["fecha_actualizacion"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["fecha_actualizacion"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["usuario_actualizacion"] = "Usuario Actualizacion";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["usuario_actualizacion"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["usuario_actualizacion"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["nombre_completo"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["nombre_completo"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["per_ci"] = "C.I. Nº";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["per_ci"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["per_ci"] = "";
	$fieldLabelssolicitudes_vacaciones["Spanish"]["descripcion_dependencia"] = "Descripcion Dependencia";
	$fieldToolTipssolicitudes_vacaciones["Spanish"]["descripcion_dependencia"] = "";
	$placeHolderssolicitudes_vacaciones["Spanish"]["descripcion_dependencia"] = "";
	$pageTitlessolicitudes_vacaciones["Spanish"]["add"] = "Formulario de Solicitud de Vacaciones";
	$pageTitlessolicitudes_vacaciones["Spanish"]["view"] = "Solicitud Vacacion ID {%id}";
	if (count($fieldToolTipssolicitudes_vacaciones["Spanish"]))
		$tdatasolicitudes_vacaciones[".isUseToolTips"] = true;
}


	$tdatasolicitudes_vacaciones[".NCSearch"] = true;



$tdatasolicitudes_vacaciones[".shortTableName"] = "solicitudes_vacaciones";
$tdatasolicitudes_vacaciones[".nSecOptions"] = 1;

$tdatasolicitudes_vacaciones[".mainTableOwnerID"] = "id_funcionario";
$tdatasolicitudes_vacaciones[".entityType"] = 0;
$tdatasolicitudes_vacaciones[".connId"] = "dbtalentos_at_192_168_123_51";


$tdatasolicitudes_vacaciones[".strOriginalTableName"] = "rrhh_permisos.solicitudes_vacaciones";

	



$tdatasolicitudes_vacaciones[".showAddInPopup"] = false;

$tdatasolicitudes_vacaciones[".showEditInPopup"] = false;

$tdatasolicitudes_vacaciones[".showViewInPopup"] = false;

$tdatasolicitudes_vacaciones[".listAjax"] = false;
//	temporary
//$tdatasolicitudes_vacaciones[".listAjax"] = false;

	$tdatasolicitudes_vacaciones[".audit"] = false;

	$tdatasolicitudes_vacaciones[".locking"] = false;


$pages = $tdatasolicitudes_vacaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasolicitudes_vacaciones[".edit"] = true;
	$tdatasolicitudes_vacaciones[".afterEditAction"] = 1;
	$tdatasolicitudes_vacaciones[".closePopupAfterEdit"] = 1;
	$tdatasolicitudes_vacaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasolicitudes_vacaciones[".add"] = true;
$tdatasolicitudes_vacaciones[".afterAddAction"] = 1;
$tdatasolicitudes_vacaciones[".closePopupAfterAdd"] = 1;
$tdatasolicitudes_vacaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasolicitudes_vacaciones[".list"] = true;
}



$tdatasolicitudes_vacaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasolicitudes_vacaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasolicitudes_vacaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasolicitudes_vacaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasolicitudes_vacaciones[".printFriendly"] = true;
}



$tdatasolicitudes_vacaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasolicitudes_vacaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasolicitudes_vacaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasolicitudes_vacaciones[".isUseAjaxSuggest"] = true;





$tdatasolicitudes_vacaciones[".ajaxCodeSnippetAdded"] = false;

$tdatasolicitudes_vacaciones[".buttonsAdded"] = false;

$tdatasolicitudes_vacaciones[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasolicitudes_vacaciones[".isUseTimeForSearch"] = false;


$tdatasolicitudes_vacaciones[".badgeColor"] = "7B68EE";


$tdatasolicitudes_vacaciones[".allSearchFields"] = array();
$tdatasolicitudes_vacaciones[".filterFields"] = array();
$tdatasolicitudes_vacaciones[".requiredSearchFields"] = array();

$tdatasolicitudes_vacaciones[".googleLikeFields"] = array();
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "id";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "id_funcionario";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "per_ci";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "nombre_completo";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "tipo_vinculacion";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "dependencia_id";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "fecha_desde";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "fecha_hasta";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "total_dias_habiles";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "observacion";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "estado";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "fecha_creacion";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "usuario_creador";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "fecha_actualizacion";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "usuario_actualizacion";
$tdatasolicitudes_vacaciones[".googleLikeFields"][] = "descripcion_dependencia";



$tdatasolicitudes_vacaciones[".tableType"] = "list";

$tdatasolicitudes_vacaciones[".printerPageOrientation"] = 0;
$tdatasolicitudes_vacaciones[".nPrinterPageScale"] = 100;

$tdatasolicitudes_vacaciones[".nPrinterSplitRecords"] = 40;

$tdatasolicitudes_vacaciones[".geocodingEnabled"] = false;










$tdatasolicitudes_vacaciones[".pageSize"] = 20;

$tdatasolicitudes_vacaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasolicitudes_vacaciones[".strOrderBy"] = $tstrOrderBy;

$tdatasolicitudes_vacaciones[".orderindexes"] = array();


$tdatasolicitudes_vacaciones[".sqlHead"] = "SELECT sv.id,  	sv.id_funcionario,  	p.per_ci,  	p.per_nombre || ' ' || p.per_apellido AS nombre_completo,  	sv.tipo_vinculacion,  	sv.dependencia_id,  	sv.fecha_desde,  	sv.fecha_hasta,  	sv.total_dias_habiles,  	sv.observacion,  	sv.estado,  	sv.fecha_creacion,  	sv.usuario_creador,  	sv.fecha_actualizacion,  	sv.usuario_actualizacion,  	'' AS descripcion_dependencia";
$tdatasolicitudes_vacaciones[".sqlFrom"] = "FROM rrhh_permisos.solicitudes_vacaciones sv   		LEFT JOIN public.personales p ON sv.id_funcionario = p.per_cod";
$tdatasolicitudes_vacaciones[".sqlWhereExpr"] = "";
$tdatasolicitudes_vacaciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasolicitudes_vacaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasolicitudes_vacaciones[".arrGroupsPerPage"] = $arrGPP;

$tdatasolicitudes_vacaciones[".highlightSearchResults"] = true;

$tableKeyssolicitudes_vacaciones = array();
$tableKeyssolicitudes_vacaciones[] = "id";
$tdatasolicitudes_vacaciones[".Keys"] = $tableKeyssolicitudes_vacaciones;


$tdatasolicitudes_vacaciones[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "rrhh_permisos.solicitudes_vacaciones";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv.id";

	
	
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


	$tdatasolicitudes_vacaciones["id"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "id";
//	id_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_funcionario";
	$fdata["GoodName"] = "id_funcionario";
	$fdata["ownerTable"] = "rrhh_permisos.solicitudes_vacaciones";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","id_funcionario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_funcionario";

		$fdata["sourceSingle"] = "id_funcionario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv.id_funcionario";

	
	
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


	$tdatasolicitudes_vacaciones["id_funcionario"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "id_funcionario";
//	per_ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "per_ci";
	$fdata["GoodName"] = "per_ci";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","per_ci");
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


	$tdatasolicitudes_vacaciones["per_ci"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "per_ci";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","nombre_completo");
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


	$tdatasolicitudes_vacaciones["nombre_completo"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "nombre_completo";
//	tipo_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tipo_vinculacion";
	$fdata["GoodName"] = "tipo_vinculacion";
	$fdata["ownerTable"] = "rrhh_permisos.solicitudes_vacaciones";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","tipo_vinculacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_vinculacion";

		$fdata["sourceSingle"] = "tipo_vinculacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv.tipo_vinculacion";

	
	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "tfun_descri";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatasolicitudes_vacaciones["tipo_vinculacion"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "tipo_vinculacion";
//	dependencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dependencia_id";
	$fdata["GoodName"] = "dependencia_id";
	$fdata["ownerTable"] = "rrhh_permisos.solicitudes_vacaciones";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","dependencia_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dependencia_id";

		$fdata["sourceSingle"] = "dependencia_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv.dependencia_id";

	
	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "dep_descripcion_corta || ' - ' || dep_descripcion";

	

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


	$tdatasolicitudes_vacaciones["dependencia_id"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "dependencia_id";
//	fecha_desde
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_desde";
	$fdata["GoodName"] = "fecha_desde";
	$fdata["ownerTable"] = "rrhh_permisos.solicitudes_vacaciones";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","fecha_desde");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_desde";

		$fdata["sourceSingle"] = "fecha_desde";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv.fecha_desde";

	
	
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


	$tdatasolicitudes_vacaciones["fecha_desde"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "fecha_desde";
//	fecha_hasta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fecha_hasta";
	$fdata["GoodName"] = "fecha_hasta";
	$fdata["ownerTable"] = "rrhh_permisos.solicitudes_vacaciones";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","fecha_hasta");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_hasta";

		$fdata["sourceSingle"] = "fecha_hasta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv.fecha_hasta";

	
	
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


	$tdatasolicitudes_vacaciones["fecha_hasta"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "fecha_hasta";
//	total_dias_habiles
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "total_dias_habiles";
	$fdata["GoodName"] = "total_dias_habiles";
	$fdata["ownerTable"] = "rrhh_permisos.solicitudes_vacaciones";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","total_dias_habiles");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "total_dias_habiles";

		$fdata["sourceSingle"] = "total_dias_habiles";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv.total_dias_habiles";

	
	
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


	$tdatasolicitudes_vacaciones["total_dias_habiles"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "total_dias_habiles";
//	observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "observacion";
	$fdata["GoodName"] = "observacion";
	$fdata["ownerTable"] = "rrhh_permisos.solicitudes_vacaciones";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","observacion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "observacion";

		$fdata["sourceSingle"] = "observacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv.observacion";

	
	
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


	$tdatasolicitudes_vacaciones["observacion"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "observacion";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "rrhh_permisos.solicitudes_vacaciones";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado";

		$fdata["sourceSingle"] = "estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv.estado";

	
	
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


	$tdatasolicitudes_vacaciones["estado"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "estado";
//	fecha_creacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "fecha_creacion";
	$fdata["GoodName"] = "fecha_creacion";
	$fdata["ownerTable"] = "rrhh_permisos.solicitudes_vacaciones";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","fecha_creacion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_creacion";

		$fdata["sourceSingle"] = "fecha_creacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv.fecha_creacion";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatasolicitudes_vacaciones["fecha_creacion"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "fecha_creacion";
//	usuario_creador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "usuario_creador";
	$fdata["GoodName"] = "usuario_creador";
	$fdata["ownerTable"] = "rrhh_permisos.solicitudes_vacaciones";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","usuario_creador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usuario_creador";

		$fdata["sourceSingle"] = "usuario_creador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv.usuario_creador";

	
	
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


	$tdatasolicitudes_vacaciones["usuario_creador"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "usuario_creador";
//	fecha_actualizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "fecha_actualizacion";
	$fdata["GoodName"] = "fecha_actualizacion";
	$fdata["ownerTable"] = "rrhh_permisos.solicitudes_vacaciones";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","fecha_actualizacion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_actualizacion";

		$fdata["sourceSingle"] = "fecha_actualizacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv.fecha_actualizacion";

	
	
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


	$tdatasolicitudes_vacaciones["fecha_actualizacion"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "fecha_actualizacion";
//	usuario_actualizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "usuario_actualizacion";
	$fdata["GoodName"] = "usuario_actualizacion";
	$fdata["ownerTable"] = "rrhh_permisos.solicitudes_vacaciones";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","usuario_actualizacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usuario_actualizacion";

		$fdata["sourceSingle"] = "usuario_actualizacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sv.usuario_actualizacion";

	
	
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


	$tdatasolicitudes_vacaciones["usuario_actualizacion"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "usuario_actualizacion";
//	descripcion_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "descripcion_dependencia";
	$fdata["GoodName"] = "descripcion_dependencia";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("rrhh_permisos_solicitudes_vacaciones","descripcion_dependencia");
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


	$tdatasolicitudes_vacaciones["descripcion_dependencia"] = $fdata;
		$tdatasolicitudes_vacaciones[".searchableFields"][] = "descripcion_dependencia";


$tables_data["rrhh_permisos.solicitudes_vacaciones"]=&$tdatasolicitudes_vacaciones;
$field_labels["rrhh_permisos_solicitudes_vacaciones"] = &$fieldLabelssolicitudes_vacaciones;
$fieldToolTips["rrhh_permisos_solicitudes_vacaciones"] = &$fieldToolTipssolicitudes_vacaciones;
$placeHolders["rrhh_permisos_solicitudes_vacaciones"] = &$placeHolderssolicitudes_vacaciones;
$page_titles["rrhh_permisos_solicitudes_vacaciones"] = &$pageTitlessolicitudes_vacaciones;


changeTextControlsToDate( "rrhh_permisos.solicitudes_vacaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["rrhh_permisos.solicitudes_vacaciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["rrhh_permisos.solicitudes_vacaciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_solicitudes_vacaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sv.id,  	sv.id_funcionario,  	p.per_ci,  	p.per_nombre || ' ' || p.per_apellido AS nombre_completo,  	sv.tipo_vinculacion,  	sv.dependencia_id,  	sv.fecha_desde,  	sv.fecha_hasta,  	sv.total_dias_habiles,  	sv.observacion,  	sv.estado,  	sv.fecha_creacion,  	sv.usuario_creador,  	sv.fecha_actualizacion,  	sv.usuario_actualizacion,  	'' AS descripcion_dependencia";
$proto0["m_strFrom"] = "FROM rrhh_permisos.solicitudes_vacaciones sv   		LEFT JOIN public.personales p ON sv.id_funcionario = p.per_cod";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_strTable" => "sv",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto6["m_sql"] = "sv.id";
$proto6["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_funcionario",
	"m_strTable" => "sv",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto8["m_sql"] = "sv.id_funcionario";
$proto8["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "per_ci",
	"m_strTable" => "p",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto10["m_sql"] = "p.per_ci";
$proto10["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "p.per_nombre || ' ' || p.per_apellido"
));

$proto12["m_sql"] = "p.per_nombre || ' ' || p.per_apellido";
$proto12["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "nombre_completo";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_vinculacion",
	"m_strTable" => "sv",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto14["m_sql"] = "sv.tipo_vinculacion";
$proto14["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencia_id",
	"m_strTable" => "sv",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto16["m_sql"] = "sv.dependencia_id";
$proto16["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_desde",
	"m_strTable" => "sv",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto18["m_sql"] = "sv.fecha_desde";
$proto18["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_hasta",
	"m_strTable" => "sv",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto20["m_sql"] = "sv.fecha_hasta";
$proto20["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "total_dias_habiles",
	"m_strTable" => "sv",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto22["m_sql"] = "sv.total_dias_habiles";
$proto22["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "observacion",
	"m_strTable" => "sv",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto24["m_sql"] = "sv.observacion";
$proto24["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "sv",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto26["m_sql"] = "sv.estado";
$proto26["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_creacion",
	"m_strTable" => "sv",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto28["m_sql"] = "sv.fecha_creacion";
$proto28["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario_creador",
	"m_strTable" => "sv",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto30["m_sql"] = "sv.usuario_creador";
$proto30["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_actualizacion",
	"m_strTable" => "sv",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto32["m_sql"] = "sv.fecha_actualizacion";
$proto32["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario_actualizacion",
	"m_strTable" => "sv",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto34["m_sql"] = "sv.usuario_actualizacion";
$proto34["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto36["m_sql"] = "''";
$proto36["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "descripcion_dependencia";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto39["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id_funcionario";
$proto39["m_columns"][] = "tipo_vinculacion";
$proto39["m_columns"][] = "dependencia_id";
$proto39["m_columns"][] = "fecha_desde";
$proto39["m_columns"][] = "fecha_hasta";
$proto39["m_columns"][] = "total_dias_habiles";
$proto39["m_columns"][] = "observacion";
$proto39["m_columns"][] = "estado";
$proto39["m_columns"][] = "fecha_creacion";
$proto39["m_columns"][] = "usuario_creador";
$proto39["m_columns"][] = "fecha_actualizacion";
$proto39["m_columns"][] = "usuario_actualizacion";
$proto39["m_columns"][] = "id";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "rrhh_permisos.solicitudes_vacaciones sv";
$proto38["m_alias"] = "sv";
$proto38["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_LEFTJOIN";
			$proto43=array();
$proto43["m_strName"] = "public.personales";
$proto43["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "per_cod";
$proto43["m_columns"][] = "categoria_cat_codigo";
$proto43["m_columns"][] = "departamentos_dep_cod";
$proto43["m_columns"][] = "dependencias_dep_cod";
$proto43["m_columns"][] = "paises_pai_cod";
$proto43["m_columns"][] = "ciudades_ciu_cod";
$proto43["m_columns"][] = "profesiones_pro_cod";
$proto43["m_columns"][] = "per_profesional";
$proto43["m_columns"][] = "tipo_funcionario_tfun_cod";
$proto43["m_columns"][] = "per_institucion_origen";
$proto43["m_columns"][] = "cargos_car_cod";
$proto43["m_columns"][] = "per_nombre";
$proto43["m_columns"][] = "per_apellido";
$proto43["m_columns"][] = "per_ci";
$proto43["m_columns"][] = "per_sexo";
$proto43["m_columns"][] = "per_nacimiento";
$proto43["m_columns"][] = "per_est_civil";
$proto43["m_columns"][] = "per_gruposangre";
$proto43["m_columns"][] = "per_pcd";
$proto43["m_columns"][] = "per_domicilio";
$proto43["m_columns"][] = "per_barrio";
$proto43["m_columns"][] = "per_teleparticular";
$proto43["m_columns"][] = "per_telecelular";
$proto43["m_columns"][] = "per_email_part";
$proto43["m_columns"][] = "per_email_instit";
$proto43["m_columns"][] = "per_ruc";
$proto43["m_columns"][] = "per_contacto_eme";
$proto43["m_columns"][] = "per_tele_emer";
$proto43["m_columns"][] = "per_ingreso";
$proto43["m_columns"][] = "per_nombramiento";
$proto43["m_columns"][] = "per_estado";
$proto43["m_columns"][] = "per_usuario";
$proto43["m_columns"][] = "per_sede";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "LEFT JOIN public.personales p ON sv.id_funcionario = p.per_cod";
$proto42["m_alias"] = "p";
$proto42["m_srcTableName"] = "rrhh_permisos.solicitudes_vacaciones";
$proto44=array();
$proto44["m_sql"] = "p.per_cod = sv.id_funcionario";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "per_cod",
	"m_strTable" => "p",
	"m_srcTableName" => "rrhh_permisos.solicitudes_vacaciones"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= sv.id_funcionario";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="rrhh_permisos.solicitudes_vacaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_solicitudes_vacaciones = createSqlQuery_solicitudes_vacaciones();


	
		;

																

$tdatasolicitudes_vacaciones[".sqlquery"] = $queryData_solicitudes_vacaciones;



include_once(getabspath("include/solicitudes_vacaciones_events.php"));
$tdatasolicitudes_vacaciones[".hasEvents"] = true;

?>