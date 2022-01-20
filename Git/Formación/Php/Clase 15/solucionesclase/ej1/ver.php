<html>
	<head>
		<meta charset="utf-8">
		<title>Contactos</title>
	</head>
	<body>
	<h1>Contactos</h1>

<?php

include_once('clases/contacto.php');


	if(($_POST)){
			
			/*Obtengo datos del formulario*/
			
			$nombre=$_POST["nombre"];
			$apellido=$_POST["apellido"];
			$telefono=$_POST["telefono"];
			$direccion=$_POST["direccion"];
			$sexo=$_POST["sexo"];
			
			$persona=new Contacto(NULL,$nombre,$apellido,$telefono,$direccion,$sexo);
			
		}
		else
		{
			$persona=new Contacto(NULL);
		}

echo "<a href='agregar.php'>Agregar contacto</a>";




if ($resultado = $persona->buscar()) {
	echo "<form action='' method='POST'>";
	echo "<table border>";
	echo "<tr>";
	echo "<th><input type='text' name='apellido'></th>";
	echo "<th><input type='text' name='nombre'></th>";
	echo "<th><input type='text' name='direccion'></th>";
	echo "<th><input type='text' name='telefono'></th>";
	echo "<th><select name='sexo'><option value=''>Todo</option><option value='Masculino'>Masculino</option><option value='Femenino'>Femenino</option></select</th>";
	echo "<th colspan='2'><input type='submit' value='Buscar'></th>";
	echo "</tr>";
	echo "<tr>";
	echo "<th>Apellido</th>";
    echo "<th>Nombre</th>";
    echo "<th>Dirección</th>";
    echo "<th>Teléfono</th>";
    echo "<th>Sexo</th>";
    echo "<th>-</th>";
    echo "<th>-</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_object($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila->apellido."</td>";
		  echo "<td>".$fila->nombre."</td>";
		  echo "<td>".$fila->direccion."</td>";
		  echo "<td>".$fila->telefono."</td>";
		  echo "<td>".$fila->sexo."</td>";
		  echo "<td>"."<a href='editar.php?personaId=".$fila->personaId."'>Editar</a>"."</td>";
		   echo "<td>"."<a href='eliminar.php?personaId=".$fila->personaId."'>Eliminar</a>"."</td>";
		  echo "</tr>";
       
    }
    echo "</table>";
    echo "</form>";
   } 
 

?>




</body>

</html>
