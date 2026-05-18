<?php 
    @ini_set("display_errors","1");
    @ini_set("display_startup_errors","1");
    
    
    require_once("include/dbcommon.php");
    add_nocache_headers();

          
    //Recibimos los parametros enviados por POST
    $email = $_POST['email'];

    $conn = db_connect();
    
    $usu_mailSQL = "SELECT * FROM public.usuarios  WHERE trim(usu_correo) = trim('$email')";
    
    $usu_email = db_query($usu_mailSQL);
    $usu_correo = db_fetch_array($usu_email);

    
    if($usu_correo){
        echo "true";
    }else{  
        echo "false";
    }
      

    die();

?>