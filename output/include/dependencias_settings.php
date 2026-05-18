<?php
$tdatadependencias = array();
$tdatadependencias[".searchableFields"] = array();
$tdatadependencias[".ShortName"] = "dependencias";
$tdatadependencias[".OwnerID"] = "";
$tdatadependencias[".OriginalTable"] = "public.dependencias";


$tdatadependencias[".pagesByType"] = my_json_decode( "{}" );
$tdatadependencias[".originalPagesByType"] = $tdatadependencias[".pagesByType"];
$tdatadependencias[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatadependencias[".originalPages"] = $tdatadependencias[".pages"];
$tdatadependencias[".defaultPages"] = my_json_decode( "{}" );
$tdatadependencias[".originalDefaultPages"] = $tdatadependencias[".defaultPages"];

//	field labels
$fieldLabelsdependencias = array();
$fieldToolTipsdependencias = array();
$pageTitlesdependencias = array();
$placeHoldersdependencias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdependencias["Spanish"] = array();
	$fieldToolTipsdependencias["Spanish"] = array();
	$placeHoldersdependencias["Spanish"] = array();
	$pageTitlesdependencias["Spanish"] = array();
	$fieldLabelsdependencias["Spanish"]["dep_cod"] = "Dep Cod";
	$fieldToolTipsdependencias["Spanish"]["dep_cod"] = "";
	$placeHoldersdependencias["Spanish"]["dep_cod"] = "";
	$fieldLabelsdependencias["Spanish"]["dep_descripcion_corta"] = "Dep Descripcion Corta";
	$fieldToolTipsdependencias["Spanish"]["dep_descripcion_corta"] = "";
	$placeHoldersdependencias["Spanish"]["dep_descripcion_corta"] = "";
	$fieldLabelsdependencias["Spanish"]["dep_descripcion"] = "Dep Descripcion";
	$fieldToolTipsdependencias["Spanish"]["dep_descripcion"] = "";
	$placeHoldersdependencias["Spanish"]["dep_descripcion"] = "";
	$fieldLabelsdependencias["Spanish"]["dep_padre"] = "Dep Padre";
	$fieldToolTipsdependencias["Spanish"]["dep_padre"] = "";
	$placeHoldersdependencias["Spanish"]["dep_padre"] = "";
	$fieldLabelsdependencias["Spanish"]["dep_estado"] = "Dep Estado";
	$fieldToolTipsdependencias["Spanish"]["dep_estado"] = "";
	$placeHoldersdependencias["Spanish"]["dep_estado"] = "";
	if (count($fieldToolTipsdependencias["Spanish"]))
		$tdatadependencias[".isUseToolTips"] = true;
}


	$tdatadependencias[".NCSearch"] = true;



$tdatadependencias[".shortTableName"] = "dependencias";
$tdatadependencias[".nSecOptions"] = 0;

$tdatadependencias[".mainTableOwnerID"] = "";
$tdatadependencias[".entityType"] = 0;
$tdatadependencias[".connId"] = "dbtalentos_at_192_168_123_51";


$tdatadependencias[".strOriginalTableName"] = "public.dependencias";

	



$tdatadependencias[".showAddInPopup"] = false;

$tdatadependencias[".showEditInPopup"] = false;

$tdatadependencias[".showViewInPopup"] = false;

$tdatadependencias[".listAjax"] = false;
//	temporary
//$tdatadependencias[".listAjax"] = false;

	$tdatadependencias[".audit"] = false;

	$tdatadependencias[".locking"] = false;


$pages = $tdatadependencias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadependencias[".edit"] = true;
	$tdatadependencias[".afterEditAction"] = 1;
	$tdatadependencias[".closePopupAfterEdit"] = 1;
	$tdatadependencias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadependencias[".add"] = true;
$tdatadependencias[".afterAddAction"] = 1;
$tdatadependencias[".closePopupAfterAdd"] = 1;
$tdatadependencias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadependencias[".list"] = true;
}



$tdatadependencias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadependencias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadependencias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadependencias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadependencias[".printFriendly"] = true;
}



$tdatadependencias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadependencias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadependencias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadependencias[".isUseAjaxSuggest"] = true;



						

$tdatadependencias[".ajaxCodeSnippetAdded"] = false;

$tdatadependencias[".buttonsAdded"] = false;

$tdatadependencias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadependencias[".isUseTimeForSearch"] = false;


$tdatadependencias[".badgeColor"] = "EDCA00";


$tdatadependencias[".allSearchFields"] = array();
$tdatadependencias[".filterFields"] = array();
$tdatadependencias[".requiredSearchFields"] = array();

$tdatadependencias[".googleLikeFields"] = array();
$tdatadependencias[".googleLikeFields"][] = "dep_cod";
$tdatadependencias[".googleLikeFields"][] = "dep_descripcion_corta";
$tdatadependencias[".googleLikeFields"][] = "dep_descripcion";
$tdatadependencias[".googleLikeFields"][] = "dep_padre";
$tdatadependencias[".googleLikeFields"][] = "dep_estado";



$tdatadependencias[".tableType"] = "list";

$tdatadependencias[".printerPageOrientation"] = 0;
$tdatadependencias[".nPrinterPageScale"] = 100;

$tdatadependencias[".nPrinterSplitRecords"] = 40;

$tdatadependencias[".geocodingEnabled"] = false;










$tdatadependencias[".pageSize"] = 20;

$tdatadependencias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadependencias[".strOrderBy"] = $tstrOrderBy;

$tdatadependencias[".orderindexes"] = array();


