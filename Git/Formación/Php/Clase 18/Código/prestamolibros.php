<?php

//Subsistemas

class Libro
{
	static private $cantidad=2;
	public function modificarCantidad($cantidad)
	{
		self::$cantidad=self::$cantidad+$cantidad;
	}
	public function getCantidad()
	{
		return self::$cantidad;
	}
}

class Prestamo
{
	private $libro;
	public function __construct()
	{
		$this->libro=new Libro();
	}
	public function prestar()
	{
		$this->libro->modificarCantidad(-1);
		echo "Realizando prestamo...<br>";
	}
	public function devolver()
	{
		$this->libro->modificarCantidad(1);
		echo "Devolviendo libro...<br>";
	}
}

class Multa
{
	public function multar()
	{
		echo "Creando multa.... <br>";
	}
}

class Fachada
{
	private $libro;
	private $prestamo;
	private $multa;
	
	function __construct()
	{
		$this->libro=new Libro();
		$this->prestamo=new Prestamo();
		$this->multa=new Multa();
	}
	
	public function prestarLibro()
	{
		if($this->libro->getCantidad()>0)
		{
			$this->prestamo->prestar();
		}
		else
		{
			echo "No existen libros para prestar...<br>";
		}
	}
	
	public function devolverLibro($estado)
	{
		if($estado=="Bueno" || $estado=="Regular")
		{
			$this->prestamo->devolver();
		}
		if($estado=="Regular" || $estado=="Malo")
		{
			$this->multa->multar();
		}
	}
	public function cantidadLibros()
	{
		echo "Quedan ".$this->libro->getCantidad()." libros<br>";
	}
}

$fachada=new Fachada();
$fachada->cantidadLibros();
$fachada->prestarLibro();
$fachada->cantidadLibros();
$fachada->prestarLibro();
$fachada->cantidadLibros();
$fachada->prestarLibro();
$fachada->cantidadLibros();
$fachada->devolverLibro("Bueno");
$fachada->cantidadLibros();
$fachada->devolverLibro("Regular");
$fachada->cantidadLibros();

//Presto un libro
/*$libro=new Libro();
if($libro->getCantidad()>0)
{
	$prestamo=new Prestamo();
	$prestamo->prestar();
}
else
{
	echo "No existen libros para prestar...<br>";
}

if($libro->getCantidad()>0)
{
	$prestamo=new Prestamo();
	$prestamo->prestar();
}
else
{
	echo "No existen libros para prestar...<br>";
}

if($libro->getCantidad()>0)
{
	$prestamo=new Prestamo();
	$prestamo->prestar();
}
else
{
	echo "No existen libros para prestar...<br>";
}
//Devuelvo libro
$estado="Bueno";
if($estado=="Bueno" || $estado=="Regular")
{
	$prestamo=new Prestamo();
	$prestamo->devolver();
}
if($estado=="Regular" || $estado=="Malo")
{
	$multa=new Multa();
	$multa->multar();
}

$estado="Regular";
if($estado=="Bueno" || $estado=="Regular")
{
	$prestamo=new Prestamo();
	$prestamo->devolver();
}
if($estado=="Regular" || $estado=="Malo")
{
	$multa=new Multa();
	$multa->multar();
}*/


