	<?php
		include_once "cabecera.html";
		include_once('clases/rendicion.php');
		include_once('clases/mesa.php');
		include_once('clases/materia.php');
		include_once('clases/alumno.php');
			
				
		$rendiciones_alumnosId = $_GET['rendiciones_alumnosId'];
			
		if(($_POST)){
			
			
		
			
			/*Obtengo datos del formulario*/
			
			$rendicionId=$_POST["rendicionId"];
			$alumnoId=$_POST["alumnoId"];
			$nota=$_POST["nota"];
			
			
			if(isset($rendicionId) && isset($alumnoId) && isset($nota))
			{
				
				$rendicion=new Rendicion($rendiciones_alumnosId,$rendicionId,$alumnoId,$nota);
				echo $rendicion->editar();
				
			}
			
			
		}
		
		$rendicion=new Rendicion($rendiciones_alumnosId);
		$elemento=$rendicion->getRendicion();
		
		?>
		
		<a href='verrendiciones.php'>Volver</a>
		<FORM NAME="rendiciones" ACTION="" METHOD="POST">
		<table>
			<tr>
				<th>Mesa</th>
				<td><select name="rendicionId">
					<?php
						$mesa=new Mesa();
						$resultadoMesas=$mesa->buscar();
						while ($fila = mysqli_fetch_object($resultadoMesas)) {
								echo "<option value=".$fila->rendicionId;
								if($elemento->getRendicionId()==$fila->rendicionId){
									echo " selected";
									}
								echo ">".$fila->fecha." ".$fila->materia."</option>";
							}
							
						
					?>
						
					</select></td>
			</tr>
			<tr>
				<th>Alumno</th>
				<td><select name="alumnoId">
					<?php
						$alumno=new Alumno();
						$resultadoAlumnos=$alumno->buscar();
						while ($fila = mysqli_fetch_object($resultadoAlumnos)) {
								echo "<option value=".$fila->alumnoId;
								if($elemento->getAlumnoId()==$fila->alumnoId){
									echo " selected";
									}
								echo ">".$fila->nombre." ".$fila->apellido."</option>";
							}
							
						
					?>
						
					</select></td>
			</tr>
			
			<tr>
				<th>Nota</th>
				<td><input type="number" name="nota" min=1 max=10 value=<?php echo $elemento->getNota(); ?>></td>
			</tr>
			
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
		
			include_once "pie.html";
