<?php

include_once "conexion.php";
include_once "header.php";

if($_SESSION["usuarioId"])
{
	?>
	
	<table border>
		<tr>
			<th>Nombre</th>
			<td><?php echo $_SESSION["nombre"]; ?></td>
		</tr>
		<tr>
			<th>Apelldio</th>
			<td><?php echo $_SESSION["apellido"];?></td>
		</tr>
		<tr>
			<th>Ultimo Inicio</th>
			<td><?php echo $_SESSION["ultSesion"];?></td>
		</tr>
	</table>
	
	
	<?php
}

include_once "footer.php";
?>
