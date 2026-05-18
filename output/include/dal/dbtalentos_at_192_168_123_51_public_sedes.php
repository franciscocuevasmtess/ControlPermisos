<?php
$dalTablesedes = array();
$dalTablesedes["sed_cod"] = array("type"=>3,"varname"=>"sed_cod", "name" => "sed_cod", "autoInc" => "1");
$dalTablesedes["sed_descripcion"] = array("type"=>200,"varname"=>"sed_descripcion", "name" => "sed_descripcion", "autoInc" => "0");
$dalTablesedes["sed_numero"] = array("type"=>3,"varname"=>"sed_numero", "name" => "sed_numero", "autoInc" => "0");
$dalTablesedes["sed_cod"]["key"]=true;

$dal_info["dbtalentos_at_192_168_123_51_public_sedes"] = &$dalTablesedes;
?>