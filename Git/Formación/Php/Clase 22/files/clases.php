<?php

//Nombre de las clases

//Las clases deben empezar con mayúscula
//Las clases deben usar notacion camello

class Nombre
{
}

class NombreDeLaClase
{
}

//Los nombres de las clases deben estar en singular

//Incorrecto
class Usuarios
{
}

//Correcto
class Usuario
{
}

//Especificar de manera explicita la visibilada de metodos y atriubutos
class Clase
{
	private $atributo="value";
	public function __construct()
	{
		echo "Creando";
	}
	public function metodo()
	{
		echo "Metodo";
	}
}

$clase=new Clase();
//$clase->atributo="valor";
$clase->metodo();
