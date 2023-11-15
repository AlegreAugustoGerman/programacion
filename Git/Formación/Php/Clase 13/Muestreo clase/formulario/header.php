<html>
	<head>
		<meta charset="utf-8">
		<title>Log in</title>
	</head>
	<body>
		<h1>Login</h1>
		
		<?php
		
		include "conexion.php";
		include "funciones.php";
	
		if($_POST)
		{
			$username=$_POST["username"];
			$pass=$_POST["pass"];
			
			if(isset($username) && isset($pass))
			{
				echo iniciarSession($username,$pass,$conexion);
			}
		}
		
		
			
	
		
		if(isset($_SESSION["usuarioId"]))
		{
			echo "Hola ".$_SESSION["nombre"]."!!!";
			echo "<a href='cerrarSesion.php'>Cerrar Sesion</a>";
		}
		else
		{
		
			?>
		<form name="inicioSesion" action="" method="POST">
			<table>
				<tr>
					<th>Usuario</th><th>Password</th>
					<th colspan="2"></th>
				</tr>
				<tr>
					<td><input type="text" name="username" value="<?php if(isset($_COOKIE["username"])){ echo $_COOKIE["username"]; }  ?>"></td>
					<td><input type="password" name="pass" value="<?php if(isset($_COOKIE["pass"])){ echo $_COOKIE["pass"];} ?>"></td>
					<td><input type="submit" value="Enviar"></td>
				</tr>
			</table>
		</form>
		
		<?php
	}
		
		?>
	
