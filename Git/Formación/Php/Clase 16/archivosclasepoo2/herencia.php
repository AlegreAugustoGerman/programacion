<?php
//Clase Padre
class Padre
{
	public $nombre;
	protected $apellido;
	private $edad;
	
	public function __construct()
	{
		echo "Creando Padre...<br>";
	}
	
	public function getApellido()
	{
		return $this->apellido;//Acceder a atributo protected desde adentro de la clase
	}
	
	public function getEdad()
	{
		return $this->edad;//Accedo a atributo privado desde adentro de la clase
	}
	
	public function setApellido($valor)
	{
		$this->apellido=$valor;
	}
	
	public function setEdad($valor)
	{
		$this->edad=$valor;
	}
	
	public function mostrarDatos()
	{
		echo "Estos son los datos<br>";
	}
	protected function mostrarDatos2()
	{
		return "Estos son los datos 2 <br>";
	}
	private function mostrarDatos3()
	{
		return "Estos son los datos 3 <br>";
	}
	
	public function mostrarMensajes()
	{
		$array=array();
		array_push($array,$this->mostrarDatos2());//Accedo a metodo protected desde adentro de la clase
		array_push($array,$this->mostrarDatos3());//Accedo a metodo private desde adentro de la clase
		return $array;
	}
	
}

class Hijo extends Padre
{
	private $profesion="Maestro";
	public $tipoSangre="A+";
	
	
	public function __construct()
	{
		echo "Creando hijo...<br>";
	}
	public function getApellidoPadre()
	{
		//Acceder a atributo protected de Padre
		return $this->apellido;
	}
	//Error Hijo no puede ver los atributos privados de Padre
	/*public function getEdadPadre()
	{
		//Acceder a atributo private de Padre
		return $this->edad;
	}*/
	//Accedemos a metodo protected de padre desde hijo
	public function mostrarDatosHijo()
	{
		return $this->mostrarDatos2();
	}
	//Accedemos a metodo private de padre desde hijo //Error
	public function mostrarDatosHijo2()
	{
		return $this->mostrarDatos3();
	}
	
	
}

class Hijo2 extends Padre
{
	public $otroatributo;
}

class Nieto extends Hijo
{
	public $atributo="valor";
	public function __construct()
	{
		echo "Creando Nieto...<br>";
	}
}

//Creo un padre
$padre=new Padre();
//Accedo a atributo publico
$padre->nombre="Pedro";
echo $padre->nombre;
//Accedo a atributo protected ERROR  Acceder desde afuera
/*$padre->apellido="Gonzales";
echo $padre->apellido;*/
//Accedo a atributo private ERROR
/*$padre->edad=25;
echo $padre->edad;*/
//Accedo a funcion public
$padre->mostrarDatos();
//Accedo a funcion protected ERROR
//$padre->mostrarDatos2();
//Accedo a funcion private ERROR
//$padre->mostrarDatos3();
$mensajes=$padre->mostrarMensajes();
echo $mensajes[0];
echo $mensajes[1];
$padre->setApellido("Gonzales");
$padre->setEdad(25);
echo $padre->getApellido();
echo $padre->getEdad();

//Creo un hijo
$hijo=new Hijo();
//Accedo a atributo public de Padre
$hijo->nombre="Maria";
echo $hijo->nombre;
//NO se puede acceder a atributos protected y private
//Accedo a metodo public de Padre
$hijo->mostrarDatos();
//NO se puede acceder a metods protected y private
$hijo->setApellido("Moreno");
echo $hijo->getApellido();
$hijo->setEdad(39);
echo $hijo->getEdad();
echo "<br>";
echo $hijo->getApellidoPadre();
echo "<br>";
echo $hijo->tipoSangre;
//echo $hijo->getEdadPadre();
echo $hijo->mostrarDatosHijo();
//echo $hijo->mostrarDatosHijo2();

//Creo un nieto
$nieto=new Nieto();
$nieto->nombre="Pedro";
echo $nieto->nombre;//Accedo a atributo de padre
echo $nieto->tipoSangre;//Accedo a atributo de hijo
echo $nieto->atributo;//Accedo a atributo de nieto
//print_r($nieto); //Mostrar contenido de objeto


