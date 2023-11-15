<?php

//Receptor
class Calculadora
{
	private $valor=0;
	public function realizarOperacion($operador,$operando)
	{
		switch($operador)
		{
			case '+':
			$this->valor=$this->valor+$operando;
			break;
			
			case '-':
			$this->valor=$this->valor-$operando;
			break;
			
			case '*':
			$this->valor=$this->valor*$operando;
			break;
			
			case '/':
			$this->valor=$this->valor/$operando;
			break;
		}
	}
	
	public function getValor()
	{
		return $this->valor;
	}
}

//Comando

interface Comando
{
	public function ejecutar();
	public function deshacer();
}

//Comandos concretos

class Operacion implements Comando
{
	private $calculadora;
	private $operador;
	private $operando;
	
	function __construct($calculadora,$operador,$operando)
	{
		$this->calculadora=$calculadora;
		$this->operador=$operador;
		$this->operando=$operando;
	}
	
	public function ejecutar()
	{
		echo "Ejecutando operacion ".$this->operador." ".$this->operando."<br>";
		$this->calculadora->realizarOperacion($this->operador,$this->operando);
	}
	
	public function deshacer()
	{
		echo "Deshaciendo operacion ".$this->operador." ".$this->operando."<br>";
		$this->calculadora->realizarOperacion($this->obtenerInverso($this->operador),$this->operando);
	}
	
	public function obtenerInverso($operador)
	{
		switch($operador)
		{
			case '+':
			return '-';
			break;
			
			case '-':
			return '+';
			break;
			
			case '*':
			return '/';
			break;
			
			case '/':
			return '*';
			break;
		}
	}
	
}

//Invocador
class Invocador
{
	private $operaciones=array();
	private $operacionActual=0;

	//Aumentamos el indice de operacion actual, guardamos la operacion y la ejecutamos
	public function hacerOperacion($operacion)
	{
		$this->operacionActual++;
		$this->operaciones[$this->operacionActual]=$operacion;
		$operacion->ejecutar();
	}
	
	public function deshacer($cantidadOperaciones)
	{
		echo "Deshaciendo ".$cantidadOperaciones." operaciones<br>";
		
		for($i=$this->operacionActual;$i>($this->operacionActual-$cantidadOperaciones);$i--)
		{
			$this->operaciones[$i]->deshacer();
			
		}
		$this->operacionActual=$this->operacionActual-$cantidadOperaciones;
	}
	
	public function rehacer($cantidadOperaciones)
	{
		echo "Rehaciendo ".$cantidadOperaciones. " operaciones<br>";
		for($i=($this->operacionActual);$i<=($this->operacionActual+$cantidadOperaciones-1);$i++)
		{
			$this->operaciones[$i]->ejecutar();
			
		}
			$this->operacionActual=$this->operacionActual+$cantidadOperaciones;
		
	}
}

$calculadora=new Calculadora();
$invocador=new Invocador($calculadora);
echo "Valor actual: ".$calculadora->getValor()."<br>";
$invocador->hacerOperacion(new Operacion($calculadora,'+',10));
echo "Valor actual: ".$calculadora->getValor()."<br>";
$invocador->hacerOperacion(new Operacion($calculadora,'*',2));
echo "Valor actual: ".$calculadora->getValor()."<br>";
$invocador->hacerOperacion(new Operacion($calculadora,'-',5));
echo "Valor actual: ".$calculadora->getValor()."<br>";
$invocador->hacerOperacion(new Operacion($calculadora,'+',2));
echo "Valor actual: ".$calculadora->getValor()."<br>";
$invocador->deshacer(3);
echo "Valor actual: ".$calculadora->getValor()."<br>";
$invocador->rehacer(2);
echo "Valor actual: ".$calculadora->getValor()."<br>";
$invocador->hacerOperacion(new Operacion($calculadora,'+',50));
echo "Valor actual: ".$calculadora->getValor()."<br>";
























