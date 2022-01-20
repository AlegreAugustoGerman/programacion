<?php
include_once "conexion.php";

 

function obtenerUsuarios($conexion)
{

	$sentencia="SELECT * FROM usuarios WHERE tipo='usuario'";

	if ($res=$conexion->query($sentencia)) {
		return $res;
	}
}

function obtenerAdministradores($conexion)
{

	$sentencia="SELECT * FROM usuarios WHERE tipo='admin'";

	if ($res=$conexion->query($sentencia)) {
		return $res;
	}
	
	
}



