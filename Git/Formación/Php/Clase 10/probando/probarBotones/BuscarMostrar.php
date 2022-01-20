<?php
$inc=include_once "Conexion.php";
include_once "index.php";

//Realizar conexion

if ($inc){
	$MostrarLista="SELECT * FROM usuarios ";
	$result =mysqli_query($conexion,$MostrarLista);


	if($result){
		echo"<h1>Usuarios<h1> ".
		"<table border=1px>".
		"<th>Dni</th>".
		"<th>Apellido</th>".
		"<th>Nombre</th>".
		"<th>Tipo</th>".
		"<th>Teléfono</th><tr>";

	while($row=$result->fetch_array()){
		$id=$row["numUsuarios"];
		$nombre=$row['nombre'];
		$apellido=$row['apellido'];
		$cargo=$row['cargo'];
		$telefono=$row['telefono'];

		echo "<td>".$id;
		echo "<td>".$nombre;
		echo "<td>".$apellido;
		echo "<td>".$cargo;
		echo "<td>".$telefono."<tr>";
	}

}}


?>	
