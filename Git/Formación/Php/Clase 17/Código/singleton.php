<?php

class Singleton
{
	//atributo donde se va a guardar la instancia
	static private $singleton;
	
	//Constructor protegido (no se puede acceder desde afuera)
	protected function __construct()
	{
		echo "Creando instancia....<br>";
	}
	
	//Método estático
	public static function getInstancia()
	{
		//Si no se ha creado la instancia ($instancia vacio)
		if(!isset(self::$singleton))
		{
			echo "No existe la instancia...<br>";
			//Crea instancia
			self::$singleton=new self;
		}
		else
		{
			echo "Ya existe la instancia...<br>";
		}
		//Devuelvo la instancia
		return self::$singleton;
	}
}

//Crear instancia normalmente ERROR: el constructor es protegido/privado
//$singleton=new Singleton();

$singleton=Singleton::getInstancia();

$singleton2=Singleton::getInstancia();

$singleton3=Singleton::getInstancia();
