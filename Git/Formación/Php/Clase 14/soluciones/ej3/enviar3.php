<html>
	<head>
		<meta charset="utf-8">
		<title>Ej 3</title>
	</head>
	<body>
	<h1>Ej 3</h1>

<?php


$destino="correo@gmail.com";
$asunto="Animales";

$cabeceras='Content-type:text/html;charset=iso-8859-1'."\r\n";
$cabeceras.="From:4nt1@protonmail.com"."\r\n";
$cabeceras.="Cc:".$cc."\r\n";
$mensaje=
			'<h1>Mensaje</h1>
			<table border>
			<tr>
				<th>Nombre</th><th>Foto</th>
			</tr>
			<tr>
				<td>Gato</td><td><img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/AfricanWildCat.jpg" width=250></td>
			</tr>
			<tr>
				<td>Perro</td><td><img src="https://upload.wikimedia.org/wikipedia/commons/d/d7/Czechos%C5%82owacki_wilczak_kilkumiesi%C4%99czna_suka_453.jpg" width=250></td>
			</tr>
			<tr>
				<td>Conejo</td><td><img src="https://upload.wikimedia.org/wikipedia/commons/d/da/Konijn_Susy.jpg" width=250></td>
			</tr>
			</table>
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
