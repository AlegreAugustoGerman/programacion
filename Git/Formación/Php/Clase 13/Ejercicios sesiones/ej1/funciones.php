<?php
include_once "conexion.php";

 

function iniciarSesion($username,$pass,$recordar,$conexion)
{ 
	//busco el usuario
	$consulta="SELECT * FROM usuarios WHERE username='$username' && pass='".hash("md5", $pass)."'";
	if ($resultado=$conexion->query($consulta)) {
		$elemento = mysqli_fetch_object($resultado); 
		//inicio sesion
		session_start();
		//cargo valores de sesion
		$_SESSION["usuarioId"]=$elemento->usuarioId;
		$_SESSION["nombre"]=$elemento->nombre;
		$_SESSION["apellido"]=$elemento->apellido;
		$_SESSION["username"]=$elemento->username;
		$_SESSION["ultSesion"]=$elemento->ultSesion;
		//actualizo la fecha de ultima sesion
		$sentencia="UPDATE usuarios SET ultSesion=NOW() WHERE usuarioId=".$elemento->usuarioId;
		$resultado=$conexion->query($sentencia);
		//si quiero recordar seteo la cookie
		//if($recordar){
			//genero un número aleatorio
			$rand = mt_rand(1000000,999999999);
			//actualizo la cookie en la base de datos
			$sentencia2="UPDATE usuarios SET cookie=$rand WHERE usuarioId=".$elemento->usuarioId;
			$conexion->query($sentencia2);
			//cargo como cookie el usuario y el numero aleatoria
			setcookie("usuarioId", $elemento->usuarioId , time()+(60*60*24*365));
			setcookie("rand", $rand, time()+(60*60*24*365));
		//}
	}
	else
	{
		return "Usuario o contraseña incorrecta";
	}
}

function datosCookies($usuarioId,$rand,$conexion)
{
	$consulta="SELECT * FROM usuarios WHERE usuarioId='$usuarioId' && cookie='$rand'";
				if ($resultado=$conexion->query($consulta)) {
							return mysqli_fetch_object($resultado); 
					}
}

function cerrarSesion($conexion)
{
	//cierro sesion
	session_destroy();
	
}


