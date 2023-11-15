<?php

include_once ("Persona.php");
class Enfermero extends Persona
{
	public $nDeEmpleado;
	public $piso;
	
	function __construct($nombre,$apellido,$dni,$nDeEmpleado,$piso)
	{
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->dni=$dni;
		$this->nDeEmpleado=$nDeEmpleado;
		$this->piso=$piso;
	}
	
	public function mostrarNombreOcupacion()
	{
		return $this->mostrarNombreCompleto()." n° Empleado: ".$this->nDeEmpleado." Piso: ".$this->piso;
	}
}
