<?php

//Receptor

class ComercioStock
{
	public function comprar()
	{
		echo "Comprando stock...<br>";
	}
	public function vender()
	{
		echo "Vendiendo stock...<br>";
	}
}

//Comando
interface Orden
{
	public function ejecutar();
}

//Comandos concretos
class OrdenCompra implements Orden
{
	private $stock;
	public function __construct($stock)
	{
		$this->stock=$stock;
	}
	public function ejecutar()
	{
		$this->stock->comprar();
	}
}

class OrdenVenta implements Orden
{
	private $stock;
	public function __construct($stock)
	{
		$this->stock=$stock;
	}
	public function ejecutar()
	{
		$this->stock->vender();
	}
}

//Invocador

class Agente
{
	//array con ordenes de compra y venta no realizadas
	private $ordenes=array();
	
	//guarda la orden de compra o venta al final del array (NO LA EJECUTA)
	public function hacerOrden($orden)
	{
		echo "Generando order...<br>";
		array_push($this->ordenes,$orden);
	}
	
	//Obtengo la primera orden de la cola y la ejecuto sacandola del array
	public function obtenerOrden()
	{
		//Verifico si hay ordenes en el array
		if(count($this->ordenes)>0)
		{
			echo "Obteniendo orden...<br>";
			//Obtengo primera orden y la elimino del array
			$orden=array_shift($this->ordenes);
			//Ejecuto la orden
			$orden->ejecutar();
		}
		else
		{
			echo "No hay ordenes pendientes...<br>";
		}
	}
	public function getCantidadOrdenes()
	{
		return count($this->ordenes);
	}
}

$stock=new ComercioStock();
$ordenCompra=new OrdenCompra($stock);
$ordenVenta=new OrdenVenta($stock);
$agente=new Agente();

//Generar orden de compra
$agente->hacerOrden($ordenCompra);
//Generar orden de venta
$agente->hacerOrden($ordenVenta);
//Generar orden de venta
$agente->hacerOrden($ordenVenta);
//Generar orden de venta
$agente->hacerOrden($ordenVenta);
//Mostrar ordenes pendientes
echo "Ordenes pendientes: ".$agente->getCantidadOrdenes()."<br>";
//Obtener primera orden en la cola
$agente->obtenerOrden();
//Mostrar ordenes pendientes
echo "Ordenes pendientes: ".$agente->getCantidadOrdenes()."<br>";
//Obtener primera orden en la cola
$agente->obtenerOrden();
//Mostrar ordenes pendientes
echo "Ordenes pendientes: ".$agente->getCantidadOrdenes()."<br>";
//Generar orden de compra
$agente->hacerOrden($ordenCompra);
//Mostrar ordenes pendientes
echo "Ordenes pendientes: ".$agente->getCantidadOrdenes()."<br>";
//Obtener primera orden en la cola
$agente->obtenerOrden();
//Mostrar ordenes pendientes
echo "Ordenes pendientes: ".$agente->getCantidadOrdenes()."<br>";
//Obtener primera orden en la cola
$agente->obtenerOrden();
//Obtener primera orden en la cola
$agente->obtenerOrden();

