<html>
	<head>
		<meta charset="utf-8">
		<title>Editar Mesas</title>
	</head>
	<body>
		<h1>Editar Mesas</h1>
		
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
			
			$rendicionId = $_GET['rendicionId'];
			
		if(($_POST)){
			
		
			
			/*Obtengo datos del formulario*/
			
			$materiaId=$_POST["materiaId"];
			$fecha=$_POST["fecha"];
				
			
			if(isset($materiaId) && isset($fecha))
			{
			
				/*Modificar tabla*/
				$sentencia="UPDATE rendiciones SET fecha = '$fecha', materiaId = $materiaId WHERE rendicionId = '$rendicionId'";
				
				if ($conexion->query($sentencia)) {
					echo "Se editó la rendición ";
				}else
				{
					echo $sentencia."<br>";
					echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
				}
			
			}
			
			
		}
		
		$consulta="SELECT * FROM rendiciones WHERE rendicionId=".$rendicionId;
		if(!$resultado = $conexion->query($consulta))
		{
			echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		$elemento = mysqli_fetch_object($resultado); 
		
		

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
								echo "<option value=".$fila["materiaId"];
								if($elemento->materiaId==$fila["materiaId"]){
									echo " selected";
									}
								echo ">".$fila["nombre"]."</option>";
							}
						}
					?>
						
					</select></td>
			</tr>
			<tr>
				<th>Fecha</th>
				<td><input type="date" name="fecha" value="<?php echo $elemento->fecha?>"></td>
			</tr>
			
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
			mysqli_close($conexion);
		?>
		
		
	</body>
</html>
