<?php
//Producto Abstracto
interface Juguete{
	public function pintar($color);
	public function decorar();
	
}
//Producto Concreto
class Auto implements Juguete
{
	public function pintar($color)
	{
		echo "Pintando auto de ".$color."....<br>";
	}
	
	public function decorar()
	{
		echo "Decorando auto...<br>";
	}
}
//Producto Concreto
class Soldado implements Juguete
{
	public function pintar($color)
	{
		echo "Pintando soldado de ".$color." ....<br>";
	}
	
	public function decorar()
	{
		echo "Decorando soldado...<br>";
	}
	
}
//Producto Concreto
class Barco implements Juguete
{
	public function pintar($color)
	{
		echo "Pintando barco de ".$color." ....<br>";
	}
	
	public function decorar()
	{
		echo "Decorando barco...<br>";
	}
	
}

//Constructor Abstracto
abstract class Molde
{
	public $tamanio;
	public function nuevoJuguete()
	{
		return $this->crearJuguete();
	}
	
	protected abstract function crearJuguete();
	
	
}

//Constructor Concreto
class MoldeAuto extends Molde
{
	protected function crearJuguete()
	{
		return new Auto();
	}
	
}
//Constructor Concreto
class MoldeSoldado extends Molde
{
	protected function crearJuguete()
	{
		return new Soldado();
	}
	
}
//Constructor Concreto
class MoldeBarco extends Molde
{
	protected function crearJuguete()
	{
		return new Barco();
	}
	
}

$molde=new MoldeAuto();
$molde->tamanio="Grande";

$juguete1=$molde->crearJuguete();
$juguete1->pintar("Amarillo");
$juguete1->decorar();

$juguete2=$molde->crearJuguete();
$juguete2->pintar("Verde");
$juguete2->decorar();

$molde=new MoldeBarco();
$molde->tamanio="Mediano";

$juguete3=new Juguete();
$juguete3->pintar("Amarillo");
$juguete3->decorar();





