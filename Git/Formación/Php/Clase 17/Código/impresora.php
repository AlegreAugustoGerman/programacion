<?php

class Impresora
{
	private $estado;
	public function __construct()
	{
		$this->estado="Desconectada";
	}
	public function setEstado($estado)
	{
		$this->estado=$estado;
	}
	public function imprimir()
	{
		if($this->estado=="Imprimiendo")
		{
			echo "ERROR: La impresora ya está imprimiendo...<br>";
		}
		elseif("Lista")
		{
			$this->estado="Imprimiendo";
			echo "Imprimiendo....<br>";
		}
		else
		{
			echo "ERROR: La impresora esta desconectada...<br>";
		}
	}
	
	public function terminar()
	{
		if($this->estado="Lista")
		{
			echo "ERROR: La impresora ya ha terminado...<br>";
		}
		elseif("Imprimiendo")
		{
			$this->estado="Lista";
			echo "Terminando....<br>";
		}else
		{
			echo "ERROR: La impresora esta desconectada <br>";
		}
	}
	
	public function conectar()
	{
		if($this->estado="Lista")
		{
			echo "ERROR: La impresora ya esta conectada...<br>";
		}
		elseif("Imprimiendo")
		{
			$this->estado="Lista";
			echo "ERROR: la impresora ya esta conectada";
		}else
		{
			$this->estado="Lista";
			echo "Conectando <br>";
		}
	}
}

$impresora=new Impresora();
$impresora->imprimir();
$impresora->terminar();
$impresora->terminar();
$impresora->imprimir();
$impresora->imprimir();
$impresora->setEstado("cualquiercosa");
$impresora->imprimir();
//Condiciones para todos los metodos
//Tantas condiciones como estados posibles
//No se controla los estados que se setean

