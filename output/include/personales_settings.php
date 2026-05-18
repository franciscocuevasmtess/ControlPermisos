<?php
$tdatapersonales = array();
$tdatapersonales[".searchableFields"] = array();
$tdatapersonales[".ShortName"] = "personales";
$tdatapersonales[".OwnerID"] = "";
$tdatapersonales[".OriginalTable"] = "public.personales";


$tdatapersonales[".pagesByType"] = my_json_decode( "{}" );
$tdatapersonales[".originalPagesByType"] = $tdatapersonales[".pagesByType"];
$tdatapersonales[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatapersonales[".originalPages"] = $tdatapersonales[".pages"];
$tdatapersonales[".defaultPages"] = my_json_decode( "{}" );
$tdatapersonales[".originalDefaultPages"] = $tdatapersonales[".defaultPages"];

//	field labels
$fieldLabelspersonales = array();
$fieldToolTipspersonales = array();
$pageTitlespersonales = array();
$placeHolderspersonales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersonales["Spanish"] = array();
	$fieldToolTipspersonales["Spanish"] = array();
	$placeHolderspersonales["Spanish"] = array();
	$pageTitlespersonales["Spanish"] = array();
	$fieldLabelspersonales["Spanish"]["per_cod"] = "Per Cod";
	$fieldToolTipspersonales["Spanish"]["per_cod"] = "";
	$placeHolderspersonales["Spanish"]["per_cod"] = "";
	$fieldLabelspersonales["Spanish"]["categoria_cat_codigo"] = "Categoria Cat Codigo";
	$fieldToolTipspersonales["Spanish"]["categoria_cat_codigo"] = "";
	$placeHolderspersonales["Spanish"]["categoria_cat_codigo"] = "";
	$fieldLabelspersonales["Spanish"]["departamentos_dep_cod"] = "Departamentos Dep Cod";
	$fieldToolTipspersonales["Spanish"]["departamentos_dep_cod"] = "";
	$placeHolderspersonales["Spanish"]["departamentos_dep_cod"] = "";
	$fieldLabelspersonales["Spanish"]["dependencias_dep_cod"] = "Dependencias Dep Cod";
	$fieldToolTipspersonales["Spanish"]["dependencias_dep_cod"] = "";
	$placeHolderspersonales["Spanish"]["dependencias_dep_cod"] = "";
	$fieldLabelspersonales["Spanish"]["paises_pai_cod"] = "Paises Pai Cod";
	$fieldToolTipspersonales["Spanish"]["paises_pai_cod"] = "";
	$placeHolderspersonales["Spanish"]["paises_pai_cod"] = "";
	$fieldLabelspersonales["Spanish"]["ciudades_ciu_cod"] = "Ciudades Ciu Cod";
	$fieldToolTipspersonales["Spanish"]["ciudades_ciu_cod"] = "";
	$placeHolderspersonales["Spanish"]["ciudades_ciu_cod"] = "";
	$fieldLabelspersonales["Spanish"]["profesiones_pro_cod"] = "Profesiones Pro Cod";
	$fieldToolTipspersonales["Spanish"]["profesiones_pro_cod"] = "";
	$placeHolderspersonales["Spanish"]["profesiones_pro_cod"] = "";
	$fieldLabelspersonales["Spanish"]["per_profesional"] = "Per Profesional";
	$fieldToolTipspersonales["Spanish"]["per_profesional"] = "";
	$placeHolderspersonales["Spanish"]["per_profesional"] = "";
	$fieldLabelspersonales["Spanish"]["tipo_funcionario_tfun_cod"] = "Tipo Funcionario Tfun Cod";
	$fieldToolTipspersonales["Spanish"]["tipo_funcionario_tfun_cod"] = "";
	$placeHolderspersonales["Spanish"]["tipo_funcionario_tfun_cod"] = "";
	$fieldLabelspersonales["Spanish"]["per_institucion_origen"] = "Per Institucion Origen";
	$fieldToolTipspersonales["Spanish"]["per_institucion_origen"] = "";
	$placeHolderspersonales["Spanish"]["per_institucion_origen"] = "";
	$fieldLabelspersonales["Spanish"]["cargos_car_cod"] = "Cargos Car Cod";
	$fieldToolTipspersonales["Spanish"]["cargos_car_cod"] = "";
	$placeHolderspersonales["Spanish"]["cargos_car_cod"] = "";
	$fieldLabelspersonales["Spanish"]["per_nombre"] = "Per Nombre";
	$fieldToolTipspersonales["Spanish"]["per_nombre"] = "";
	$placeHolderspersonales["Spanish"]["per_nombre"] = "";
	$fieldLabelspersonales["Spanish"]["per_apellido"] = "Per Apellido";
	$fieldToolTipspersonales["Spanish"]["per_apellido"] = "";
	$placeHolderspersonales["Spanish"]["per_apellido"] = "";
	$fieldLabelspersonales["Spanish"]["per_ci"] = "Per Ci";
	$fieldToolTipspersonales["Spanish"]["per_ci"] = "";
	$placeHolderspersonales["Spanish"]["per_ci"] = "";
	$fieldLabelspersonales["Spanish"]["per_sexo"] = "Per Sexo";
	$fieldToolTipspersonales["Spanish"]["per_sexo"] = "";
	$placeHolderspersonales["Spanish"]["per_sexo"] = "";
	$fieldLabelspersonales["Spanish"]["per_nacimiento"] = "Per Nacimiento";
	$fieldToolTipspersonales["Spanish"]["per_nacimiento"] = "";
	$placeHolderspersonales["Spanish"]["per_nacimiento"] = "";
	$fieldLabelspersonales["Spanish"]["per_est_civil"] = "Per Est Civil";
	$fieldToolTipspersonales["Spanish"]["per_est_civil"] = "";
	$placeHolderspersonales["Spanish"]["per_est_civil"] = "";
	$fieldLabelspersonales["Spanish"]["per_gruposangre"] = "Per Gruposangre";
	$fieldToolTipspersonales["Spanish"]["per_gruposangre"] = "";
	$placeHolderspersonales["Spanish"]["per_gruposangre"] = "";
	$fieldLabelspersonales["Spanish"]["per_pcd"] = "Per Pcd";
	$fieldToolTipspersonales["Spanish"]["per_pcd"] = "";
	$placeHolderspersonales["Spanish"]["per_pcd"] = "";
	$fieldLabelspersonales["Spanish"]["per_domicilio"] = "Per Domicilio";
	$fieldToolTipspersonales["Spanish"]["per_domicilio"] = "";
	$placeHolderspersonales["Spanish"]["per_domicilio"] = "";
	$fieldLabelspersonales["Spanish"]["per_barrio"] = "Per Barrio";
	$fieldToolTipspersonales["Spanish"]["per_barrio"] = "";
	$placeHolderspersonales["Spanish"]["per_barrio"] = "";
	$fieldLabelspersonales["Spanish"]["per_teleparticular"] = "Per Teleparticular";
	$fieldToolTipspersonales["Spanish"]["per_teleparticular"] = "";
	$placeHolderspersonales["Spanish"]["per_teleparticular"] = "";
	$fieldLabelspersonales["Spanish"]["per_telecelular"] = "Per Telecelular";
	$fieldToolTipspersonales["Spanish"]["per_telecelular"] = "";
	$placeHolderspersonales["Spanish"]["per_telecelular"] = "";
	$fieldLabelspersonales["Spanish"]["per_email_part"] = "Per Email Part";
	$fieldToolTipspersonales["Spanish"]["per_email_part"] = "";
	$placeHolderspersonales["Spanish"]["per_email_part"] = "";
	$fieldLabelspersonales["Spanish"]["per_email_instit"] = "Per Email Instit";
	$fieldToolTipspersonales["Spanish"]["per_email_instit"] = "";
	$placeHolderspersonales["Spanish"]["per_email_instit"] = "";
	$fieldLabelspersonales["Spanish"]["per_ruc"] = "Per Ruc";
	$fieldToolTipspersonales["Spanish"]["per_ruc"] = "";
	$placeHolderspersonales["Spanish"]["per_ruc"] = "";
	$fieldLabelspersonales["Spanish"]["per_contacto_eme"] = "Per Contacto Eme";
	$fieldToolTipspersonales["Spanish"]["per_contacto_eme"] = "";
	$placeHolderspersonales["Spanish"]["per_contacto_eme"] = "";
	$fieldLabelspersonales["Spanish"]["per_tele_emer"] = "Per Tele Emer";
	$fieldToolTipspersonales["Spanish"]["per_tele_emer"] = "";
	$placeHolderspersonales["Spanish"]["per_tele_emer"] = "";
	$fieldLabelspersonales["Spanish"]["per_ingreso"] = "Per Ingreso";
	$fieldToolTipspersonales["Spanish"]["per_ingreso"] = "";
	$placeHolderspersonales["Spanish"]["per_ingreso"] = "";
	$fieldLabelspersonales["Spanish"]["per_nombramiento"] = "Per Nombramiento";
	$fieldToolTipspersonales["Spanish"]["per_nombramiento"] = "";
	$placeHolderspersonales["Spanish"]["per_nombramiento"] = "";
	$fieldLabelspersonales["Spanish"]["per_estado"] = "Per Estado";
	$fieldToolTipspersonales["Spanish"]["per_estado"] = "";
	$placeHolderspersonales["Spanish"]["per_estado"] = "";
	$fieldLabelspersonales["Spanish"]["per_usuario"] = "Per Usuario";
	$fieldToolTipspersonales["Spanish"]["per_usuario"] = "";
	$placeHolderspersonales["Spanish"]["per_usuario"] = "";
	$fieldLabelspersonales["Spanish"]["per_sede"] = "Per Sede";
	$fieldToolTipspersonales["Spanish"]["per_sede"] = "";
	$placeHolderspersonales["Spanish"]["per_sede"] = "";
	if (count($fieldToolTipspersonales["Spanish"]))
		$tdatapersonales[".isUseToolTips"] = true;
}


	$tdatapersonales[".NCSearch"] = true;



