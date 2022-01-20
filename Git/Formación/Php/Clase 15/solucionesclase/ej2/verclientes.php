<?php

include_once "cabecera.html";
include_once('clases/cliente.php');


	if(($_POST)){
			
			/*Obtengo datos del formulario*/
			
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$telefono=$_POST["telefono"];
			$direccion=$_POST["direccion"];
			
			$cliente=new Cliente(NULL,$nombre,$apellido,$telefono,$direccion);
			
		}
		else
		{
			$cliente=new Cliente(NULL);
		}
		
echo "<a href='agregarclientes.php'>Agregar cliente</a>";

if ($resultado = $cliente->buscar()) {
	echo "<form action='' method='POST'>";
	echo "<table border>";
	echo "<tr>";
	echo "<th><input type='text' name='nombre'></th>";
	echo "<th><input type='text' name='apellido'></th>";
	echo "<th><input type='text' name='direccion'></th>";
	echo "<th><input type='text' name='telefono'></th>";
	echo "<th colspan='2'><input type='submit' value='Buscar'></th>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "<th>Dirección</th>";
    echo "<th>Teléfono</th>";
    echo "<th>-</th>";
    echo "<th>-</th>";
   echo "</tr>";
	  while ($fila = mysqli_fetch_object($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila->nombre."</td>";
		  echo "<td>".$fila->apellido."</td>";
		  echo "<td>".$fila->direccion."</td>";
		  echo "<td>".$fila->telefono."</td>";
	      echo "<td>"."<a href='editarclientes.php?clienteId=".$fila->clienteId."'>Editar</a>"."</td>";
	      echo "<td>"."<a href='eliminarclientes.php?clienteId=".$fila->clienteId."'>Eliminar</a>"."</td>";
	 	 echo "</tr>";
       
    }
    echo "</table>";
     echo "</form>";
   } 
   
   
     echo "<br>";
 
include_once "pie.html";
