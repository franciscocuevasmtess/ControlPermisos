<?php
$tdataanhos = array();
$tdataanhos[".searchableFields"] = array();
$tdataanhos[".ShortName"] = "anhos";
$tdataanhos[".OwnerID"] = "";
$tdataanhos[".OriginalTable"] = "public.anhos";


$tdataanhos[".pagesByType"] = my_json_decode( "{}" );
$tdataanhos[".originalPagesByType"] = $tdataanhos[".pagesByType"];
$tdataanhos[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataanhos[".originalPages"] = $tdataanhos[".pages"];
$tdataanhos[".defaultPages"] = my_json_decode( "{}" );
$tdataanhos[".originalDefaultPages"] = $tdataanhos[".defaultPages"];

//	field labels
$fieldLabelsanhos = array();
$fieldToolTipsanhos = array();
$pageTitlesanhos = array();
$placeHoldersanhos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsanhos["Spanish"] = array();
	$fieldToolTipsanhos["Spanish"] = array();
	$placeHoldersanhos["Spanish"] = array();
	$pageTitlesanhos["Spanish"] = array();
	$fieldLabelsanhos["Spanish"]["cod"] = "Cod";
	$fieldToolTipsanhos["Spanish"]["cod"] = "";
	$placeHoldersanhos["Spanish"]["cod"] = "";
	$fieldLabelsanhos["Spanish"]["numero"] = "Numero";
	$fieldToolTipsanhos["Spanish"]["numero"] = "";
	$placeHoldersanhos["Spanish"]["numero"] = "";
	$fieldLabelsanhos["Spanish"]["numero_meses"] = "Numero Meses";
	$fieldToolTipsanhos["Spanish"]["numero_meses"] = "";
	$placeHoldersanhos["Spanish"]["numero_meses"] = "";
	if (count($fieldToolTipsanhos["Spanish"]))
		$tdataanhos[".isUseToolTips"] = true;
}


	$tdataanhos[".NCSearch"] = true;



$tdataanhos[".shortTableName"] = "anhos";
$tdataanhos[".nSecOptions"] = 0;

$tdataanhos[".mainTableOwnerID"] = "";
$tdataanhos[".entityType"] = 0;
$tdataanhos[".connId"] = "dbtalentos_at_192_168_123_51";


$tdataanhos[".strOriginalTableName"] = "public.anhos";

	



$tdataanhos[".showAddInPopup"] = false;

$tdataanhos[".showEditInPopup"] = false;

$tdataanhos[".showViewInPopup"] = false;

$tdataanhos[".listAjax"] = false;
//	temporary
//$tdataanhos[".listAjax"] = false;

	$tdataanhos[".audit"] = false;

	$tdataanhos[".locking"] = false;


$pages = $tdataanhos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataanhos[".edit"] = true;
	$tdataanhos[".afterEditAction"] = 1;
	$tdataanhos[".closePopupAfterEdit"] = 1;
	$tdataanhos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataanhos[".add"] = true;
$tdataanhos[".afterAddAction"] = 1;
$tdataanhos[".closePopupAfterAdd"] = 1;
$tdataanhos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataanhos[".list"] = true;
}



$tdataanhos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataanhos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataanhos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataanhos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataanhos[".printFriendly"] = true;
}



$tdataanhos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataanhos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataanhos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataanhos[".isUseAjaxSuggest"] = true;



						

$tdataanhos[".ajaxCodeSnippetAdded"] = false;

$tdataanhos[".buttonsAdded"] = false;

$tdataanhos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataanhos[".isUseTimeForSearch"] = false;


$tdataanhos[".badgeColor"] = "00C2C5";


$tdataanhos[".allSearchFields"] = array();
$tdataanhos[".filterFields"] = array();
$tdataanhos[".requiredSearchFields"] = array();

