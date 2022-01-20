<?php

include_once "cabecera.html";
include_once "conexion.php";

$consulta="SELECT * FROM alumnos";
echo "<a href='agregaralumnos.php'>Agregar alumno</a>";

if ($resultado = $conexion->query($consulta)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "<th>D.N.I</th>";
    echo "<th>-</th>";
    echo "<th>-</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["nombre"]."</td>";
		  echo "<td>".$fila["apellido"]."</td>";
		  echo "<td>".$fila["dni"]."</td>";
		 echo "<td>"."<a href='editaralumnos.php?alumnoId=".$fila["alumnoId"]."'>Editar</a>"."</td>";
		 echo "<td>"."<a href='eliminaralumnos.php?alumnoId=".$fila["alumnoId"]."'>Eliminar</a>"."</td>";
		        
		   echo "</tr>";
        
    } 
    echo "</table>";
   
   } 
   else
   {
	   echo $sentencia."<br>";
					echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	   
   }
   
   
     echo "<br>";
     
include_once "pie.html";
