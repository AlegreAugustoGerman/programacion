<?php
include_once "funciones.php";
include_once "conexion.php";
$personaId = $_GET['personaId'];
$resultado=eliminar($personaId,$conexion);
echo $resultado;
