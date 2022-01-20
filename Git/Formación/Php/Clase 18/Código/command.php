<?php

//Receptores

class ReceptorA
{
	public function operacion1()
	{
		echo "Receptor A, operacion 1<br>";
	}
	public function operacion2()
	{
		echo "Receptor A, operacion 2<br>";
	}
}

class ReceptorB
{
	public function operacion1()
	{
		echo "Receptor B, operacion 1<br>";
	}
	public function operacion2()
	{
		echo "Receptor B, operacion 2<br>";
	}
}

//Comando
interface Comando
{
	public function accion();
}

//Comandos Concretos

class ComandoConcreto1 implements Comando
{
	private $receptor;
	public function __construct($receptor)
	{
		$this->receptor=$receptor;
	}
	public function accion()
	{
		$this->receptor->operacion1();
	}
}

class ComandoConcreto2 implements Comando
{
	private $receptor;
	public function __construct($receptor)
	{
		$this->receptor=$receptor;
	}
	public function accion()
	{
		$this->receptor->operacion2();
	}
}

//Invocador

class Invocador
{
	private $comando1;
	private $comando2;
	
	public function __construct($comando1,$comando2)
	{
		$this->comando1=$comando1;
		$this->comando2=$comando2;
	}
	
	public function operacion1()
	{
		$this->comando1->accion();
	}
	public function operacion2()
	{
		$this->comando2->accion();
	}
}

$receptor=new ReceptorB();
$invocador=new Invocador(new ComandoConcreto1($receptor),new ComandoConcreto2($receptor));
$invocador->operacion1();
$invocador->operacion2();

