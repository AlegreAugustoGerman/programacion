	<?php
		include_once "cabecera.html";
		include_once('clases/mesa.php');
		include_once('clases/materia.php');
			
		$rendicionId = $_GET['rendicionId'];
		
			
		if(($_POST)){
			
		
			
			/*Obtengo datos del formulario*/
			
			$materiaId=$_POST["materiaId"];
			$fecha=$_POST["fecha"];
				
			
			if(isset($materiaId) && isset($fecha))
			{
			
				$mesa=new Mesa($rendicionId,$materiaId,$fecha);
				echo $mesa->editar();
			}
			else
			
			{
				echo "Faltan campos";
			}
			
			
		}
		
		$mesa=new Mesa($rendicionId);
		$elemento=$mesa->getMesa();
		
		
		?>
		
		<a href='vermesas.php'>Volver</a>
		<FORM NAME="mesas" ACTION="" METHOD="POST">
		<table>
			<tr>
				<th>Materia</th>
				<td><select name="materiaId">
					<?php
						$materia=new Materia();
						$resultadoMaterias=$materia->buscar();
						while ($fila = mysqli_fetch_object($resultadoMaterias)) {
								echo "<option value=".$fila->materiaId;
								if($elemento->getMateriaId()==$fila->materiaId){
									echo " selected";
									}
								echo ">".$fila->nombre."</option>";
							}
							
						
					?>
						
					</select></td>
			</tr>
			<tr>
				<th>Fecha</th>
				<td><input type="date" name="fecha" value="<?php echo $elemento->getFecha()?>"></td>
			</tr>
			
			
		</table>
		<input type="submit" value="Enviar">
		</FORM>
		
		<?php
		
			include_once "pie.html";
