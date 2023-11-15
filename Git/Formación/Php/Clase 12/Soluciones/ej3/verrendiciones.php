<?php

include_once "cabecera.html";
include_once "conexion.php";


$consulta="SELECT rendiciones.fecha,materias.nombre AS materia,rendiciones_alumnos.*, CONCAT(alumnos.nombre,' ',alumnos.apellido) AS alumno FROM rendiciones_alumnos
INNER JOIN rendiciones ON rendiciones.rendicionId=rendiciones_alumnos.rendicionId
INNER JOIN alumnos ON alumnos.alumnoId=rendiciones_alumnos.alumnoId
INNER JOIN materias ON materias.materiaId=rendiciones.materiaId
";
echo "<a href='agregarrendiciones.php'>Agregar rendicion</a>";
if ($resultado = $conexion->query($consulta)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Fecha</th>";
    echo "<th>Nota</th>";
    echo "<th>Materia</th>";
    echo "<th>Alumno</th>";
    echo "<th>-</th>";
    echo "<th>-</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["fecha"]."</td>";
		  echo "<td>".$fila["nota"]."</td>";
		  echo "<td>".$fila["materia"]."</td>";
		  echo "<td>".$fila["alumno"]."</td>";
		  echo "<td>"."<a href='editarrendiciones.php?rendiciones_alumnosId=".$fila["rendiciones_alumnosId"]."'>Editar</a>"."</td>";
		  echo "<td>"."<a href='eliminarrendiciones.php?rendiciones_alumnosId=".$fila["rendiciones_alumnosId"]."'>Eliminar</a>"."</td>";
		  echo "</tr>";
       
    }
    echo "</table>";
   } 
   
   
     echo "<br>";
     
include_once "pie.html";
