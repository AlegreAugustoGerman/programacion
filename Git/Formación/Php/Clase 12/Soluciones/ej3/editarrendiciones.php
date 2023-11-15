	<?php
		include_once "cabecera.html";
		include_once "conexion.php";
		include_once "funcionesrendiciones.php";
			
				
		$rendiciones_alumnosId = $_GET['rendiciones_alumnosId'];
			
		if(($_POST)){
			
			
		
			
			/*Obtengo datos del formulario*/
			
			$rendicionId=$_POST["rendicionId"];
			$alumnoId=$_POST["alumnoId"];
			$nota=$_POST["nota"];
			
			
			if(isset($rendicionId) && isset($alumnoId) && isset($nota))
			{
				editar($rendiciones_alumnosId,$rendicionId,$alumnoId,$nota,$conexion);
			
			}
			
			
		}
		$consulta="SELECT * FROM rendiciones_alumnos WHERE rendiciones_alumnosId=".$rendiciones_alumnosId;
		if(!$resultado = $conexion->query($consulta))
		{
			echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		$elemento = mysqli_fetch_object($resultado); 

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
								echo "<option value=".$fila["rendicionId"];
								if($elemento->rendicionId==$fila["rendicionId"]){
									echo " selected";
									}
								echo ">".$fila["nombre"]." ".$fila["fecha"]."</option>";
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
								echo "<option value=".$fila["alumnoId"];
								if($elemento->alumnoId==$fila["alumnoId"]){
									echo " selected";
									}
								echo ">".$fila["nombre"]." ".$fila["apellido"]." ".$fila["dni"]."</option>";
							}
						}
					?>
						
					</select></td>
			</tr>
			
			<tr>
				<th>Nota</th>
				<td><input type="number" name="nota" min=1 max=10 value=<?php echo $elemento->nota; ?>></td>
			</tr>
			
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
		
			include_once "pie.html";
