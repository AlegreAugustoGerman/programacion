<?php   
include_once('conexion.php');
class Animal
{

 private $animalId;
 private $clienteId;
 private $tipo;
 private $raza;
 private $nombre;
 private $edad;
 
 function __construct($animalId=NULL,$clienteId=NULL,$tipo=NULL,$raza=NULL,$nombre=NULL,$edad=NULL)
	 {
		 //seteo los atributos
		 $this->animalId = $animalId;
		 $this->clienteId = $clienteId;
		 $this->tipo = $tipo;
		 $this->raza = $raza;
		 $this->nombre = $nombre;
		 $this->edad = $edad;
	
	
	 }
	 
	public function agregar()
	{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		$sentencia="INSERT INTO animales (animalId,clienteId,tipo,raza,nombre,edad)
		VALUES (NULL,'". $this->clienteId."','". $this->tipo."','". $this->raza."','".$this->nombre."','". $this->edad."');";

		if ($conexion->query($sentencia)) {
			header("Location: veranimales.php");
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
	}
		 
		 public function editar()
		{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		$sentencia="UPDATE animales SET clienteId = ' $this->clienteId',
		 tipo = '$this->tipo',
		 raza = '$this->raza',
		 nombre = '$this->nombre',
		 edad = '$this->edad'
		 WHERE clienteId = '$this->clienteId'";
					
		if ($conexion->query($sentencia)) {
			header("Location: veranimales.php");
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
	}

	public function eliminar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="DELETE FROM animales WHERE animalId=".$this->animalId;
		if ($conexion->query($sentencia)) {
			header("Location: veranimales.php");
			
		}
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
	
}

public function buscar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT animales.*,CONCAT(clientes.nombre,' ',clientes.apellido) AS cliente FROM animales
		INNER JOIN clientes ON clientes.clienteId=animales.clienteId ";
		if($this->clienteId!=NULL ||  $this->tipo!=NULL || $this->raza!=NULL || $this->nombre!=NULL ||$this->edad!=NULL )
		{
			$sentencia.=" WHERE ";
		
		
		if($this->clienteId!=NULL)
		{
			$sentencia.=" animales.clienteId = $this->clienteId && ";
		}
		
		if($this->tipo!=NULL)
		{
			$sentencia.=" tipo LIKE '%$this->tipo%' && ";
		}
		
		if($this->raza!=NULL)
		{
			$sentencia.=" raza LIKE '%$this->raza%' && ";
		}
		
		if($this->nombre!=NULL)
		{
			$sentencia.=" nombre LIKE '%$this->nombre%' && ";
		}
		
		if($this->edad!=NULL)
		{
			$sentencia.=" edad LIKE '%$this->edad%' && ";
		}
		
		$sentencia=substr($sentencia,0,strlen($sentencia)-3);	
		
		}
		
		$sentencia.="  ORDER BY nombre";	
		
	
		return $conexion->query($sentencia);
			
}

  public function getAnimal()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM animales WHERE animalId=".$this->animalId;
		$resultado=$conexion->query($sentencia);
		$elemento = mysqli_fetch_object($resultado); 
		$this->animalId=$elemento->animalId;
		$this->clienteId=$elemento->clienteId;
		$this->tipo=$elemento->tipo;
		$this->raza=$elemento->raza;
		$this->nombre=$elemento->nombre;
		$this->edad=$elemento->edad;
		return $this;
			
    }
    
    public function getClienteId()
    {
		return $this->clienteId;
	}
	
	public function getTipo()
    {
		return $this->tipo;
	}
	
	public function getRaza()
    {
		return $this->raza;
	}
	
	public function getNombre()
    {
		return $this->nombre;
	}
	
	public function getEdad()
    {
		return $this->edad;
	}
		
 

}
?>
