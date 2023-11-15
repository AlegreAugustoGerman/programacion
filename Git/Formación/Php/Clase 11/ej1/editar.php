<html>
	<head>
		<meta charset="utf-8">
		<title>Editar Contacto</title>
	</head>
	<body>
		<h1>Editar Contacto</h1>
		
		<?php
		
		
			
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
			
				/*Modificar tabla*/
				$sentencia="UPDATE contactos SET nombre = '$nombre', apellido = '$apellido', telefono = '$telefono', direccion = '$direccion', sexo = '$sexo' WHERE personaId = '$personaId'";
				
				if ($conexion->query($sentencia)) {
					echo "Se modificó el contacto ";
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
			
			
		}
		
		$consulta="SELECT * FROM contactos WHERE personaId=".$personaId;
		if(!$resultado = $conexion->query($consulta))
		{
			echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		$elemento = mysqli_fetch_object($resultado); 
		
		?>
		<a href='ver.php'>Volver</a>
		
		<FORM NAME="contactos" ACTION="" METHOD="POST">
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
			<tr>
				<th>Sexo</th>
				<td><input type="radio" name="sexo" value="Masculino" <?php if($elemento->sexo=="Masculino"){echo "checked=checked";}?>>Masculino
					<input type="radio" name="sexo" value="Femenino"  <?php if($elemento->sexo=="Femenino"){echo "checked=checked";}?>>Femenino
				</td>
			</tr>
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
		mysqli_close($conexion);
		
		?>
		
		
	</body>
</html>
