<html>
	<head>
		<meta charset="utf-8">
		<title>Ejercicio 4</title>
	</head>
	<body>


<?php

$host="localhost";
$user="root";
$pass="12345";
$db="examenes";


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

/*Mostrar en una tabla la fecha, nota y materia de las rendiciones del alumno “Maria Sosa”*/
$consulta1="SELECT rendiciones.fecha,materias.nombre AS materia,rendiciones_alumnos.nota FROM rendiciones_alumnos
INNER JOIN rendiciones ON rendiciones.rendicionId=rendiciones_alumnos.rendicionId
INNER JOIN alumnos ON alumnos.alumnoId=rendiciones_alumnos.alumnoId
INNER JOIN materias ON materias.materiaId=rendiciones.materiaId
WHERE alumnos.nombre='Maria' && alumnos.apellido='Sosa'";

if ($resultado = $conexion->query($consulta1)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Fecha</th>";
    echo "<th>Nota</th>";
    echo "<th>Materia</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["fecha"]."</td>";
		  echo "<td>".$fila["nota"]."</td>";
		  echo "<td>".$fila["materia"]."</td>";
		  echo "</tr>";
       
    }
    echo "</table>";
   } 
   
   
     echo "<br>";
     
     
 /*Mostrar en una tabla las rendiciones mostrando nombre de la materia, la cantidad de alumnos  que rindieron, la fecha y el promedio de las notas obtenidas*/
$consulta2="SELECT materias.nombre AS materia,COUNT(*) AS alumnos,(SUM(rendiciones_alumnos.nota)/COUNT(*)) AS promedio FROM rendiciones_alumnos
INNER JOIN rendiciones ON rendiciones.rendicionId=rendiciones_alumnos.rendicionId
INNER JOIN alumnos ON alumnos.alumnoId=rendiciones_alumnos.alumnoId
INNER JOIN materias ON materias.materiaId=rendiciones.materiaId
GROUP BY rendiciones.materiaId";

if ($resultado = $conexion->query($consulta2)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Materia</th>";
    echo "<th>Cant.Alumnos</th>";
    echo "<th>Promedio</th>";
	echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["materia"]."</td>";
		  echo "<td>".$fila["alumnos"]."</td>";
		  echo "<td>".$fila["promedio"]."</td>";
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
   
/*Mostrar una lista de las fechas para rendir materias mostrando la fecha y la materia ordenado de mas reciente a menos reciente mostrando solo las fechas que no sean antiguas.*/
$consulta3="SELECT fecha,materias.nombre FROM rendiciones
INNER JOIN materias ON rendiciones.materiaId=rendiciones.materiaId
WHERE fecha > CURDATE()";
if ($resultado = $conexion->query($consulta3)) {
	echo "<ul>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
			echo "<li>".$fila["fecha"]." ".$fila["nombre"]."</li>";
		  
    }
    echo "</ul>";
   } 
   echo "<br>";
   

$mysqli->close();
?>




</body>

</html>
