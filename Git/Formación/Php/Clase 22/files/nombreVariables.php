<?php

//Los nombres de las variables no pueden contener guion bajo _
//Correcto
$nombre;
//INcorrecto
$nombre_variable;

//Los nombres de las variables no pueden estar en mayuscula

//Correcto
$nombre;

//Incorrecto
$NOMBRE;

//Los nombres de las variables no pueden iniciar con mayuscula

//Incorrecto
$Nombre;

//Correcto
$nombre;

//Las varaibles de mas de una palabra utilizan notacion camello

//Incorrecto
$variableconmasdeunapalabra;

//Incorrecto
$variable_con_mas_de_una_palabra;

//Correcto
$variableConMasDeUnaPalabra;

//Las variables excepto en algunos casos no deben contener números

//Incorrecto
$a56;

//Incorrecto
$variable4;
$variable5;

//Correcto
function sumar($valor1,$valor2)
{
	return $valor1+$valor2;
}

//Las variables deben ser significativas

//Incorrecto
function vender($p,$p2,$v)
{
	//Codigo
}

function vender($producto,$precio,$vendedor)
{
	//Codigo
}

//Las variables deben tener una longitud media

//Correcto
$cantidadProducto;

//Incorrecto
$c;
$cantidadDelProductoPorVenderPorElVendedor;

//Las constantes deben estar en mayuscula

//Correcto

define("NOMBRE","valor");

//Incorrecto
define("Nombre","valor");
define("nombre","valor");

//Variables de una sola letra

//Correcto
for($i=0;$i<10;$i++)
{
	echo $i;
}

//Correcto
while($ventas<10)
{
	echo "Seguir vendiendo...";
	if($ventaRealizada)
	{
		$ventas++;
	}
}

while($j<10)
{
	echo "Seguir vendiendo...";
	if($ventaRealizada)
	{
		$j++;
	}
}










