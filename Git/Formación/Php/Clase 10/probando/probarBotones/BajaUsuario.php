<?php
 
include_once "Consultas.php";
 
if($_POST){	
$numUsuarios=$_POST['EliminarDni'];
$BajaUsuario=baja($numUsuarios,$conexion);
echo $BajaUsuario;} 

?> 
