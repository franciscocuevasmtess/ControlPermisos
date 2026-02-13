<?php
$tdatausuarios = array();
$tdatausuarios[".searchableFields"] = array();
$tdatausuarios[".ShortName"] = "usuarios";
$tdatausuarios[".OwnerID"] = "";
$tdatausuarios[".OriginalTable"] = "public.usuarios";


$tdatausuarios[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatausuarios[".originalPagesByType"] = $tdatausuarios[".pagesByType"];
$tdatausuarios[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatausuarios[".originalPages"] = $tdatausuarios[".pages"];
$tdatausuarios[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatausuarios[".originalDefaultPages"] = $tdatausuarios[".defaultPages"];

//	field labels
$fieldLabelsusuarios = array();
$fieldToolTipsusuarios = array();
$pageTitlesusuarios = array();
$placeHoldersusuarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuarios["Spanish"] = array();
	$fieldToolTipsusuarios["Spanish"] = array();
	$placeHoldersusuarios["Spanish"] = array();
	$pageTitlesusuarios["Spanish"] = array();
	$fieldLabelsusuarios["Spanish"]["usu_cod"] = "Usu Cod";
	$fieldToolTipsusuarios["Spanish"]["usu_cod"] = "";
	$placeHoldersusuarios["Spanish"]["usu_cod"] = "";
	$fieldLabelsusuarios["Spanish"]["usu_usuario"] = "Usu Usuario";
	$fieldToolTipsusuarios["Spanish"]["usu_usuario"] = "";
	$placeHoldersusuarios["Spanish"]["usu_usuario"] = "";
	$fieldLabelsusuarios["Spanish"]["usu_contrasenha"] = "Usu Contrasenha";
	$fieldToolTipsusuarios["Spanish"]["usu_contrasenha"] = "";
	$placeHoldersusuarios["Spanish"]["usu_contrasenha"] = "";
	$fieldLabelsusuarios["Spanish"]["usu_nombre"] = "Usu Nombre";
	$fieldToolTipsusuarios["Spanish"]["usu_nombre"] = "";
	$placeHoldersusuarios["Spanish"]["usu_nombre"] = "";
	$fieldLabelsusuarios["Spanish"]["usu_dependencia"] = "Usu Dependencia";
	$fieldToolTipsusuarios["Spanish"]["usu_dependencia"] = "";
	$placeHoldersusuarios["Spanish"]["usu_dependencia"] = "";
	$fieldLabelsusuarios["Spanish"]["usu_personal"] = "Usu Personal";
	$fieldToolTipsusuarios["Spanish"]["usu_personal"] = "";
	$placeHoldersusuarios["Spanish"]["usu_personal"] = "";
	$fieldLabelsusuarios["Spanish"]["usu_correo"] = "Usu Correo";
	$fieldToolTipsusuarios["Spanish"]["usu_correo"] = "";
	$placeHoldersusuarios["Spanish"]["usu_correo"] = "";
	$fieldLabelsusuarios["Spanish"]["active"] = "Active";
	$fieldToolTipsusuarios["Spanish"]["active"] = "";
	$placeHoldersusuarios["Spanish"]["active"] = "";
	$fieldLabelsusuarios["Spanish"]["rol"] = "Rol";
	$fieldToolTipsusuarios["Spanish"]["rol"] = "";
	$placeHoldersusuarios["Spanish"]["rol"] = "";
	$fieldLabelsusuarios["Spanish"]["two_factor"] = "Two Factor";
	$fieldToolTipsusuarios["Spanish"]["two_factor"] = "";
	$placeHoldersusuarios["Spanish"]["two_factor"] = "";
	$fieldLabelsusuarios["Spanish"]["totp"] = "Totp";
	$fieldToolTipsusuarios["Spanish"]["totp"] = "";
	$placeHoldersusuarios["Spanish"]["totp"] = "";
	if (count($fieldToolTipsusuarios["Spanish"]))
		$tdatausuarios[".isUseToolTips"] = true;
}


	$tdatausuarios[".NCSearch"] = true;



$tdatausuarios[".shortTableName"] = "usuarios";
$tdatausuarios[".nSecOptions"] = 0;

$tdatausuarios[".mainTableOwnerID"] = "";
$tdatausuarios[".entityType"] = 0;
$tdatausuarios[".connId"] = "dbtalentos_at_192_168_123_51";


$tdatausuarios[".strOriginalTableName"] = "public.usuarios";

	



$tdatausuarios[".showAddInPopup"] = false;

$tdatausuarios[".showEditInPopup"] = false;

$tdatausuarios[".showViewInPopup"] = false;

$tdatausuarios[".listAjax"] = false;
//	temporary
//$tdatausuarios[".listAjax"] = false;

	$tdatausuarios[".audit"] = false;

	$tdatausuarios[".locking"] = false;


$pages = $tdatausuarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausuarios[".edit"] = true;
	$tdatausuarios[".afterEditAction"] = 1;
	$tdatausuarios[".closePopupAfterEdit"] = 1;
	$tdatausuarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausuarios[".add"] = true;
$tdatausuarios[".afterAddAction"] = 1;
$tdatausuarios[".closePopupAfterAdd"] = 1;
$tdatausuarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausuarios[".list"] = true;
}



$tdatausuarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausuarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausuarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausuarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausuarios[".printFriendly"] = true;
}



$tdatausuarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausuarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausuarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausuarios[".isUseAjaxSuggest"] = true;





$tdatausuarios[".ajaxCodeSnippetAdded"] = false;

$tdatausuarios[".buttonsAdded"] = false;

$tdatausuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuarios[".isUseTimeForSearch"] = false;


$tdatausuarios[".badgeColor"] = "008B8B";


$tdatausuarios[".allSearchFields"] = array();
$tdatausuarios[".filterFields"] = array();
$tdatausuarios[".requiredSearchFields"] = array();

$tdatausuarios[".googleLikeFields"] = array();
$tdatausuarios[".googleLikeFields"][] = "usu_cod";
$tdatausuarios[".googleLikeFields"][] = "usu_usuario";
$tdatausuarios[".googleLikeFields"][] = "usu_contrasenha";
$tdatausuarios[".googleLikeFields"][] = "usu_nombre";
$tdatausuarios[".googleLikeFields"][] = "usu_dependencia";
$tdatausuarios[".googleLikeFields"][] = "usu_personal";
$tdatausuarios[".googleLikeFields"][] = "usu_correo";
$tdatausuarios[".googleLikeFields"][] = "active";
$tdatausuarios[".googleLikeFields"][] = "rol";
$tdatausuarios[".googleLikeFields"][] = "two_factor";
$tdatausuarios[".googleLikeFields"][] = "totp";



$tdatausuarios[".tableType"] = "list";

$tdatausuarios[".printerPageOrientation"] = 0;
$tdatausuarios[".nPrinterPageScale"] = 100;

$tdatausuarios[".nPrinterSplitRecords"] = 40;

$tdatausuarios[".geocodingEnabled"] = false;










$tdatausuarios[".pageSize"] = 20;

$tdatausuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausuarios[".strOrderBy"] = $tstrOrderBy;

$tdatausuarios[".orderindexes"] = array();


$tdatausuarios[".sqlHead"] = "SELECT usu_cod,  	usu_usuario,  	usu_contrasenha,  	usu_nombre,  	usu_dependencia,  	usu_personal,  	usu_correo,  	active,  	rol,  	two_factor,  	totp";
$tdatausuarios[".sqlFrom"] = "FROM \"public\".usuarios";
$tdatausuarios[".sqlWhereExpr"] = "";
$tdatausuarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatausuarios[".highlightSearchResults"] = true;

$tableKeysusuarios = array();
$tableKeysusuarios[] = "usu_cod";
$tdatausuarios[".Keys"] = $tableKeysusuarios;


$tdatausuarios[".hideMobileList"] = array();




