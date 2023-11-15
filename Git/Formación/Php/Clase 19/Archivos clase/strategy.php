<?php

//Contexto

class Pagina
{
	private $estrategia;
	
	
	public function __construct($tamañoTexto)
	{
		if($tamañoTexto>5000)
		{
			$this->estrategia=new MuchasHojas();
		}
		else
		{
			$this->estrategia=new UnaHoja();
		}
	}
	public function setEstrategia($estrategia)
	{
		$this->estrategia=$estrategia;
	}
	public function  realizarPaginado()
	{
		$this->estrategia->realizarPaginado();
	}
}

interface Estrategia
{
	public function realizarPaginado();
}

class MuchasHojas implements Estrategia
{
	public function realizarPaginado()
	{
		echo "Paginar texto en muchas hojas<br>";
	}
}

class UnaHoja implements Estrategia
{
	public function realizarPaginado()
	{
		echo "Paginar texto en una sola hoja<br>";
	}
}

$pagina=new Pagina(3400);
$pagina->realizarPaginado();

$pagina2=new Pagina(10450);
$pagina2->realizarPaginado();
