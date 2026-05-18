<?php
$dalTableciudades = array();
$dalTableciudades["ciu_cod"] = array("type"=>3,"varname"=>"ciu_cod", "name" => "ciu_cod", "autoInc" => "1");
$dalTableciudades["ciu_descri"] = array("type"=>200,"varname"=>"ciu_descri", "name" => "ciu_descri", "autoInc" => "0");
$dalTableciudades["ciu_cod_departamento"] = array("type"=>3,"varname"=>"ciu_cod_departamento", "name" => "ciu_cod_departamento", "autoInc" => "0");
$dalTableciudades["ciu_cod"]["key"]=true;

$dal_info["dbtalentos_at_192_168_123_51_public_ciudades"] = &$dalTableciudades;
?>