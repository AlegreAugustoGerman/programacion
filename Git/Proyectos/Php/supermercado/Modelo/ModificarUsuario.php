<?php
include '../Controlador/Funciones.php';

if(isset ($_POST)){			
/*Obtengo datos del formulario*/
$numUsuarios=(int)$_POST["num"];   
 
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$edad=(int)$_POST["edad"];
 
$cargo=(int)$_POST["cargo"];
   
 
    if(isset($numUsuarios) && isset($nombre) && isset($apellido)&& isset($edad)&& isset($cargo) )
    {modificarUsuario($numUsuarios,$nombre,$apellido,$edad,$cargo,$con);}}
    ?> 