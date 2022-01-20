<?php

include_once ("Persona.php");
class Doctor extends Persona
{
	public $nDeLicencia;
	public $especialidad;
	
	function __construct($nombre,$apellido,$dni,$nDeLicencia,$especialidad)
	{
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->dni=$dni;
		$this->nDeLicencia=$nDeLicencia;
		$this->especialidad=$especialidad;
	}
	
	public function mostrarNombreOcupacion()
	{
		return $this->mostrarNombreCompleto()." n° Licencia: ".$this->nDeLicencia." Especialidad: ".$this->especialidad;
	}
}
