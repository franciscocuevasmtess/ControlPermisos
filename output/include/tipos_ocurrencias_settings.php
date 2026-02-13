<?php
$tdatatipos_ocurrencias = array();
$tdatatipos_ocurrencias[".searchableFields"] = array();
$tdatatipos_ocurrencias[".ShortName"] = "tipos_ocurrencias";
$tdatatipos_ocurrencias[".OwnerID"] = "";
$tdatatipos_ocurrencias[".OriginalTable"] = "public.tipos_ocurrencias";


$tdatatipos_ocurrencias[".pagesByType"] = my_json_decode( "{}" );
$tdatatipos_ocurrencias[".originalPagesByType"] = $tdatatipos_ocurrencias[".pagesByType"];
$tdatatipos_ocurrencias[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatipos_ocurrencias[".originalPages"] = $tdatatipos_ocurrencias[".pages"];
$tdatatipos_ocurrencias[".defaultPages"] = my_json_decode( "{}" );
$tdatatipos_ocurrencias[".originalDefaultPages"] = $tdatatipos_ocurrencias[".defaultPages"];

//	field labels
$fieldLabelstipos_ocurrencias = array();
$fieldToolTipstipos_ocurrencias = array();
$pageTitlestipos_ocurrencias = array();
$placeHolderstipos_ocurrencias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipos_ocurrencias["Spanish"] = array();
	$fieldToolTipstipos_ocurrencias["Spanish"] = array();
	$placeHolderstipos_ocurrencias["Spanish"] = array();
	$pageTitlestipos_ocurrencias["Spanish"] = array();
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_cod"] = "Tip Cod";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_cod"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_cod"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_descripcion"] = "Tip Descripcion";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_descripcion"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_descripcion"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_cantidad_maxima_mes"] = "Tip Cantidad Maxima Mes";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_cantidad_maxima_mes"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_cantidad_maxima_mes"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_cantidad_maxima_anho"] = "Tip Cantidad Maxima Anho";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_cantidad_maxima_anho"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_cantidad_maxima_anho"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_dias"] = "Tip Dias";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_dias"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_dias"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_codigo"] = "Tip Codigo";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_codigo"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_codigo"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_horas_extras"] = "Tip Horas Extras";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_horas_extras"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_horas_extras"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_sin_horas"] = "Tip Sin Horas";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_sin_horas"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_sin_horas"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_asistencia"] = "Tip Asistencia";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_asistencia"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_asistencia"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_llegada_tardia"] = "Tip Llegada Tardia";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_llegada_tardia"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_llegada_tardia"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_salida_temprana"] = "Tip Salida Temprana";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_salida_temprana"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_salida_temprana"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_asueto"] = "Tip Asueto";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_asueto"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_asueto"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_compensacion"] = "Tip Compensacion";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_compensacion"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_compensacion"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_estado"] = "Tip Estado";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_estado"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_estado"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_cod_tipo_sumatoria"] = "Tip Cod Tipo Sumatoria";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_cod_tipo_sumatoria"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_cod_tipo_sumatoria"] = "";
	$fieldLabelstipos_ocurrencias["Spanish"]["tip_horario_compensatorio"] = "Tip Horario Compensatorio";
	$fieldToolTipstipos_ocurrencias["Spanish"]["tip_horario_compensatorio"] = "";
	$placeHolderstipos_ocurrencias["Spanish"]["tip_horario_compensatorio"] = "";
	if (count($fieldToolTipstipos_ocurrencias["Spanish"]))
		$tdatatipos_ocurrencias[".isUseToolTips"] = true;
}


	$tdatatipos_ocurrencias[".NCSearch"] = true;



$tdatatipos_ocurrencias[".shortTableName"] = "tipos_ocurrencias";
$tdatatipos_ocurrencias[".nSecOptions"] = 0;

