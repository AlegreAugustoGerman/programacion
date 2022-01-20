	<?php
		include_once "cabecera.html";
		include_once "conexion.php";
		include_once "funcionesmesas.php";
			
			$rendicionId = $_GET['rendicionId'];
			
		if(($_POST)){
			
		
			
			/*Obtengo datos del formulario*/
			
			$materiaId=$_POST["materiaId"];
			$fecha=$_POST["fecha"];
				
			
			if(isset($materiaId) && isset($fecha))
			{
			
				editar($rendicionId,$materiaId,$fecha,$conexion);
			}
			
			
		}
		
		$consulta="SELECT * FROM rendiciones WHERE rendicionId=".$rendicionId;
		if(!$resultado = $conexion->query($consulta))
		{
			echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		$elemento = mysqli_fetch_object($resultado); 
		
		

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
								echo "<option value=".$fila["materiaId"];
								if($elemento->materiaId==$fila["materiaId"]){
									echo " selected";
									}
								echo ">".$fila["nombre"]."</option>";
							}
						}
					?>
						
					</select></td>
			</tr>
			<tr>
				<th>Fecha</th>
				<td><input type="date" name="fecha" value="<?php echo $elemento->fecha?>"></td>
			</tr>
			
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
		
			include_once "pie.html";
