<html>
	<head>
		<meta charset="utf-8">
		<title>Contactos</title>
	</head>
	<body>
	<h1>Contactos</h1>

<?php

$host="localhost";
$user="root";
$pass="12345";
$db="agenda";


/*Conexion a base de datos*/
$conexion = mysqli_connect($host,$user,$pass,$db);
$conexion->query("SET NAMES utf8");


if (mysqli_connect_errno()) {
	echo "Error de conexión".mysqli_connect_errno()." : ". mysqli_connect_error();
	echo "<br>";
  
}
echo "<a href='agregar.php'>Agregar contacto</a>";

$consulta="SELECT * FROM contactos ORDER BY apellido,nombre";

if ($resultado = $conexion->query($consulta)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Apellido</th>";
    echo "<th>Nombre</th>";
    echo "<th>Dirección</th>";
    echo "<th>Teléfono</th>";
    echo "<th>Sexo</th>";
    echo "<th>-</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["apellido"]."</td>";
		  echo "<td>".$fila["nombre"]."</td>";
		  echo "<td>".$fila["direccion"]."</td>";
		  echo "<td>".$fila["telefono"]."</td>";
		  echo "<td>".$fila["sexo"]."</td>";
		  echo "<td>"."<a href='editar.php?personaId=".$fila["personaId"]."'>Editar</a>"."</td>";
		  echo "</tr>";
       
    }
    echo "</table>";
   } 
 
$mysqli->close();
?>




</body>

</html>
 