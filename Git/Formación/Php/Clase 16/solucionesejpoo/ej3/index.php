<html>
	<head>
		<meta charset="utf-8">
		<title>Ej 3</title>
	</head>
	<body>
		<?php
		
		include ("Perro.php");
		include ("Gato.php");
		
		echo "<h3>Perro</h3>";
		$perro=new Perro();
		$perro->comer(6);
		echo "Tamaño: ".$perro->getTamaño()."<br>";
		$perro->comer(3);
		echo "Tamaño: ".$perro->getTamaño()."<br>";
		$perro->verRata();
		$perro->verPelota();
		
		echo "<h3>Gato</h3>";
		$gato=new Gato();
		$gato->comer(6);
		echo "Tamaño: ".$gato->getTamaño()."<br>";
		$gato->comer(2);
		echo "Tamaño: ".$gato->getTamaño()."<br>";
		$gato->verRata();
		$gato->verPelota();
		
		
		
		
		
		
		
		?>
	</body>
</html>
