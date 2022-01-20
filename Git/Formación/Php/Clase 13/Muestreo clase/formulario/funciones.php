<?php

function iniciarSession($username,$pass,$conexion)
{
	
	$consulta="SELECT * FROM usuarios WHERE username='".$username."' && pass='".$pass."'";
	if($resultado=$conexion->query($consulta))
	{
		$elemento=mysqli_fetch_object($resultado);
		//Iniciamos sesion
		session_start();
		//Cargamos valores de sesion
		$_SESSION["usuarioId"]=$elemento->usuarioId;
		$_SESSION["nombre"]=$elemento->nombre;
		$_SESSION["apellido"]=$elemento->apellido;
		$_SESSION["ultSesion"]=$elemento->ultSesion;
		$sentencia="UPDATE usuarios SET ultSesion=NOW() WHERE usuarioId=".$elemento->usuarioId;
		$conexion->query($sentencia);
		setcookie("username",$elemento->username,time()+60*60*24*365);
		setcookie("pass",$elemento->pass,time()+60*60*24*365);
		//$_COOKIE["username"]
		//$_COOKIE["pass"]
		
		
	}
	else{
		return "Error";
	}
	
	
}

function cerrarSession(){
	
	session_unset();
	session_destroy();
	
}




?>
