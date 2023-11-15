<html>
	<head>
		<meta charset="utf-8">
		<title>Conexión DB</title>
	</head>
	<body>
		<h1>Conexión DB</h1>
		
		<?php
		
		$host="localhost";
		$root="root";
		$pass="12345";
		$bd="agenda";

		//Realizar conexion
		$conexion=mysqli_connect($host,$root,$pass,$bd);
		
		//Comprobar conexión
		if(mysqli_connect_errno())
		{
			echo "Error de conexión ".mysqli_connect_errno()." : ".mysqli_connect_error();
		}
		else
		{
			echo "Conectado a base de datos ".$bd;
			echo "<br>";
		}
		
		//Ejecutar sentencia
		$sentencia="INSERT INTO contactos (personaId,nombre,apellido,direccion,telefono,sexo)
		 VALUES (NULL,'Luis','Sanchez','San Martin 23','23423','Masculino')";
		if(!$conexion->query($sentencia))
		{
			echo "Consulta: ".$sentencia;
			echo "<br>";
			echo "Error: ".$conexion->error;
		}else
		{
			echo "Inserción realizada con éxito";
		}
		
		echo "<br>";
		
		//Realizar consulta
		$consulta="SELECT * FROM contactos LIMIT 5";
		$resultado=$conexion->query($consulta);
		
		
		//Trae los valores de cada fila como un array numerico
	    echo "<ul>";
		while($fila=$resultado->fetch_row())
		{
			echo "<li>".$fila[1]." ".$fila[2]."</li>";
			
		}
		echo "</ul>";
		
		echo "<br>";
		
		$resultado2=$conexion->query($consulta);
		
		//Trae los valores de cada fila como un array numerico
		echo "<table border>";
		echo "<tr><th>Nombre</th><th>Apellido</th><th>Tel.</th></tr>";
		while($fila2=$resultado2->fetch_row())
		{
			echo "<tr>";
			echo "<td>".$fila2[1]."</td>";
			echo "<td>".$fila2[2]."</td>";
			echo "<td>".$fila2[3]."</td>";
			echo  "</tr>";
		}
		echo "</table>";
		
		echo "<br>";
		echo "<br>";
		
		$resultado2=$conexion->query($consulta);
		
		//Trae los valores de cada fila como un array asociativo
		echo "<table border>";
		echo "<tr><th>Nombre</th><th>Apellido</th><th>Tel.</th></tr>";
		while($fila2=$resultado2->fetch_assoc())
		{
			echo "<tr>";
			echo "<td>".$fila2["nombre"]."</td>";
			echo "<td>".$fila2["apellido"]."</td>";
			echo "<td>".$fila2["telefono"]."</td>";
			echo  "</tr>";
		}
		echo "</table>";
		
		echo "<br>";
		echo "<br>";
		
		$resultado3=$conexion->query($consulta);
		
		//Trae los valores de cada fila como un objeto
		echo "<table border>";
		echo "<tr><th>Nombre</th><th>Apellido</th><th>Tel.</th></tr>";
		while($fila3=$resultado3->fetch_object())
		{
			echo "<tr>";
			echo "<td>".$fila3->nombre."</td>";
			echo "<td>".$fila3->apellido."</td>";
			echo "<td>".$fila3->telefono."</td>";
			echo  "</tr>";
		}
		echo "</table>";
		
		echo "<br>";
		echo "<br>";
		
		$consulta2="SELECT CONCAT(nombre,' ',apellido) AS nombreCompleto, telefono,direccion FROM contactos LIMIT 10";
		$resultado4=$conexion->query($consulta2);
		
		
		if($resultado4){
			echo "<table border>";
			echo "<tr><th>Nombre Completo</th><th>Teléfono</th><th>Dirección</th></tr>";
		while($fila4=$resultado4->fetch_assoc())
		{
			echo "<tr>";
			echo "<td>".$fila4["nombreCompleto"]."</td>";
			echo "<td>".$fila4["telefono"]."</td>";
			echo "<td>".$fila4["direccion"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}else
	{
		echo "Consulta: ".$consulta2;
		echo "<br>";
		echo "Error: ".$conexion->error;
	}
	
	
		echo "<br>";
		echo "<br>";
		
		$consulta3="SELECT sexo,COUNT(*) AS cantidad FROM contactos GROUP BY sexo";
		$resultado5=$conexion->query($consulta3);
		
		
		if($resultado5){
			echo "<table border>";
			echo "<tr><th>Sexo</th><th>Cantidad</th></tr>";
		while($fila5=$resultado5->fetch_assoc())
		{
			echo "<tr>";
			echo "<td>".$fila5["sexo"]."</td>";
			echo "<td>".$fila5["cantidad"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}else
	{
		echo "Consulta: ".$consulta3;
		echo "<br>";
		echo "Error: ".$conexion->error;
	}
		
		
		//Cerrar conexión
		mysqli_close($conexion);
		
		//Nueva conexión
		$host="localhost";
		$root="root";
		$pass="12345";
		$bd="examenes";

		//Realizar conexion
		$conexion=mysqli_connect($host,$root,$pass,$bd);
		
		//Comprobar conexión
		if(mysqli_connect_errno())
		{
			echo "Error de conexión ".mysqli_connect_errno()." : ".mysqli_connect_error();
		}
		else
		{
			echo "Conectado a base de datos ".$bd;
			echo "<br>";
		}
		
		$consulta4="SELECT rendiciones_alumnos.nota,rendiciones.fecha,materias.nombre AS materia, alumnos.nombre,alumnos.apellido,alumnos.dni
		FROM rendiciones_alumnos
		LEFT JOIN rendiciones ON rendiciones.rendicionId=rendiciones_alumnos.rendicionId
		LEFT JOIN materias ON rendiciones.materiaId=materias.materiaId
		LEFT JOIN alumnos ON alumnos.alumnoId=rendiciones_alumnos.alumnoId";
		$resultado6=$conexion->query($consulta4);
		
		if($resultado6)
		{
			echo "<table border>";
			echo "<tr>";
			echo "<th>Alumno</th><th>Materia</th><th>Fecha</th><th>Nota</th>";
			echo"</tr>";
			while($fila6=$resultado6->fetch_object())
			{
			    echo "<tr>";
				echo "<td>".$fila6->nombre." ".$fila6->apellido." ".$fila6->dni."</td>";
				echo "<td>".$fila6->materia."</td>";
				echo "<td>".$fila6->fecha."</td>";
				echo "<td>".$fila6->nota."</td>";
				echo"</tr>";
			}
			echo"</table>";
		}else
		{
			echo $consulta4;
			echo "<br>";
			echo "Error:".$conexion->error;
		}
		
		echo "<br>";
		echo "<br>";
		
			$consulta5="SELECT COUNT(*) AS cantidad, SUM(nota)/COUNT(*) AS promedio, CONCAT(alumnos.nombre,' ',alumnos.apellido) AS alumno
		FROM rendiciones_alumnos
		LEFT JOIN alumnos ON alumnos.alumnoId=rendiciones_alumnos.alumnoId
		GROUP BY rendiciones_alumnos.alumnoId";
		$resultado7=$conexion->query($consulta5);
		
		if($resultado7)
		{
			echo "<table border>";
			echo "<tr>";
			echo "<th>Alumno</th><th>Cantidad</th><th>Promedio</th>";
			echo"</tr>";
			while($fila7=$resultado7->fetch_object())
			{
			    echo "<tr>";
				echo "<td>".$fila7->alumno."</td>";
				echo "<td>".$fila7->cantidad."</td>";
				echo "<td>".$fila7->promedio."</td>";
				echo"</tr>";
			}
			echo"</table>";
		}else
		{
			echo $consulta5;
			echo "<br>";
			echo "Error:".$conexion->error;
		}
		
		$sentencia2="DELETE FROM rendiciones_alumnos WHERE nota<5";
		if(!$conexion->query($sentencia2))
		{
			echo $conexion->error;
		}
		else
		{
			echo "Se borraron los registros";
		}
		
		
		
		
		
		?>
	</body>
</html>
