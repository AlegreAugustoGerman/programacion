<html>
	<head>
		<meta charset="utf-8">
		<title>Agregar Rendiciones Alumnos</title>
	</head>
	<body>
		<h1>Agregar Rendiciones Alumnos</h1>
		
		<?php
		
			$host="localhost";
			$user="root";
			$pass="12345";
			$db="examenes";

			$conexion = mysqli_connect($host,$user,$pass,$db);
			$conexion->query("SET NAMES utf8");

			/* comprobar la conexión */
			if (mysqli_connect_errno()) {
				echo "Error de conexión".mysqli_connect_errno()." : ". mysqli_connect_error();
				echo "<br>";
			  
			}
			
		if(($_POST)){
			
			
		
			
			/*Obtengo datos del formulario*/
			
			$rendicionId=$_POST["rendicionId"];
			$alumnoId=$_POST["alumnoId"];
			$nota=$_POST["nota"];
			
			
			if(isset($rendicionId) && isset($alumnoId) && isset($nota))
			{
					
					
			
				/*Insertar tabla*/
				
				$sentencia="INSERT INTO rendiciones_alumnos (rendiciones_alumnosId,rendicionId,alumnoId,nota)
				VALUES (NULL,".$rendicionId.",".$alumnoId.",".$nota.");";
				
				if ($conexion->query($sentencia)) {
					echo "Se insertó la rendición de alumno";
				}else
				{
					echo $sentencia."<br>";
					echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
				}
			
			}
			
			
		}
		

		?>
		
		<a href='verrendiciones.php'>Volver</a>
		<FORM NAME="rendiciones" ACTION="" METHOD="POST">
		<table>
			<tr>
				<th>Mesa</th>
				<td><select name="rendicionId">
					<?php
					
						$consulta="SELECT rendicionId,materias.nombre,fecha FROM rendiciones
						LEFT JOIN materias ON materias.materiaId=rendiciones.materiaId";
						if ($resultado = $conexion->query($consulta)) {
							
							while ($fila = mysqli_fetch_assoc($resultado)) {
								echo "<option value=".$fila["rendicionId"].">".$fila["nombre"]." ".$fila["fecha"]."</option>";
							}
						}
					?>
						
					</select></td>
			</tr>
			<tr>
				<th>Alumno</th>
				<td><select name="alumnoId">
					<?php
					
						$consulta="SELECT alumnoId,nombre,apellido,dni FROM alumnos";
						if ($resultado = $conexion->query($consulta)) {
							
							while ($fila = mysqli_fetch_assoc($resultado)) {
								echo "<option value=".$fila["alumnoId"].">".$fila["nombre"]." ".$fila["apellido"]." ".$fila["dni"]."</option>";
							}
						}
					?>
						
					</select></td>
			</tr>
			
			<tr>
				<th>Nota</th>
				<td><input type="number" name="nota" min=1 max=10></td>
			</tr>
			
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
			mysqli_close($conexion);
		?>
		
		
	</body>
</html>