//	usu_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "usu_cod";
	$fdata["GoodName"] = "usu_cod";
	$fdata["ownerTable"] = "public.usuarios";
	$fdata["Label"] = GetFieldLabel("public_usuarios","usu_cod");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "usu_cod";

		$fdata["sourceSingle"] = "usu_cod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usu_cod";

	
	
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


	$tdatausuarios["usu_cod"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "usu_cod";
//	usu_usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "usu_usuario";
	$fdata["GoodName"] = "usu_usuario";
	$fdata["ownerTable"] = "public.usuarios";
	$fdata["Label"] = GetFieldLabel("public_usuarios","usu_usuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usu_usuario";

		$fdata["sourceSingle"] = "usu_usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usu_usuario";

	
	
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


	$tdatausuarios["usu_usuario"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "usu_usuario";
//	usu_contrasenha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "usu_contrasenha";
	$fdata["GoodName"] = "usu_contrasenha";
	$fdata["ownerTable"] = "public.usuarios";
	$fdata["Label"] = GetFieldLabel("public_usuarios","usu_contrasenha");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usu_contrasenha";

		$fdata["sourceSingle"] = "usu_contrasenha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usu_contrasenha";

	
	
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


	$tdatausuarios["usu_contrasenha"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "usu_contrasenha";
//	usu_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "usu_nombre";
	$fdata["GoodName"] = "usu_nombre";
	$fdata["ownerTable"] = "public.usuarios";
	$fdata["Label"] = GetFieldLabel("public_usuarios","usu_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usu_nombre";

		$fdata["sourceSingle"] = "usu_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usu_nombre";

	
	
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


	$tdatausuarios["usu_nombre"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "usu_nombre";
//	usu_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usu_dependencia";
	$fdata["GoodName"] = "usu_dependencia";
	$fdata["ownerTable"] = "public.usuarios";
	$fdata["Label"] = GetFieldLabel("public_usuarios","usu_dependencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usu_dependencia";

		$fdata["sourceSingle"] = "usu_dependencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usu_dependencia";

	
	
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


	$tdatausuarios["usu_dependencia"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "usu_dependencia";
//	usu_personal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usu_personal";
	$fdata["GoodName"] = "usu_personal";
	$fdata["ownerTable"] = "public.usuarios";
	$fdata["Label"] = GetFieldLabel("public_usuarios","usu_personal");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usu_personal";

		$fdata["sourceSingle"] = "usu_personal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usu_personal";

	
	
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


	$tdatausuarios["usu_personal"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "usu_personal";
//	usu_correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "usu_correo";
	$fdata["GoodName"] = "usu_correo";
	$fdata["ownerTable"] = "public.usuarios";
	$fdata["Label"] = GetFieldLabel("public_usuarios","usu_correo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usu_correo";

		$fdata["sourceSingle"] = "usu_correo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usu_correo";

	
	
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


	$tdatausuarios["usu_correo"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "usu_correo";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "public.usuarios";
	$fdata["Label"] = GetFieldLabel("public_usuarios","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdatausuarios["active"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "active";
//	rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rol";
	$fdata["GoodName"] = "rol";
	$fdata["ownerTable"] = "public.usuarios";
	$fdata["Label"] = GetFieldLabel("public_usuarios","rol");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "rol";

		$fdata["sourceSingle"] = "rol";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rol";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "public.roles";
	$edata["LookupConnId"] = "dbtalentos_at_192_168_123_51";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "rol_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "rol_nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdatausuarios["rol"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "rol";
//	two_factor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "two_factor";
	$fdata["GoodName"] = "two_factor";
	$fdata["ownerTable"] = "public.usuarios";
	$fdata["Label"] = GetFieldLabel("public_usuarios","two_factor");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "two_factor";

		$fdata["sourceSingle"] = "two_factor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "two_factor";

	
	
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


	$tdatausuarios["two_factor"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "two_factor";
//	totp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "totp";
	$fdata["GoodName"] = "totp";
	$fdata["ownerTable"] = "public.usuarios";
	$fdata["Label"] = GetFieldLabel("public_usuarios","totp");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "totp";

		$fdata["sourceSingle"] = "totp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "totp";

	
	
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


	$tdatausuarios["totp"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "totp";


$tables_data["public.usuarios"]=&$tdatausuarios;
$field_labels["public_usuarios"] = &$fieldLabelsusuarios;
$fieldToolTips["public_usuarios"] = &$fieldToolTipsusuarios;
$placeHolders["public_usuarios"] = &$placeHoldersusuarios;
$page_titles["public_usuarios"] = &$pageTitlesusuarios;


changeTextControlsToDate( "public.usuarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.usuarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.usuarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "usu_cod,  	usu_usuario,  	usu_contrasenha,  	usu_nombre,  	usu_dependencia,  	usu_personal,  	usu_correo,  	active,  	rol,  	two_factor,  	totp";
$proto0["m_strFrom"] = "FROM \"public\".usuarios";
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
	"m_strName" => "usu_cod",
	"m_strTable" => "public.usuarios",
	"m_srcTableName" => "public.usuarios"
));

$proto6["m_sql"] = "usu_cod";
$proto6["m_srcTableName"] = "public.usuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_usuario",
	"m_strTable" => "public.usuarios",
	"m_srcTableName" => "public.usuarios"
));

$proto8["m_sql"] = "usu_usuario";
$proto8["m_srcTableName"] = "public.usuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_contrasenha",
	"m_strTable" => "public.usuarios",
	"m_srcTableName" => "public.usuarios"
));

$proto10["m_sql"] = "usu_contrasenha";
$proto10["m_srcTableName"] = "public.usuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_nombre",
	"m_strTable" => "public.usuarios",
	"m_srcTableName" => "public.usuarios"
));

$proto12["m_sql"] = "usu_nombre";
$proto12["m_srcTableName"] = "public.usuarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_dependencia",
	"m_strTable" => "public.usuarios",
	"m_srcTableName" => "public.usuarios"
));

$proto14["m_sql"] = "usu_dependencia";
$proto14["m_srcTableName"] = "public.usuarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_personal",
	"m_strTable" => "public.usuarios",
	"m_srcTableName" => "public.usuarios"
));

$proto16["m_sql"] = "usu_personal";
$proto16["m_srcTableName"] = "public.usuarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "usu_correo",
	"m_strTable" => "public.usuarios",
	"m_srcTableName" => "public.usuarios"
));

$proto18["m_sql"] = "usu_correo";
$proto18["m_srcTableName"] = "public.usuarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "public.usuarios",
	"m_srcTableName" => "public.usuarios"
));

