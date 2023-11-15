<?php

/*Producto Abstracto*/

interface Animal
{
	public function desplazarse();
	public function alimentarse($comida);
}

/*Productos concretos*/

class AnimalTerrestre implements Animal
{
	private $peso;
	public function __construct($peso)
	{
		$this->peso=$peso;
		echo "Creando animal terrestre...<br>";
	}
	public function desplazarse()
	{
		echo "Caminar...<br>";
	}
	public function alimentarse($comida)
	{
		$this->peso=$this->peso+$comida;
	}
}

class AnimalAcuatico implements Animal
{
	private $peso;
	public function __construct()
	{
		$this->peso=3;
		echo "Creando animal acuatico...<br>";
	}
	public function desplazarse()
	{
		echo "Nadar....<br>";
	}
	public function alimentarse($comida)
	{
		$this->peso=$this->peso+($comida*2);
	}
}

/*Creador abstracto*/

abstract class Cientifico
{
	public function nuevoAnimal()
	{
		return $this->crearAnimal();
	}
	protected abstract function crearAnimal();
}

/*Creadores Concretos*/

class CientificoTerrestre extends Cientifico
{
	protected function crearAnimal()
	{
		return new AnimalTerrestre(5);
	}
}

class CientificoAcuatico extends Cientifico
{
	protected function crearAnimal()
	{
		return new AnimalAcuatico();
	}
}

$cientifico1=new CientificoAcuatico();
$animal1=$cientifico1->nuevoAnimal();
$animal1->desplazarse();

$cientifico2=new CientificoTerrestre();
$animal2=$cientifico2->nuevoAnimal();
$animal2->desplazarse();
