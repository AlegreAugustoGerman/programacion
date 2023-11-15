<html>
	<head>
		<meta charset="utf-8">
		<title>Ver Alumnos</title>
	</head>
	<body>
<h1>Ver alumnos</h1>

<?php

$host="localhost";
$user="root";
$pass="12345";
$db="examenes";


/*Conexion a base de datos*/
$conexion = mysqli_connect($host,$user,$pass,$db);


if (mysqli_connect_errno()) {
	echo "Error de conexión".mysqli_connect_errno()." : ". mysqli_connect_error();
	echo "<br>";
  
}


$consulta="SELECT * FROM alumnos";
echo "<a href='agregaralumnos.php'>Agregar alumno</a>";

if ($resultado = $conexion->query($consulta)) {
	echo "<table border>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "<th>D.N.I</th>";
    echo "<th>-</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["nombre"]."</td>";
		  echo "<td>".$fila["apellido"]."</td>";
		  echo "<td>".$fila["dni"]."</td>";
		 echo "<td>"."<a href='editaralumnos.php?alumnoId=".$fila["alumnoId"]."'>Editar</a>"."</td>";
		        
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
