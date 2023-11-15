<html>
	<head>
		<meta charset="utf-8">
	</head>

<body>
<?php

//Crear una clase
class Animal
{
	//Atributos
	public $nombre;//Se accede desde afuera de la clase
	protected $tipo;//Se accede desde adentro de la clase y desde adentro de clases hijas
	private $edad="5";//Se accede desde adentro de la clase
	public $raza="Dálmata";
	public static $vivo="SI";
	
	//Métodos
	
	private function ejecutar($consulta)
	{
		echo "Ejecutando consulta";
	}
	
	public function agregar()
	{
		$consulta="Armo una consulta";
		$this->ejecutar($consulta);
	}
	
	public function obtenerEdad()
	{
		return $this->edad;
	}
	public function obtenerNombre()
	{
		return $this->nombre;
	}
	public function setearNombre($valor)
	{
		$this->nombre=$valor;
	}
	public function getVivo()
	{
		self::$vivo;
	}
	
	//SET y GET estandar
	public function getTipo()
	{
		return $this->tipo;
	}
	
	public function setTipo($value)
	{
		$this->tipo=$value;
	}
	
	//Contructor
	
	function __construct($nombre,$tipo,$edad,$raza)
	{
		echo "Creando una clase...";
		$this->nombre=$nombre;
		$this->tipo=$tipo;
		$this->edad=$edad;
		$this->raza=$raza;
	}
	
	//Destructor
	
	function __destruct()
	{
		echo "Destruyendo clase...";
	}
	
	
	
}

//Instancia de la clase Animal  Llama al constructor....
$animal=new Animal("Coco","Gato",1,"Siames");
//Setear un valor a un atributo
$animal->nombre="Coco";
//Accediendo a atributo publico
echo $animal->nombre;
//Accediendo a atributo protected (Error)
//echo $animal->tipo;
//Accediendo a atributo private (Error)
//echo $animal->edad;
echo $animal->obtenerEdad();
//Acceder a atributo static
echo $animal::$vivo;
//Acceder a un atributo static desde la clase
echo Animal::$vivo;
//Cambio valor de atributo static
$animal::$vivo="NO";
//Acceder a nombre desde metodo
echo $animal->obtenerNombre();

//Instanca de otro Animal  Llama al constructor.....
$animal2=new Animal("Manchas","Perro",3,"Dálmata");
//Accedo al atributo nombre
//echo $animal2->nombre;
//Accedo a raza
echo $animal2->raza;
//Accedo a atributo static
echo $animal2::$vivo;
//Seteo el nombre
$animal2->nombre="Manchas";
echo $animal2->obtenerNombre();
$animal2->setearNombre("Manchas 2");
echo $animal2->obtenerNombre();
$animal2->agregar();
unset($animal2);
$animal3=new Animal("Nombre","Perro",4,"Dálmata");
echo $animal3->obtenerNombre();



?>
</body>
</html>

