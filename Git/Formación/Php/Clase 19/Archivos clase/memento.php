<?php

//Originador Clase cuyo estado  quiero guardar
class Originador
{
	private $estado;
	
	public function setEstado($estado)
	{
		echo "Seteando el estado a ".$estado."<br>";
		$this->estado=$estado;


	}
	
	//Crea un Recuerdo con los valores de los atributos del Orginador
	public function guardarEnRecuerdo()
	{
		echo "Creando recuerdo de estado ".$this->estado."<br>";
		//Creo un Recuerdo pasando por parametro los atributos que deseo recordar
		return new Recuerdo($this->estado);
	}
	
	//Setea en el Originador los valores del recuerdo
	public function restaurarDesdeRecuerdo($recuerdo)
	{
		echo "Restaurando estado ".$recuerdo->getEstado()."<br>";
		//Seteo el valor del estado de Recuerdo al estado del Originador
		$this->estado=$recuerdo->getEstado();
	}
}

//Cuidador
class Cuidador
{
	private $estadosGuardados=array();
	public function agregarRecuerdo($recuerdo)
	{
		echo "Agregando recuerdo en array<br>";
		//Guardando el recuerdo al final del array
		array_push($this->estadosGuardados,$recuerdo);
	}
	
	public function getRecuerdo($indice)
	{
		echo "Obteniendo recuerdo de array<br>";
		return $this->estadosGuardados[$indice];
	}
}

//Recuerdo
class Recuerdo
{
	private $estado;
	
	function __construct($estado)
	{
		$this->estado=$estado;
	}
	public function getEstado()
	{
		return $this->estado;
	}
}

$cuidador=new Cuidador();
$originador=new Originador();
$originador->setEstado("Estado 1");
$cuidador->agregarRecuerdo($originador->guardarEnRecuerdo());
$originador->setEstado("Estado 2");
$cuidador->agregarRecuerdo($originador->guardarEnRecuerdo());
$originador->setEstado("Estado 3");
$cuidador->agregarRecuerdo($originador->guardarEnRecuerdo());
$originador->restaurarDesdeRecuerdo($cuidador->getRecuerdo(0));
