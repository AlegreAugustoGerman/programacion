<?php

//Objetivo

abstract class Objetivo
{
	abstract public function metodo1();
	abstract public function metodo2();
	abstract public function metodo3();
}

///Clase

class ClaseA extends Objetivo
{
	public function metodo1()
	{
		echo "Ejecutando metodo1 de la clase A<br>";
	}
	public function metodo2()
	{
		echo "Ejecutando metodo2 de la clase A<br>";
	}
	public function metodo3()
	{
		echo "Ejecutando metodo3 de la clase A<br>";
	}
}

//Clase a adaptar
class  ClaseAAdaptar
{
	public function metodoV()
	{
		echo "Ejecutando metodoV de la clase a adaptar<br>";
	}
	public function metodoW()
	{
		echo "Ejecutando metodoW de la clase a adaptar<br>";
	}
	public function metodoX()
	{
		echo "Ejecutando metodoV de la clase a adaptar<br>";
	}
	public function metodoY()
	{
		echo "Ejecutando metodoV de la clase a adaptar<br>";
	}
	public function metodoZ()
	{
		echo "Ejecutando metodoV de la clase a adaptar<br>";
	}
}

//Adaptador

class Adaptador extends Objetivo
{
	private $claseaadaptar;
	public function __construct()
	{
		$this->claseaadaptar=new ClaseAAdaptar();
		
	}
	public function metodo1()
	{
		$this->claseaadaptar->metodoV();
		$this->claseaadaptar->metodoW();
	}
	public function metodo2()
	{
		$this->claseaadaptar->metodoX();
	}
	public function metodo3()
	{
		$this->claseaadaptar->metodoY();
		$this->claseaadaptar->metodoZ();
	}
}

$claseA=new ClaseA();
$claseA->metodo1();
$claseA->metodo2();
$claseA->metodo3();

$claseAdaptador=new Adaptador();
$claseAdaptador->metodo1();
$claseAdaptador->metodo2();
$claseAdaptador->metodo3();
