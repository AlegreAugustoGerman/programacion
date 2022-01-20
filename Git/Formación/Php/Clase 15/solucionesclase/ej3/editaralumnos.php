	<?php
		include_once "cabecera.html";
		include_once('clases/alumno.php');
			
		$alumnoId = $_GET['alumnoId'];
			
		if(($_POST)){
			
		
			
			/*Obtengo datos del formulario*/
			
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$dni=$_POST["dni"];
			
			if(isset($nombre) && isset($apellido) && isset($dni) )
			{
				$alumno=new Alumno($alumnoId,$nombre,$apellido,$dni);
				echo $alumno->editar();
				
			
			}
			
			
		}
		
		$alumno=new Alumno($alumnoId);
		$elemento=$alumno->getAlumnos();
		
		?>
		
		<a href='veralumnos.php'>Volver</a>
		<FORM NAME="alumnos" ACTION="" METHOD="POST">
		<table>
			
			<tr>
				<th>Nombre</th>
				<td><input type="text" name="nombre" value="<?php echo $elemento->getNombre()?>"></td>
			</tr>
			<tr>
				<th>Apellido</th>
				<td><input type="text" name="apellido" value="<?php echo $elemento->getApellido()?>"></td>
			</tr>
			<tr>
				<th>D.N.I</th>
				<td><input type="text" name="dni" value="<?php echo $elemento->getDni()?>"></td>
			</tr>
			
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
		
			include_once "pie.html";
