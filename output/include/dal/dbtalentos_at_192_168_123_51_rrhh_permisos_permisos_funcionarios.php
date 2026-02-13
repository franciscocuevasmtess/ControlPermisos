<?php
$dalTablepermisos_funcionarios = array();
$dalTablepermisos_funcionarios["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablepermisos_funcionarios["id_funcionario"] = array("type"=>3,"varname"=>"id_funcionario", "name" => "id_funcionario", "autoInc" => "0");
$dalTablepermisos_funcionarios["tipo_vinculacion"] = array("type"=>200,"varname"=>"tipo_vinculacion", "name" => "tipo_vinculacion", "autoInc" => "0");
$dalTablepermisos_funcionarios["dependencia_id"] = array("type"=>3,"varname"=>"dependencia_id", "name" => "dependencia_id", "autoInc" => "0");
$dalTablepermisos_funcionarios["fecha_desde"] = array("type"=>7,"varname"=>"fecha_desde", "name" => "fecha_desde", "autoInc" => "0");
$dalTablepermisos_funcionarios["hora_desde"] = array("type"=>134,"varname"=>"hora_desde", "name" => "hora_desde", "autoInc" => "0");
$dalTablepermisos_funcionarios["fecha_hasta"] = array("type"=>7,"varname"=>"fecha_hasta", "name" => "fecha_hasta", "autoInc" => "0");
$dalTablepermisos_funcionarios["hora_hasta"] = array("type"=>134,"varname"=>"hora_hasta", "name" => "hora_hasta", "autoInc" => "0");
$dalTablepermisos_funcionarios["motivo_id"] = array("type"=>200,"varname"=>"motivo_id", "name" => "motivo_id", "autoInc" => "0");
$dalTablepermisos_funcionarios["comision_servicios"] = array("type"=>11,"varname"=>"comision_servicios", "name" => "comision_servicios", "autoInc" => "0");
$dalTablepermisos_funcionarios["comision_servicios_descripcion"] = array("type"=>200,"varname"=>"comision_servicios_descripcion", "name" => "comision_servicios_descripcion", "autoInc" => "0");
$dalTablepermisos_funcionarios["observacion"] = array("type"=>201,"varname"=>"observacion", "name" => "observacion", "autoInc" => "0");
$dalTablepermisos_funcionarios["estado"] = array("type"=>200,"varname"=>"estado", "name" => "estado", "autoInc" => "0");
$dalTablepermisos_funcionarios["fecha_actualizacion"] = array("type"=>135,"varname"=>"fecha_actualizacion", "name" => "fecha_actualizacion", "autoInc" => "0");
$dalTablepermisos_funcionarios["archivo_adjunto"] = array("type"=>200,"varname"=>"archivo_adjunto", "name" => "archivo_adjunto", "autoInc" => "0");
$dalTablepermisos_funcionarios["solicitado_por"] = array("type"=>3,"varname"=>"solicitado_por", "name" => "solicitado_por", "autoInc" => "0");
$dalTablepermisos_funcionarios["fecha_solicitud"] = array("type"=>135,"varname"=>"fecha_solicitud", "name" => "fecha_solicitud", "autoInc" => "0");
$dalTablepermisos_funcionarios["fecha_decision"] = array("type"=>135,"varname"=>"fecha_decision", "name" => "fecha_decision", "autoInc" => "0");
$dalTablepermisos_funcionarios["decidido_por"] = array("type"=>3,"varname"=>"decidido_por", "name" => "decidido_por", "autoInc" => "0");
$dalTablepermisos_funcionarios["resultado_decision"] = array("type"=>200,"varname"=>"resultado_decision", "name" => "resultado_decision", "autoInc" => "0");
$dalTablepermisos_funcionarios["horas_compensar"] = array("type"=>13,"varname"=>"horas_compensar", "name" => "horas_compensar", "autoInc" => "0");
$dalTablepermisos_funcionarios["acompensar"] = array("type"=>3,"varname"=>"acompensar", "name" => "acompensar", "autoInc" => "0");
$dalTablepermisos_funcionarios["rrhh_decidido_por"] = array("type"=>3,"varname"=>"rrhh_decidido_por", "name" => "rrhh_decidido_por", "autoInc" => "0");
$dalTablepermisos_funcionarios["rrhh_fecha_decision"] = array("type"=>135,"varname"=>"rrhh_fecha_decision", "name" => "rrhh_fecha_decision", "autoInc" => "0");
$dalTablepermisos_funcionarios["rrhh_resultado_decision"] = array("type"=>200,"varname"=>"rrhh_resultado_decision", "name" => "rrhh_resultado_decision", "autoInc" => "0");
$dalTablepermisos_funcionarios["rrhh_motivo_rechazo"] = array("type"=>201,"varname"=>"rrhh_motivo_rechazo", "name" => "rrhh_motivo_rechazo", "autoInc" => "0");
$dalTablepermisos_funcionarios["id"]["key"]=true;

$dal_info["dbtalentos_at_192_168_123_51_rrhh_permisos_permisos_funcionarios"] = &$dalTablepermisos_funcionarios;
?>