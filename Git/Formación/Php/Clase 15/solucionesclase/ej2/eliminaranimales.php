<?php
include_once('clases/animal.php');
$animalId = $_GET['animalId'];
$animal=new Animal($animalId);
echo $animal->eliminar();
