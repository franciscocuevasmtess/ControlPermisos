<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeLogin"]=true;

		$this->events["AfterSuccessfulLogin"]=true;



//	onscreen events
		$this->events["_global__snippet"] = true;



		}

//	handlers

		
		
		
		
		
				// Before login
function BeforeLogin(&$username, &$password, &$message, $pageObject, &$values)
{

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$loginType = $_POST['loginType'];
	$username = pg_escape_string($_POST['username']); 
	$password = $_POST['password']; 
	
	if ($loginType == "normal") {
		return true; 
	} elseif ($loginType == "correo") {
		// Extraer solo el nombre de usuario sin el dominio
		$cleanUsername = explode('@', $username)[0];
		
		// Iniciar conexión y autenticación con LDAP usando el usuario y la contraseña ingresados
		$ldap_host = "ldap://192.168.14.252";
		$ldap_port = 389;
		$ldap_user = "uid=" . $cleanUsername . ",ou=people,dc=mtess,dc=gov,dc=py";
		$ldap_password = $password;
		
		// Conectar al servidor LDAP
		$ldap_conn = ldap_connect($ldap_host, $ldap_port);
		if (!$ldap_conn) {
			$message = "Error: No se pudo conectar al servidor.";
		}
		
		// Configurar opciones LDAP
		ldap_set_option($ldap_conn, LDAP_OPT_PROTOCOL_VERSION, 3);
		ldap_set_option($ldap_conn, LDAP_OPT_REFERRALS, 0);
		
		// Autenticar el usuario
		if (@ldap_bind($ldap_conn, $ldap_user, $ldap_password)) {
			// Si la autenticación es exitosa, realizar la consulta SQL
			$consulta_correo = "SELECT TRIM(usu_usuario) AS usu_usuario, 
																		TRIM(usu_contrasenha) AS usu_contrasenha 
															FROM usuarios 
															WHERE TRIM(usu_correo) = '$username'";
			$resultado_correo = CustomQuery($consulta_correo);
			$personal = db_fetch_array($resultado_correo);
			
			if ($personal) {
				// Asignar los valores obtenidos a las variables $username y $password
				$username = $personal['usu_usuario'];
				$password = $personal['usu_contrasenha'];
				ldap_close($ldap_conn); 
				$_SESSION['error_ldap']	= false;
				
				return true; 
			} else {
				$message = "Error: No se encontró el correo en la base de datos.";
				$_SESSION['error_ldap']	= true; 
				ldap_close($ldap_conn);
				return false;
			}
		} else {
			$message = "Error al iniciar sesión con su correo y contraseña, verifique.";
			$_SESSION['error_ldap']	= true; 
			ldap_close($ldap_conn);
			return false;
		}
	}
}

;		
} // function BeforeLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		
$consulta_personal = "SELECT usu_personal from usuarios where usu_usuario = '$username'";
$_SESSION["consulta"] = $consulta_personal;
$resultado_personal = CustomQuery($consulta_personal);
$personal = db_fetch_array($resultado_personal);
$_SESSION["id_usuario"] = $personal["usu_personal"];

$consulta_nombre = "SELECT usu_nombre, 
															CONCAT(usu_nombre, ' (', usu_usuario, ')') AS usu_usuario_concatenado 
												FROM usuarios 
												WHERE usu_usuario = '$username'";
$_SESSION["consulta_nombre"] = $consulta_nombre;
$resultado_nombre = CustomQuery($consulta_nombre);
$personal_nombre = db_fetch_array($resultado_nombre);
$_SESSION['UserName'] = $personal_nombre['usu_usuario_concatenado'];

//if ($_SESSION['UserData']['rol'] == 1) {
//	header("Location: personales_list.php");
//	exit();
//} else {
//	header("Location: registro_entrada_salida_usuarios_list.php");
//	exit();
//}

header("Location: permisos_funcionarios_list.php");
exit();


;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event__global__snippet(&$params)
	{
	//Si ya valido usuario ya no salen estos inputs
if ($_GET['page'] !== 'login' || $_SESSION['error_ldap']) {
    echo '
    <div class="form-group">
        <label>Tipo de Inicio de Sesión:</label><br>
        <div class="radio">
            <label>
                <input type="radio" name="loginType" value="normal" checked> Inicio Normal
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="loginType" value="correo"> Usuario de Correo
            </label>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Detectar cambio en los radio buttons
            $("input[name=\'loginType\']").change(function() {
                var loginType = $(this).val();

                if (loginType === "normal") {
                    // Cambiar a "Inicio Normal"
                    $("label[for=\'username\']").text("Nombre de usuario");
                    $("#username").attr("type", "text");
                    $("#username").removeAttr("required"); 
                    $("#username").removeAttr("placeholder");
                } else if (loginType === "correo") {
                    // Cambiar a "Usuario de Correo"
                    $("label[for=\'username\']").text("E-mail");
                    $("#username").attr("type", "email");
                    $("#username").attr("required", "required");
                    $("#username").attr("placeholder", "tu-correo@mtess.gov.py");
                }
            });
        });
    </script>';
}

	;
}




}
?>
