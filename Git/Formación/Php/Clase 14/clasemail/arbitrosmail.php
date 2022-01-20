<html>
	<head>
		<meta charset="utf-8">
		<title>Enviar correos a árbitros</title>
	</head>
	<body>
		<?php
		include "conexion2.php";
		
		$consulta="SELECT * FROM arbitros";
		$resultado=$conexion->query($consulta);
		 while ($fila = mysqli_fetch_assoc($resultado)) {
			 
			 $destinos=$fila["mail"];
			 $asunto="Partidos";
			 $consulta2="SELECT * FROM partidos
			 WHERE arbitroId=".$fila["arbitroId"];
			 echo $consulta2;
			$mensaje="<table border>";
			$mensaje.="<tr>";
			$mensaje.="<th>Cancha</th>";
			$mensaje.="<th>Fecha</th>";
			$mensaje.="</tr>";
			$resultado2=$conexion->query($consulta2);
			while($fila2=mysqli_fetch_assoc($resultado2))
			{
				$mensaje.="<tr>";
				$mensaje.="<td>".$fila2["cancha"]."</td>";
				$mensaje.="<td>".$fila2["fecha"]."</td>";
				$mensaje.="</tr>";
			}
			$mensaje.="</table>";
			
			$cabeceras="MIME-Version:1.0\r\n";
			$cabeceras.="Content-type:text/html\r\n";
			$cabeceras.="charset=iso-8859-1\r\n";
			$cabeceras.="From:4nt1@protonmail.com\r\n";
			
			
		 
		 echo $asunto;
		 echo "<br>";
		 echo $destinos;
		  echo "<br>";
		 echo $mensaje;
		  echo "<br>";
		 echo $cabeceras;
		  echo "<br>";
	  
		 
		 if(mail($destinos,$asunto,$mensaje,$cabeceras))
		 {
			 echo "Enviado";
		 }else
		 {
			 echo "No enviado";
		 }
			 
		 }
		
		
		?>
	</body>
</html>
