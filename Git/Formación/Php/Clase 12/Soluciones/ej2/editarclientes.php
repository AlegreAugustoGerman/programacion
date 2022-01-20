
	<?php
		include_once "cabecera.html";
		include_once "conexion.php";
		include_once "funcionesclientes.php";
			
			$clienteId = $_GET['clienteId'];
			
			
			if(($_POST)){
				
			/*Obtengo datos del formulario*/
			
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$telefono=$_POST["telefono"];
			$direccion=$_POST["direccion"];
			
			
			if(isset($nombre) && isset($apellido) && isset($telefono) && isset($direccion))
			{
			
				editar($clienteId,$nombre,$apellido,$telefono,$direccion,$conexion);
			
			}
			
			
		}
		
		$consulta="SELECT * FROM clientes WHERE clienteId=".$clienteId;
		if(!$resultado = $conexion->query($consulta))
		{
			echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		$elemento = mysqli_fetch_object($resultado); 
		
		?>
		<a href='verclientes.php'>Volver</a>
		
		
		<FORM NAME="clientes" ACTION="" METHOD="POST">
		<table>
			<tr>
				<th>Nombre</th>
				<td><input type="text" name="nombre" value="<?php echo $elemento->nombre?>"></td>
			</tr>
			<tr>
				<th>Apellido</th>
				<td><input type="text" name="apellido" value="<?php echo $elemento->apellido ?>"></td>
			</tr>
			<tr>
				<th>Teléfono</th>
				<td><input type="text" name="telefono" value="<?php echo $elemento->telefono ?>"></td>
			</tr>
			<tr>
				<th>Dirección</th>
				<td><input type="text" name="direccion" value="<?php echo $elemento->direccion?>"></td>
			</tr>
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
		
			include_once "pie.html";
		
