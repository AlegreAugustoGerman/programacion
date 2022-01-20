<?php
include_once "funcionesalumnos.php";
include_once "conexion.php";
$alumnoId = $_GET['alumnoId'];
$resultado=eliminar($alumnoId,$conexion);
echo $resultado;
 
 