<?php
$dalTableroles = array();
$dalTableroles["rol_id"] = array("type"=>3,"varname"=>"rol_id", "name" => "rol_id", "autoInc" => "1");
$dalTableroles["rol_nombre"] = array("type"=>200,"varname"=>"rol_nombre", "name" => "rol_nombre", "autoInc" => "0");
$dalTableroles["rol_id"]["key"]=true;

$dal_info["dbtalentos_at_192_168_123_51_public_roles"] = &$dalTableroles;
?>