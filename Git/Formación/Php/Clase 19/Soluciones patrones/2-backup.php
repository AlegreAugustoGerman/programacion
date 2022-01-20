<?php
//Originador
class Datos
{
	private $nombre;
	private $apellido;
	private $edad;
	
	public function setNombre($value)
	{
		
	   $this->nombre=$value;
    }
    
    public function setApellido($value)
	{
		
	   $this->apellido=$value;
    }
    
    public function setEdad($value)
	{
		
	   $this->edad=$value;
    }
    
    public function getNombre()
    {
		return $this->nombre;
	}
	
	  public function getApellido()
    {
		return $this->apellido;
	}
	
	  public function getEdad()
    {
		return $this->edad;
	}
    
    public function guardarEnRecuerdo()
    {
		return new Backup($this);
	}
	
	public function restaurarDesdeBackup($backup)
	{
		$this->nombre=$backup->getNombre();
		$this->apellido=$backup->getApellido();
		$this->edad=$backup->getEdad();
	}
 
}

//Cuidador
class SistemaDeBackup
{
	private $backupsGuardados=array();
	
	public function agregarBackup($backup)
	{
		$this->backupsGuardados[date("d/m/y H:m:s")]=$backup;
	}
	public function getBackup($fecha)
	{
		return $this->backupsGuardados[$fecha];
		        
	}
}

//Recuerdo
class BackUp
{
	private $nombre;
	private $apellido;
	private $edad;
	
	
	function __construct($backup)
	{
		$this->nombre=$backup->getNombre();
		$this->apellido=$backup->getApellido();
		$this->edad=$backup->getEdad();
	}
	
	  public function getNombre()
    {
		return $this->nombre;
	}
	
	  public function getApellido()
    {
		return $this->apellido;
	}
	
	  public function getEdad()
    {
		return $this->edad;
	}
	
	public function getBackupGuardado(){
		return $this;
    }
}
	
	$sistemaBackup=new SistemaDeBackup();
	
	$datos=new Datos();
	$datos->setNombre("Maria");
	$datos->setApellido("Moreno");
	$datos->setEdad(22);
	
	$sistemaBackup->agregarBackup($datos->guardarEnRecuerdo());
	
	$datos=new Datos();
	$datos->setNombre("Pedro");
	$datos->setApellido("Gonzales");
	$datos->setEdad(25);
	
	$sistemaBackup->agregarBackup($datos->guardarEnRecuerdo());
	
	$datos->restaurarDesdeBackup($sistemaBackup->getBackup(date("d/m/y H:m:s")));
	
	echo $datos->getNombre();
	echo "<br>";
	echo $datos->getApellido();
	echo "<br>";
	echo $datos->getEdad();