$proto20["m_sql"] = "active";
$proto20["m_srcTableName"] = "public.usuarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "rol",
	"m_strTable" => "public.usuarios",
	"m_srcTableName" => "public.usuarios"
));

$proto22["m_sql"] = "rol";
$proto22["m_srcTableName"] = "public.usuarios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "two_factor",
	"m_strTable" => "public.usuarios",
	"m_srcTableName" => "public.usuarios"
));

$proto24["m_sql"] = "two_factor";
$proto24["m_srcTableName"] = "public.usuarios";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "totp",
	"m_strTable" => "public.usuarios",
	"m_srcTableName" => "public.usuarios"
));

$proto26["m_sql"] = "totp";
$proto26["m_srcTableName"] = "public.usuarios";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "public.usuarios";
$proto29["m_srcTableName"] = "public.usuarios";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "usu_cod";
$proto29["m_columns"][] = "usu_usuario";
$proto29["m_columns"][] = "usu_contrasenha";
$proto29["m_columns"][] = "usu_nombre";
$proto29["m_columns"][] = "usu_dependencia";
$proto29["m_columns"][] = "usu_personal";
$proto29["m_columns"][] = "usu_correo";
$proto29["m_columns"][] = "active";
$proto29["m_columns"][] = "rol";
$proto29["m_columns"][] = "two_factor";
$proto29["m_columns"][] = "totp";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "\"public\".usuarios";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "public.usuarios";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.usuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuarios = createSqlQuery_usuarios();


	
		;

											

$tdatausuarios[".sqlquery"] = $queryData_usuarios;



$tdatausuarios[".hasEvents"] = false;

?>