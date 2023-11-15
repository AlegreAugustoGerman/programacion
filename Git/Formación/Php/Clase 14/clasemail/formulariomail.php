<html>
	<head>
		<meta charset="utf-8">
		<title>Envío de mail de formulario</title>
	</head>
	<body>
		<?php
		
		if(isset($_POST))
		{
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$edad=$_POST["edad"];
			
			$destino="4nt1@protonmail.com";
			$asunto="Formulario de ".$nombre." ".$apellido;
			$cabeceras="Content-type:text/html\r\n";
			$cabeceras.="charset=utf-8";
			$cabeceras.="From:4nt1@protonmail.com";
			
			$mensaje="
			<h3>Resultados de la encuesta de ".$nombre." ".$apellido."</h3>
			<table border>
			<tr>
				<th>Nombre</th><td>".$nombre."</td>
			</tr>
			<tr>
				<th>Apellido</th><td>".$apellido."</td>
			</tr>
			<tr>
				<th>Edad</th><td>".$edad."</td>
			</tr>
			</table>
			";
			
			mail($destino,$asunto,$mensaje,$cabeceras);
		}
		
		
		?>
		
		
		<form action="" method="POST">
			<table>
			<tr>
				<th>Nombre</th><td><input type="text" name="nombre"></td>
				</tr>
				<tr>
				<th>Apellido</th><td><input type="text" name="apellido"></td>
				</tr>
				<tr>
				<th>Edad</th><td><input type="number" name="edad"></td>
				</tr>
				<tr>
					<th colspan="2"><input type="submit" value="Enviar"></th>
				</tr>
			</table>
		</form>
	</body>
</html>
