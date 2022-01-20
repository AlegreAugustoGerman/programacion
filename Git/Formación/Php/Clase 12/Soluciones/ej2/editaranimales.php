		<?php
		
		include_once "cabecera.html";
		include_once "conexion.php";
		include_once "funcionesanimales.php";
		
			
			$animalId = $_GET['animalId'];
			
			
		if(($_POST)){
			
		
			
			/*Obtengo datos del formulario*/
			
			$tipo=$_POST["tipo"];
			$raza=$_POST["raza"];
			$edad=$_POST["edad"];
			$nombre=$_POST["nombre"];
			$clienteId=$_POST["clienteId"];
			
			if(isset($tipo) && isset($raza) && isset($edad) && isset($nombre)&& isset($clienteId))
			{
			
				echo editar($animalId,$tipo,$raza,$edad,$nombre,$clienteId,$conexion);
				
				
			}
			
			
		}
		
		$consulta="SELECT * FROM animales WHERE animalId=".$animalId;
		if(!$resultado = $conexion->query($consulta))
		{
			echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		$elemento = mysqli_fetch_object($resultado); 
		echo $elemento->clienteId;
		?>
		<a href='veranimales.php'>Volver</a>
		
		<FORM NAME="animales" ACTION="" METHOD="POST">
		<table>
			<tr>
				<th>Tipo</th>
				<td>
					<select name="tipo">
						<option value="Perro" <?php if($elemento->tipo=="Perro"){echo "selected";}?>>Perro</option>
						<option value="Gato" <?php if($elemento->tipo=="Gato"){echo "selected";}?>>Gato</option>
						<option value="Conejo" <?php if($elemento->tipo=="Conejo"){echo "selected";}?>>Conejo</option>
						<option value="Otro" <?php if($elemento->tipo=="Otro"){echo "selected";}?>>Otro</option>
					</select>
					
				</td>
			</tr>
			<tr>
				<th>Raza</th>
				<td><input type="text" name="raza" value="<?php echo $elemento->raza?>"></td>
			</tr>
			<tr>
				<th>Edad</th>
				<td><input type="number" name="edad" value="<?php echo $elemento->edad?>"></td>
			</tr>
			<tr>
				<th>Nombre</th>
				<td><input type="text" name="nombre" value="<?php echo $elemento->nombre?>"></td>
			</tr>
			<tr>
				<th>Cliente</th>
				<td><select name="clienteId">
					<?php
					
						$consulta="SELECT clienteId,nombre,apellido FROM clientes";
						if ($resultado = $conexion->query($consulta)) {
							
							while ($fila = mysqli_fetch_assoc($resultado)) {
								echo "<option value=".$fila["clienteId"];
								if($elemento->clienteId==$fila["clienteId"]){
									echo " selected";
									}
								echo ">".$fila["nombre"]." ".$fila["apellido"];
								echo "</option>";
							}
						}
					?>
						
					</select></td>
			</tr>
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
			include_once "pie.html";
			
			
