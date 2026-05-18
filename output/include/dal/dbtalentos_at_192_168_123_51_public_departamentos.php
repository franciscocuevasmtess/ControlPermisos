<?php
$dalTabledepartamentos = array();
$dalTabledepartamentos["dep_cod"] = array("type"=>3,"varname"=>"dep_cod", "name" => "dep_cod", "autoInc" => "1");
$dalTabledepartamentos["departamento"] = array("type"=>200,"varname"=>"departamento", "name" => "departamento", "autoInc" => "0");
$dalTabledepartamentos["dep_cod_pais"] = array("type"=>3,"varname"=>"dep_cod_pais", "name" => "dep_cod_pais", "autoInc" => "0");
$dalTabledepartamentos["dep_cod"]["key"]=true;

$dal_info["dbtalentos_at_192_168_123_51_public_departamentos"] = &$dalTabledepartamentos;
?>