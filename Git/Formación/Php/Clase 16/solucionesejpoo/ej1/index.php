<html>
	<head>
		<meta charset="utf8">
		<title>Ej 2</title>
	</head>
	<body>
		<?php
		
		include_once ("Doctor.php");
		include_once ("Enfermero.php");
		include_once ("Celador.php");
		
		
		$doctor=new Doctor("Pedro","Gonzales","3433233","LC-242343","Cirujía");
		echo $doctor->mostrarNombreCompleto();
		echo "<br>";
		echo $doctor->mostrarNombreOcupacion();
		echo "<br>";
		echo "--------------------------------------------------------";
		echo "<br>";
		
		$enfermero=new Enfermero("Pablo","Sosa","34334333","EM-242343","3");
		echo $enfermero->mostrarNombreCompleto();
		echo "<br>";
		echo $enfermero->mostrarNombreOcupacion();
		echo "<br>";
		echo "--------------------------------------------------------";
		echo "<br>";
		
		$celador=new Celador("Marcos","Moreno","23434333","CT-542343","Cocina");
		echo $celador->mostrarNombreCompleto();
		echo "<br>";
		echo $celador->mostrarNombreOcupacion();
		echo "<br>";
		echo "--------------------------------------------------------";
		echo "<br>";
		
		
		
		
		
		?>
	</body>
</html>
