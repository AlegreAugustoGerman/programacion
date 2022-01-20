<html>
	<head>
		<meta charset="utf-8">
		<title>Editar Alumnos</title>
	</head>
	<body>
		<h1>Editar Alumnos</h1>
		
		<?php
		
			$host="localhost";
			$user="root";
			$pass="12345";
			$db="examenes";

			$conexion = mysqli_connect($host,$user,$pass,$db);

			/* comprobar la conexión */
			if (mysqli_connect_errno()) {
				echo "Error de conexión".mysqli_connect_errno()." : ". mysqli_connect_error();
				echo "<br>";
			  
			}
			
		$alumnoId = $_GET['alumnoId'];
			
		if(($_POST)){
			
		
			
			/*Obtengo datos del formulario*/
			
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$dni=$_POST["dni"];
			
			if(isset($nombre) && isset($apellido) && isset($dni) )
			{
			
				/*Modificar tabla*/
				$sentencia="UPDATE alumnos SET nombre = '$nombre', apellido = '$apellido', dni = $dni WHERE alumnoId = '$alumnoId'";
				

				if ($conexion->query($sentencia)) {
					echo "Se editó el alumno ";
				}else
				{
					echo $sentencia."<br>";
					echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
				}
			
			}
			
			
		}
		
		$consulta="SELECT * FROM alumnos WHERE alumnoId=".$alumnoId;
		if(!$resultado = $conexion->query($consulta))
		{
			echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		$elemento = mysqli_fetch_object($resultado); 
		
		?>
		
		<a href='veralumnos.php'>Volver</a>
		<FORM NAME="alumnos" ACTION="" METHOD="POST">
		<table>
			
			<tr>
				<th>Nombre</th>
				<td><input type="text" name="nombre" value="<?php echo $elemento->nombre?>"></td>
			</tr>
			<tr>
				<th>Apellido</th>
				<td><input type="text" name="apellido" value="<?php echo $elemento->apellido?>"></td>
			</tr>
			<tr>
				<th>D.N.I</th>
				<td><input type="text" name="dni" value="<?php echo $elemento->dni?>"></td>
			</tr>
			
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
			mysqli_close($conexion);
		?>
		
		
	</body>
</html>
