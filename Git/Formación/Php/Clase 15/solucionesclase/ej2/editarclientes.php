
	<?php
		include_once "cabecera.html";
		include_once('clases/cliente.php');
			
			$clienteId = $_GET['clienteId'];
			
			
			if(($_POST)){
				
			/*Obtengo datos del formulario*/
			
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$telefono=$_POST["telefono"];
			$direccion=$_POST["direccion"];
			
			
			if(isset($nombre) && isset($apellido) && isset($telefono) && isset($direccion))
			{
			
				$cliente=new Cliente($clienteId,$nombre,$apellido,$telefono,$direccion);
				echo $cliente->editar();
			
			}
			
			
		}
		
		$cliente=new Cliente($clienteId);
		$elemento=$cliente->getCliente();
		
		?>
		<a href='verclientes.php'>Volver</a>
		
		
		<FORM NAME="clientes" ACTION="" METHOD="POST">
		<table>
			<tr>
				<th>Nombre</th>
				<td><input type="text" name="nombre" value="<?php echo $elemento->getNombre()?>"></td>
			</tr>
			<tr>
				<th>Apellido</th>
				<td><input type="text" name="apellido" value="<?php echo $elemento->getApellido() ?>"></td>
			</tr>
			<tr>
				<th>Teléfono</th>
				<td><input type="text" name="telefono" value="<?php echo $elemento->getTelefono() ?>"></td>
			</tr>
			<tr>
				<th>Dirección</th>
				<td><input type="text" name="direccion" value="<?php echo $elemento->getDireccion() ?>"></td>
			</tr>
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
		
			include_once "pie.html";
		
