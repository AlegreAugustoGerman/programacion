<html>
	<head>
		<meta charset="utf-8">
		<title>Ver Clientes</title>
	</head>
	<body>
	<h1>Ver Clientes</h1>

<?php

$host="localhost";
$user="root";
$pass="12345";
$db="veterinaria";


/*Conexion a base de datos*/
$conexion = mysqli_connect($host,$user,$pass,$db);
$conexion->query("SET NAMES utf8");


if (mysqli_connect_errno()) {
	echo "Error de conexión".mysqli_connect_errno()." : ". mysqli_connect_error();
	echo "<br>";
  
}

echo "<a href='agregarclientes.php'>Agregar cliente</a>";

$consulta="SELECT * FROM clientes";

if ($resultado = $conexion->query($consulta)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "<th>Dirección</th>";
    echo "<th>Teléfono</th>";
    echo "<th>-</th>";
   echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["nombre"]."</td>";
		  echo "<td>".$fila["apellido"]."</td>";
		  echo "<td>".$fila["direccion"]."</td>";
		  echo "<td>".$fila["telefono"]."</td>";
	      echo "<td>"."<a href='editarclientes.php?clienteId=".$fila["clienteId"]."'>Editar</a>"."</td>";
	 	 echo "</tr>";
       
    }
    echo "</table>";
   } 
   
   
     echo "<br>";
 


$mysqli->close();
?>




</body>

</html>
