<?php

include_once "cabecera.html";
include_once('clases/animal.php');
include_once('clases/cliente.php');


if(($_POST)){
			
			/*Obtengo datos del formulario*/
			
			$clienteId=$_POST["clienteId"];
			$tipo=$_POST["tipo"];
			$raza=$_POST["raza"];
			$nombre=$_POST["nombre"];
			$edad=$_POST["edad"];
			
			$animal=new Animal(NULL,$clienteId,$tipo,$raza,$nombre,$edad);
			
		}
		else
		{
			$animal=new Animal(NULL);
		}
		
echo "<a href='agregaranimales.php'>Agregar animal</a>";
		

if ($resultado = $animal->buscar()) {
	echo "<form action='' method='POST'>";
	echo "<table border>";
	echo "<tr>";
	echo "<th><input type='text' name='nombre'></th>";
	echo "<th><input type='text' name='tipo'></th>";
	echo "<th><input type='text' name='raza'></th>";
	echo "<th><input type='text' name='edad'></th>";
	echo "<th><select name='clienteId'><option value=''>Todos</option>";
	
	$cliente=new Cliente();
	$resultadoClientes=$cliente->buscar();
	while ($fila = mysqli_fetch_object($resultadoClientes)) {
			echo "<option value=".$fila->clienteId.">".$fila->nombre." ".$fila->apellido."</option>";
		}
					
						
	echo "</select></th>";
	echo "<th colspan='2'><input type='submit' value='Buscar'></th>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Tipo</th>";
    echo "<th>Raza</th>";
    echo "<th>Edad</th>";
    echo "<th>Dueño</th>";
    echo "<th>-</th>";
    echo "<th>-</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_object($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila->nombre."</td>";
		  echo "<td>".$fila->tipo."</td>";
		  echo "<td>".$fila->raza."</td>";
		  echo "<td>".$fila->edad."</td>";
		  echo "<td>".$fila->cliente."</td>";
		  echo "<td>"."<a href='editaranimales.php?animalId=".$fila->animalId."'>Editar</a>"."</td>";
		  echo "<td>"."<a href='eliminaranimales.php?animalId=".$fila->animalId."'>Eliminar</a>"."</td>";
		        
		   echo "</tr>";
       
    }
    echo "</table>";
     echo "</form>";
   
   } 
   
   
   
     echo "<br>";
 

include_once "pie.html";
?>
