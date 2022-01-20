<html>
	<head>
		<meta charset="utf-8">
		<title>Ejercicio 5</title>
	</head>
	<body>


<?php

$host="localhost";
$user="root";
$pass="12345";
$db="musica";


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

/*Mostrar en una tabla las pistas existentes mostrando nombre, nombre del disco, autor y año*/
$consulta1="SELECT pista.nombre AS pista,disco.nombre AS disco,disco.autor,disco.anio
FROM pista
INNER JOIN disco ON pista.discoId=disco.discoId";

if ($resultado = $conexion->query($consulta1)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Pista</th>";
    echo "<th>Disco</th>";
    echo "<th>Autor</th>";
    echo "<th>Año</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["pista"]."</td>";
		  echo "<td>".$fila["disco"]."</td>";
		  echo "<td>".$fila["autor"]."</td>";
		  echo "<td>".$fila["anio"]."</td>";
		  echo "</tr>";
       
    }
    echo "</table>";
   } 
   
   
     echo "<br>";
     
/*Mostrar una lista de discos ordenados por año*/
$consulta2="SELECT * FROM disco ORDER BY año";
if ($resultado = $conexion->query($consulta2)) {
	echo "<ul>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
			echo "<li>".$fila["nombre"]."</li>";
		  
    }
    echo "</ul>";
   } 
   echo "<br>";
   
   
     
/*Mostrar en una tabla las pistas  de el disco  “With the Beatles” ordenadas alfabéticamente por nombre mostrando nombre, disco, autor y letra*/
$consulta3="SELECT * FROM pista
WHERE discoId=(SELECT discoId FROM disco WHERE nombre='With the Beatles')
ORDER BY nombre";

if ($resultado = $conexion->query($consulta3)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Letra</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["nombre"]."</td>";
		  echo "<td>".$fila["letra"]."</td>";
		  echo "</tr>";
       
    }
    echo "</table>";
   } 
   
   
     echo "<br>";



/*Mostrar una lista de alumnos mostrando nombre, apellido y promedio.*/
$consulta3="SELECT alumnos.nombre,alumnos.apellido,(SUM(rendiciones_alumnos.nota)/COUNT(*)) AS promedio FROM rendiciones_alumnos
INNER JOIN alumnos ON alumnos.alumnoId=rendiciones_alumnos.alumnoId
GROUP BY rendiciones_alumnos.alumnoId";
if ($resultado = $conexion->query($consulta3)) {
	echo "<ul>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
			echo "<li>".$fila["nombre"]." ".$fila["apellido"]." ".$fila["promedio"]."</li>";
		  
    }
    echo "</ul>";
   } 
   echo "<br>";
   


$mysqli->close();
?>




</body>

</html>
