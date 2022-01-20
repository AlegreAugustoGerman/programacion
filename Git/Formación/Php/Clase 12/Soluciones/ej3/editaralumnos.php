	<?php
		include_once "cabecera.html";
		include_once "conexion.php";
		include_once "funcionesalumnos.php";
			
		$alumnoId = $_GET['alumnoId'];
			
		if(($_POST)){
			
		
			
			/*Obtengo datos del formulario*/
			
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$dni=$_POST["dni"];
			
			if(isset($nombre) && isset($apellido) && isset($dni) )
			{
			
				editar($alumnoId,$nombre,$apellido,$dni,$conexion);
			
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
		
			include_once "pie.html";
