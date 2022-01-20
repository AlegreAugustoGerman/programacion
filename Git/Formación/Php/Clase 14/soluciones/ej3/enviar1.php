<html>
	<head>
		<meta charset="utf-8">
		<title>Ej 3</title>
	</head>
	<body>
	<h1>Ej 3</h1>

<?php


$destino="correo1@gmail.com";
$cc="correo2@gmail.com";
$asunto="Envio a usuario y oculto";

$cabeceras='Content-type:text/html;charset=iso-8859-1'."\r\n";
$cabeceras.="From:4nt1@protonmail.com"."\r\n";
$cabeceras.="Cc:".$cc."\r\n";
$mensaje=
			'<h1>Mensaje</h1>
			<p>Correo de prueba</p>
			';
			
			echo $destino;
			echo "<br>";
			echo $asunto;
			echo "<br>";
			echo $mensaje;
			echo "<br>";
			echo $cabeceras;
			echo "<br>";

			if(mail($destino,$asunto,$mensaje,$cabeceras))
						{
							echo "Enviado";
						}else
						{ 
							echo "No enviado";
						}

?>




</body>

</html>
