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


$destino='direccion@escuela.com';
$asunto="Alumnos";
$cabeceras='Content-type:text/html;charset=iso-8859-1'."\r\n";
$cabeceras.="From:escuela@escuela.com"."\r\n";



$mensaje=
			"<h3>Alumnos</h3>
			<table border>
				<tr>
					<th>Nombre</th><th>Apellido</th><th>D.N.I</th><th>Promedio</th>
				</tr>
				
			";
$alumnos=obtenerAlumnos($conexion);	
while ($filaAlumnos = mysqli_fetch_assoc($alumnos)) {
	$mensaje.= "<tr>";
	$mensaje.= "<td>".$filaAlumnos['nombre']."</td>";
	$mensaje.= "<td>".$filaAlumnos['apellido']."</td>";
	$mensaje.= "<td>".$filaAlumnos['dni']."</td>";
	$mensaje.= "<td>".$filaAlumnos['promedio']."</td>";
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

?>




</body>

</html>
