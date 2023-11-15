<html>
	<head>
		<meta charset="utf-8">
		<title>Editar Animales</title>
	</head>
	<body>
		<h1>Editar Animales</h1>
		
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
			
			$animalId = $_GET['animalId'];
			
			
		if(($_POST)){
			
		
			
			/*Obtengo datos del formulario*/
			
			$tipo=$_POST["tipo"];
			$raza=$_POST["raza"];
			$edad=$_POST["edad"];
			$nombre=$_POST["nombre"];
			$clienteId=$_POST["clienteId"];
			
			if(isset($tipo) && isset($raza) && isset($edad) && isset($nombre)&& isset($clienteId))
			{
			
				/*Modificar tabla*/
				$sentencia="UPDATE animales SET tipo = '$tipo', raza = '$raza', edad = $edad, nombre = '$nombre', clienteId = $clienteId WHERE animalId = '$animalId'";
				
				
				if ($conexion->query($sentencia)) {
					echo "Se modificó el animal ";
				}else
				{
					echo $sentencia."<br>";
					echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
				}
			
			}
			
			
		}
		
		$consulta="SELECT * FROM animales WHERE animalId=".$animalId;
		if(!$resultado = $conexion->query($consulta))
		{
			echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		$elemento = mysqli_fetch_object($resultado); 
		
		?>
		<a href='veranimales.php'>Volver</a>
		
		<FORM NAME="animales" ACTION="" METHOD="POST">
		<table>
			<tr>
				<th>Tipo</th>
				<td>
					<select name="tipo">
						<option value="Perro" <?php if($elemento->tipo=="Perro"){echo "selected";}?>>Perro</option>
						<option value="Gato" <?php if($elemento->tipo=="Gato"){echo "selected";}?>>Gato</option>
						<option value="Conejo" <?php if($elemento->tipo=="Conejo"){echo "selected";}?>>Conejo</option>
						<option value="Otro" <?php if($elemento->tipo=="Otro"){echo "selected";}?>>Otro</option>
					</select>
					
				</td>
			</tr>
			<tr>
				<th>Raza</th>
				<td><input type="text" name="raza" value="<?php echo $elemento->raza?>"></td>
			</tr>
			<tr>
				<th>Edad</th>
				<td><input type="number" name="edad" value="<?php echo $elemento->edad?>"></td>
			</tr>
			<tr>
				<th>Nombre</th>
				<td><input type="text" name="nombre" value="<?php echo $elemento->nombre?>"></td>
			</tr>
			<tr>
				<th>Cliente</th>
				<td><select name="clienteId">
					<?php
					
						$consulta="SELECT clienteId,nombre,apellido FROM clientes";
						if ($resultado = $conexion->query($consulta)) {
							
							while ($fila = mysqli_fetch_assoc($resultado)) {
								echo "<option value=".$fila["clienteId"].">".$fila["nombre"]." ".$fila["apellido"];
								if($elemento->clienteId==$fila["clienteId"]){
									echo " selected";
									}
								echo "</option>";
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
