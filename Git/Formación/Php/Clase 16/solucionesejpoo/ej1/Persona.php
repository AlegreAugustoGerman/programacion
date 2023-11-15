<?php

abstract class Persona
{
	public $nombre;
	public $apellido;
	public $dni;
	
	public function mostrarNombreCompleto()
	{
		return $this->nombre." ".$this->apellido;
	}
	
	public abstract function mostrarNombreOcupacion();
	
	
	
}
