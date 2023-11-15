<?php

include_once ("Persona.php");
class Celador extends Persona
{
	public $nDeEmpleado;
	public $piso;
	
	function __construct($nombre,$apellido,$dni,$nContrato,$area)
	{
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->dni=$dni;
		$this->nContrato=$nContrato;
		$this->area=$area;
	}
	
	public function mostrarNombreOcupacion()
	{
		return $this->mostrarNombreCompleto()." n° Contrato: ".$this->nContrato." Area: ".$this->area;
	}
}