$tdatapersonales[".shortTableName"] = "personales";
$tdatapersonales[".nSecOptions"] = 0;

$tdatapersonales[".mainTableOwnerID"] = "";
$tdatapersonales[".entityType"] = 0;
$tdatapersonales[".connId"] = "dbtalentos_at_192_168_123_51";


$tdatapersonales[".strOriginalTableName"] = "public.personales";

	



$tdatapersonales[".showAddInPopup"] = false;

$tdatapersonales[".showEditInPopup"] = false;

$tdatapersonales[".showViewInPopup"] = false;

$tdatapersonales[".listAjax"] = false;
//	temporary
//$tdatapersonales[".listAjax"] = false;

	$tdatapersonales[".audit"] = false;

	$tdatapersonales[".locking"] = false;


$pages = $tdatapersonales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersonales[".edit"] = true;
	$tdatapersonales[".afterEditAction"] = 1;
	$tdatapersonales[".closePopupAfterEdit"] = 1;
	$tdatapersonales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersonales[".add"] = true;
$tdatapersonales[".afterAddAction"] = 1;
$tdatapersonales[".closePopupAfterAdd"] = 1;
$tdatapersonales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersonales[".list"] = true;
}



$tdatapersonales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersonales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersonales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersonales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersonales[".printFriendly"] = true;
}



