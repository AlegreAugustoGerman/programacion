<html>
	<head>
		<meta charset="utf-8">
		<title>Ver Animales</title>
	</head>
	<body>
<h1>Ver Animales</h1>

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



$consulta="SELECT animales.*,CONCAT(clientes.nombre,' ',clientes.apellido) AS cliente FROM animales
LEFT JOIN clientes ON animales.clienteId=clientes.clienteId";

echo "<a href='agregaranimales.php'>Agregar animal</a>";

if ($resultado = $conexion->query($consulta)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Tipo</th>";
    echo "<th>Raza</th>";
    echo "<th>Edad</th>";
    echo "<th>Dueño</th>";
   echo "<th>-</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["nombre"]."</td>";
		  echo "<td>".$fila["tipo"]."</td>";
		  echo "<td>".$fila["raza"]."</td>";
		  echo "<td>".$fila["edad"]."</td>";
		  echo "<td>".$fila["cliente"]."</td>";
		  echo "<td>"."<a href='editaranimales.php?animalId=".$fila["animalId"]."'>Editar</a>"."</td>";
		        
		   echo "</tr>";
       
    }
    echo "</table>";
   
   } 
   else
   {
	   echo $sentencia."<br>";
					echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
	   
   }
   
   
     echo "<br>";
 

$mysqli->close();
?>




</body>

</html>
