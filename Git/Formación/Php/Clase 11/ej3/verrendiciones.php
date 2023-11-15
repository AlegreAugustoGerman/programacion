<html>
	<head>
		<meta charset="utf-8">
		<title>Ver rendiciones</title>
	</head>
	<body>

<h1>Ver rendiciones</h1>
<?php

$host="localhost";
$user="root";
$pass="12345";
$db="examenes";


/*Conexion a base de datos*/
$conexion = mysqli_connect($host,$user,$pass,$db);
	$conexion->query("SET NAMES utf8");


if (mysqli_connect_errno()) {
	echo "Error de conexión".mysqli_connect_errno()." : ". mysqli_connect_error();
	echo "<br>";
  
}


$consulta="SELECT rendiciones.fecha,materias.nombre AS materia,rendiciones_alumnos.*, CONCAT(alumnos.nombre,' ',alumnos.apellido) AS alumno FROM rendiciones_alumnos
INNER JOIN rendiciones ON rendiciones.rendicionId=rendiciones_alumnos.rendicionId
INNER JOIN alumnos ON alumnos.alumnoId=rendiciones_alumnos.alumnoId
INNER JOIN materias ON materias.materiaId=rendiciones.materiaId
";
echo "<a href='agregarrendiciones.php'>Agregar rendicion</a>";
if ($resultado = $conexion->query($consulta)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Fecha</th>";
    echo "<th>Nota</th>";
    echo "<th>Materia</th>";
    echo "<th>Alumno</th>";
    echo "<th>-</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["fecha"]."</td>";
		  echo "<td>".$fila["nota"]."</td>";
		  echo "<td>".$fila["materia"]."</td>";
		  echo "<td>".$fila["alumno"]."</td>";
		   echo "<td>"."<a href='editarrendiciones.php?rendiciones_alumnosId=".$fila["rendiciones_alumnosId"]."'>Editar</a>"."</td>";
		  echo "</tr>";
       
    }
    echo "</table>";
   } 
   
   
     echo "<br>";
     
  
   

$mysqli->close();
?>




</body>

</html>
