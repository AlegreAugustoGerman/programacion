<html>
	<head>
		<meta charset="utf-8">
		<title>Envío de mail</title>
	</head>
	<body>
		<h1>Envío de mail</h1>
		
	<!--<style>
			table
			{
				border:1px solid red;
				border-spacing:0px;
			}
			th
			{
				color:green;
				background-color:grey;
				border: 3px solid black;
			}
			td
			{
				color:blue;
				border:1px solid #FF0000;
			}
			td:hover
			{
				color:red;
			}
			a
			{
				color:red;
			}
			a:hover
			{
				color:blue;
			}
		</style>
		-->
		<?php
		
		
		//Destino
		//$destino="correo1@gmail.com";
		//$destino="correo1@gmail.com,correo2@gmail.com,correo3@gmail.com";
		//$destino="Nombre1 <correo1@gmail.com>";
		//$destino="Nombre1 <correo1@gmail.com>,Nombre2 <correo2@gmail.com>,Nombre3 <correo3@gmail.com>";
		$destino="4nt1@protonmail.com";
		//Asunto
		$asunto="Envío de archivo";
		
		//Mensaje
		//Separación de lineas manual
		//$mensaje="Linea de texto 1\r\n Linea de texto 2\r\n Linea de texto 3 \r\n";
		//$mensaje="Este es un mensaje demasiado largo para ocupar una sola linea......";
		
		/*$mensaje="
					<h3>Título del mail</h3>
					<p>Párrafo 1</p>
					<p>Párrafo 2</p>
					<table border>
					<tr>
						<td>A</td><td>B</td>
					</tr>
					<tr>
						<td>C</td><td>D</td>
					</tr>
					</table>
		";*/
		
		/*$mensaje="
			<table>
				<tr>
					<td>Texto de la primera columna con muchos caracteres....................</td>
					<td>Texto de la primera columna con muchos caracteres....................</td>
				</tr>
			</table>
		";*/
		
	/*	$mensaje="<table style='border:1px solid red;
				border-spacing:0px;'>
			<tr>
				<th style='color:green;
				background-color:grey;font-family:Arial;
				border: 3px solid black;'>Cabecera 1</th><th style='color:green;
				background-color:grey;
				border: 3px solid black;'>Cabecera 2</th>
			</tr>
			<tr>
				<td style='color:blue;
				border:1px solid #FF0000;'>11</td><td style='color:blue;
				border:1px solid #FF0000;'>12</td>
			</tr>
			<tr>
				<td style='color:blue;
				border:1px solid #FF0000;'>21</td><td style='color:blue;
				border:1px solid #FF0000;'>22</td>
			</tr>
		</table>";*/
		
		$mensaje="Te envio este archivo";
		
		//Separación utilizando wordwrap
		$mensaje=wordwrap($mensaje,70,"\r\n");
		
		//Archivo adjunto
		//Nombre del archivo
		$file="phpintro.pdf";
		//Tamaño del archivo
		$file_size=filesize($file);
		//Abro el archivo
		$archivo=fopen($file,"r");
		//Leo el contenido e igualo
		$contenido=fread($archivo,$file_size);
		//Cierro el archivo
		fclose($archivo);
		//Doy formato al contenido
		$contenido=chunk_split(base64_encode($contenido));
		//Genero una id unica
		$uid=md5(uniqid(time()));
		
		//Cabeceras
		
		//Version de MIME
		$cabeceras="MIME-Version:1.0\r\n";
		//Tipo de contenido
		$cabeceras.="Content-type:text/html\r\n";
		//Charset
		$cabeceras.="charset:iso-8859-1\r\n";
		//Emisor
		$cabeceras.="From:4nt1@protonmail.com\r\n";
		//Copia
		$cabeceras.="Cc:4nt1@protonmail.com\r\n";
		//Copia oculta
		$cabeceras.="Bcc:4nt1@protonmail.com\r\n";
		//Encodear transferencia
		$cabeceras.="Content-Transfer-Encoding:base64\r\n";
		$cabeceras.="Content-Disposition:attachment; filename=\"phpintro.pdf\"\r\n";
		$cabeceras.=$contenido."\r\n";
		$cabeceras.="--".$uid."--";
		//Envio el mail
		/*echo $destino;
		echo "<br>";
		echo $asunto;
		echo "<br>";
		echo $mensaje;
		echo "<br>";
		echo $cabeceras;
		echo "<br>";*/
		
		if(mail($destino,$asunto,$mensaje,$cabeceras))
		{
			echo "Enviado";
		}
		else
		{
			echo "Error";
		}
		
		?>
	</body>
</html>
