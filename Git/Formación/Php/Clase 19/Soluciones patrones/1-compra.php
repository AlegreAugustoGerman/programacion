<?php


//Contexto
class Compra{
	private $estado;
	
	function __construct()
	{
		$this->estado=new Creada();
	}
	
	public function setEstado($estado){
		$this->estado=$estado;
	}

	public function comprar(){
		$this->estado->comprar();
		$this->setEstado(new EnEspera());
	}
	public function verificar(){
		$this->estado->verificar();
		$this->setEstado(new Verificada());
	}
	public function enviar(){
		$this->estado->enviar();
		$this->setEstado(new Enviada());
	}
	public function cancelar(){
		$this->estado->cancelar();
		$this->setEstado(new Cancelada());
	}
}

//Interfaz Estado Abstracto
interface EstadoCompra{
	public function comprar();
	public function verificar();
	public function enviar();
	public function cancelar();
}

//Estado concreto
class Creada implements EstadoCompra{
	
	public function comprar()
	{
		echo "Compra realizada<br>";
	}
	public function verificar()
	{
		echo "ERROR: La compra no ha sido realizada<br>";
	}
	public function enviar()
	{
		echo "ERROR: La compra no ha sido realizada<br>";
	}
	public function cancelar()
	{
		echo "La Compra ha sido cancelada<br>"; 
	}
}

//Estado concreto
class EnEspera implements EstadoCompra{
	public function comprar()
	{
		echo "ERROR: La compra ya ha sido realizadabr>";
	}
	public function verificar()
	{
		echo "La compra ha sido vereficada<br>";
	}
	public function enviar()
	{
		echo "ERROR: La compra no ha sido verificada<br>";
	}
	public function cancelar()
	{
		echo "La compra ha sido cancelada<br>"; 
	}
}

//Estado concreto
class Verificada implements EstadoCompra{
	public function comprar()
	{
		echo "ERROR: La compra ya se ha realizado<br>";
	}
	public function verificar()
	{
		echo "ERROR: La compra ya ha sido verificada<br>";
	}
	public function enviar()
	{
		echo "La compra ha sido enviada<br>";
	}
	public function cancelar()
	{
		echo "ERROR: La compra ya ha sido verificada<br>"; 
	}
}

//Estado concreto
class Enviada implements EstadoCompra{
	public function comprar()
	{
		echo "ERROR: La compra ya se ha realizado<br>";
	}
	public function verificar()
	{
		echo "ERROR: La compra ya ha sido verificada<br>";
	}
	public function enviar()
	{
		echo "ERROR: La compra ya ha sido enviada<br>";
	}
	public function cancelar()
	{
		echo "ERROR: La compra ya ha sido verificada<br>"; 
	}
}
//Estado concreto
class Cancelada implements EstadoCompra{
	public function comprar()
	{
		echo "ERROR: La compra has sido cancelada<br>";
	}
	public function verificar()
	{
		echo "ERROR: La compra has sido cancelada<br>";
	}
	public function enviar()
	{
		echo "ERROR: La compra has sido cancelada<br>";
	}
	public function cancelar()
	{
		echo "ERROR: La compra has sido cancelada<br>";; 
	}
}

$compra=new Compra();
$compra->comprar();
$compra->verificar();
$compra->enviar();

$compra2=new Compra();
$compra2->enviar();
$compra2->comprar();
$compra2->verificar();
$compra2->cancelar();


