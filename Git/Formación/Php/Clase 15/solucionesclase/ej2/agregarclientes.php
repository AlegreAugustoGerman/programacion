      <?php
		
		include_once('clases/cliente.php');
			
        if(($_POST)){
			
			
			/*Obtengo datos del formulario*/
			
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$telefono=$_POST["telefono"];
			$direccion=$_POST["direccion"];
			
			
			if(isset($nombre) && isset($apellido) && isset($telefono) && isset($direccion))
			{
			
				$cliente=new Cliente(NULL,$nombre,$apellido,$telefono,$direccion);
				echo $cliente->agregar();
			
			}
			
			
		}
		
		
		?>
		<a href='verclientes.php'>Volver</a>
		
		<FORM NAME="clientes" ACTION="" METHOD="POST">
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
				<th>Teléfono</th>
				<td><input type="text" name="telefono"></td>
			</tr>
			<tr>
				<th>Dirección</th>
				<td><input type="text" name="direccion"></td>
			</tr>
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
		
		include_once "pie.html";
	
