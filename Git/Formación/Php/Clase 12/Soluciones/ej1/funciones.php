<?php
include_once "conexion.php";

 

function agregar($nombre,$apellido,$telefono,$direccion,$sexo,$conexion)
{

	$sentencia="INSERT INTO contactos (personaId,nombre,apellido,direccion,telefono,sexo)
	VALUES (NULL,'".$nombre."','".$apellido."','".$telefono."','".$direccion."','".$sexo."');";

	if ($conexion->query($sentencia)) {
		header("Location: ver.php");
	}else
	{
		return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
}

function editar($personaId,$nombre,$apellido,$telefono,$direccion,$sexo,$conexion)
{

	$sentencia="UPDATE contactos SET nombre = '$nombre', apellido = '$apellido', telefono = '$telefono', direccion = '$direccion', sexo = '$sexo' WHERE personaId = '$personaId'";
				
	if ($conexion->query($sentencia)) {
		header("Location: ver.php");
	}else
	{
		return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
}

function eliminar($personaId,$conexion)
{
	$sentencia="DELETE FROM contactos WHERE personaId=".$personaId;
	if ($conexion->query($sentencia)) {
		header("Location: ver.php");
		
	}
	{
		return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
	
	
}