$tdatapersonales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersonales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersonales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersonales[".isUseAjaxSuggest"] = true;



						

$tdatapersonales[".ajaxCodeSnippetAdded"] = false;

$tdatapersonales[".buttonsAdded"] = false;

$tdatapersonales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersonales[".isUseTimeForSearch"] = false;


$tdatapersonales[".badgeColor"] = "7B68EE";


$tdatapersonales[".allSearchFields"] = array();
$tdatapersonales[".filterFields"] = array();
$tdatapersonales[".requiredSearchFields"] = array();

$tdatapersonales[".googleLikeFields"] = array();
$tdatapersonales[".googleLikeFields"][] = "per_cod";
$tdatapersonales[".googleLikeFields"][] = "categoria_cat_codigo";
$tdatapersonales[".googleLikeFields"][] = "departamentos_dep_cod";
$tdatapersonales[".googleLikeFields"][] = "dependencias_dep_cod";
$tdatapersonales[".googleLikeFields"][] = "paises_pai_cod";
$tdatapersonales[".googleLikeFields"][] = "ciudades_ciu_cod";
$tdatapersonales[".googleLikeFields"][] = "profesiones_pro_cod";
$tdatapersonales[".googleLikeFields"][] = "per_profesional";
$tdatapersonales[".googleLikeFields"][] = "tipo_funcionario_tfun_cod";
$tdatapersonales[".googleLikeFields"][] = "per_institucion_origen";
$tdatapersonales[".googleLikeFields"][] = "cargos_car_cod";
$tdatapersonales[".googleLikeFields"][] = "per_nombre";
$tdatapersonales[".googleLikeFields"][] = "per_apellido";
$tdatapersonales[".googleLikeFields"][] = "per_ci";
$tdatapersonales[".googleLikeFields"][] = "per_sexo";
$tdatapersonales[".googleLikeFields"][] = "per_nacimiento";
$tdatapersonales[".googleLikeFields"][] = "per_est_civil";
$tdatapersonales[".googleLikeFields"][] = "per_gruposangre";
$tdatapersonales[".googleLikeFields"][] = "per_pcd";
$tdatapersonales[".googleLikeFields"][] = "per_domicilio";
$tdatapersonales[".googleLikeFields"][] = "per_barrio";
$tdatapersonales[".googleLikeFields"][] = "per_teleparticular";
$tdatapersonales[".googleLikeFields"][] = "per_telecelular";
$tdatapersonales[".googleLikeFields"][] = "per_email_part";
$tdatapersonales[".googleLikeFields"][] = "per_email_instit";
$tdatapersonales[".googleLikeFields"][] = "per_ruc";
$tdatapersonales[".googleLikeFields"][] = "per_contacto_eme";
$tdatapersonales[".googleLikeFields"][] = "per_tele_emer";
$tdatapersonales[".googleLikeFields"][] = "per_ingreso";
$tdatapersonales[".googleLikeFields"][] = "per_nombramiento";
$tdatapersonales[".googleLikeFields"][] = "per_estado";
$tdatapersonales[".googleLikeFields"][] = "per_usuario";
$tdatapersonales[".googleLikeFields"][] = "per_sede";



