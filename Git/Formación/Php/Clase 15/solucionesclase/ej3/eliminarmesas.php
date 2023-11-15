<?php
include_once('clases/mesa.php');


$rendicionId = $_GET['rendicionId'];
$mesa=new Mesa($rendicionId);
echo $mesa->eliminar();
