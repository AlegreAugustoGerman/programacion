<?php
include_once "conexion.php";

 

function agregar($materiaId,$fecha,$conexion)
{

	$sentencia="INSERT INTO rendiciones (rendicionId,materiaId,fecha)
				VALUES (NULL,".$materiaId.",'".$fecha."');";
				
	if ($conexion->query($sentencia)) {
		header("Location: vermesas.php");
	}else
	{
		return "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
}

function editar($rendicionId,$materiaId,$fecha,$conexion)
{

	$sentencia="UPDATE rendiciones SET fecha = '$fecha', materiaId = $materiaId WHERE rendicionId = '$rendicionId'";
				
	if ($conexion->query($sentencia)) {
		header("Location: vermesas.php");
	}else
	{
		return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
}

function eliminar($rendicionId,$conexion)
{
	$sentencia="DELETE FROM rendiciones WHERE rendicionId=".$rendicionId;
	if ($conexion->query($sentencia)) {
		header("Location: vermesas.php");
		
	}
	{
		return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
	
	
}

