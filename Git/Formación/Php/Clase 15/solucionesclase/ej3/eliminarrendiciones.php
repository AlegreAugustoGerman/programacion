<?php
include_once('clases/rendicion.php');


$rendiciones_alumnosId = $_GET['rendiciones_alumnosId'];
$rendicion=new Rendicion($rendiciones_alumnosId);
echo $rendicion->eliminar();
