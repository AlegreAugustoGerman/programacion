<?php

//No se pueden instanciar
//No tienen atributos
//Todos sus metodos son publicos
//Sus metodos no tienen implementación

interface Interfaz
{
	//Metodos abstractos
	public function saludar();//Definimos función
	public function presentarse($nombre);
	
}

interface Interfaz2
{
	public function despedirse();
}

class ClaseA implements Interfaz
{
	public $apellido="Gonzales";
	
	public function metodo1()
	{
		
	}
	public function saludar()//Implemento los metodos de la interfaz
	{
		echo "Hola que tal?<br>";
	}
	
	public function presentarse($nombre)
	{
		echo "Hola, mi nombre es ".$nombre." ".$this->apellido;
	}
}
//Implementa Interfaz e Interfaz2
class ClaseB implements Interfaz,Interfaz2
{
	public function saludar()
	{
		echo "Buenos Dias!!<br>";
	}
	public function presentarse($nombre)
	{
		echo "Mucho gusto, soy ".$nombre."<br>";
	}
	public function despedirse()
	{
		echo "Adios<br>";
	}
	
}
//Hereda de ClaseB
class ClaseBHija extends ClaseB
{
	
}

$claseA=new ClaseA();
$claseA->saludar();
$claseA->presentarse("Maria");

$claseB=new ClaseB();
$claseB->saludar();
$claseB->presentarse("Pedro");
$claseB->despedirse();

$claseBHija=new ClaseBHija();
$claseBHija->saludar();

