<html>
	<head>
		<meta charset="utf-8">
		<title>Editar Clientes</title>
	</head>
	<body>
		<h1>Editar Clientes</h1>
		
		<?php
		
		
			
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
			
			
			$clienteId = $_GET['clienteId'];
			
			
			if(($_POST)){
				
			/*Obtengo datos del formulario*/
			
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$telefono=$_POST["telefono"];
			$direccion=$_POST["direccion"];
			
			
			if(isset($nombre) && isset($apellido) && isset($telefono) && isset($direccion))
			{
			
				/*Modificar tabla*/
				$sentencia="UPDATE clientes SET nombre = '$nombre', apellido = '$apellido', telefono = '$telefono', direccion = '$direccion' WHERE clienteId = '$clienteId'";
				
				if ($conexion->query($sentencia)) {
					echo "Se modificó el cliente ";
				}else
				{
					echo $sentencia."<br>";
					echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
				}
			
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
		
			mysqli_close($conexion);
		?>
		
		
	</body>
</html>
