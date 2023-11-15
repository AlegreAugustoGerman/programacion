<?php
include_once "funcionesanimales.php";
include_once "conexion.php";
$animalId = $_GET['animalId'];
$resultado=eliminar($animalId,$conexion);
echo $resultado;
