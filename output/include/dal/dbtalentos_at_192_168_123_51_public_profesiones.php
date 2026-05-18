<?php
$dalTableprofesiones = array();
$dalTableprofesiones["pro_cod"] = array("type"=>3,"varname"=>"pro_cod", "name" => "pro_cod", "autoInc" => "1");
$dalTableprofesiones["pro_descri"] = array("type"=>200,"varname"=>"pro_descri", "name" => "pro_descri", "autoInc" => "0");
$dalTableprofesiones["pro_cod"]["key"]=true;

$dal_info["dbtalentos_at_192_168_123_51_public_profesiones"] = &$dalTableprofesiones;
?>