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

$asunto="Rendiciones";

$cabeceras='Content-type:text/html;charset=iso-8859-1'."\r\n";
$cabeceras.="From:escuela@escuela.com"."\r\n";

$mensaje=
			"<h3>Rendiciones</h3>
			<table border>
				<tr>
					<th>Fecha</th><th>Materia</th><th>Nota</th>
				</tr>
				
			";
$rendiciones=obtenerRendiciones($conexion,$filaAlumnos['alumnoId']);	
while ($filaRendiciones = mysqli_fetch_assoc($rendiciones)) {
	$mensaje.= "<tr>";
	$mensaje.= "<td>".$filaRendiciones['fecha']."</td>";
	$mensaje.= "<td>".$filaRendiciones['materia']."</td>";
	$mensaje.= "<td>".$filaRendiciones['nota']."</td>";
	$mensaje.= "</tr>";
}
			
$mensaje.="</table>";		
			
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
