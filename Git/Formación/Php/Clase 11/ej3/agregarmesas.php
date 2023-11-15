<html>
	<head>
		<meta charset="utf-8">
		<title>Agregar Mesas</title>
	</head>
	<body>
		<h1>Agregar Mesas</h1>
		
		<?php
		
			$host="localhost";
			$user="root";
			$pass="12345";
			$db="examenes";

			$conexion = mysqli_connect($host,$user,$pass,$db);

			/* comprobar la conexión */
			if (mysqli_connect_errno()) {
				echo "Error de conexión".mysqli_connect_errno()." : ". mysqli_connect_error();
				echo "<br>";
			  
			}
			
		if(($_POST)){
			
		
			
			/*Obtengo datos del formulario*/
			
			$materiaId=$_POST["materiaId"];
			$fecha=$_POST["fecha"];
				
			
			if(isset($materiaId) && isset($fecha))
			{
			
				/*Insertar tabla*/
				
				$sentencia="INSERT INTO rendiciones (rendicionId,materiaId,fecha)
				VALUES (NULL,".$materiaId.",'".$fecha."');";
				
				if ($conexion->query($sentencia)) {
					echo "Se insertó la rendición ";
				}else
				{
					echo $sentencia."<br>";
					echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
				}
			
			}
			
			
		}
		

		?>
		
		<a href='vermesas.php'>Volver</a>
		<FORM NAME="mesas" ACTION="" METHOD="POST">
		<table>
			<tr>
				<th>Materia</th>
				<td><select name="materiaId">
					<?php
					
						$consulta="SELECT materiaId,nombre FROM materias";
						if ($resultado = $conexion->query($consulta)) {
							
							while ($fila = mysqli_fetch_assoc($resultado)) {
								echo "<option value=".$fila["materiaId"].">".utf8_encode($fila["nombre"])."</option>";
							}
						}
					?>
						
					</select></td>
			</tr>
			<tr>
				<th>Fecha</th>
				<td><input type="date" name="fecha"></td>
			</tr>
			
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
			mysqli_close($conexion);
		?>
		
		
	</body>
</html>
