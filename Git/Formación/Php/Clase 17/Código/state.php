<?php

//Objeto que cambia de estado
class Contexto
{
	private $estado;
	//Seteo estado inicial
	public function __construct()
	{
		$this->estado=new EstadoConcretoA();
	}
	//setea el estado
	public function setEstado($estado)
	{
		$this->estado=$estado;
	}
	public function metodo()
	{
		$this->estado->metodo();
	}
	
	public function metodo2()
	{
		$this->estado->metodo2();
	}
	
	public function metodo3()
	{
		$this->estado->metodo3();
	}
	
	public function cambiarAEstadoA()
	{
		$this->estado=new EstadoConcretoA();
	}
	
	public function cambiarAEstadoB()
	{
		$this->estado=new EstadoConcretoB();
	}
	
}
//Interfaz de estados
interface EstadoAbstracto
{
	public function metodo();
	public function metodo2();
	public function metodo3();
}
//Estado concreto: Un estado posible del contexto
class EstadoConcretoA implements EstadoAbstracto
{
	public function __construct()
	{
		echo "Cambiando a estado A<br>";
	}
	public function metodo()
	{
		echo "Metodo desde el estado concreto A<br>";
	}
	public function metodo2()
	{
		echo "ERROR: NO se puede ejecutar en estado A<br>";
	}
	public function metodo3()
	{
		echo "Ejecutando metodo 3 desde estado A<br>";
	}
}

class EstadoConcretoB implements EstadoAbstracto
{
	public function __construct()
	{
		echo "Cambiando a estado B<br>";
	}
	public function metodo()
	{
		echo "Metodo desde el estado concreto B<br>";
	}
	
	public function metodo2()
	{
		echo "Ejecutando metodo 2 desde estado B<br>";
	}
	public function metodo3()
	{
		echo "ERROR: no se puede ejecutar el método 3 desde B<br>";
	}
}

$contexto=new Contexto();
$contexto->setEstado(new EstadoConcretoA());
$contexto->metodo();
$contexto->setEstado(new EstadoConcretoB());
$contexto->metodo();
$contexto->cambiarAEstadoA();
$contexto->cambiarAEstadoB();
$contexto->metodo2();
$contexto->metodo3();
$contexto->cambiarAEstadoA();
$contexto->metodo2();
$contexto->metodo3();
