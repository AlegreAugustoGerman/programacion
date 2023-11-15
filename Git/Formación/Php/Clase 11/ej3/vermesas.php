<html>
	<head>
		<meta charset="utf-8">
		<title>Ver Mesas</title>
	</head>
	<body>
		<h1>Ver Mesas</h1>


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
     
$consulta="SELECT rendiciones.*,materias.nombre AS materia FROM rendiciones
INNER JOIN materias ON materias.materiaId=rendiciones.materiaId";
echo "<a href='agregarmesas.php'>Agregar mesa</a>";
if ($resultado = $conexion->query($consulta)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Fecha</th>";
    echo "<th>Materia</th>";
     echo "<th>-</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["fecha"]."</td>";
		  echo "<td>".$fila["materia"]."</td>";
		   echo "<td>"."<a href='editarmesas.php?rendicionId=".$fila["rendicionId"]."'>Editar</a>"."</td>";
		  echo "</tr>";
       
    }
    echo "</table>";
   } 
   
   
     echo "<br>";

   


$mysqli->close();
?>




</body>

</html>

