<?php

class Clase
{
	private static $contador=0;
	
	function __construct()
	{
		self::$contador++;
		
	}
	public function getContador()
	{
		return self::$contador;
	}
	
}

$clase1=new Clase();
$clase2=new Clase();
$clase3=new Clase();
$clase4=new Clase();
$clase5=new Clase();
echo $clase5->getContador();
