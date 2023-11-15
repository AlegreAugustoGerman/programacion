<?php

include_once "cabecera.html";
include_once('clases/mesa.php');
include_once('clases/materia.php');
 if(($_POST)){
			
			/*Obtengo datos del formulario*/
			
			$materiaId=$_POST["materiaId"];
			$fecha=$_POST["fecha"];
			
			$mesa=new Mesa(NULL,$materiaId,$fecha);
			
		}
		else
		{
			$mesa=new Mesa(NULL);
		}
		
echo "<a href='agregarmesas.php'>Agregar mesa</a>";
if ($resultado = $mesa->buscar()) {
	echo "<form action='' method='POST'>";
	echo "</select></th>";
	echo "<table border>";
	echo "<tr>";
	echo "<th><input type='date' name='fecha'></th>";
	echo "<th><select name='materiaId'><option value=''>Todos</option>";
	$materia=new Materia();
	$resultadoMaterias=$materia->buscar();
	while ($fila = mysqli_fetch_object($resultadoMaterias)) {
		echo "<option value=".$fila->materiaId.">".$fila->nombre."</option>";
		}
	echo "<th colspan='2'><input type='submit' value='Buscar'></th>";
	echo "</tr>";
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
    echo "</form>";
   } 
   
 
     echo "<br>";
     
include_once "pie.html";
