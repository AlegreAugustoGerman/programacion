<?php

//Originador
class Conexion
{
	public $host;
	public $user;
	public $pass;
	public $db;
	
	public function guardarEnConfiguraciones()
	{
		return new Configuracion($this);
	}
	
	public function restaurarDesdeConfiguracion($configuracion)
	{
		$this->host=$configuracion->host;
		$this->user=$configuracion->user;
		$this->pass=$configuracion->pass;
		$this->db=$configuracion->db;
	}
	
}

//Cuidador
class SistemaDeConfiguraciones
{
	private $configuraciones=array();
	public function agregarConfiguracion($configuracion)
	{
		array_push($this->configuraciones,$configuracion);
	}
	public function getConfiguracion($indice)
	{
		return $this->configuraciones[$indice];
	}
}

//Configuracion

class Configuracion
{
	public $host;
	public $user;
	public $pass;
	public $db;
	
	public function __construct($conexion)
	{
		$this->host=$conexion->host;
		$this->user=$conexion->user;
		$this->pass=$conexion->pass;
		$this->db=$conexion->db;
	}
}
$sistema=new SistemaDeConfiguraciones();

$conexion=new Conexion();
$conexion->host="localhost";
$conexion->pass="123456";
$conexion->user="root";
$conexion->db="base1";

echo $conexion->host." ".$conexion->pass." ".$conexion->user." ".$conexion->db."<br>";
$sistema->agregarConfiguracion($conexion->guardarEnConfiguraciones());

$conexion->pass="123457";
$conexion->db="base3";

echo $conexion->host." ".$conexion->pass." ".$conexion->user." ".$conexion->db."<br>";
$sistema->agregarConfiguracion($conexion->guardarEnConfiguraciones());

$conexion->user="user";
echo $conexion->host." ".$conexion->pass." ".$conexion->user." ".$conexion->db."<br>";

$conexion->restaurarDesdeConfiguracion($sistema->getConfiguracion(1));
echo $conexion->host." ".$conexion->pass." ".$conexion->user." ".$conexion->db."<br>";

$conexion->restaurarDesdeConfiguracion($sistema->getConfiguracion(0));
echo $conexion->host." ".$conexion->pass." ".$conexion->user." ".$conexion->db."<br>";
