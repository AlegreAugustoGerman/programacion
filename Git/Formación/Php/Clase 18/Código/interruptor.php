<?php

//Receptor

class Luz
{
	public function encender()
	{
		echo "Luz encendida<br>";
	}
	public function apagar()
	{
		echo "Luz apagada<br>";
	}
}

class Motor
{
	public function encender()
	{
		echo "Motor encendido<br>";
	}
	public function apagar()
	{
		echo "Motor apagado<br>";
	}
}

//Comando 
interface Comando
{
	public function ejecutar();
}
//Comandos concretos
class Arriba implements Comando
{
	private $objeto;
	public function __construct($objeto)
	{
		$this->objeto=$objeto;
	}
	public function ejecutar()
	{
		$this->objeto->encender();
	}
	
}

class Abajo implements Comando
{
	private $objeto;
	public function __construct($objeto)
	{
		$this->objeto=$objeto;
	}
	public function ejecutar()
	{
		$this->objeto->apagar();
	}
}
//Invocador
class Interruptor
{
	private $comandoArriba;
	private $comandoAbajo;
	
	public function __construct($comandoArriba,$comandoAbajo)
	{
		$this->comandoArriba=$comandoArriba;
		$this->comandoAbajo=$comandoAbajo;
	}
	
	public function encender()
	{
		$this->comandoArriba->ejecutar();
	}
	public function apagar()
	{
		$this->comandoAbajo->ejecutar();
	}
}

$objeto=new Motor();
$llave=new Interruptor(new Arriba($objeto),new Abajo($objeto));
$llave->encender();
$llave->apagar();
$llave->encender();