$tdatatipos_ocurrencias[".mainTableOwnerID"] = "";
$tdatatipos_ocurrencias[".entityType"] = 0;
$tdatatipos_ocurrencias[".connId"] = "dbtalentos_at_192_168_123_51";


$tdatatipos_ocurrencias[".strOriginalTableName"] = "public.tipos_ocurrencias";

	



$tdatatipos_ocurrencias[".showAddInPopup"] = false;

$tdatatipos_ocurrencias[".showEditInPopup"] = false;

$tdatatipos_ocurrencias[".showViewInPopup"] = false;

$tdatatipos_ocurrencias[".listAjax"] = false;
//	temporary
//$tdatatipos_ocurrencias[".listAjax"] = false;

	$tdatatipos_ocurrencias[".audit"] = false;

	$tdatatipos_ocurrencias[".locking"] = false;


$pages = $tdatatipos_ocurrencias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipos_ocurrencias[".edit"] = true;
	$tdatatipos_ocurrencias[".afterEditAction"] = 1;
	$tdatatipos_ocurrencias[".closePopupAfterEdit"] = 1;
	$tdatatipos_ocurrencias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipos_ocurrencias[".add"] = true;
$tdatatipos_ocurrencias[".afterAddAction"] = 1;
$tdatatipos_ocurrencias[".closePopupAfterAdd"] = 1;
$tdatatipos_ocurrencias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipos_ocurrencias[".list"] = true;
}



$tdatatipos_ocurrencias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipos_ocurrencias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipos_ocurrencias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipos_ocurrencias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipos_ocurrencias[".printFriendly"] = true;
}



$tdatatipos_ocurrencias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipos_ocurrencias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipos_ocurrencias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipos_ocurrencias[".isUseAjaxSuggest"] = true;





$tdatatipos_ocurrencias[".ajaxCodeSnippetAdded"] = false;

$tdatatipos_ocurrencias[".buttonsAdded"] = false;

$tdatatipos_ocurrencias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipos_ocurrencias[".isUseTimeForSearch"] = false;


$tdatatipos_ocurrencias[".badgeColor"] = "7B68EE";


$tdatatipos_ocurrencias[".allSearchFields"] = array();
$tdatatipos_ocurrencias[".filterFields"] = array();
$tdatatipos_ocurrencias[".requiredSearchFields"] = array();

$tdatatipos_ocurrencias[".googleLikeFields"] = array();
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_cod";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_descripcion";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_cantidad_maxima_mes";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_cantidad_maxima_anho";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_dias";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_codigo";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_horas_extras";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_sin_horas";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_asistencia";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_llegada_tardia";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_salida_temprana";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_asueto";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_compensacion";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_estado";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_cod_tipo_sumatoria";
$tdatatipos_ocurrencias[".googleLikeFields"][] = "tip_horario_compensatorio";



$tdatatipos_ocurrencias[".tableType"] = "list";

$tdatatipos_ocurrencias[".printerPageOrientation"] = 0;
$tdatatipos_ocurrencias[".nPrinterPageScale"] = 100;

$tdatatipos_ocurrencias[".nPrinterSplitRecords"] = 40;

$tdatatipos_ocurrencias[".geocodingEnabled"] = false;










$tdatatipos_ocurrencias[".pageSize"] = 20;

$tdatatipos_ocurrencias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipos_ocurrencias[".strOrderBy"] = $tstrOrderBy;

$tdatatipos_ocurrencias[".orderindexes"] = array();


