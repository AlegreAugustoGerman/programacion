<html>
	<head>
		<meta charset="utf-8">
		<title>Agregar Animales</title>
	</head>
	<body>
		<h1>Agregar Animales</h1>
		
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
			
		if(($_POST)){
			
		
			
			/*Obtengo datos del formulario*/
			
			$tipo=$_POST["tipo"];
			$raza=$_POST["raza"];
			$edad=$_POST["edad"];
			$nombre=$_POST["nombre"];
			$clienteId=$_POST["clienteId"];
			
			if(isset($tipo) && isset($raza) && isset($edad) && isset($nombre)&& isset($clienteId))
			{
			
				/*Insertar tabla*/
				
				$sentencia="INSERT INTO animales (animalId,tipo,raza,edad,nombre,clienteId)
				VALUES (NULL,'".$tipo."','".$raza."',".$edad.",'".$nombre."',".$clienteId.");";
				
				if ($conexion->query($sentencia)) {
					echo "Se insertó el animal ";
				}else
				{
					echo $sentencia."<br>";
					echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
				}
			
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
					
						$consulta="SELECT clienteId,nombre,apellido FROM clientes";
						if ($resultado = $conexion->query($consulta)) {
							
							while ($fila = mysqli_fetch_assoc($resultado)) {
								echo "<option value=".$fila["clienteId"].">".$fila["nombre"]." ".$fila["apellido"]."</option>";
							}
						}
					?>
						
					</select></td>
			</tr>
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
			mysqli_close($conexion);
		?>
		
		
	</body>
</html>
