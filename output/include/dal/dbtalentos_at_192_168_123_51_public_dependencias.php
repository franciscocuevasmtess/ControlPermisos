<?php
$dalTabledependencias = array();
$dalTabledependencias["dep_cod"] = array("type"=>3,"varname"=>"dep_cod", "name" => "dep_cod", "autoInc" => "1");
$dalTabledependencias["dep_descripcion_corta"] = array("type"=>200,"varname"=>"dep_descripcion_corta", "name" => "dep_descripcion_corta", "autoInc" => "0");
$dalTabledependencias["dep_descripcion"] = array("type"=>200,"varname"=>"dep_descripcion", "name" => "dep_descripcion", "autoInc" => "0");
$dalTabledependencias["dep_padre"] = array("type"=>3,"varname"=>"dep_padre", "name" => "dep_padre", "autoInc" => "0");
$dalTabledependencias["dep_estado"] = array("type"=>3,"varname"=>"dep_estado", "name" => "dep_estado", "autoInc" => "0");
$dalTabledependencias["dep_cod"]["key"]=true;

$dal_info["dbtalentos_at_192_168_123_51_public_dependencias"] = &$dalTabledependencias;
?>