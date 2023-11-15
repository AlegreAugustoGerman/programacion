<?php
include_once('clases/cliente.php');
$clienteId = $_GET['clienteId'];
$cliente=new Cliente($clienteId);
echo $cliente->eliminar();
