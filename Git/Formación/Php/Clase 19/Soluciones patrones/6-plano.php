<?php

interface InterfazPlano
{
	public function dibujarPlano();
	public function getListaAgregados();
}



class Plano implements InterfazPlano { 
	
	function __construct()
	{
		echo "Creando Plano....<br>";
	}
	public function dibujarPlano() { 
		echo "<br>Dibujando casa...<br>";
	} 
	
	public function getListaAgregados() { 
		echo "<ul><li>Casa simple</li>"; 
	} 
}

abstract class Decorador implements InterfazPlano
{
	protected $decorador;
	
	function __construct($decorador)
	{
		$this->decorador=$decorador;
	}
}

class Sotano extends Decorador {
	 
	function __construct($decorador)
	{
		$this->decorador=$decorador;
	}
	
	public function dibujarPlano() {
		
		$this->decorador->dibujarPlano(); 
		$this->dibujarSotano(); 
	}

	private function dibujarSotano() { 
		echo "Dibujando sótano....<br>";
	} 
	
	public function getListaAgregados() { 
		echo $this->decorador->getListaAgregados()." <li>Sótano</li>"; 
	} 
} 

class Balcon extends Decorador {
	 
	function __construct($decorador)
	{
		$this->decorador=$decorador;
	}
	
	public function dibujarPlano() {
		
		$this->decorador->dibujarPlano(); 
		$this->dibujarBalcon(); 
	}

	private function dibujarBalcon() { 
		echo "Dibujando balcon....<br>";
	} 
	
	public function getListaAgregados() { 
		echo $this->decorador->getListaAgregados()." <li>Balcon</li>"; 
	} 
} 

class Piscina extends Decorador {
	 
	function __construct($decorador)
	{
		$this->decorador=$decorador;
	}
	
	public function dibujarPlano() {
		
		$this->decorador->dibujarPlano(); 
		$this->dibujarPiscina(); 
	}

	private function dibujarPiscina() { 
		echo "Dibujando piscina....<br>";
	} 
	
	public function getListaAgregados() { 
		echo $this->decorador->getListaAgregados()." <li>Piscina</li>"; 
	} 
} 

class Quincho extends Decorador {
	 
	function __construct($decorador)
	{
		$this->decorador=$decorador;
	}
	
	public function dibujarPlano() {
		
		$this->decorador->dibujarPlano(); 
		$this->dibujarQuincho(); 
	}

	private function dibujarQuincho() { 
		echo "Dibujando quincho....<br>";
	} 
	
	public function getListaAgregados() { 
		echo $this->decorador->getListaAgregados()." <li>Quincho</li>"; 
	} 
} 



$plano1=new Plano();
$plano1->getListaAgregados();
echo "</ul>";
$plano1->dibujarPlano();
echo "<br><br>";

$plano2=new Piscina(new Plano());
$plano2->getListaAgregados();
echo "</ul>";
$plano2->dibujarPlano();
echo "<br><br>";

$plano3=new Sotano(new Quincho(new Plano()));
$plano3->getListaAgregados();
echo "</ul>";
$plano3->dibujarPlano();
echo "<br><br>";

$plano4=new Sotano(new Balcon(new Quincho(new Piscina(new Plano()))));
$plano4->getListaAgregados();
echo "</ul>";
$plano4->dibujarPlano();
echo "<br><br>";

