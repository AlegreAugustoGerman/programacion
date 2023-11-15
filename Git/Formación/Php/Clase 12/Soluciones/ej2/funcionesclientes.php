<?php
include_once "conexion.php";

 

function agregar($nombre,$apellido,$telefono,$direccion,$conexion)
{

	
	$sentencia="INSERT INTO clientes (clienteId,nombre,apellido,direccion,telefono)
	VALUES (NULL,'".$nombre."','".$apellido."','".$telefono."','".$direccion."');";
				
	if ($conexion->query($sentencia)) {
		header("Location: verclientes.php");
	}else
	{
		return "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
}

function editar($clienteId,$nombre,$apellido,$telefono,$direccion,$conexion)
{

	$sentencia="UPDATE clientes SET nombre = '$nombre', apellido = '$apellido', telefono = '$telefono', direccion = '$direccion' WHERE clienteId = '$clienteId'";
				
	if ($conexion->query($sentencia)) {
		header("Location: verclientes.php");
	}else
	{
		return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
}

function eliminar($clienteId,$conexion)
{
	$sentencia="DELETE FROM clientes WHERE clienteId=".$clienteId;
	if ($conexion->query($sentencia)) {
		header("Location: verclientes.php");
		
	}
	{
		return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	}
	
	
}

