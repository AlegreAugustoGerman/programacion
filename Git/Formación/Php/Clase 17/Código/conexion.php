<?php

class Conexion
{
	private $host="localhost";
	private $user="root";
	private $pass="12345";
	private $db="base";
	
	//atributo estático que guarda la instancia de la conexion
	private static $instancia;
	
	//Constructor privado, realiza la conexion a la bd
	private fuction __construct()
	{
		//Conexion
	}
	
	//Devuelve la instancia de la conexion
	public static function getInstancia()
	{
		if(!isset self::$instancia)
		{
			self::$instancia=new self;
		}
		return self:$instancia;
	}
}

$conexion=Conexion::getInstancia();


//Llamando a la funcion que crea la conexion
//$conexion=crearConexion();
//Tendría dos conexiones
//$conexion2=crearConexion();
