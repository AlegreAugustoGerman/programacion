<?php

include_once("Animal.php");

class Perro implements Animal
{
	private $tamaño=0;
	
	public function comer($unidadesComida)
	{
		echo "Comiendo ".$unidadesComida." unidades de comida....<br>";
		$crecimiento=($unidadesComida/3);
		$this->crecer($crecimiento);
	}
	public function crecer($unidadesCrecimiento)
	{
		echo "Creciendo ".$unidadesCrecimiento." unidades......<br>";
		$this->tamaño=$this->tamaño+$unidadesCrecimiento;
	}
	public function verRata()
	{
		echo "Viendo rata......<br>";
	}
	public function verPelota()
	{
		echo "Viendo pelota.....<br>";
		echo "Jugando con pelota.....<br>";
	}
	
	public function getTamaño()
	{
		return $this->tamaño;
	}
}
