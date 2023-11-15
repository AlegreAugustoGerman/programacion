<?php
include_once "conexion.php";

 

function agregar($rendicionId,$alumnoId,$nota,$conexion)
{

	$sentencia="INSERT INTO rendiciones_alumnos (rendiciones_alumnosId,rendicionId,alumnoId,nota)
				VALUES (NULL,".$rendicionId.",".$alumnoId.",".$nota.");";
				
	if ($conexion->query($sentencia)) {
		header("Location: verrendiciones.php");
	}else
	{
		return "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
}

function editar($rendiciones_alumnosId,$rendicionId,$alumnoId,$nota,$conexion)
{

	$sentencia="UPDATE rendiciones_alumnos SET rendicionId = $rendicionId, alumnoId = $alumnoId,nota= $nota WHERE rendiciones_alumnosId = $rendiciones_alumnosId";
				
	if ($conexion->query($sentencia)) {
		header("Location: verrendiciones.php");
	}else
	{
		return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
}

function eliminar($rendiciones_alumnosId,$conexion)
{
	$sentencia="DELETE FROM rendiciones_alumnos WHERE rendiciones_alumnosId=".$rendiciones_alumnosId;
	if ($conexion->query($sentencia)) {
		header("Location: verrendiciones.php");
		
	}
	{
		return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
	
	
}

