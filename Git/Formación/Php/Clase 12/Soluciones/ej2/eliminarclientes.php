<?php
include_once "funcionesclientes.php";
include_once "conexion.php";
$clienteId = $_GET['clienteId'];
$resultado=eliminar($clienteId,$conexion);
echo $resultado;
