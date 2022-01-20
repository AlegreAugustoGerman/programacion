<html>
	<head>
		<meta charset="utf-8">
		<title>Ejercicio 2</title>
	</head>
	<body>


<?php

$host="localhost";
$user="root";
$pass="12345";
$db="ventas";


/*Conexion a base de datos*/
$conexion = mysqli_connect($host,$user,$pass,$db);


if (mysqli_connect_errno()) {
	echo "Error de conexión".mysqli_connect_errno()." : ". mysqli_connect_error();
	echo "<br>";
  
}else
{
	echo "Conectado a base de datos";
	echo "<br>";
}



/*Mostrar una lista de los productos ordenados por precios de mayor a menor*/
$consulta1="SELECT nombre,precio FROM productos ORDER BY precio DESC";
if ($resultado = $conexion->query($consulta1)) {
	echo "<ul>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
			echo "<li>".$fila["nombre"]." ".$fila["precio"]."</li>";
		  
    }
    echo "</ul>";
   } 
   echo "<br>";
   
/* Mostrar una tabla con el nombre y el precio de los productos cuyo precio es mayor a 30 */
$consulta2="SELECT nombre,precio FROM productos WHERE precio>30";

if ($resultado = $conexion->query($consulta2)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Precio</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["nombre"]."</td>";
		   echo "<td>".$fila["precio"]."</td>";
		   echo "</tr>";
       
    }
    echo "</table>";
   } 
   
   
     echo "<br>";
   


$mysqli->close();
?>




</body>

</html>
