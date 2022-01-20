<html>
	<head>
		<meta charset="utf-8">
		<title>Ejercicio 3</title>
	</head>
	<body>


<?php

$host="localhost";
$user="root";
$pass="12345";
$db="veterinaria";


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



/*Mostrar una lista de los veterinarios ordenados por fecha de nacimiento de mayor a menor.*/
$consulta1="SELECT nombre,apellido,fechaNac FROM veterinarios ORDER BY fechaNac DESC";
if ($resultado = $conexion->query($consulta1)) {
	echo "<ul>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
			echo "<li>".$fila["nombre"]." ".$fila["apellido"]." ".$fila["fechaNac"]."</li>";
		  
    }
    echo "</ul>";
   } 
   echo "<br>";
   
/*Mostrar en una tabla tipo,nombre y edad de animal, nombre, apellido y teléfono de su respectivo cliente.*/
$consulta2="SELECT animales.nombre AS mascota ,animales.edad ,animales.tipo, clientes.nombre,clientes.apellido,clientes.telefono FROM animales
LEFT JOIN clientes ON animales.clienteId=clientes.clienteId";

if ($resultado = $conexion->query($consulta2)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Edad</th>";
    echo "<th>Tipo</th>";
    echo "<th>Dueño</th>";
   echo "<th>Tel</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["mascota"]."</td>";
		  echo "<td>".$fila["edad"]."</td>";
		  echo "<td>".$fila["tipo"]."</td>";
		  echo "<td>".$fila["nombre"]." ".$fila["apellido"]."</td>";
		  echo "<td>".$fila["telefono"]."</td>";
		        
		   echo "</tr>";
       
    }
    echo "</table>";
   } 
   
   
     echo "<br>";
     
     
 /*Mostrar en una tabla los datos de los clientes y la cantidad de mascotas que tienen*/
$consulta3="SELECT clientes.nombre,clientes.apellido,COUNT(*) AS cantidadMascotas FROM animales
RIGHT JOIN clientes ON clientes.clienteId=animales.clienteId
GROUP BY animales.clienteId";

if ($resultado = $conexion->query($consulta3)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "<th>Cant. Mascotas</th>";
   echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["nombre"]."</td>";
		  echo "<td>".$fila["apellido"]."</td>";
		  echo "<td>".$fila["cantidadMascotas"]."</td>";
		 echo "</tr>";
       
    }
    echo "</table>";
   } 
   
   
     echo "<br>";
     
     
/*Mostrar una lista de los animales mostrando entre paréntesis los nombres completos de sus clientes*/
$consulta4="SELECT animales.nombre AS mascota,CONCAT(clientes.nombre,' ',clientes.apellido) AS cliente FROM animales
LEFT JOIN clientes ON clientes.clienteId=animales.clienteId";
if ($resultado = $conexion->query($consulta4)) {
	echo "<ul>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
			echo "<li>".$fila["mascota"]." (".$fila["cliente"].")</li>";
		  
    }
    echo "</ul>";
   } 
   echo "<br>";

   


$mysqli->close();
?>




</body>

</html>
