<?php

interface Interfaz
{
	//metodos abstractos
	public function mostrarMensaje();
	public function mostrarMensaje2();
}
//Implementa interfaz
abstract class ClaseA implements Interfaz
{
	public abstract function mostrarMensaje();
	public abstract function mostrarMensaje2();
}
//Hereda de ClaseA
class ClaseB extends ClaseA
{
	public function mostrarMensaje(){
		echo "Mensaje<br>";
	}
	public function mostrarMensaje2()
	{
		echo "Mensaje2<br>";
	}
}

abstract class ClaseC
{
	public abstract function funcionAbstracta();
}
