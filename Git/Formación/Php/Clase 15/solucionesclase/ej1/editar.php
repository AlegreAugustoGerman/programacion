<html>
	<head>
		<meta charset="utf-8">
		<title>Editar Contacto</title>
	</head>
	<body>
		<h1>Editar Contacto</h1>
		
		<?php
			
			include_once('clases/contacto.php');
		
				
			
			$personaId = $_GET['personaId'];
			if(($_POST)){
				
		
			/*Obtengo datos del formulario*/
			
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$telefono=$_POST["telefono"];
			$direccion=$_POST["direccion"];
			$sexo=$_POST["sexo"];
			
			if(isset($nombre) && isset($apellido) && isset($telefono) && isset($direccion) && isset($sexo))
			{
			
				$persona=new Contacto($personaId,$nombre,$apellido,$telefono,$direccion,$sexo);
				echo $persona->editar();
							
			}
			else
			{
				echo "Campos no completados";
			}
			
			
		}
		
		$persona=new Contacto($personaId);
		$elemento=$persona->getContacto();
		
		
		?>
		<a href='ver.php'>Volver</a>
		
		<FORM NAME="contactos" ACTION="" METHOD="POST">
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
			<tr>
				<th>Sexo</th>
				<td><input type="radio" name="sexo" value="Masculino" <?php if($elemento->getSexo()=="Masculino"){echo "checked=checked";}?>>Masculino
					<input type="radio" name="sexo" value="Femenino"  <?php if($elemento->getSexo()=="Femenino"){echo "checked=checked";}?>>Femenino
				</td>
			</tr>
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
	
		
		
	</body>
</html>
