<html>
	<head>
		<meta charset="utf-8">
		<title>Arreglos</title>
	</head>
	<body>
		<h1>Arreglos</h1>
		
		<h2>Indice numérico</h2>
		
		<?php
		
		$arregloA=array("Rojo","Azul","Amarillo","Verde");
		echo $arregloA["0"];
		echo "<br>";
		
		$arregloA["1"]="Negro";
		//Agregar
		array_push($arregloA,"Blanco");
		array_unshift($arregloA,"Violeta");
		//Eliminar
		array_pop($arregloA);
		array_shift($arregloA);
		unset($arregloA["2"]);
		echo "<br>";
		echo count($arregloA);
		echo "<br>";
		//Ordenar
		sort($arregloA,SORT_NATURAL);
		
		foreach($arregloA as $elemento)
		{
			echo $elemento;
			echo "<br>";
		}
		
		if(array_search("Marron",$arregloA))
		{
			echo "Verde está en la posición".array_search("Verde",$arregloA);
		}else
		{
			echo "Verde no existe";
		}
		
		echo "<br>";
		print_r($arregloA);
		
		$arregloD=array(1,4,5,6);
		echo array_sum($arregloD);
		
		
	
		
		?>
		
		<h2>Indice claves, asociativos</h2>
		
		<?php
		
		$arregloB=array("nombre"=>"Pedro","apellido"=>"Gonzales","edad"=>30);
		echo $arregloB["edad"];
		echo "<br>";
		$arregloB["nombre"]="Luis";
		
		$arregloC=array("telefono"=>"345354");
		$arregloB=array_merge($arregloB,$arregloC);
		unset($arregloB["edad"]);
		//Ordenar
		
		ksort($arregloB,SORT_STRING);
		
		asort($arregloB,SORT_NUMERIC);
		
		foreach($arregloB as $clave=>$elemento)
		{
			echo $clave.": ".$elemento;
			echo "<br>";
		}
		
		echo "<br>";
		print_r($arregloB);
		echo "<br>";
		$resultado=implode(",",$arregloB);
		echo $resultado;
		echo "<br>";
		echo count($arregloB);
		echo "<br>";
		
		if(array_key_exists("edad",$arregloB))
		{
			echo "Existe";
		}else
		{
			echo "No existe";
		}
	
	
		
		?>
	</body>
</html>
