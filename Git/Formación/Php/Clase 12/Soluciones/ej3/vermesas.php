<?php

include_once "cabecera.html";
include_once "conexion.php";
     
$consulta="SELECT rendiciones.*,materias.nombre AS materia FROM rendiciones
INNER JOIN materias ON materias.materiaId=rendiciones.materiaId";
echo "<a href='agregarmesas.php'>Agregar mesa</a>";
if ($resultado = $conexion->query($consulta)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Fecha</th>";
    echo "<th>Materia</th>";
     echo "<th>-</th>";
      echo "<th>-</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["fecha"]."</td>";
		  echo "<td>".$fila["materia"]."</td>";
		   echo "<td>"."<a href='editarmesas.php?rendicionId=".$fila["rendicionId"]."'>Editar</a>"."</td>";
		    echo "<td>"."<a href='eliminarmesas.php?rendicionId=".$fila["rendicionId"]."'>Eliminar</a>"."</td>";
		  echo "</tr>";
       
    }
    echo "</table>";
   } 
   
 
     echo "<br>";
     
include_once "pie.html";