$tdatadependencias[".sqlHead"] = "SELECT dep_cod,  	dep_descripcion_corta,  	dep_descripcion,  	dep_padre,  	dep_estado";
$tdatadependencias[".sqlFrom"] = "FROM \"public\".dependencias";
$tdatadependencias[".sqlWhereExpr"] = "";
$tdatadependencias[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadependencias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadependencias[".arrGroupsPerPage"] = $arrGPP;

$tdatadependencias[".highlightSearchResults"] = true;

$tableKeysdependencias = array();
$tableKeysdependencias[] = "dep_cod";
$tdatadependencias[".Keys"] = $tableKeysdependencias;


$tdatadependencias[".hideMobileList"] = array();




//	dep_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dep_cod";
	$fdata["GoodName"] = "dep_cod";
	$fdata["ownerTable"] = "public.dependencias";
	$fdata["Label"] = GetFieldLabel("public_dependencias","dep_cod");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "dep_cod";

		$fdata["sourceSingle"] = "dep_cod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_cod";

	
	
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


	$tdatadependencias["dep_cod"] = $fdata;
		$tdatadependencias[".searchableFields"][] = "dep_cod";
//	dep_descripcion_corta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dep_descripcion_corta";
	$fdata["GoodName"] = "dep_descripcion_corta";
	$fdata["ownerTable"] = "public.dependencias";
	$fdata["Label"] = GetFieldLabel("public_dependencias","dep_descripcion_corta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dep_descripcion_corta";

		$fdata["sourceSingle"] = "dep_descripcion_corta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_descripcion_corta";

	
	
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


	$tdatadependencias["dep_descripcion_corta"] = $fdata;
		$tdatadependencias[".searchableFields"][] = "dep_descripcion_corta";
//	dep_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dep_descripcion";
	$fdata["GoodName"] = "dep_descripcion";
	$fdata["ownerTable"] = "public.dependencias";
	$fdata["Label"] = GetFieldLabel("public_dependencias","dep_descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dep_descripcion";

		$fdata["sourceSingle"] = "dep_descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_descripcion";

	
	
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


	$tdatadependencias["dep_descripcion"] = $fdata;
		$tdatadependencias[".searchableFields"][] = "dep_descripcion";
//	dep_padre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dep_padre";
	$fdata["GoodName"] = "dep_padre";
	$fdata["ownerTable"] = "public.dependencias";
	$fdata["Label"] = GetFieldLabel("public_dependencias","dep_padre");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dep_padre";

		$fdata["sourceSingle"] = "dep_padre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_padre";

	
	
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


	$tdatadependencias["dep_padre"] = $fdata;
		$tdatadependencias[".searchableFields"][] = "dep_padre";
//	dep_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dep_estado";
	$fdata["GoodName"] = "dep_estado";
	$fdata["ownerTable"] = "public.dependencias";
	$fdata["Label"] = GetFieldLabel("public_dependencias","dep_estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dep_estado";

		$fdata["sourceSingle"] = "dep_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_estado";

	
	
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


	$tdatadependencias["dep_estado"] = $fdata;
		$tdatadependencias[".searchableFields"][] = "dep_estado";


$tables_data["public.dependencias"]=&$tdatadependencias;
$field_labels["public_dependencias"] = &$fieldLabelsdependencias;
$fieldToolTips["public_dependencias"] = &$fieldToolTipsdependencias;
$placeHolders["public_dependencias"] = &$placeHoldersdependencias;
$page_titles["public_dependencias"] = &$pageTitlesdependencias;


changeTextControlsToDate( "public.dependencias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.dependencias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.dependencias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dependencias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dep_cod,  	dep_descripcion_corta,  	dep_descripcion,  	dep_padre,  	dep_estado";
$proto0["m_strFrom"] = "FROM \"public\".dependencias";
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
	"m_strName" => "dep_cod",
	"m_strTable" => "public.dependencias",
	"m_srcTableName" => "public.dependencias"
));

$proto6["m_sql"] = "dep_cod";
$proto6["m_srcTableName"] = "public.dependencias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_descripcion_corta",
	"m_strTable" => "public.dependencias",
	"m_srcTableName" => "public.dependencias"
));

$proto8["m_sql"] = "dep_descripcion_corta";
$proto8["m_srcTableName"] = "public.dependencias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_descripcion",
	"m_strTable" => "public.dependencias",
	"m_srcTableName" => "public.dependencias"
));

$proto10["m_sql"] = "dep_descripcion";
$proto10["m_srcTableName"] = "public.dependencias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_padre",
	"m_strTable" => "public.dependencias",
	"m_srcTableName" => "public.dependencias"
));

$proto12["m_sql"] = "dep_padre";
$proto12["m_srcTableName"] = "public.dependencias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_estado",
	"m_strTable" => "public.dependencias",
	"m_srcTableName" => "public.dependencias"
));

$proto14["m_sql"] = "dep_estado";
$proto14["m_srcTableName"] = "public.dependencias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.dependencias";
$proto17["m_srcTableName"] = "public.dependencias";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "dep_cod";
$proto17["m_columns"][] = "dep_descripcion_corta";
$proto17["m_columns"][] = "dep_descripcion";
$proto17["m_columns"][] = "dep_padre";
$proto17["m_columns"][] = "dep_estado";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".dependencias";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "public.dependencias";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.dependencias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dependencias = createSqlQuery_dependencias();


	
		;

					

$tdatadependencias[".sqlquery"] = $queryData_dependencias;



$tdatadependencias[".hasEvents"] = false;

?>