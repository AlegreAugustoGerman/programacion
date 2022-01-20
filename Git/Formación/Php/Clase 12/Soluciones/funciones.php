
		<h1>Funciones</h1>
		<?php
		
			
			$mensaje="Hola!!!";
		
			function mostrarMensaje($parametro1,$parametro2,$parametro3=1)
			{
				/*echo $parametro1;
				echo "<br>";
				echo $parametro2;
				echo "<br>";
				echo $parametro3;
				echo "<br>";*/
				$resultado=$parametro1*$parametro2*$parametro3;
				//echo "El resultado es ".$resultado;
				return $resultado;
			}
			
		/*		function devolverMensaje($nombre,$apellido,$edad=34,$telefono="2342-2342")
			{
				return "Mi nombre es ".$nombre." ".$apellido." , tengo ".$edad." años y mi telefono es ".$telefono;
			}
			
			function agregarContacto($conexion,$nombre,$apellido,$direccion,$telefono)
			{
				$consulta="INSERT INTO contactos (contactoId,nombre,apellido,direccion,telefono)
				VALUES(NULL,'".$nombre."','".$apellido."','".$direccion."','".$telefono.")";
				$conexion->query($consuta);
			}
			
			
			$var1=mostrarMensaje(2,5,4);
			echo "El resultado es ".$var1;
			echo "<h2>Mostrar resultado nuevamente</h2>";
			$val1=3;
			$val2=5;
			$var2=mostrarMensaje($val1,$val2);
			echo "El resultado es ".$var2;
			echo "<h2>Mostar mensaje</h2>";
			echo devolverMensaje("Pedro","Gonzales","232332-1232");*/
		?>
	
