<?php

//Componente
interface InterfazVentana
{
	public function dibujarVentana();
	public function getDescripcion();
}

//Componente Concreto

class Ventana implements InterfazVentana
{
	public function dibujarVentana()
	{
		echo "<br>Dibujando ventana ";
	}
	
	public function getDescripcion()
	{
		echo "<br>Esto es una ventana ";
	}
}

//Decorador

abstract class Decorador implements InterfazVentana
{
	protected $decorador;
	
	
}

//Decoradores concretos

class VentanaConBorde extends Decorador
{
	public function __construct($decorador)
	{
		$this->decorador=$decorador;
	}
	public function dibujarVentana()
	{
		$this->decorador->dibujarVentana();
		echo "Dibujando borde ";
	}
	public function getDescripcion()
	{
		$this->decorador->getDescripcion();
		echo " con borde";
	}
}

class VentanaConAyuda extends Decorador
{
	public function __construct($decorador)
	{
		$this->decorador=$decorador;
	}
	public function dibujarVentana()
	{
		$this->decorador->dibujarVentana();
		echo "Dibujando boton de ayuda ";
	}
	public function getDescripcion()
	{
		$this->decorador->getDescripcion();
		echo " con boton de ayuda ";
	}
}

class VentanaConMenu extends Decorador
{
	public function __construct($decorador)
	{
		$this->decorador=$decorador;
	}
	public function dibujarVentana()
	{
		$this->decorador->dibujarVentana();
		echo "Dibujando menu ";
	}
	public function getDescripcion()
	{
		$this->decorador->getDescripcion();
		echo " con menu ";
	}
}

//Ventana simple
$ventana1=new Ventana();
$ventana1->dibujarVentana();
$ventana1->getDescripcion();

//Ventana con menu y ayuda
$ventana2=new VentanaConMenu(new VentanaConAyuda(new Ventana()));
$ventana2->dibujarVentana();
$ventana2->getDescripcion();

//Ventana con borde

$ventana3=new VentanaConBorde(new Ventana());
$ventana3->dibujarVentana();
$ventana3->getDescripcion();

