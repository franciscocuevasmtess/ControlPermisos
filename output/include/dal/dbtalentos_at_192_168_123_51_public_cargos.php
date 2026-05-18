<?php
$dalTablecargos = array();
$dalTablecargos["car_cod"] = array("type"=>3,"varname"=>"car_cod", "name" => "car_cod", "autoInc" => "1");
$dalTablecargos["car_descri"] = array("type"=>200,"varname"=>"car_descri", "name" => "car_descri", "autoInc" => "0");
$dalTablecargos["car_cod_tipo_cargo"] = array("type"=>3,"varname"=>"car_cod_tipo_cargo", "name" => "car_cod_tipo_cargo", "autoInc" => "0");
$dalTablecargos["car_cod"]["key"]=true;

$dal_info["dbtalentos_at_192_168_123_51_public_cargos"] = &$dalTablecargos;
?>