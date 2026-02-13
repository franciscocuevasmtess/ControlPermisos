<?php
$tdatatipo_funcionario = array();
$tdatatipo_funcionario[".searchableFields"] = array();
$tdatatipo_funcionario[".ShortName"] = "tipo_funcionario";
$tdatatipo_funcionario[".OwnerID"] = "";
$tdatatipo_funcionario[".OriginalTable"] = "public.tipo_funcionario";


$tdatatipo_funcionario[".pagesByType"] = my_json_decode( "{}" );
$tdatatipo_funcionario[".originalPagesByType"] = $tdatatipo_funcionario[".pagesByType"];
$tdatatipo_funcionario[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatipo_funcionario[".originalPages"] = $tdatatipo_funcionario[".pages"];
$tdatatipo_funcionario[".defaultPages"] = my_json_decode( "{}" );
$tdatatipo_funcionario[".originalDefaultPages"] = $tdatatipo_funcionario[".defaultPages"];

//	field labels
$fieldLabelstipo_funcionario = array();
$fieldToolTipstipo_funcionario = array();
$pageTitlestipo_funcionario = array();
$placeHolderstipo_funcionario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_funcionario["Spanish"] = array();
	$fieldToolTipstipo_funcionario["Spanish"] = array();
	$placeHolderstipo_funcionario["Spanish"] = array();
	$pageTitlestipo_funcionario["Spanish"] = array();
	$fieldLabelstipo_funcionario["Spanish"]["tfun_cod"] = "Tfun Cod";
	$fieldToolTipstipo_funcionario["Spanish"]["tfun_cod"] = "";
	$placeHolderstipo_funcionario["Spanish"]["tfun_cod"] = "";
	$fieldLabelstipo_funcionario["Spanish"]["tfun_descri"] = "Tfun Descri";
	$fieldToolTipstipo_funcionario["Spanish"]["tfun_descri"] = "";
	$placeHolderstipo_funcionario["Spanish"]["tfun_descri"] = "";
	if (count($fieldToolTipstipo_funcionario["Spanish"]))
		$tdatatipo_funcionario[".isUseToolTips"] = true;
}


	$tdatatipo_funcionario[".NCSearch"] = true;



$tdatatipo_funcionario[".shortTableName"] = "tipo_funcionario";
$tdatatipo_funcionario[".nSecOptions"] = 0;

$tdatatipo_funcionario[".mainTableOwnerID"] = "";
$tdatatipo_funcionario[".entityType"] = 0;
$tdatatipo_funcionario[".connId"] = "dbtalentos_at_192_168_123_51";


$tdatatipo_funcionario[".strOriginalTableName"] = "public.tipo_funcionario";

	



$tdatatipo_funcionario[".showAddInPopup"] = false;

$tdatatipo_funcionario[".showEditInPopup"] = false;

$tdatatipo_funcionario[".showViewInPopup"] = false;

$tdatatipo_funcionario[".listAjax"] = false;
//	temporary
//$tdatatipo_funcionario[".listAjax"] = false;

	$tdatatipo_funcionario[".audit"] = false;

	$tdatatipo_funcionario[".locking"] = false;


