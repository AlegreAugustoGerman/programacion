<?php

//Objetivo
abstract class Motor
{
	abstract public function encender();
	abstract public function acelerar();
	abstract public function apagar();
}

class MotorComun extends Motor
{
	public function encender()
	{
		echo "Encendiendo motor comun...<br>";
	}
	public function acelerar()
	{
		echo "Acelerando motor comun...<br>";
	}
	public function apagar()
	{
		echo "Apagando motor comun...<br>";
	}
}


class MotorEconomico extends Motor
{
	public function encender()
	{
		echo "Encendiendo motor economico...<br>";
	}
	public function acelerar()
	{
		echo "Acelerando motor economico...<br>";
	}
	public function apagar()
	{
		echo "Apagando motor economico...<br>";
	}
}


class AdaptadorMotorElectrico extends Motor
{
	private $motorElectrico;
	public function __construct()
	{
		$this->motorElectrico=new MotorElectrico();
		
	}
	public function encender()
	{
		$this->motorElectrico->conectar();
		$this->motorElectrico->activar();
		
	}
	public function acelerar()
	{
		$this->motorElectrico->moverMasRapido();
	}
	public function apagar()
	{
		$this->motorElectrico->detener();
		$this->motorElectrico->desconectar();
	}
}

class MotorElectrico
{
	private $conectado=false;
	public function conectar()
	{
		if(!$this->conectado)
		{
		echo "Conectando motor electrico...<br>";
		$this->conectado=true;
		}
		else
		{
			echo "Error: El motor ya está conectado<br>";
		}
	}
	
	public function activar()
	{
		if($this->conectado)
		{
		echo "Activando motor electrico...<br>";
		}
		else
		{
			echo "Error: El motor no esta conectado<br>";
		}
	}
	public function moverMasRapido()
	{
		if($this->conectado)
		{
		echo "Acelerando motor electrico...<br>";
		}
		else
		{
			echo "Error: El motor no esta conectado<br>";
		}
	}
	public function detener()
	{
		if($this->conectado)
		{
		echo "Deteniendo motor electrico...<br>";
		}
		else
		{
			echo "Error: El motor no esta conectado<br>";
		}
	}
	
	public function desconectar()
	{
		if($this->conectado)
		{
		echo "Desconectando motor electrico...<br>";
		$this->conectado=false;
		}
		else
		{
			echo "Error: El motor no esta conectado<br>";
		}
	}
}

$motor=new AdaptadorMotorElectrico();
$motor->acelerar();
$motor->encender();
$motor->acelerar();
$motor->apagar();

