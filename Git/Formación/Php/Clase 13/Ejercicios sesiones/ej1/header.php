<html>

	<head>
		<meta charset="utf-8">
		<title>Sesiones</title>
	</head>
	<body>
		<h1>Sesiones</h1>
		
		<?php
		include_once "conexion.php";
			include_once "funciones.php";
		
		if(($_POST)){
			
			
			
			
			
			$username=$_POST["username"];
			$pass=$_POST["pass"];
			$recordar=$_POST["recordar"];
			
			if(isset($username) && isset($pass))
			{
				echo iniciarSesion($username,$pass,$recordar,$conexion);
			
			}
			else
			{
				echo "Campos no completados";
			}
			
			
		}else
		{
			if(isset($_COOKIE["usuarioId"]) && isset($_COOKIE["rand"]))
			{
				if($_COOKIE["usuarioId"]!="" || $_COOKIE["rand"]!=""){
					$usuarioId=$_COOKIE["usuarioId"];
					$rand=$_COOKIE["rand"];
					$usuario=datosCookies($usuarioId,$rand,$conexion);
				}
			}
				

		}
		
		if(!isset($_SESSION["usuarioId"]))
		{
	
		?>
		<FORM NAME="inicioSesion" ACTION="" METHOD="POST">
		<table>
			<tr>
				<th align="left">Usuario</th>
				<th align="left">Pass</th>
				<th></th>
				<th></th>
				<th></th>
				
			</tr>
			<tr>
				<td><input type="text" name="username" value="<?php if(isset($usuario)){ echo $usuario->username;	}?>"></td>
				<td><input type="password" name="pass"></td>
				<td><input type="checkbox" name="recordar" <?php  if(isset($usuario)){ echo " checked=checked";	}?>>Recordar</td>
				<td><input type="submit" value="Iniciar"></td>
			</tr>
			</table>
	
		</FORM>
		
		<?php
		
		}else
		{
			?>
			<table>
				<tr>
					<td>Hola <?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?></td>
					<td><a href="cerrarSesion.php">Cerrar Sesion</a></td>
				</tr>
			</table>
			
			
			
			
			<?php
		}
		
		?>
