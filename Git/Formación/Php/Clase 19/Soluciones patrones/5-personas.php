<?php

//Objetivo
interface InterfazPersona
{
	public function getNombre();
	public function setNombre($nombre);
	public function getApellido();
	public function setApellido($apellido);
	public function getNombreCompleto();
	public function getEdad();
	public function setEdad($edad);

}

//Clase
class Persona implements InterfazPersona
{
	private $nombre;
	private $apellido;
	private $edad;
	
	public function getNombre()
	{
		return $this->nombre;
	}
	public function setNombre($nombre)
	{
		$this->nombre=$nombre;
	}
	public function getApellido()
	{
		return $this->apellido;
	}
	public function setApellido($apellido)
	{
		$this->apellido=$apellido;
	}
	public function getNombreCompleto()
	{
		return $this->nombre." ".$this->apellido;
	}
	public function getEdad()
	{
		return $this->edad;
	}
	public function setEdad($edad)
	{
		$this->edad=$edad;
	}
	
}

//Clase a adaptar
class PersonaNueva
{
	private $primernombre;
	private $segundonombre;
	private $primerapellido;
	private $segundoapellido;
	private $fechaNacimiento;
	

	
	public function getPrimerNombre()
	{
		return $this->primernombre;
	}
	public function setPrimerNombre($primernombre)
	{
		$this->primernombre=$primernombre;
	}
	
		public function getSegundoNombre()
	{
		return $this->segundonombre;
	}
	public function setSegundoNombre($segundonombre)
	{
		$this->segundonombre=$segundonombre;
	}
	
	public function getPrimerApellido()
	{
		return $this->primerapellido;
	}
	public function setPrimerApellido($primerapellido)
	{
		$this->primerapellido=$primerapellido;
	}
	
	
	public function getSegundoApellido()
	{
		return $this->segundoapellido;
	}
	public function setSegundoApellido($segundoapellido)
	{
		$this->segundoapellido=$segundoapellido;
	}
	
	public function getFechaNacimiento()
	{
		return $this->fechaNacimiento;
	}
	public function setFechaNacimiento($fechaNacimiento)
	{
		$this->fechaNacimiento=$fechaNacimiento;
	}
	
}

class AdaptadorPersonaNueva implements InterfazPersona
{
	private $personaNueva;
	
	public function __construct(){
        $this->personaNueva = new PersonaNueva();
    }
	
	public function getNombre()
	{
		return $this->personaNueva->getPrimerNombre(). " ".$this->personaNueva->getSegundoNombre();
	}
	public function setNombre($nombre)
	{
		$nombres = explode(" ",$nombre);
		$this->personaNueva->setPrimerNombre($nombres[0]);
		$this->personaNueva->setSegundoNombre($nombres[1]);
	}
	public function getApellido()
	{
		return $this->personaNueva->getPrimerApellido()." ".$this->personaNueva->getSegundoApellido();
	}
	public function setApellido($apellido)
	{
		$apellidos = explode(" ",$apellido);
		$this->personaNueva->setPrimerApellido($apellidos[0]);
		$this->personaNueva->setSegundoApellido($apellidos[1]);
	}
	public function getNombreCompleto()
	{
		return $this->personaNueva->getPrimerNombre()." ".$this->personaNueva->getSegundoNombre()." ".$this->personaNueva->getPrimerApellido()." ".$this->personaNueva->getSegundoApellido()." ";
	}
	public function getEdad()
	{
		return $this->calcularEdad($this->personaNueva->getFechaNacimiento());
	}
	public function setEdad($edad)
	{
		$this->personaNueva->setFechaNacimiento($edad);
	}
	
	public function calcularEdad($fecha){
	$dias = explode("-", $fecha, 3);
	$dias = mktime(0,0,0,$dias[1],$dias[0],$dias[2]);
	$edad = (int)((time()-$dias)/31556926 );
	return $edad;
	}
}

$persona1=new Persona();
$persona1->setNombre("Pedro");
$persona1->setApellido("Perez");
$persona1->setEdad(22);
echo $persona1->getNombreCompleto();
echo "<br>";
echo $persona1->getEdad();
echo "<br><br><br>";
$persona2=new AdaptadorPersonaNueva();
$persona2->setNombre("María Diana");
$persona2->setApellido("Moreno Grau");
$persona2->setEdad("15-11-1989");
echo $persona2->getNombreCompleto();
echo "<br>";
echo $persona2->getEdad();






