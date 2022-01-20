<?php

//Componente

interface Componente
{
	public function operacion();
}

//Componente concreto

class ComponenteConcreto implements Componente
{
	public function operacion()
	{
		echo "Ejecutando operacion<br>";
	}
	
}

//Decorador Abstracto
abstract class Decorador implements Componente
{
	protected $decorador;
}

//Docoradores Concretos

class DecoradorConcretoA extends Decorador
{
	function __construct($decorador)
	{
		//Guardo el decorador pasado por parametro en el atributo 
		$this->decorador=$decorador;
	}
	
	public function operacion()
	{
		//Ejecuto operacion del atributo decorador guardado
		$this->decorador->operacion();
		//Ejecuto operacion
		echo "Operacion de Decorador Concreto A<br>";
	}
}

class DecoradorConcretoB extends Decorador
{
	function __construct($decorador)
	{
		$this->decorador=$decorador;
	}
	public function operacion()
	{
		$this->decorador->operacion();
		echo "Operacion de Decorador Concreto B<br>";
	}
}

class DecoradorConcretoC extends Decorador
{
	function __construct($decorador)
	{
		$this->decorador=$decorador;
	}
	public function operacion()
	{
		$this->decorador->operacion();
		echo "Operacion de Decorador Concreto C<br>";
	}
}

//Componente simple: sin decoracion
$componente1=new ComponenteConcreto();
$componente1->operacion();
echo "<br>";

//Componente con decoracion A
$componente2=new DecoradorConcretoA(new ComponenteConcreto());
$componente2->operacion();
echo "<br>";

//Componente con decoracion A y B
$componente3=new DecoradorConcretoA(new DecoradorConcretoB(new ComponenteConcreto()));
$componente3->operacion();

echo "<br>";
//Componente con decoracion A,B y C
$componente4=new DecoradorConcretoC(new DecoradorConcretoA(new DecoradorConcretoB(new ComponenteConcreto())));
$componente4->operacion();

