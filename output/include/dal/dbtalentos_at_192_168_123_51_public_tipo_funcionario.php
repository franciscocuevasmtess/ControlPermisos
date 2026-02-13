<?php
$dalTabletipo_funcionario = array();
$dalTabletipo_funcionario["tfun_cod"] = array("type"=>3,"varname"=>"tfun_cod", "name" => "tfun_cod", "autoInc" => "1");
$dalTabletipo_funcionario["tfun_descri"] = array("type"=>200,"varname"=>"tfun_descri", "name" => "tfun_descri", "autoInc" => "0");
$dalTabletipo_funcionario["tfun_cod"]["key"]=true;

$dal_info["dbtalentos_at_192_168_123_51_public_tipo_funcionario"] = &$dalTabletipo_funcionario;
?>