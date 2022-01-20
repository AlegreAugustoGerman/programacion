<?php
//Clase final
final class Padre
{
	public $atributo="valor";
	public function metodo()
	{
		echo "Metodo Padre...<br>";
	}
}

/*class Hijo extends Padre //ERROR NO se puede heredar de una clase final
{
	
}

$hijo=new Hijo();
$hijo->metodo();*/

class ClaseA
{
	
	public final function mostrar()
	{
		echo "Mostrar de clase A<br>";
	}
}
//Hija de A
class ClaseB extends ClaseA
{
	//ERROR: no se puede sobreescribir un metodo final
	/*public function mostrar()
	{
		echo "Mostrar de clase B<br>";
	}*/
}

/*$claseA=new ClaseA();
$claseA->mostrar();*/
$claseB=new ClaseB();
$claseB->mostrar();
