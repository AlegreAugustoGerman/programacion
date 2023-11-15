<html>
	<head>
		<meta charset="utf-8">
		<title>Ej 2</title>
	</head>
	<body>
	<h1>Ej 2</h1>

<?php
include_once "conexion.php";
include_once "funciones.php";

$alumnos=obtenerAlumnos($conexion);
$destino='';
 while ($filaAlumnos = mysqli_fetch_assoc($alumnos)) {
	 $destino.=$filaAlumnos['mail'];

$asunto="Mesas";

$cabeceras='Content-type:text/html;charset=iso-8859-1'."\r\n";
$cabeceras.="From:escuela@escuela.com"."\r\n";

$mensaje=
			"<h3>Mesas</h3>
			<ul>
				
			";
$mesas=obtenerMesas($conexion);	
while ($filaMesas = mysqli_fetch_assoc($mesas)) {
	$mensaje.= "<li>".date("d-m-Y ",strtotime($filaMesas['fecha']))." ".$filaMesas['materia']."</li>";
}
			
$mensaje.="</ul>";		
			
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

}
?>




</body>

</html>
