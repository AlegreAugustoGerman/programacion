 <?php
		
		include_once "cabecera.html";
		include_once('clases/alumno.php');
			
		if(($_POST)){
			
		
			
			/*Obtengo datos del formulario*/
			
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$dni=$_POST["dni"];
			
			if(isset($nombre) && isset($apellido) && isset($dni) )
			{
			
				$alumno=new Alumno(NULL,$nombre,$apellido,$dni,NULL);
				echo $alumno->agregar();
				
			}
			
			
		}
		

		?>
		
		<a href='veralumnos.php'>Volver</a>
		<FORM NAME="alumnos" ACTION="" METHOD="POST">
		<table>
			
			<tr>
				<th>Nombre</th>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<th>Apellido</th>
				<td><input type="text" name="apellido"></td>
			</tr>
			<tr>
				<th>D.N.I</th>
				<td><input type="text" name="dni"></td>
			</tr>
			
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
		
		include_once "pie.html";
