<?php

class Impresora
{
	private $estado;
	public function __construct()
	{
		$this->estado=new Lista();
	}
	public function setEstado($estado)
	{
		$this->estado=$estado;
	}
	public function imprimir()
	{
		$this->estado->imprimir();
		
	}
	
	public function terminar()
	{
		$this->estado->terminar();
		
	}
	
	public function conectar()
	{
		$this->estado->conectar();
		$this->estado=new Lista();
	}
}

interface EstadoImpresora
{
	public function imprimir();
	public function terminar();
	public function conectar();
}

class Lista implements EstadoImpresora
{
	public function imprimir()
	{
		echo "Imprimiendo....<br>";
	}
	public function terminar()
	{
		echo "ERROR: ya ha terminado<br>";
	}
	public function conectar()
	{
		echo "ERROR: ya esta conectada <br>";
	}
}

class Imprimiendo implements EstadoImpresora
{
	public function imprimir()
	{
		echo "ERROR: ya esta imprimiendo<br>";
	}
	public function terminar()
	{
		echo "Terminando...<br>";
	}
	public function conectar()
	{
		echo "Ya esta conectada <br>";
	}

}

class Desconectada implements EstadoImpresora
{
	public function imprimir()
	{
		echo "ERROR: Esta desconectada<br>";
	}
	public function terminar()
	{
		echo "ERROR: Esta desconectada...<br>";
	}
	
	public function conectar()
	{
		echo "Conectando<br>";
	}

}


$impresora=new Impresora();
$impresora->imprimir();
$impresora->terminar();
$impresora->terminar();
$impresora->imprimir();
$impresora->imprimir();

