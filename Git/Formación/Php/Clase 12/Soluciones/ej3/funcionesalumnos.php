<?php
include_once "conexion.php";

 

function agregar($nombre,$apellido,$dni,$conexion)
{

	$sentencia="INSERT INTO alumnos (alumnoId,nombre,apellido,dni)
				VALUES (NULL,'".$nombre."','".$apellido."',".$dni.");";
				
	if ($conexion->query($sentencia)) {
		header("Location: veralumnos.php");
	}else
	{
		return "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
}

function editar($alumnoId,$nombre,$apellido,$dni,$conexion)
{

	$sentencia="UPDATE alumnos SET nombre = '$nombre', apellido = '$apellido', dni = $dni WHERE alumnoId = '$alumnoId'";
				
	if ($conexion->query($sentencia)) {
		header("Location: veralumnos.php");
	}else
	{
		return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
}

function eliminar($alumnoId,$conexion)
{
	$sentencia="DELETE FROM alumnos WHERE alumnoId=".$alumnoId;
	if ($conexion->query($sentencia)) {
		header("Location: veralumnos.php");
		
	}
	{
		return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
	  
	 
}


