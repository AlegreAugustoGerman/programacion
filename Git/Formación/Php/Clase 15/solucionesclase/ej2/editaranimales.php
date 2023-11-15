		<?php
		
		include_once "cabecera.html";
		include_once('clases/animal.php');
		include_once('clases/cliente.php');
		
			
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
				$animal=new Animal($animalId,$clienteId,$tipo,$raza,$nombre,$edad);
				echo $animal->editar();
				
			}
			
			
		}
		
		$animal=new Animal($animalId);
		$elemento=$animal->getAnimal();
		
		?>
		<a href='veranimales.php'>Volver</a>
		
		<FORM NAME="animales" ACTION="" METHOD="POST">
		<table>
			<tr>
				<th>Tipo</th>
				<td>
					<select name="tipo">
						<option value="Perro" <?php if($elemento->getTipo()=="Perro"){echo "selected";}?>>Perro</option>
						<option value="Gato" <?php if($elemento->getTipo()=="Gato"){echo "selected";}?>>Gato</option>
						<option value="Conejo" <?php if($elemento->getTipo()=="Conejo"){echo "selected";}?>>Conejo</option>
						<option value="Otro" <?php if($elemento->getTipo()=="Otro"){echo "selected";}?>>Otro</option>
					</select>
					
				</td>
			</tr>
			<tr>
				<th>Raza</th>
				<td><input type="text" name="raza" value="<?php echo $elemento->getRaza()?>"></td>
			</tr>
			<tr>
				<th>Edad</th>
				<td><input type="number" name="edad" value="<?php echo $elemento->getEdad()?>"></td>
			</tr>
			<tr>
				<th>Nombre</th>
				<td><input type="text" name="nombre" value="<?php echo $elemento->getNombre()?>"></td>
			</tr>
			<tr>
				<th>Cliente</th>
				<td><select name="clienteId">
					<?php
						$cliente=new Cliente();
						$resultadoClientes=$cliente->buscar();
						while ($fila = mysqli_fetch_object($resultadoClientes)) {
								echo "<option value=".$fila->clienteId;
								if($elemento->getClienteId()==$fila->clienteId){
									echo " selected";
									}
								echo ">".$fila->nombre." ".$fila->apellido."</option>";
							}
							
						
					?>
						
					</select></td>
			</tr>
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
			include_once "pie.html";
			
			
