
		<?php
		
		include_once "cabecera.html";
		include_once('clases/animal.php');
		include_once('clases/cliente.php');
			
        if(($_POST)){
			
		
			
			/*Obtengo datos del formulario*/
			
			$tipo=$_POST["tipo"];
			$raza=$_POST["raza"];
			$edad=$_POST["edad"];
			$nombre=$_POST["nombre"];
			$clienteId=$_POST["clienteId"];
			
			if(isset($tipo) && isset($raza) && isset($edad) && isset($nombre)&& isset($clienteId))
			{
				$animal=new Animal(NULL,$clienteId,$tipo,$raza,$nombre,$edad);
				echo $animal->agregar();
				
			}
			
			
		}
		

		?>
		<a href='veranimales.php'>Volver</a>
		
		<FORM NAME="animales" ACTION="" METHOD="POST">
		<table>
			<tr>
				<th>Tipo</th>
				<td>
					<select name="tipo">
						<option value="Perro">Perro</option>
						<option value="Gato">Gato</option>
						<option value="Conejo">Conejo</option>
						<option value="Otro">Otro</option>
					</select>
					
				</td>
			</tr>
			<tr>
				<th>Raza</th>
				<td><input type="text" name="raza"></td>
			</tr>
			<tr>
				<th>Edad</th>
				<td><input type="number" name="edad"></td>
			</tr>
			<tr>
				<th>Nombre</th>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<th>Cliente</th>
				<td><select name="clienteId">
					<?php
						$cliente=new Cliente();
						$resultadoClientes=$cliente->buscar();
						while ($fila = mysqli_fetch_object($resultadoClientes)) {
								echo "<option value=".$fila->clienteId.">".$fila->nombre." ".$fila->apellido."</option>";
							}
						
					?>
						
					</select></td>
			</tr>
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
		
		include_once "pie.html";
			
