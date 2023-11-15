<?php
include_once "conexion.php";

 

function agregar($tipo,$raza,$edad,$nombre,$clienteId,$conexion)
{

	$sentencia="INSERT INTO animales (animalId,tipo,raza,edad,nombre,clienteId)
				VALUES (NULL,'".$tipo."','".$raza."',".$edad.",'".$nombre."',".$clienteId.");";
				
	if ($conexion->query($sentencia)) {
		header("Location: veranimales.php");
	}else
	{
		return "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
}

function editar($animalId,$tipo,$raza,$edad,$nombre,$clienteId,$conexion)
{

	$sentencia="UPDATE animales SET tipo = '$tipo', raza = '$raza', edad = $edad, nombre = '$nombre', clienteId = $clienteId WHERE animalId = '$animalId'";
				
	if ($conexion->query($sentencia)) {
		header("Location: veranimales.php");
	}else
	{
		return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
}

function eliminar($animalId,$conexion)
{
	$sentencia="DELETE FROM animales WHERE animalId=".$animalId;
	if ($conexion->query($sentencia)) {
		header("Location: veranimales.php");
		
	}
	{
		return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
	
	
}

