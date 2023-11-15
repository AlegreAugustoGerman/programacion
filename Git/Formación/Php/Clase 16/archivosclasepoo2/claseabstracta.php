<?php

//No se puede instanciar
//Puede tener atributos
//PUede tener metodos (public, protected,private)
//Debe tener al menos un metodo abstracto

abstract class ClaseAbstracta
{
	public $nombre="Maria";
	private $apellido="Gonzales";
	protected $edad =5;
	
	public function __construct()
	{
		echo "Creando Clase Abstracta<br>";
	}
	
	public function saludar()
	{
		echo "Hola que tal?<br>";
	}
	
	public function getApellido()
	{
		return $this->apellido;
	}
	
	private function despedirse()
	{
		echo "Adios<br>";
	}
	
	public function irse()
	{
		echo $this->despedirse()." ".$this->nombre."<br>";
	}
	//Metodo abstracto
	public abstract function mostrarMensaje();
	//Metodo abstracto
	public abstract function mostrarMensaje2();
	
}
//Hereda de Clase Abstracta
abstract class ClaseA extends ClaseAbstracta
{
	//public abstract function mostrarMensaje();
	//public abstract function mostrarMensaje2();
	//public abstract mostrarMensaje3();
	public function __construct()
	{
		echo "Creando ClaseA...";
	}
	/*public function mostrarMensaje()
	{
		echo "Mostrar mensaje <br>";
	}
	
	public function mostrarMensaje2()
	{
		echo "Mostrar mensaje 2 <br>";
	}*/
	
}

class ClaseB extends ClaseAbstracta
{
	public function mostrarMensaje()
	{
		echo "Mostrar mensaje clase B <br>";
	}
	public function mostrarMensaje2()
	{
		echo "Mostrar mensaje 2 clase B<br>";
	}
}
//Hereda de ClaseA
class ClaseA2 extends ClaseA
{
	public function __construct()
	{
		echo "Creando Clase A2<br>";
	}
	public function mostrarMensaje()
	{
		echo "Mostrar mensaje <br>";
	}
	
	public function mostrarMensaje2()
	{
		echo "Mostrar mensaje 2 <br>";
	}
	public function mostrarMensaje3()
	{
		echo "Mostrar mensaje 3 <br>";
	}
}

//$claseA=new ClaseA();
//Accedo a atributos y metodos de la clase abstracta
//echo $claseA->nombre;
//echo $claseA->getApellido();
//Implemento los metodos de la clase abstracta
/*$claseA->mostrarMensaje();
$claseA->mostrarMensaje2();*/

$claseA=new ClaseA2();


