<html>
	<head>
		<meta charset="utf-8">
		<title>Cookies</title>
	</head>
	<body>
		<h1>Cookies</h1>
		<?php
		
		//Crear cookie
		setcookie("nombre","Maria",time()+60*60*24);
		//Mostrar cookie
		echo $_COOKIE["nombre"];
		//setcookie("apellido","Moreno",time()+20);
		echo $_COOKIE["apellido"];
		
		if(isset($_COOKIE["cantidad"]))
		{
			if($_COOKIE["cantidad"]>100)
			{
				echo "<h2><a href='cookies2.php'>Cookies2</a></h2>";
			}
			else
			{
				echo "<h5><a href='cookies2.php'>Cookies2</a></h5>";
			}
		}
		
		?>
	</body>
</html>
