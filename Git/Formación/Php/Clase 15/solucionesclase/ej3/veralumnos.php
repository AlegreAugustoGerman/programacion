<?php

include_once "cabecera.html";
include_once('clases/alumno.php');


	if(($_POST)){
			
			/*Obtengo datos del formulario*/
			
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$dni=$_POST["dni"];
			$mail=$_POST["mail"];
			
			$alumno=new Alumno(NULL,$nombre,$apellido,$dni,$mail);
			
		}
		else
		{
			$alumno=new Alumno(NULL);
		}
		
echo "<a href='agregaralumnos.php'>Agregar alumno</a>";

if ($resultado = $alumno->buscar()) {
	
	echo "<form action='' method='POST'>";
	echo "<table border>";
	echo "<tr>";
	echo "<th><input type='text' name='nombre'></th>";
	echo "<th><input type='text' name='apellido'></th>";
	echo "<th><input type='text' name='dni'></th>";
	echo "<th colspan='2'><input type='submit' value='Buscar'></th>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "<th>D.N.I</th>";
    echo "<th>-</th>";
    echo "<th>-</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_object($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila->nombre."</td>";
		  echo "<td>".$fila->apellido."</td>";
		  echo "<td>".$fila->dni."</td>";
		 echo "<td>"."<a href='editaralumnos.php?alumnoId=".$fila->alumnoId."'>Editar</a>"."</td>";
		 echo "<td>"."<a href='eliminaralumnos.php?alumnoId=".$fila->alumnoId."'>Eliminar</a>"."</td>";
		        
		   echo "</tr>";
       
    }
    echo "</table>";
    echo "</form>";
   
   } 
 
   
   
     echo "<br>";
     
include_once "pie.html";