$tdatapersonales[".tableType"] = "list";

$tdatapersonales[".printerPageOrientation"] = 0;
$tdatapersonales[".nPrinterPageScale"] = 100;

$tdatapersonales[".nPrinterSplitRecords"] = 40;

$tdatapersonales[".geocodingEnabled"] = false;










$tdatapersonales[".pageSize"] = 20;

$tdatapersonales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapersonales[".strOrderBy"] = $tstrOrderBy;

$tdatapersonales[".orderindexes"] = array();


$tdatapersonales[".sqlHead"] = "SELECT per_cod,  	categoria_cat_codigo,  	departamentos_dep_cod,  	dependencias_dep_cod,  	paises_pai_cod,  	ciudades_ciu_cod,  	profesiones_pro_cod,  	per_profesional,  	tipo_funcionario_tfun_cod,  	per_institucion_origen,  	cargos_car_cod,  	per_nombre,  	per_apellido,  	per_ci,  	per_sexo,  	per_nacimiento,  	per_est_civil,  	per_gruposangre,  	per_pcd,  	per_domicilio,  	per_barrio,  	per_teleparticular,  	per_telecelular,  	per_email_part,  	per_email_instit,  	per_ruc,  	per_contacto_eme,  	per_tele_emer,  	per_ingreso,  	per_nombramiento,  	per_estado,  	per_usuario,  	per_sede";
$tdatapersonales[".sqlFrom"] = "FROM \"public\".personales";
$tdatapersonales[".sqlWhereExpr"] = "";
$tdatapersonales[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersonales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersonales[".arrGroupsPerPage"] = $arrGPP;

$tdatapersonales[".highlightSearchResults"] = true;

$tableKeyspersonales = array();
$tableKeyspersonales[] = "per_cod";
$tdatapersonales[".Keys"] = $tableKeyspersonales;


$tdatapersonales[".hideMobileList"] = array();




//	per_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "per_cod";
	$fdata["GoodName"] = "per_cod";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_cod");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "per_cod";

		$fdata["sourceSingle"] = "per_cod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_cod";

	
	
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


	$tdatapersonales["per_cod"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_cod";
//	categoria_cat_codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "categoria_cat_codigo";
	$fdata["GoodName"] = "categoria_cat_codigo";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","categoria_cat_codigo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "categoria_cat_codigo";

		$fdata["sourceSingle"] = "categoria_cat_codigo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "categoria_cat_codigo";

	
	
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


	$tdatapersonales["categoria_cat_codigo"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "categoria_cat_codigo";
//	departamentos_dep_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "departamentos_dep_cod";
	$fdata["GoodName"] = "departamentos_dep_cod";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","departamentos_dep_cod");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "departamentos_dep_cod";

		$fdata["sourceSingle"] = "departamentos_dep_cod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "departamentos_dep_cod";

	
	
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
	$edata["LookupTable"] = "public.departamentos";
	$edata["LookupConnId"] = "dbtalentos_at_192_168_123_51";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "dep_cod";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "departamento";

	

	
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


	$tdatapersonales["departamentos_dep_cod"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "departamentos_dep_cod";
//	dependencias_dep_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dependencias_dep_cod";
	$fdata["GoodName"] = "dependencias_dep_cod";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","dependencias_dep_cod");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dependencias_dep_cod";

		$fdata["sourceSingle"] = "dependencias_dep_cod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dependencias_dep_cod";

	
	
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
	$edata["DisplayField"] = "dep_descripcion_corta";

	

	
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


	$tdatapersonales["dependencias_dep_cod"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "dependencias_dep_cod";
//	paises_pai_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "paises_pai_cod";
	$fdata["GoodName"] = "paises_pai_cod";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","paises_pai_cod");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "paises_pai_cod";

		$fdata["sourceSingle"] = "paises_pai_cod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paises_pai_cod";

	
	
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
	$edata["LookupTable"] = "public.paises";
	$edata["LookupConnId"] = "dbtalentos_at_192_168_123_51";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "pai_cod";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "pai_descri";

	

	
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


	$tdatapersonales["paises_pai_cod"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "paises_pai_cod";
//	ciudades_ciu_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ciudades_ciu_cod";
	$fdata["GoodName"] = "ciudades_ciu_cod";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","ciudades_ciu_cod");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ciudades_ciu_cod";

		$fdata["sourceSingle"] = "ciudades_ciu_cod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ciudades_ciu_cod";

	
	
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
	$edata["LookupTable"] = "public.ciudades";
	$edata["LookupConnId"] = "dbtalentos_at_192_168_123_51";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ciu_cod";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ciu_descri";

	

	
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


	$tdatapersonales["ciudades_ciu_cod"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "ciudades_ciu_cod";
//	profesiones_pro_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "profesiones_pro_cod";
	$fdata["GoodName"] = "profesiones_pro_cod";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","profesiones_pro_cod");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "profesiones_pro_cod";

		$fdata["sourceSingle"] = "profesiones_pro_cod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "profesiones_pro_cod";

	
	
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
	$edata["LookupTable"] = "public.profesiones";
	$edata["LookupConnId"] = "dbtalentos_at_192_168_123_51";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "pro_cod";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "pro_descri";

	

	
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


	$tdatapersonales["profesiones_pro_cod"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "profesiones_pro_cod";
//	per_profesional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "per_profesional";
	$fdata["GoodName"] = "per_profesional";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_profesional");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "per_profesional";

		$fdata["sourceSingle"] = "per_profesional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_profesional";

	
	
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


	$tdatapersonales["per_profesional"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_profesional";
//	tipo_funcionario_tfun_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tipo_funcionario_tfun_cod";
	$fdata["GoodName"] = "tipo_funcionario_tfun_cod";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","tipo_funcionario_tfun_cod");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tipo_funcionario_tfun_cod";

		$fdata["sourceSingle"] = "tipo_funcionario_tfun_cod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_funcionario_tfun_cod";

	
	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tfun_cod";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tfun_descri";

	

	
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


	$tdatapersonales["tipo_funcionario_tfun_cod"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "tipo_funcionario_tfun_cod";
//	per_institucion_origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "per_institucion_origen";
	$fdata["GoodName"] = "per_institucion_origen";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_institucion_origen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "per_institucion_origen";

		$fdata["sourceSingle"] = "per_institucion_origen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_institucion_origen";

	
	
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
	$edata["LookupTable"] = "public.instituciones_origen";
	$edata["LookupConnId"] = "dbtalentos_at_192_168_123_51";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ins_cod";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ins_nombre";

	

	
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


	$tdatapersonales["per_institucion_origen"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_institucion_origen";
//	cargos_car_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cargos_car_cod";
	$fdata["GoodName"] = "cargos_car_cod";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","cargos_car_cod");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cargos_car_cod";

		$fdata["sourceSingle"] = "cargos_car_cod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargos_car_cod";

	
	
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
	$edata["LookupTable"] = "public.cargos";
	$edata["LookupConnId"] = "dbtalentos_at_192_168_123_51";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "car_cod";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "car_descri";

	

	
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


	$tdatapersonales["cargos_car_cod"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "cargos_car_cod";
//	per_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "per_nombre";
	$fdata["GoodName"] = "per_nombre";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_nombre";

		$fdata["sourceSingle"] = "per_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_nombre";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatapersonales["per_nombre"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_nombre";
//	per_apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "per_apellido";
	$fdata["GoodName"] = "per_apellido";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_apellido");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_apellido";

		$fdata["sourceSingle"] = "per_apellido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_apellido";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatapersonales["per_apellido"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_apellido";
//	per_ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "per_ci";
	$fdata["GoodName"] = "per_ci";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_ci");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_ci";

		$fdata["sourceSingle"] = "per_ci";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_ci";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatapersonales["per_ci"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_ci";
//	per_sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "per_sexo";
	$fdata["GoodName"] = "per_sexo";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_sexo");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "per_sexo";

		$fdata["sourceSingle"] = "per_sexo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_sexo";

	
	
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


	$tdatapersonales["per_sexo"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_sexo";
//	per_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "per_nacimiento";
	$fdata["GoodName"] = "per_nacimiento";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_nacimiento");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "per_nacimiento";

		$fdata["sourceSingle"] = "per_nacimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_nacimiento";

	
	
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


	$tdatapersonales["per_nacimiento"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_nacimiento";
//	per_est_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "per_est_civil";
	$fdata["GoodName"] = "per_est_civil";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_est_civil");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_est_civil";

		$fdata["sourceSingle"] = "per_est_civil";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_est_civil";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatapersonales["per_est_civil"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_est_civil";
//	per_gruposangre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "per_gruposangre";
	$fdata["GoodName"] = "per_gruposangre";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_gruposangre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_gruposangre";

		$fdata["sourceSingle"] = "per_gruposangre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_gruposangre";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatapersonales["per_gruposangre"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_gruposangre";
//	per_pcd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "per_pcd";
	$fdata["GoodName"] = "per_pcd";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_pcd");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "per_pcd";

		$fdata["sourceSingle"] = "per_pcd";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_pcd";

	
	
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


	$tdatapersonales["per_pcd"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_pcd";
//	per_domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "per_domicilio";
	$fdata["GoodName"] = "per_domicilio";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_domicilio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_domicilio";

		$fdata["sourceSingle"] = "per_domicilio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_domicilio";

	
	
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


	$tdatapersonales["per_domicilio"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_domicilio";
//	per_barrio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "per_barrio";
	$fdata["GoodName"] = "per_barrio";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_barrio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_barrio";

		$fdata["sourceSingle"] = "per_barrio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_barrio";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatapersonales["per_barrio"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_barrio";
//	per_teleparticular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "per_teleparticular";
	$fdata["GoodName"] = "per_teleparticular";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_teleparticular");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_teleparticular";

		$fdata["sourceSingle"] = "per_teleparticular";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_teleparticular";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatapersonales["per_teleparticular"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_teleparticular";
//	per_telecelular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "per_telecelular";
	$fdata["GoodName"] = "per_telecelular";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_telecelular");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_telecelular";

		$fdata["sourceSingle"] = "per_telecelular";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_telecelular";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatapersonales["per_telecelular"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_telecelular";
//	per_email_part
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "per_email_part";
	$fdata["GoodName"] = "per_email_part";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_email_part");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_email_part";

		$fdata["sourceSingle"] = "per_email_part";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_email_part";

	
	
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


	$tdatapersonales["per_email_part"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_email_part";
//	per_email_instit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "per_email_instit";
	$fdata["GoodName"] = "per_email_instit";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_email_instit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_email_instit";

		$fdata["sourceSingle"] = "per_email_instit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_email_instit";

	
	
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


	$tdatapersonales["per_email_instit"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_email_instit";
//	per_ruc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "per_ruc";
	$fdata["GoodName"] = "per_ruc";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_ruc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_ruc";

		$fdata["sourceSingle"] = "per_ruc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_ruc";

	
	
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


	$tdatapersonales["per_ruc"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_ruc";
//	per_contacto_eme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "per_contacto_eme";
	$fdata["GoodName"] = "per_contacto_eme";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_contacto_eme");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_contacto_eme";

		$fdata["sourceSingle"] = "per_contacto_eme";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_contacto_eme";

	
	
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


	$tdatapersonales["per_contacto_eme"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_contacto_eme";
//	per_tele_emer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "per_tele_emer";
	$fdata["GoodName"] = "per_tele_emer";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_tele_emer");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_tele_emer";

		$fdata["sourceSingle"] = "per_tele_emer";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_tele_emer";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatapersonales["per_tele_emer"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_tele_emer";
//	per_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "per_ingreso";
	$fdata["GoodName"] = "per_ingreso";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_ingreso");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "per_ingreso";

		$fdata["sourceSingle"] = "per_ingreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_ingreso";

	
	
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


	$tdatapersonales["per_ingreso"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_ingreso";
//	per_nombramiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "per_nombramiento";
	$fdata["GoodName"] = "per_nombramiento";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_nombramiento");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "per_nombramiento";

		$fdata["sourceSingle"] = "per_nombramiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_nombramiento";

	
	
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


	$tdatapersonales["per_nombramiento"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_nombramiento";
//	per_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "per_estado";
	$fdata["GoodName"] = "per_estado";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_estado");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "per_estado";

		$fdata["sourceSingle"] = "per_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_estado";

	
	
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


	$tdatapersonales["per_estado"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_estado";
//	per_usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "per_usuario";
	$fdata["GoodName"] = "per_usuario";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_usuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "per_usuario";

		$fdata["sourceSingle"] = "per_usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_usuario";

	
	
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


	$tdatapersonales["per_usuario"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_usuario";
//	per_sede
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "per_sede";
	$fdata["GoodName"] = "per_sede";
	$fdata["ownerTable"] = "public.personales";
	$fdata["Label"] = GetFieldLabel("public_personales","per_sede");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "per_sede";

		$fdata["sourceSingle"] = "per_sede";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "per_sede";

	
	
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
	$edata["LookupTable"] = "public.sedes";
	$edata["LookupConnId"] = "dbtalentos_at_192_168_123_51";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "sed_cod";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "sed_descripcion";

	

	
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


	$tdatapersonales["per_sede"] = $fdata;
		$tdatapersonales[".searchableFields"][] = "per_sede";


$tables_data["public.personales"]=&$tdatapersonales;
$field_labels["public_personales"] = &$fieldLabelspersonales;
$fieldToolTips["public_personales"] = &$fieldToolTipspersonales;
$placeHolders["public_personales"] = &$placeHolderspersonales;
$page_titles["public_personales"] = &$pageTitlespersonales;


changeTextControlsToDate( "public.personales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.personales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.personales"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_personales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "per_cod,  	categoria_cat_codigo,  	departamentos_dep_cod,  	dependencias_dep_cod,  	paises_pai_cod,  	ciudades_ciu_cod,  	profesiones_pro_cod,  	per_profesional,  	tipo_funcionario_tfun_cod,  	per_institucion_origen,  	cargos_car_cod,  	per_nombre,  	per_apellido,  	per_ci,  	per_sexo,  	per_nacimiento,  	per_est_civil,  	per_gruposangre,  	per_pcd,  	per_domicilio,  	per_barrio,  	per_teleparticular,  	per_telecelular,  	per_email_part,  	per_email_instit,  	per_ruc,  	per_contacto_eme,  	per_tele_emer,  	per_ingreso,  	per_nombramiento,  	per_estado,  	per_usuario,  	per_sede";
$proto0["m_strFrom"] = "FROM \"public\".personales";
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
	"m_strName" => "per_cod",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto6["m_sql"] = "per_cod";
$proto6["m_srcTableName"] = "public.personales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "categoria_cat_codigo",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto8["m_sql"] = "categoria_cat_codigo";
$proto8["m_srcTableName"] = "public.personales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "departamentos_dep_cod",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto10["m_sql"] = "departamentos_dep_cod";
$proto10["m_srcTableName"] = "public.personales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencias_dep_cod",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto12["m_sql"] = "dependencias_dep_cod";
$proto12["m_srcTableName"] = "public.personales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "paises_pai_cod",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto14["m_sql"] = "paises_pai_cod";
$proto14["m_srcTableName"] = "public.personales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudades_ciu_cod",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto16["m_sql"] = "ciudades_ciu_cod";
$proto16["m_srcTableName"] = "public.personales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "profesiones_pro_cod",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto18["m_sql"] = "profesiones_pro_cod";
$proto18["m_srcTableName"] = "public.personales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "per_profesional",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto20["m_sql"] = "per_profesional";
$proto20["m_srcTableName"] = "public.personales";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_funcionario_tfun_cod",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto22["m_sql"] = "tipo_funcionario_tfun_cod";
$proto22["m_srcTableName"] = "public.personales";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "per_institucion_origen",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto24["m_sql"] = "per_institucion_origen";
$proto24["m_srcTableName"] = "public.personales";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cargos_car_cod",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto26["m_sql"] = "cargos_car_cod";
$proto26["m_srcTableName"] = "public.personales";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "per_nombre",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto28["m_sql"] = "per_nombre";
$proto28["m_srcTableName"] = "public.personales";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "per_apellido",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto30["m_sql"] = "per_apellido";
$proto30["m_srcTableName"] = "public.personales";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "per_ci",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto32["m_sql"] = "per_ci";
$proto32["m_srcTableName"] = "public.personales";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "per_sexo",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto34["m_sql"] = "per_sexo";
$proto34["m_srcTableName"] = "public.personales";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "per_nacimiento",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto36["m_sql"] = "per_nacimiento";
$proto36["m_srcTableName"] = "public.personales";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "per_est_civil",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto38["m_sql"] = "per_est_civil";
$proto38["m_srcTableName"] = "public.personales";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "per_gruposangre",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto40["m_sql"] = "per_gruposangre";
$proto40["m_srcTableName"] = "public.personales";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "per_pcd",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto42["m_sql"] = "per_pcd";
$proto42["m_srcTableName"] = "public.personales";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "per_domicilio",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto44["m_sql"] = "per_domicilio";
$proto44["m_srcTableName"] = "public.personales";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "per_barrio",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto46["m_sql"] = "per_barrio";
$proto46["m_srcTableName"] = "public.personales";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "per_teleparticular",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto48["m_sql"] = "per_teleparticular";
$proto48["m_srcTableName"] = "public.personales";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "per_telecelular",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto50["m_sql"] = "per_telecelular";
$proto50["m_srcTableName"] = "public.personales";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "per_email_part",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto52["m_sql"] = "per_email_part";
$proto52["m_srcTableName"] = "public.personales";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "per_email_instit",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto54["m_sql"] = "per_email_instit";
$proto54["m_srcTableName"] = "public.personales";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "per_ruc",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto56["m_sql"] = "per_ruc";
$proto56["m_srcTableName"] = "public.personales";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "per_contacto_eme",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto58["m_sql"] = "per_contacto_eme";
$proto58["m_srcTableName"] = "public.personales";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "per_tele_emer",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto60["m_sql"] = "per_tele_emer";
$proto60["m_srcTableName"] = "public.personales";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "per_ingreso",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto62["m_sql"] = "per_ingreso";
$proto62["m_srcTableName"] = "public.personales";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "per_nombramiento",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto64["m_sql"] = "per_nombramiento";
$proto64["m_srcTableName"] = "public.personales";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "per_estado",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto66["m_sql"] = "per_estado";
$proto66["m_srcTableName"] = "public.personales";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "per_usuario",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto68["m_sql"] = "per_usuario";
$proto68["m_srcTableName"] = "public.personales";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "per_sede",
	"m_strTable" => "public.personales",
	"m_srcTableName" => "public.personales"
));

$proto70["m_sql"] = "per_sede";
$proto70["m_srcTableName"] = "public.personales";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto72=array();
$proto72["m_link"] = "SQLL_MAIN";
			$proto73=array();
$proto73["m_strName"] = "public.personales";
$proto73["m_srcTableName"] = "public.personales";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "per_cod";
$proto73["m_columns"][] = "categoria_cat_codigo";
$proto73["m_columns"][] = "departamentos_dep_cod";
$proto73["m_columns"][] = "dependencias_dep_cod";
$proto73["m_columns"][] = "paises_pai_cod";
$proto73["m_columns"][] = "ciudades_ciu_cod";
$proto73["m_columns"][] = "profesiones_pro_cod";
$proto73["m_columns"][] = "per_profesional";
$proto73["m_columns"][] = "tipo_funcionario_tfun_cod";
$proto73["m_columns"][] = "per_institucion_origen";
$proto73["m_columns"][] = "cargos_car_cod";
$proto73["m_columns"][] = "per_nombre";
$proto73["m_columns"][] = "per_apellido";
$proto73["m_columns"][] = "per_ci";
$proto73["m_columns"][] = "per_sexo";
$proto73["m_columns"][] = "per_nacimiento";
$proto73["m_columns"][] = "per_est_civil";
$proto73["m_columns"][] = "per_gruposangre";
$proto73["m_columns"][] = "per_pcd";
$proto73["m_columns"][] = "per_domicilio";
$proto73["m_columns"][] = "per_barrio";
$proto73["m_columns"][] = "per_teleparticular";
$proto73["m_columns"][] = "per_telecelular";
$proto73["m_columns"][] = "per_email_part";
$proto73["m_columns"][] = "per_email_instit";
$proto73["m_columns"][] = "per_ruc";
$proto73["m_columns"][] = "per_contacto_eme";
$proto73["m_columns"][] = "per_tele_emer";
$proto73["m_columns"][] = "per_ingreso";
$proto73["m_columns"][] = "per_nombramiento";
$proto73["m_columns"][] = "per_estado";
$proto73["m_columns"][] = "per_usuario";
$proto73["m_columns"][] = "per_sede";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "\"public\".personales";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "public.personales";
$proto74=array();
$proto74["m_sql"] = "";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.personales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_personales = createSqlQuery_personales();


	
		;

																																	

$tdatapersonales[".sqlquery"] = $queryData_personales;



$tdatapersonales[".hasEvents"] = false;

?>