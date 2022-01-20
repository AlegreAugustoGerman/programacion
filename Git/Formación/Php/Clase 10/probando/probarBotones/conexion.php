<?php

$host="localhost";
$user="root";
$pass="";
$mydb="mydbClaseDiez";

//Realizar conexion
$conexion=mysqli_connect($host,$user,$pass,$mydb);

//Comprobar conexión
if(mysqli_connect_errno())
{
    echo "Error de conexión ".mysqli_connect_errno()." : ".mysqli_connect_error();
}
else
{
    echo "Conectado a base de datos ".$mydb;
    echo "<br>";
}
?> 