$pages = $tdatatipo_funcionario[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipo_funcionario[".edit"] = true;
	$tdatatipo_funcionario[".afterEditAction"] = 1;
	$tdatatipo_funcionario[".closePopupAfterEdit"] = 1;
	$tdatatipo_funcionario[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipo_funcionario[".add"] = true;
$tdatatipo_funcionario[".afterAddAction"] = 1;
$tdatatipo_funcionario[".closePopupAfterAdd"] = 1;
$tdatatipo_funcionario[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipo_funcionario[".list"] = true;
}



$tdatatipo_funcionario[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipo_funcionario[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipo_funcionario[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipo_funcionario[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipo_funcionario[".printFriendly"] = true;
}



$tdatatipo_funcionario[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipo_funcionario[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipo_funcionario[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipo_funcionario[".isUseAjaxSuggest"] = true;





$tdatatipo_funcionario[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_funcionario[".buttonsAdded"] = false;

$tdatatipo_funcionario[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_funcionario[".isUseTimeForSearch"] = false;


$tdatatipo_funcionario[".badgeColor"] = "E67349";


$tdatatipo_funcionario[".allSearchFields"] = array();
$tdatatipo_funcionario[".filterFields"] = array();
$tdatatipo_funcionario[".requiredSearchFields"] = array();

$tdatatipo_funcionario[".googleLikeFields"] = array();
$tdatatipo_funcionario[".googleLikeFields"][] = "tfun_cod";
$tdatatipo_funcionario[".googleLikeFields"][] = "tfun_descri";



$tdatatipo_funcionario[".tableType"] = "list";

$tdatatipo_funcionario[".printerPageOrientation"] = 0;
$tdatatipo_funcionario[".nPrinterPageScale"] = 100;

$tdatatipo_funcionario[".nPrinterSplitRecords"] = 40;

$tdatatipo_funcionario[".geocodingEnabled"] = false;










$tdatatipo_funcionario[".pageSize"] = 20;

$tdatatipo_funcionario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipo_funcionario[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_funcionario[".orderindexes"] = array();


$tdatatipo_funcionario[".sqlHead"] = "SELECT tfun_cod,  	tfun_descri";
$tdatatipo_funcionario[".sqlFrom"] = "FROM \"public\".tipo_funcionario";
$tdatatipo_funcionario[".sqlWhereExpr"] = "";
$tdatatipo_funcionario[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_funcionario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_funcionario[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_funcionario[".highlightSearchResults"] = true;

$tableKeystipo_funcionario = array();
$tableKeystipo_funcionario[] = "tfun_cod";
$tdatatipo_funcionario[".Keys"] = $tableKeystipo_funcionario;


$tdatatipo_funcionario[".hideMobileList"] = array();




//	tfun_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tfun_cod";
	$fdata["GoodName"] = "tfun_cod";
	$fdata["ownerTable"] = "public.tipo_funcionario";
	$fdata["Label"] = GetFieldLabel("public_tipo_funcionario","tfun_cod");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tfun_cod";

		$fdata["sourceSingle"] = "tfun_cod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tfun_cod";

	
	
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


	$tdatatipo_funcionario["tfun_cod"] = $fdata;
		$tdatatipo_funcionario[".searchableFields"][] = "tfun_cod";
//	tfun_descri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tfun_descri";
	$fdata["GoodName"] = "tfun_descri";
	$fdata["ownerTable"] = "public.tipo_funcionario";
	$fdata["Label"] = GetFieldLabel("public_tipo_funcionario","tfun_descri");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tfun_descri";

		$fdata["sourceSingle"] = "tfun_descri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tfun_descri";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatatipo_funcionario["tfun_descri"] = $fdata;
		$tdatatipo_funcionario[".searchableFields"][] = "tfun_descri";


$tables_data["public.tipo_funcionario"]=&$tdatatipo_funcionario;
$field_labels["public_tipo_funcionario"] = &$fieldLabelstipo_funcionario;
$fieldToolTips["public_tipo_funcionario"] = &$fieldToolTipstipo_funcionario;
$placeHolders["public_tipo_funcionario"] = &$placeHolderstipo_funcionario;
$page_titles["public_tipo_funcionario"] = &$pageTitlestipo_funcionario;


changeTextControlsToDate( "public.tipo_funcionario" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.tipo_funcionario"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.tipo_funcionario"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipo_funcionario()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tfun_cod,  	tfun_descri";
$proto0["m_strFrom"] = "FROM \"public\".tipo_funcionario";
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
	"m_strName" => "tfun_cod",
	"m_strTable" => "public.tipo_funcionario",
	"m_srcTableName" => "public.tipo_funcionario"
));

$proto6["m_sql"] = "tfun_cod";
$proto6["m_srcTableName"] = "public.tipo_funcionario";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tfun_descri",
	"m_strTable" => "public.tipo_funcionario",
	"m_srcTableName" => "public.tipo_funcionario"
));

$proto8["m_sql"] = "tfun_descri";
$proto8["m_srcTableName"] = "public.tipo_funcionario";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.tipo_funcionario";
$proto11["m_srcTableName"] = "public.tipo_funcionario";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "tfun_cod";
$proto11["m_columns"][] = "tfun_descri";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".tipo_funcionario";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.tipo_funcionario";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.tipo_funcionario";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_funcionario = createSqlQuery_tipo_funcionario();


	
		;

		

$tdatatipo_funcionario[".sqlquery"] = $queryData_tipo_funcionario;



$tdatatipo_funcionario[".hasEvents"] = false;

?>