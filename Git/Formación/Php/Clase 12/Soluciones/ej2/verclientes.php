<?php

include_once "cabecera.html";
include_once "conexion.php";

echo "<a href='agregarclientes.php'>Agregar cliente</a>";

$consulta="SELECT * FROM clientes";

if ($resultado = $conexion->query($consulta)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "<th>Dirección</th>";
    echo "<th>Teléfono</th>";
    echo "<th>-</th>";
    echo "<th>-</th>";
   echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["nombre"]."</td>";
		  echo "<td>".$fila["apellido"]."</td>";
		  echo "<td>".$fila["direccion"]."</td>";
		  echo "<td>".$fila["telefono"]."</td>";
	      echo "<td>"."<a href='editarclientes.php?clienteId=".$fila["clienteId"]."'>Editar</a>"."</td>";
	      echo "<td>"."<a href='eliminarclientes.php?clienteId=".$fila["clienteId"]."'>Eliminar</a>"."</td>";
	 	 echo "</tr>";
       
    }
    echo "</table>";
   } 
   
   
     echo "<br>";
 
include_once "pie.html";
