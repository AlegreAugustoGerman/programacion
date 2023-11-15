<?php
include_once "conexion.php";

 
function obtenerAlumnos($conexion)
{

	$sentencia="SELECT alumnos.*,COUNT(*) AS cantidad,SUM(nota)/COUNT(*) AS promedio FROM rendiciones_alumnos LEFT JOIN alumnos ON rendiciones_alumnos.alumnoId=alumnos.alumnoId GROUP BY rendiciones_alumnos.alumnoId";

	if ($res=$conexion->query($sentencia)) {
		return $res;
	}
}

function obtenerRendiciones($conexion,$alumnoId)
{
	

	$sentencia="SELECT rendiciones_alumnos.nota,materias.nombre AS materia,rendiciones.fecha, CONCAT(alumnos.nombre,' ',alumnos.apellido) AS alumno FROM rendiciones_alumnos
				LEFT JOIN rendiciones ON rendiciones_alumnos.rendicionId=rendiciones.rendicionId
				LEFT JOIN materias ON rendiciones.materiaId=materias.materiaId
				LEFT JOIN alumnos ON rendiciones_alumnos.alumnoId=alumnos.alumnoId
				WHERE alumnos.alumnoId=".$alumnoId;
				

	if ($res=$conexion->query($sentencia)) {
		return $res;
	}
}

function obtenerMesas($conexion)
{

	$sentencia="SELECT materias.nombre AS materia,rendiciones.fecha FROM rendiciones
				LEFT JOIN materias ON materias.materiaId=rendiciones.materiaId
				WHERE fecha >= NOW()";

	if ($res=$conexion->query($sentencia)) {
		return $res;
	}
}





