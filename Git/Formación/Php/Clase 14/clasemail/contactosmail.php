<html>
	<head>
		<meta charset="utf-8">
		<title>Enviar correos de bd</title>
	</head>
	<body>
		<?php
		include "conexion.php";
		
		$consulta="SELECT * FROM contactos";
		$resultado=$conexion->query($consulta);
		 while ($fila = mysqli_fetch_assoc($resultado)) {
			 
			 $destinos=$fila["mail"];
			  $asunto="Hola ".$fila["nombre"]."!!!.Cambié mi número";
			$mensaje="Hola ".$fila["nombre"]."!!.Te envio mi nuevo número 234234234";
			$cabeceras="From:4nt1@protonmail.com";
			$cabeceras.="charset=iso-8859-1";
		 
		 echo $asunto;
		 echo "<br>";
		 echo $destinos;
		  echo "<br>";
		 echo $mensaje;
		  echo "<br>";
		 echo $cabecera;
		  echo "<br>";
		 
		 if(mail($destinos,$asunto,$mensaje,$cabeceras))
		 {
			 echo "Enviado";
		 }else
		 {
			 echo "No enviado";
		 }
			 
		 }
		
		
		?>
	</body>
</html>
