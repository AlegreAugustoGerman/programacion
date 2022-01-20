<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario</title>
	</head>
	<body>
		<h1>Formulario</h1>
		
		<?php
		
		$host="localhost";
		$user="root";
		$pass="12345";
		$bd="examenes";
		
		$conexion=mysqli_connect($host,$user,$pass,$bd);
		$conexion->query("SET NAMES utf8");
		
		if(mysqli_connect_errno())
		{
			echo "Error ".mysqli_connect_errno()." ".mysqli_connect_error;
		}
		
		/*$consulta="SELECT * FROM sectores";
		$resultado=$conexion->query($consulta);*/
		
		$consulta="SELECT * FROM alumnos WHERE alumnoId=21";
		$resultado=$conexion->query($consulta);
		$elemento=mysqli_fetch_object($resultado);
		
		
		$consulta2="SELECT * FROM materias";
		$resultado2=$conexion->query($consulta2);
		$elemento2=mysqli_fetch_object($resultado2);
		
		$consulta3="SELECT * FROM rendiciones WHERE rendicionId=7";
		$resultado3=$conexion->query($consulta3);
		$elemento3=mysqli_fetch_object($resultado3);
		
		if($_POST)
		{
			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$dni=$_POST['dni'];
			/*$deportes=$_POST['deporte'];
			$categoria=$_POST['categoria'];*/
			
		/*	echo "Nombre: ".$nombre;
			echo "<br>";
			echo "Apellido: ".$apellido;
			echo "<br>";
			echo "Sexo: ".$sexo;
			echo "<br>";
			echo "Deportes:";
			echo "<br>";
			foreach($deportes as $deporte)
			{
				echo $deporte."<br>";
			}
			echo "<br>";
			echo "Categoria:".$categoria;*/
			
			if(isset($nombre) && isset($apellido) && isset($dni))
			{
				/*$sentencia="INSERT INTO alumnos (alumnoId,nombre,apellido,dni)
				VALUES(NULL,'".$nombre."','".$apellido."','".$dni."')";
				if($conexion->query($sentencia))
				{
					echo "Se agregó el alumno";
				}else
				{
					echo "Error".$conexion->error.$conexion->errno;
				}*/
				
				$sentencia="UPDATE alumnos SET nombre='".$nombre."',apellido='".$apellido."',dni='".$dni."' WHERE alumnoId=".$elemento->alumnoId;
				if($conexion->query($sentencia))
				{
					echo "Se modificó el alumno";
				}
				
				
			}else
			{
				echo "Falta campos";
			}
		}
		
		
		?>
		
		<FORM name="formularioA" ACTION="" METHOD="POST">
			<table>
			<tr>
				<td>Nombre:</td><td colspan="2"><input type="text" name="nombre" value="<?php echo $elemento->nombre?>" ></td>
			</tr>
			<tr>
				<td>Apellido:</td><td colspan="2"><input type="text" name="apellido" value="<?php echo $elemento->apellido ?>"></td>
			</tr>
			<tr>
				<td>D.N.I.:</td><td colspan="2"><input type="text" name="dni" value="<?php echo $elemento->dni ?>"></td>
			</tr>
		<!--tr>
				<td>Pass:</td><td colspan="2"><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td>Sexo:</td><td><input type="radio" name="sexo" value="Masculino">Masculino</td><td><input type="radio" name="sexo" value="Femenino" checked='checked'>Femenino</td>
			</tr>
			<tr>
				<td rowspan="4" valign="top">Deportes:</td><td><input type="checkbox" name="deporte" value="Futbol">Futbol</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="deporte[]" value="Arqueria">Arqueria</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="deporte[]" value="Ski" checked="checked">Ski</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="deporte[]" value="Natacion"  checked="checked">Natación</td>
			</tr>
			<tr>
				<td>Cantidad</td><td><input type="number" name="cantidad" min="1" max="100" step=3></td>
			</tr>
			<tr>
				<td>Fecha</td><td><input type="date" name="fecha" ></td>
			</tr>
			<tr>
				<td>Color</td><td><input type="color" name="color" ></td>
			</tr>
			<tr>
				<td>Rango</td><td><input type="range" name="rango" ></td>
			</tr>
			<tr>
				<td>Hora</td><td><input type="time" name="hora" ></td>
			</tr>
			<tr>
				<td>Dia y hora</td><td><input type="datetime" name="diahora" ></td>
			</tr>
			<tr>
				<td>Email</td><td><input type="email" name="email" ></td>
			</tr>
			<tr>
				<td>Categoia</td><td>
					<select  name="categoria" >
						<option value="accion">Acción</option>
						<option value="comedia" selected >Comedia</option>
						<option value="drama">Drama</option>
					</select>
				
				</td>
			</tr>
			<tr>
				<td>Sectores</td><td>
					<select  name="sector" >
					<?php
					
						while($fila=mysqli_fetch_assoc($resultado))
						{
							echo "<option value='".$fila['sectorId']."'>Piso ".$fila['piso']." ".$fila['nombre']."</option>";
						}
					?>
					</select>
				
					
				</td>
			</tr>-->
			<tr>
				<td>Materias</td><td>
					<select  name="sector" >
					<?php
					
						while($fila2=mysqli_fetch_assoc($resultado2))
						{
							echo "<option value='".$fila2['materiaId']."'";
							if($elemento3->materiaId==$fila2['materiaId'])
							{
								echo " selected";
							}
							echo">".$fila2['nombre']."</option>";
						}
					?>
					</select>
				
					
				</td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="Aceptar"></td>
			</tr>
			
			</table>
			<a href="prueba2.php?alumnoId=4">Ir a prueba 2</a>
		</FORM>
		
		</body>
</html>
