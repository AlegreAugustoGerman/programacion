<?php
		
		include_once "cabecera.html";
		include_once "conexion.php";
		include_once "funcionesmesas.php";
			
		if(($_POST)){
			
		
			
			/*Obtengo datos del formulario*/
			
			$materiaId=$_POST["materiaId"];
			$fecha=$_POST["fecha"];
				
			
			if(isset($materiaId) && isset($fecha))
			{
			
				agregar($materiaId,$fecha,$conexion);
			
			}
			
			
		}
		

		?>
		
		<a href='vermesas.php'>Volver</a>
		<FORM NAME="mesas" ACTION="" METHOD="POST">
		<table>
			<tr>
				<th>Materia</th>
				<td><select name="materiaId">
					<?php
					
						$consulta="SELECT materiaId,nombre FROM materias";
						if ($resultado = $conexion->query($consulta)) {
							
							while ($fila = mysqli_fetch_assoc($resultado)) {
								echo "<option value=".$fila["materiaId"].">".$fila["nombre"]."</option>";
							}
						}
					?>
						
					</select></td>
			</tr>
			<tr>
				<th>Fecha</th>
				<td><input type="date" name="fecha"></td>
			</tr>
			
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
	<?php
		
		include_once "pie.html";