$tdataanhos[".googleLikeFields"] = array();
$tdataanhos[".googleLikeFields"][] = "cod";
$tdataanhos[".googleLikeFields"][] = "numero";
$tdataanhos[".googleLikeFields"][] = "numero_meses";



$tdataanhos[".tableType"] = "list";

$tdataanhos[".printerPageOrientation"] = 0;
$tdataanhos[".nPrinterPageScale"] = 100;

$tdataanhos[".nPrinterSplitRecords"] = 40;

$tdataanhos[".geocodingEnabled"] = false;










$tdataanhos[".pageSize"] = 20;

$tdataanhos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataanhos[".strOrderBy"] = $tstrOrderBy;

$tdataanhos[".orderindexes"] = array();


$tdataanhos[".sqlHead"] = "SELECT cod,  	numero,  	numero_meses";
$tdataanhos[".sqlFrom"] = "FROM \"public\".anhos";
$tdataanhos[".sqlWhereExpr"] = "";
$tdataanhos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanhos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanhos[".arrGroupsPerPage"] = $arrGPP;

$tdataanhos[".highlightSearchResults"] = true;

$tableKeysanhos = array();
$tableKeysanhos[] = "cod";
$tdataanhos[".Keys"] = $tableKeysanhos;


$tdataanhos[".hideMobileList"] = array();




//	cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod";
	$fdata["GoodName"] = "cod";
	$fdata["ownerTable"] = "public.anhos";
	$fdata["Label"] = GetFieldLabel("public_anhos","cod");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cod";

		$fdata["sourceSingle"] = "cod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod";

	
	
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


	$tdataanhos["cod"] = $fdata;
		$tdataanhos[".searchableFields"][] = "cod";
//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "public.anhos";
	$fdata["Label"] = GetFieldLabel("public_anhos","numero");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "numero";

		$fdata["sourceSingle"] = "numero";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero";

	
	
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


	$tdataanhos["numero"] = $fdata;
		$tdataanhos[".searchableFields"][] = "numero";
//	numero_meses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "numero_meses";
	$fdata["GoodName"] = "numero_meses";
	$fdata["ownerTable"] = "public.anhos";
	$fdata["Label"] = GetFieldLabel("public_anhos","numero_meses");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "numero_meses";

		$fdata["sourceSingle"] = "numero_meses";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero_meses";

	
	
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


	$tdataanhos["numero_meses"] = $fdata;
		$tdataanhos[".searchableFields"][] = "numero_meses";


$tables_data["public.anhos"]=&$tdataanhos;
$field_labels["public_anhos"] = &$fieldLabelsanhos;
$fieldToolTips["public_anhos"] = &$fieldToolTipsanhos;
$placeHolders["public_anhos"] = &$placeHoldersanhos;
$page_titles["public_anhos"] = &$pageTitlesanhos;


changeTextControlsToDate( "public.anhos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.anhos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.anhos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_anhos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cod,  	numero,  	numero_meses";
$proto0["m_strFrom"] = "FROM \"public\".anhos";
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
	"m_strName" => "cod",
	"m_strTable" => "public.anhos",
	"m_srcTableName" => "public.anhos"
));

$proto6["m_sql"] = "cod";
$proto6["m_srcTableName"] = "public.anhos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "public.anhos",
	"m_srcTableName" => "public.anhos"
));

$proto8["m_sql"] = "numero";
$proto8["m_srcTableName"] = "public.anhos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_meses",
	"m_strTable" => "public.anhos",
	"m_srcTableName" => "public.anhos"
));

$proto10["m_sql"] = "numero_meses";
$proto10["m_srcTableName"] = "public.anhos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.anhos";
$proto13["m_srcTableName"] = "public.anhos";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "cod";
$proto13["m_columns"][] = "numero";
$proto13["m_columns"][] = "numero_meses";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".anhos";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.anhos";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.anhos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_anhos = createSqlQuery_anhos();


	
		;

			

$tdataanhos[".sqlquery"] = $queryData_anhos;



$tdataanhos[".hasEvents"] = false;

?>