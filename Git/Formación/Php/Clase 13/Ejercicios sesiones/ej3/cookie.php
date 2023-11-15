<html>
	<head>
		<meta charset="utf-8">
		<title>Cookies</title>
	</head>
	<body>
	<h1>Cookie</h1>

<?php
if(($_POST)){
	$duracion=$_POST["duracion"];
	$valor=$_POST["valor"];
	setcookie("cookie",$valor,time()+$duracion);
	
	
}

if(isset($_COOKIE["cookie"]))
	{
		 echo "El valor de la cookie es  ".$_COOKIE["cookie"];
	}
	else
	{
		echo "La cookie no existe";
	}
	
?> 
		<FORM action="" method="POST">
			<table>
			<tr>
				<th>Duración</th><td><input type="number" name="duracion"> en segundos</td>
			</tr>
			<tr>
				<th>Valor</th><td><input type="text" name="valor"></td>
			</tr>
			<tr>
				<th></th><td><input type="submit" value="Crear"></td>
			</tr>
			</table>
		</FORM>
		<a href="eliminar.php">Eliminar cookie</a>
		
	</body>
</html>
