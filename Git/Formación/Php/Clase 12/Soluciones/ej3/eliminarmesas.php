<?php
include_once "funcionesmesas.php";
include_once "conexion.php";
$rendicionId = $_GET['rendicionId'];
$resultado=eliminar($rendicionId,$conexion);
echo $resultado;
