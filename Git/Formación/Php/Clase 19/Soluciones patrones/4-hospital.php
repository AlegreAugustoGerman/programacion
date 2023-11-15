<?php

interface Habitacion
{
	public function getCantidad();
	public function setCantidad($cantidad);
	
}

class HabitacionMaternidad implements Habitacion
{
	private static $cantidad=2;
	public function getCantidad()
	{
		return self::$cantidad;
	}
	public function setCantidad($cantidad)
	{
		self::$cantidad=$cantidad;
	}
}

class HabitacionQuirofano implements Habitacion
{
	private static $cantidad=1;
	public function getCantidad()
	{
		return self::$cantidad;
	}
	public function setCantidad($cantidad)
	{
		self::$cantidad=$cantidad;
	}
}

class HabitacionPreOperatorio implements Habitacion
{
	private static $cantidad=10;
	public function getCantidad()
	{
		return self::$cantidad;
	}
	public function setCantidad($cantidad)
	{
		self::$cantidad=$cantidad;
	}
}


//Subsistema
class Paciente
{
	private $nombre;
	private $apellido;
	private $fechaNacimiento;
	private $dni;
		
	public function __construct($nombre,$apellido,$fechaNacimiento,$dni)
	{
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->fechaNacimiento=$fechaNacimiento;
		$this->dni=$dni;
	}
	public function ingresar()
	{
		echo "Paciente ingresado<br>";
	}
	
	
}



class SistemaIngreso
{
	private $razonIngreso;
	private $habitacion;
	private $paciente;
	
	
	
	public function ingresarPaciente($nombre,$apellido,$fechaNacimiento,$dni,$razonIngreso)
	{
		$this->razonIngreso=$razonIngreso;
		switch($this->razonIngreso)
		{
			case "Parto":
			$this->habitacion=new HabitacionMaternidad();
			if($this->habitacion->getCantidad()>0)
			{
				$this->habitacion->setCantidad($this->habitacion->getCantidad()-1);
				$this->paciente=new Paciente($nombre,$apellido,$fechaNacimiento,$dni);
				$this->paciente->ingresar();
				
			}
			else
			{
				echo "No hay habitaciones disponibles<br>";
			}
			break;
			case "Operacion":
			$this->habitacion=new HabitacionQuirofano();
			if($this->habitacion->getCantidad()>0)
			{
				$this->habitacion->setCantidad($this->habitacion->getCantidad()-1);
				$this->paciente=new Paciente($nombre,$apellido,$fechaNacimiento,$dni);
				$this->paciente->ingresar();
				
			}
			else
			{
				echo "No hay quirofanos disponibles<br>";
			}
			break;
			case "Enfermedad":
			$this->habitacion=new HabitacionMaternidad();
			if($this->habitacion->getCantidad()>0)
			{
				$this->habitacion->setCantidad($this->habitacion->getCantidad()-1);
				$this->paciente=new Paciente($nombre,$apellido,$fechaNacimiento,$dni);
				$this->paciente->ingresar();
				
			}
			else
			{
				echo "No hay habitaciones disponibles<br>";
			}
			break;
		}
		
	}
	
	
}

$sistema=new SistemaIngreso();
$sistema->ingresarPaciente("Maria","Moreno","15-05-1988","23548789","Parto");
$sistema->ingresarPaciente("Marta","Perez","10-05-1988","23453789","Parto");
$sistema->ingresarPaciente("Perdro","Lopez","10-20-1987","34253789","Operacion");
$sistema->ingresarPaciente("Luciana","Moreno","1-12-1986","24353789","Parto");

