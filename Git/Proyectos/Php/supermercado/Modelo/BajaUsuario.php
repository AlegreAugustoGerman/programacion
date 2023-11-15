<?php
include '../Controlador/Funciones.php';
 
if($_POST){	
$numUsuarios=(int)$_POST['EliminarDni'];
$BajaUsuario=Baja($numUsuarios,$con);
echo "dni :".$BajaUsuario." se borro";} 
  
?>  
