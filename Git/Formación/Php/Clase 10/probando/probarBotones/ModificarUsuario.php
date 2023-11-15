<?php
include_once 'Consultas.php';

if($_POST){			
/*Obtengo datos del formulario*/  
    $numUsuario=$_POST["dni"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $cargo=$_POST["cargo"];
    $telefono=$_POST["telefono"];
    if(isset($numUsuario) && isset($nombre) && isset($apellido)&& isset($cargo)&& isset($telefono) )
    {modificar($numUsuario,$nombre,$apellido,$cargo,$telefono,$conexion);}}
    ?>