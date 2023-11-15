<?php

//Producto abstracto
interface ProductoAbstracto
{
	public function metodo();
}

//Productos concretos

class ProductoConcretoA implements ProductoAbstracto
{
	public function __construct()
	{
		echo "Creando producto concreto A<br>";
	}
	public function metodo()
	{
		echo "Método de Producto Concreto A<br>";
	}
}

class ProductoConcretoB implements ProductoAbstracto
{
	public function __construct()
	{
		echo "Creando producto concreto B<br>";
	}
	public function metodo()
	{
		echo "Método de Producto Concreto B<br>";
	}
}

//Creador Abstracto

abstract class CreadorAbstracto
{
	//Llama a la funcion crearProducto del Creador Concreto correspondiente
	public function nuevoProducto()
	{
		return $this->crearProducto();
	}
	protected abstract function crearProducto();
}

//Creadores concretos
class CreadorConcretoA extends CreadorAbstracto
{
	
	protected function crearProducto()
	{
		return new ProductoConcretoA();
	}
	
}

class CreadorConcretoB extends CreadorAbstracto
{
	
	protected function crearProducto()
	{
		return new ProductoConcretoB();
	}
}

$creadorConcretoA=new CreadorConcretoA();
$producto=$creadorConcretoA->nuevoProducto();
$producto->metodo();
$creadorConcretoB=new CreadorConcretoB();
$producto2=$creadorConcretoB->nuevoProducto();
$producto2->metodo();
