<html>
	<head>
		<meta charset="utf-8">
		<title>Ejercicio 1</title>
	</head>
	<body>


<?php

$host="localhost";
$user="root";
$pass="12345";
$db="agenda";


/*Conexion a base de datos*/
$conexion = mysqli_connect($host,$user,$pass,$db);


if (mysqli_connect_errno()) {
	echo "Error de conexión".mysqli_connect_errno()." : ". mysqli_connect_error();
	echo "<br>";
  
}else
{
	echo "Conectado a base de datos";
	echo "<br>";
}



/* Insertar tabla */

$sentencia="INSERT INTO contactos (personaId,nombre,apellido,telefono,direccion,sexo)
 VALUES (NULL,'Maria','Moreno','1233121','Sarmiento 23','Femenino'),
 (NULL,'Pedro','Gonzales','1233323121','Santa Fe 233','Masculino'),
 (NULL,'Marcos','Alonso','124233121','25 de mayo 3432','Masculino')
 ";
if ($conexion->query($sentencia)) {
    echo "Se insertaron los registros ";
}else
{
	echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
}*/
echo "<br>";
/*Eliminar registros*/

$sentencia="DELETE FROM contactos WHERE nombre LIKE 'P%'";
if ($conexion->query($sentencia)) {
    echo "Se eliminaron los registros ";
}else
{
	echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
}
echo "<br>";


/* Mostrar nombre y apellido de los contactos ordenados alfabéticamente por apellido y por nombre en una tabla. */
$consulta1="SELECT nombre,apellido FROM contactos ORDER BY apellido,nombre";

if ($resultado = $conexion->query($consulta1)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["nombre"]."</td>";
		   echo "<td>".$fila["apellido"]."</td>";
		   echo "</tr>";
       
    }
    echo "</table>";
   } 
   echo "<br>";
   
/* Mostrar nombre y teléfono de los contactos cuyo apellido o nombre empiece con P en una tabla.. */
$consulta2="SELECT nombre,telefono FROM contactos WHERE nombre LIKE 'P%' || apellido LIKE 'P%'";

if ($resultado = $conexion->query($consulta2)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Tel.</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["nombre"]."</td>";
		   echo "<td>".$fila["telefono"]."</td>";
		   echo "</tr>";
       
    }
    echo "</table>";
   } 
   
   
     echo "<br>";
   
/*Mostrar los contactos agrupados por sexo y mostrar el sexo y la cantidad de cada uno en una lista*/
$consulta2="SELECT sexo,COUNT(*) AS cantidad FROM contactos GROUP BY sexo";

if ($resultado = $conexion->query($consulta2)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Sexo</th>";
    echo "<th>Cant.</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["sexo"]."</td>";
		   echo "<td>".$fila["cantidad"]."</td>";
		   echo "</tr>";
       
    }
    echo "</table>";
   } 
  


$mysqli->close();
?>




</body>

</html>
