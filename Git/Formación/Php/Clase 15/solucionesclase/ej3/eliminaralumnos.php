<?php
include_once('clases/alumno.php');


$alumnoId = $_GET['alumnoId'];
$alumno=new Alumno($alumnoId);
echo $alumno->eliminar();
