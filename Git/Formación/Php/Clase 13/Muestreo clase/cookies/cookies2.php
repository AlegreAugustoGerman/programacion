<html>
	<head>
		<meta charset="utf-8">
		<title>Cookies 2</title>
	</head>
	<body>
		<h1>Cookies 2</h1>
		<?php
		
		setcookie("nombre","Maria",time()+60*60*24);
		echo $_COOKIE["nombre"];
		
		
		if(isset($_COOKIE["cantidad"]))
		{
			echo "Existe";
			$cantidad=$_COOKIE["cantidad"];
			$cantidad=$cantidad*2;
			setcookie("cantidad",$cantidad,time()+60*60*24);
			//setcookie("cantidad",1,time()+60*60*24);
			echo $_COOKIE["cantidad"];
		}else
		{
			setcookie("cantidad",1,time()+60*60*24);
		}
		
		
		//Eliminar cookie
		//setcookie("nombre","",time()-3600);
		//echo $_COOKIE["nombre"];
		
		//Verificar cookie
		if(isset($_COOKIE["nombre"]))
		{
			echo "La cookie existe";
		}else{
			echo "La cookie no existe";
		}
		
		?>
	</body>
</html>
