<html>
	<head>
		<meta charset="utf-8">
		<title>Contador de visitas</title>
	</head>
	<body>
	<h1>Contador de visitas</h1>

<?php
$cantidad=$_COOKIE['cantidad'];
$cantidad++;
setcookie("cantidad",$cantidad,time()+86400);

?> 
		<table border>
			<tr>
				<th>Visitas:</th><th><?php echo $_COOKIE['cantidad']; ?></th>
			</tr>
		</table>
	</body>
</html>
