<?php
$dalTableusuarios = array();
$dalTableusuarios["usu_cod"] = array("type"=>3,"varname"=>"usu_cod", "name" => "usu_cod", "autoInc" => "1");
$dalTableusuarios["usu_usuario"] = array("type"=>200,"varname"=>"usu_usuario", "name" => "usu_usuario", "autoInc" => "0");
$dalTableusuarios["usu_contrasenha"] = array("type"=>200,"varname"=>"usu_contrasenha", "name" => "usu_contrasenha", "autoInc" => "0");
$dalTableusuarios["usu_nombre"] = array("type"=>200,"varname"=>"usu_nombre", "name" => "usu_nombre", "autoInc" => "0");
$dalTableusuarios["usu_dependencia"] = array("type"=>3,"varname"=>"usu_dependencia", "name" => "usu_dependencia", "autoInc" => "0");
$dalTableusuarios["usu_personal"] = array("type"=>3,"varname"=>"usu_personal", "name" => "usu_personal", "autoInc" => "0");
$dalTableusuarios["usu_correo"] = array("type"=>200,"varname"=>"usu_correo", "name" => "usu_correo", "autoInc" => "0");
$dalTableusuarios["active"] = array("type"=>3,"varname"=>"active", "name" => "active", "autoInc" => "0");
$dalTableusuarios["rol"] = array("type"=>3,"varname"=>"rol", "name" => "rol", "autoInc" => "0");
$dalTableusuarios["two_factor"] = array("type"=>3,"varname"=>"two_factor", "name" => "two_factor", "autoInc" => "0");
$dalTableusuarios["totp"] = array("type"=>201,"varname"=>"totp", "name" => "totp", "autoInc" => "0");
$dalTableusuarios["usu_cod"]["key"]=true;

$dal_info["dbtalentos_at_192_168_123_51_public_usuarios"] = &$dalTableusuarios;
?>