<?php

//Subsistemas

class Subsistema1
{
	public function metodo1()
	{
		echo "Ejecutando el método 1<br>";
	}
}

class Subsistema2
{
	public function metodo2()
	{
		echo "Ejecutando el método 2<br>";
	}
}

class Subsistema3
{
	public function metodo3()
	{
		echo "Ejecutando el método 3<br>";
	}
}

//Facade o fachada

class Fachada
{
	//Un atributo por cada subsistema
	private $subsistema1;
	private $subsistema2;
	private $subsistema3;


function __construct()
{
	$this->subsistema1=new Subsistema1();
	$this->subsistema2=new Subsistema2();
	$this->subsistema3=new Subsistema3();
}

public function grupoOperacionesA()
{
	$this->subsistema1->metodo1();
	$this->subsistema3->metodo3();
}
public function grupoOperacionesB()
{
	$this->subsistema2->metodo2();
	$this->subsistema1->metodo1();
}
public function grupoOperacionesC()
{
	$this->subsistema1->metodo1();
	$this->subsistema2->metodo2();
	$this->subsistema3->metodo3();
}
}


$fachada=new Fachada();
$fachada->grupoOperacionesA();
echo "<br><br>";
$fachada->grupoOperacionesB();
echo "<br><br>";
$fachada->grupoOperacionesC();

/*$subsistema1=new Subsistema1();
$subsistema2=new Subsistema2();
$subsistema3=new Subsistema3();

$subsistema1->metodo1();
$subsistema3->metodo3();
echo "<br><br>";
$subsistema2->metodo2();
$subsistema1->metodo();
echo "<br><br>";
$subsistema1->metodo1();
$subsistema2->metodo2();
$subsistema3->metodo3();*/
