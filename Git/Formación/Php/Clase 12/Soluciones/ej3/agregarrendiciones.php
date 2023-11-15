 <?php
		
		include_once "cabecera.html";
		include_once "conexion.php";
		include_once "funcionesrendiciones.php";
			
		if(($_POST)){
			
			
		
			
			/*Obtengo datos del formulario*/
			
			$rendicionId=$_POST["rendicionId"];
			$alumnoId=$_POST["alumnoId"];
			$nota=$_POST["nota"];
			
			
			if(isset($rendicionId) && isset($alumnoId) && isset($nota))
			{
				agregar($rendicionId,$alumnoId,$nota,$conexion);
			}
			
			
		}
		

		?>
		
		<a href='verrendiciones.php'>Volver</a>
		<FORM NAME="rendiciones" ACTION="" METHOD="POST">
		<table>
			<tr>
				<th>Mesa</th>
				<td><select name="rendicionId">
					<?php
					
						$consulta="SELECT rendicionId,materias.nombre,fecha FROM rendiciones
						LEFT JOIN materias ON materias.materiaId=rendiciones.materiaId";
						if ($resultado = $conexion->query($consulta)) {
							
							while ($fila = mysqli_fetch_assoc($resultado)) {
								echo "<option value=".$fila["rendicionId"].">".$fila["nombre"]." ".$fila["fecha"]."</option>";
							}
						}
					?>
						
					</select></td>
			</tr>
			<tr>
				<th>Alumno</th>
				<td><select name="alumnoId">
					<?php
					
						$consulta="SELECT alumnoId,nombre,apellido,dni FROM alumnos";
						if ($resultado = $conexion->query($consulta)) {
							
							while ($fila = mysqli_fetch_assoc($resultado)) {
								echo "<option value=".$fila["alumnoId"].">".$fila["nombre"]." ".$fila["apellido"]." ".$fila["dni"]."</option>";
							}
						}
					?>
						
					</select></td>
			</tr>
			
			<tr>
				<th>Nota</th>
				<td><input type="number" name="nota" min=1 max=10></td>
			</tr>
			
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		
	<?php
		
		include_once "pie.html";
