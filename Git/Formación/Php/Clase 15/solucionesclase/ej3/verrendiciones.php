<?php
include_once('cabecera.html');

include_once('clases/rendicion.php');
include_once('clases/mesa.php');
include_once('clases/alumno.php');

if(($_POST)){
			
			/*Obtengo datos del formulario*/
			
			$rendicionId=$_POST["rendicionId"];
			$alumnoId=$_POST["alumnoId"];
			$nota=$_POST["nota"];
			$rendicion=new Rendicion(NULL,$rendicionId,$alumnoId,$nota);
			
		}
		else
		{
			$rendicion=new Rendicion(NULL);
		}
		
echo "<a href='agregarrendiciones.php'>Agregar rendicion</a>";

if ($resultado = $rendicion->buscar()) {
	echo "<form action='' method='POST'>";
	echo "<table border>";
	echo "<tr>";
	echo "<th colspan='2'><select name='rendicionId'><option value=''>Todos</option>";
	
	$mesa=new Mesa();
	$resultadoMesas=$mesa->buscar();
	while ($fila = mysqli_fetch_object($resultadoMesas)) {
			echo "<option value=".$fila->rendicionId.">".$fila->materia." ".$fila->fecha."</option>";
		}
					
						
	echo "</select></th>";
	echo "<th><input type='text' name='nota'></th>";
	echo "<th><select name='alumnoId'><option value=''>Todos</option>";
	
	$alumno=new Alumno();
	$resultadoAlumnos=$alumno->buscar();
	while ($fila = mysqli_fetch_object($resultadoAlumnos)) {
			echo "<option value=".$fila->alumnoId.">".$fila->nombre." ".$fila->apellido."</option>";
		}
					
						
	echo "</select></th>";
	echo "<th colspan='2'><input type='submit' value='Buscar'></th>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Fecha</th>";
    echo "<th>Materia</th>";
    echo "<th>Nota</th>";
    echo "<th>Alumno</th>";
    echo "<th>-</th>";
    echo "<th>-</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["fecha"]."</td>";
		  echo "<td>".$fila["materia"]."</td>";
		  echo "<td>".$fila["nota"]."</td>";
		  echo "<td>".$fila["alumno"]."</td>";
		  echo "<td>"."<a href='editarrendiciones.php?rendiciones_alumnosId=".$fila["rendiciones_alumnosId"]."'>Editar</a>"."</td>";
		  echo "<td>"."<a href='eliminarrendiciones.php?rendiciones_alumnosId=".$fila["rendiciones_alumnosId"]."'>Eliminar</a>"."</td>";
		  echo "</tr>";
       
    }
    echo "</table>";
     echo "</form>";
   } 
   
   
     echo "<br>";
     
include_once "pie.html";
