<html>
	<head>
		<meta charset="utf-8">
		<title>Agregar Clientes</title>
	</head>
	<body>
		<h1>Agregar Clientes</h1>
		
		<?php
		
		if(($_POST)){
			
			$host="localhost";
			$user="root";
			$pass="12345";
			$db="veterinaria";

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
			
			
			if(isset($nombre) && isset($apellido) && isset($telefono) && isset($direccion))
			{
			
				/*Insertar tabla*/
				
				$sentencia="INSERT INTO clientes (clienteId,nombre,apellido,direccion,telefono)
				VALUES (NULL,'".$nombre."','".$apellido."','".$telefono."','".$direccion."');";
				
				if ($conexion->query($sentencia)) {
					echo "Se insertó el cliente ";
				}else
				{
					echo $sentencia."<br>";
					echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
				}
			
			}
			
			mysqli_close($conexion);
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
		
		
		
		
	</body>
</html>