$tdatatipos_ocurrencias[".sqlHead"] = "SELECT tip_cod,  	tip_descripcion,  	tip_cantidad_maxima_mes,  	tip_cantidad_maxima_anho,  	tip_dias,  	tip_codigo,  	tip_horas_extras,  	tip_sin_horas,  	tip_asistencia,  	tip_llegada_tardia,  	tip_salida_temprana,  	tip_asueto,  	tip_compensacion,  	tip_estado,  	tip_cod_tipo_sumatoria,  	tip_horario_compensatorio";
$tdatatipos_ocurrencias[".sqlFrom"] = "FROM \"public\".tipos_ocurrencias";
$tdatatipos_ocurrencias[".sqlWhereExpr"] = "";
$tdatatipos_ocurrencias[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipos_ocurrencias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipos_ocurrencias[".arrGroupsPerPage"] = $arrGPP;

$tdatatipos_ocurrencias[".highlightSearchResults"] = true;

$tableKeystipos_ocurrencias = array();
$tableKeystipos_ocurrencias[] = "tip_cod";
$tdatatipos_ocurrencias[".Keys"] = $tableKeystipos_ocurrencias;


$tdatatipos_ocurrencias[".hideMobileList"] = array();




//	tip_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tip_cod";
	$fdata["GoodName"] = "tip_cod";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_cod");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tip_cod";

		$fdata["sourceSingle"] = "tip_cod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_cod";

	
	
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


	$tdatatipos_ocurrencias["tip_cod"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_cod";
//	tip_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tip_descripcion";
	$fdata["GoodName"] = "tip_descripcion";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tip_descripcion";

		$fdata["sourceSingle"] = "tip_descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_descripcion";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatatipos_ocurrencias["tip_descripcion"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_descripcion";
//	tip_cantidad_maxima_mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tip_cantidad_maxima_mes";
	$fdata["GoodName"] = "tip_cantidad_maxima_mes";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_cantidad_maxima_mes");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tip_cantidad_maxima_mes";

		$fdata["sourceSingle"] = "tip_cantidad_maxima_mes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_cantidad_maxima_mes";

	
	
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


	$tdatatipos_ocurrencias["tip_cantidad_maxima_mes"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_cantidad_maxima_mes";
//	tip_cantidad_maxima_anho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tip_cantidad_maxima_anho";
	$fdata["GoodName"] = "tip_cantidad_maxima_anho";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_cantidad_maxima_anho");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tip_cantidad_maxima_anho";

		$fdata["sourceSingle"] = "tip_cantidad_maxima_anho";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_cantidad_maxima_anho";

	
	
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


	$tdatatipos_ocurrencias["tip_cantidad_maxima_anho"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_cantidad_maxima_anho";
//	tip_dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tip_dias";
	$fdata["GoodName"] = "tip_dias";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_dias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tip_dias";

		$fdata["sourceSingle"] = "tip_dias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_dias";

	
	
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


	$tdatatipos_ocurrencias["tip_dias"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_dias";
//	tip_codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tip_codigo";
	$fdata["GoodName"] = "tip_codigo";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tip_codigo";

		$fdata["sourceSingle"] = "tip_codigo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_codigo";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatatipos_ocurrencias["tip_codigo"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_codigo";
//	tip_horas_extras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tip_horas_extras";
	$fdata["GoodName"] = "tip_horas_extras";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_horas_extras");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "tip_horas_extras";

		$fdata["sourceSingle"] = "tip_horas_extras";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_horas_extras";

	
	
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


	$tdatatipos_ocurrencias["tip_horas_extras"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_horas_extras";
//	tip_sin_horas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tip_sin_horas";
	$fdata["GoodName"] = "tip_sin_horas";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_sin_horas");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "tip_sin_horas";

		$fdata["sourceSingle"] = "tip_sin_horas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_sin_horas";

	
	
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


	$tdatatipos_ocurrencias["tip_sin_horas"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_sin_horas";
//	tip_asistencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tip_asistencia";
	$fdata["GoodName"] = "tip_asistencia";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_asistencia");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "tip_asistencia";

		$fdata["sourceSingle"] = "tip_asistencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_asistencia";

	
	
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


	$tdatatipos_ocurrencias["tip_asistencia"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_asistencia";
//	tip_llegada_tardia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tip_llegada_tardia";
	$fdata["GoodName"] = "tip_llegada_tardia";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_llegada_tardia");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "tip_llegada_tardia";

		$fdata["sourceSingle"] = "tip_llegada_tardia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_llegada_tardia";

	
	
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


	$tdatatipos_ocurrencias["tip_llegada_tardia"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_llegada_tardia";
//	tip_salida_temprana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tip_salida_temprana";
	$fdata["GoodName"] = "tip_salida_temprana";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_salida_temprana");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "tip_salida_temprana";

		$fdata["sourceSingle"] = "tip_salida_temprana";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_salida_temprana";

	
	
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


	$tdatatipos_ocurrencias["tip_salida_temprana"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_salida_temprana";
//	tip_asueto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "tip_asueto";
	$fdata["GoodName"] = "tip_asueto";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_asueto");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "tip_asueto";

		$fdata["sourceSingle"] = "tip_asueto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_asueto";

	
	
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


	$tdatatipos_ocurrencias["tip_asueto"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_asueto";
//	tip_compensacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "tip_compensacion";
	$fdata["GoodName"] = "tip_compensacion";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_compensacion");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "tip_compensacion";

		$fdata["sourceSingle"] = "tip_compensacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_compensacion";

	
	
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


	$tdatatipos_ocurrencias["tip_compensacion"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_compensacion";
//	tip_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "tip_estado";
	$fdata["GoodName"] = "tip_estado";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tip_estado";

		$fdata["sourceSingle"] = "tip_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_estado";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatipos_ocurrencias["tip_estado"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_estado";
//	tip_cod_tipo_sumatoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "tip_cod_tipo_sumatoria";
	$fdata["GoodName"] = "tip_cod_tipo_sumatoria";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_cod_tipo_sumatoria");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tip_cod_tipo_sumatoria";

		$fdata["sourceSingle"] = "tip_cod_tipo_sumatoria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_cod_tipo_sumatoria";

	
	
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


	$tdatatipos_ocurrencias["tip_cod_tipo_sumatoria"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_cod_tipo_sumatoria";
//	tip_horario_compensatorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "tip_horario_compensatorio";
	$fdata["GoodName"] = "tip_horario_compensatorio";
	$fdata["ownerTable"] = "public.tipos_ocurrencias";
	$fdata["Label"] = GetFieldLabel("public_tipos_ocurrencias","tip_horario_compensatorio");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "tip_horario_compensatorio";

		$fdata["sourceSingle"] = "tip_horario_compensatorio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tip_horario_compensatorio";

	
	
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


	$tdatatipos_ocurrencias["tip_horario_compensatorio"] = $fdata;
		$tdatatipos_ocurrencias[".searchableFields"][] = "tip_horario_compensatorio";


$tables_data["public.tipos_ocurrencias"]=&$tdatatipos_ocurrencias;
$field_labels["public_tipos_ocurrencias"] = &$fieldLabelstipos_ocurrencias;
$fieldToolTips["public_tipos_ocurrencias"] = &$fieldToolTipstipos_ocurrencias;
$placeHolders["public_tipos_ocurrencias"] = &$placeHolderstipos_ocurrencias;
$page_titles["public_tipos_ocurrencias"] = &$pageTitlestipos_ocurrencias;


changeTextControlsToDate( "public.tipos_ocurrencias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.tipos_ocurrencias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.tipos_ocurrencias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipos_ocurrencias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tip_cod,  	tip_descripcion,  	tip_cantidad_maxima_mes,  	tip_cantidad_maxima_anho,  	tip_dias,  	tip_codigo,  	tip_horas_extras,  	tip_sin_horas,  	tip_asistencia,  	tip_llegada_tardia,  	tip_salida_temprana,  	tip_asueto,  	tip_compensacion,  	tip_estado,  	tip_cod_tipo_sumatoria,  	tip_horario_compensatorio";
$proto0["m_strFrom"] = "FROM \"public\".tipos_ocurrencias";
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
	"m_strName" => "tip_cod",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto6["m_sql"] = "tip_cod";
$proto6["m_srcTableName"] = "public.tipos_ocurrencias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_descripcion",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto8["m_sql"] = "tip_descripcion";
$proto8["m_srcTableName"] = "public.tipos_ocurrencias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_cantidad_maxima_mes",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto10["m_sql"] = "tip_cantidad_maxima_mes";
$proto10["m_srcTableName"] = "public.tipos_ocurrencias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_cantidad_maxima_anho",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto12["m_sql"] = "tip_cantidad_maxima_anho";
$proto12["m_srcTableName"] = "public.tipos_ocurrencias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_dias",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto14["m_sql"] = "tip_dias";
$proto14["m_srcTableName"] = "public.tipos_ocurrencias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_codigo",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto16["m_sql"] = "tip_codigo";
$proto16["m_srcTableName"] = "public.tipos_ocurrencias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_horas_extras",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto18["m_sql"] = "tip_horas_extras";
$proto18["m_srcTableName"] = "public.tipos_ocurrencias";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_sin_horas",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto20["m_sql"] = "tip_sin_horas";
$proto20["m_srcTableName"] = "public.tipos_ocurrencias";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_asistencia",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto22["m_sql"] = "tip_asistencia";
$proto22["m_srcTableName"] = "public.tipos_ocurrencias";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_llegada_tardia",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto24["m_sql"] = "tip_llegada_tardia";
$proto24["m_srcTableName"] = "public.tipos_ocurrencias";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_salida_temprana",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto26["m_sql"] = "tip_salida_temprana";
$proto26["m_srcTableName"] = "public.tipos_ocurrencias";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_asueto",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto28["m_sql"] = "tip_asueto";
$proto28["m_srcTableName"] = "public.tipos_ocurrencias";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_compensacion",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto30["m_sql"] = "tip_compensacion";
$proto30["m_srcTableName"] = "public.tipos_ocurrencias";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_estado",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto32["m_sql"] = "tip_estado";
$proto32["m_srcTableName"] = "public.tipos_ocurrencias";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_cod_tipo_sumatoria",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto34["m_sql"] = "tip_cod_tipo_sumatoria";
$proto34["m_srcTableName"] = "public.tipos_ocurrencias";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "tip_horario_compensatorio",
	"m_strTable" => "public.tipos_ocurrencias",
	"m_srcTableName" => "public.tipos_ocurrencias"
));

$proto36["m_sql"] = "tip_horario_compensatorio";
$proto36["m_srcTableName"] = "public.tipos_ocurrencias";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "public.tipos_ocurrencias";
$proto39["m_srcTableName"] = "public.tipos_ocurrencias";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "tip_cod";
$proto39["m_columns"][] = "tip_descripcion";
$proto39["m_columns"][] = "tip_cantidad_maxima_mes";
$proto39["m_columns"][] = "tip_cantidad_maxima_anho";
$proto39["m_columns"][] = "tip_dias";
$proto39["m_columns"][] = "tip_codigo";
$proto39["m_columns"][] = "tip_horas_extras";
$proto39["m_columns"][] = "tip_sin_horas";
$proto39["m_columns"][] = "tip_asistencia";
$proto39["m_columns"][] = "tip_llegada_tardia";
$proto39["m_columns"][] = "tip_salida_temprana";
$proto39["m_columns"][] = "tip_asueto";
$proto39["m_columns"][] = "tip_compensacion";
$proto39["m_columns"][] = "tip_estado";
$proto39["m_columns"][] = "tip_cod_tipo_sumatoria";
$proto39["m_columns"][] = "tip_horario_compensatorio";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "\"public\".tipos_ocurrencias";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "public.tipos_ocurrencias";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.tipos_ocurrencias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipos_ocurrencias = createSqlQuery_tipos_ocurrencias();


	
		;

																

$tdatatipos_ocurrencias[".sqlquery"] = $queryData_tipos_ocurrencias;



$tdatatipos_ocurrencias[".hasEvents"] = false;

?>