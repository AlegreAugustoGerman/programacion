<?php

//Contexto
class TrasporteAlZoo{
	private $trasporte;
	private $dinero;
	private $tiempoDisponible;
	
	public function __construct($dinero,$tiempoDisponible)
	{
		$this->dinero=$dinero;
		$this->tiempoDisponible=$tiempoDisponible;
		$this->asignarTransporte();
	}
	
	public function asignarTransporte(){
		if($this->dinero>50 && $this->tiempoDisponible>40)
		{
		
			if($this->tiempoDisponible>100)
			{
				$this->trasporte=new Colectivo();
			}
			else
			{
				$this->trasporte=new Taxi();
			}
		}
		else
		{
			echo "Auto";
			$this->trasporte=new Auto();
		}
	}

	public function preparar(){
		$this->trasporte->preparar();
	}
	
	public function subir(){
		$this->trasporte->subir();
	}
	
	public function bajar(){
		$this->trasporte->bajar();
	}
	

}

interface Trasporte{
	public function preparar();
	public function subir();
	public function bajar();
}

class Taxi implements Trasporte{
	
	public function preparar(){
		echo "Llamar Taxi..<br>";
		echo "Esperar Taxi..<br>";
	}
	
	public function subir(){
		echo "Dar dirección a taxista..<br>";
	}
	
	public function bajar(){
		echo "Pagar al taxista..<br>";
	}
	
	
}

class Auto implements Trasporte{
	public function preparar(){
		echo "Verificar combustible..<br>";
	}
	
	public function subir(){
		echo "Encender el auto..<br>";
		echo "Ir al Zoo..<br>";
	}
	
	public function bajar(){
		echo "Encontrar estacionamiento..<br>";
		echo "Cerrar puertas...<br>";
	}
	
	
}

class Colectivo implements Trasporte{
	public function preparar(){
		echo "Ir a parada..<br>";
		echo "Esperar colectivo..<br>";
	}
	
	public function subir(){
		echo "Pagar a conductor..<br>";
	}
	
	public function bajar(){
		echo "Bajar del colectivo..<br>";
	}
	
	
}


$trasporteAlZoo=new TrasporteAlZoo(40,60);
$trasporteAlZoo->preparar();
$trasporteAlZoo->subir();
$trasporteAlZoo->bajar();
echo "<br><br>";

$trasporteAlZoo2=new TrasporteAlZoo(60,55);
$trasporteAlZoo2->preparar();
$trasporteAlZoo2->subir();
$trasporteAlZoo2->bajar();
echo "<br><br>";

$trasporteAlZoo3=new TrasporteAlZoo(58,135);
$trasporteAlZoo3->preparar();
$trasporteAlZoo3->subir();
$trasporteAlZoo3->bajar();
echo "<br><br>";

