<?php


include_once "header.php";
include_once "conexion.php";




if(isset($_SESSION["usuarioId"]))
{
	
?>
<h2>Datos Usuario</h2>
			<table>
				<tr>
					<th>Nombre</th><td><?php echo $_SESSION["nombre"]  ?></td>
				</tr>
				<tr>
					<th>Apellido</th><td><?php echo $_SESSION["apellido"]  ?></td>
				</tr>
				<tr>
					<th>Ultima Sesión</th><td><?php echo $_SESSION["ultSesion"]  ?></td>
				</tr>
	
		</table>
<?php
			
}
		
?>
</body>
</html>
