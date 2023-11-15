<html>
	<head>
		<meta charset="utf-8">
		<title>Sesiones</title>
	</head>
	<body>
		<h1>Sesiones</h1>
		<?php
		
		//Iniciar una sesion
		session_start();
		//Id de session
		echo session_id();
		
		//Crear una variable de sesion
		$_SESSION["nombre"]="Maria";
		$_SESSION["apellido"]="Moreno";
		//Mostrar variable de sesion
		echo  $_SESSION["nombre"];
		echo $_SESSION["apellido"];
		
		//Destruimos las variables de sesion
		
		//session_unset();
		
		//Cerrar sesion
		//session_destroy();
		
		//Muestro variables despues de cerrar sesion
		//Elimino una variable de sesion
		//unset($_SESSION["nombre"]);
		echo $_SESSION["nombre"];
		echo $_SESSION["apellido"];
		
		//Iniciar otra sesion
		//session_start();
		
		//Id de session
		//echo "<br>";
		//echo session_id();
		
		
		?>
	</body>
</html>
