<?php
include_once "funcionesrendiciones.php";
include_once "conexion.php";
$rendiciones_alumnosId = $_GET['rendiciones_alumnosId'];
$resultado=eliminar($rendiciones_alumnosId,$conexion);
echo $resultado;
