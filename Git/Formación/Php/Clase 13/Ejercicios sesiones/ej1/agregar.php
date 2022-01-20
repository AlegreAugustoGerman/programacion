<html>
	<head>
		<meta charset="utf-8">
		<title>Agregar Contacto</title>
	</head>
	<body>
		<h1>Agregar Contacto</h1>
		
		<?php
		
		if(($_POST)){
			
			include_once "conexion.php";
			include_once "funciones.php";
			
			/*Obtengo datos del formulario*/
			
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$telefono=$_POST["telefono"];
			$direccion=$_POST["direccion"];
			$sexo=$_POST["sexo"];
			
			if(isset($nombre) && isset($apellido) && isset($telefono) && isset($direccion) && isset($sexo))
			{
				echo agregar($nombre,$apellido,$telefono,$direccion,$sexo,$conexion);
			
			}
			else
			{
				echo "Campos no completados";
			}
			
			
		}
		
		
		?>
		<a href='ver.php'>Volver</a>
		
		<FORM NAME="contactos" ACTION="" METHOD="POST">
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
			<tr>
				<th>Sexo</th>
				<td><input type="radio" name="sexo" value="Masculino">Masculino
					<input type="radio" name="sexo" value="Femenino">Femenino
				</td>
			</tr>
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		
		
		
	</body>
</html>
