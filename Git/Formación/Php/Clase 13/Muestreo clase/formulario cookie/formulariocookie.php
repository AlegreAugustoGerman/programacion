<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario Cookie</title>
	</head>
	<body>
		<h1>Formulario cookie</h1>
		
		<?php
		
		if(isset($_POST))
		{
			$valor=$_POST["valor"];
			$tiempo=$_POST["tiempo"];
			setcookie("variable",$valor,time()+$tiempo);
		}
		
		if(isset($_COOKIE["variable"]))
		{
			echo "<a href='destruir.php'>Destruir cookie</a>";
		}
		else
		{
			echo "la cookie no existe";
		}
		
		
		
	?>
		<form action="" method="POST">
			<input type="text" name="valor">
			<input type="number" name="tiempo">
			<input type="submit" value="Crear">
		</form>
	</body>
</html>
