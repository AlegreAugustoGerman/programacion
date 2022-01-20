<html>
	<head>
		<meta charset="utf-8">
		<title>Agregar Contacto</title>
	</head>
	<body>
		<h1>Agregar Contacto</h1>
		
		<?php
		
		if(($_POST)){
			
			$host="localhost";
			$user="root";
			$pass="12345";
			$db="agenda";

			$conexion = mysqli_connect($host,$user,$pass,$db);
			$conexion->query("SET NAMES utf8");

			/* comprobar la conexión */
			if (mysqli_connect_errno()) {
				echo "Error de conexión".mysqli_connect_errno()." : ". mysqli_connect_error();
				echo "<br>";
			  
			}
			
			/*Obtengo datos del formulario*/
			
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$telefono=$_POST["telefono"];
			$direccion=$_POST["direccion"];
			$sexo=$_POST["sexo"];
			
			if(isset($nombre) && isset($apellido) && isset($telefono) && isset($direccion) && isset($sexo))
			{
			
				/*Insertar tabla*/
				
				$sentencia="INSERT INTO contactos (personaId,nombre,apellido,direccion,telefono,sexo)
				VALUES (NULL,'".$nombre."','".$apellido."','".$telefono."','".$direccion."','".$sexo."');";
				
				if ($conexion->query($sentencia)) {
					echo "Se insertó el contacto ";
				}else
				{
					echo $sentencia."<br>";
					echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
				}
			
			}
			else
			{
				echo "Campos no completados";
			}
			
			mysqli_close($conexion);
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
