<?php

	// create menu nodes arr
	$menuNodes = array();

	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "Permisos de Funcionarios";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "rrhh_permisos.permisos_funcionarios";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "fa-plus";
	$menuNode["iconType"] = "3";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Permisos de Funcionarios";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "3";
	$menuNode["name"] = "Solicitud de Vacaciones";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "rrhh_permisos.solicitudes_vacaciones";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Solicitud de Vacaciones";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "2";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "comisionamiento";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-barcode";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Comisionamiento";



	$menuNodes[] = $menuNode;
	$menuNodesCache[ "main" ] = $menuNodes;
?>