<html>
	<head>
		<meta charset="utf-8">
		<title>Ej 1</title>
	</head>
	<body>
	<h1>Ej 1</h1>

<?php
include_once "conexion.php";
include_once "funciones.php";

$usuarios=obtenerUsuarios($conexion);
$destino='';
 while ($filaUsuarios = mysqli_fetch_assoc($usuarios)) {
	 $destino.=$filaUsuarios['mail'].",";
 }
 
 $administradores=obtenerAdministradores($conexion);
 $bcc='';
 while ($filaAdministradores = mysqli_fetch_assoc($administradores)) {
	 $bcc.=$filaAdministradores['mail'].",";
	 
 }

$destino = "4nt1@protonmail.com";
$asunto="Cronograma de actividades";

$cabeceras='Content-type:text/html;charset=iso-8859-1'."\r\n";
$cabeceras.="From:4nt1@protonmail.com"."\r\n";
$cabeceras.="Bcc:".$bcc."\r\n";
$mensaje=
			'<h3>Cronograma de actividades</h3>
			<table>
				<tr>
					<th>Hora</th><th>Actividad</th>
				</tr>
				<tr>
					<td>08:30</td><td>Actividad 1</td>
				</tr>
				<tr>
					<td>09:00</td><td>Actividad 2</td>
				</tr>
				<tr>
					<td>09:30</td><td>Actividad 3</td>
				</tr>
				<tr>
					<td>10:00</td><td>Actividad 4</td>
				</tr>
				<tr>
					<td>10:30</td><td>Actividad 5</td>
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
