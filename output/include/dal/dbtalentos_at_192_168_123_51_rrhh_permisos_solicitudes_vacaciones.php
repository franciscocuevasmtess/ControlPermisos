<?php
$dalTablesolicitudes_vacaciones = array();
$dalTablesolicitudes_vacaciones["id_funcionario"] = array("type"=>3,"varname"=>"id_funcionario", "name" => "id_funcionario", "autoInc" => "0");
$dalTablesolicitudes_vacaciones["tipo_vinculacion"] = array("type"=>200,"varname"=>"tipo_vinculacion", "name" => "tipo_vinculacion", "autoInc" => "0");
$dalTablesolicitudes_vacaciones["dependencia_id"] = array("type"=>3,"varname"=>"dependencia_id", "name" => "dependencia_id", "autoInc" => "0");
$dalTablesolicitudes_vacaciones["fecha_desde"] = array("type"=>7,"varname"=>"fecha_desde", "name" => "fecha_desde", "autoInc" => "0");
$dalTablesolicitudes_vacaciones["fecha_hasta"] = array("type"=>7,"varname"=>"fecha_hasta", "name" => "fecha_hasta", "autoInc" => "0");
$dalTablesolicitudes_vacaciones["total_dias_habiles"] = array("type"=>3,"varname"=>"total_dias_habiles", "name" => "total_dias_habiles", "autoInc" => "0");
$dalTablesolicitudes_vacaciones["observacion"] = array("type"=>201,"varname"=>"observacion", "name" => "observacion", "autoInc" => "0");
$dalTablesolicitudes_vacaciones["estado"] = array("type"=>200,"varname"=>"estado", "name" => "estado", "autoInc" => "0");
$dalTablesolicitudes_vacaciones["fecha_solicitud"] = array("type"=>135,"varname"=>"fecha_solicitud", "name" => "fecha_solicitud", "autoInc" => "0");
$dalTablesolicitudes_vacaciones["usuario_creador"] = array("type"=>200,"varname"=>"usuario_creador", "name" => "usuario_creador", "autoInc" => "0");
$dalTablesolicitudes_vacaciones["fecha_actualizacion"] = array("type"=>135,"varname"=>"fecha_actualizacion", "name" => "fecha_actualizacion", "autoInc" => "0");
$dalTablesolicitudes_vacaciones["usuario_actualizacion"] = array("type"=>200,"varname"=>"usuario_actualizacion", "name" => "usuario_actualizacion", "autoInc" => "0");
$dalTablesolicitudes_vacaciones["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablesolicitudes_vacaciones["id"]["key"]=true;

$dal_info["dbtalentos_at_192_168_123_51_rrhh_permisos_solicitudes_vacaciones"] = &$dalTablesolicitudes_vacaciones;
?>