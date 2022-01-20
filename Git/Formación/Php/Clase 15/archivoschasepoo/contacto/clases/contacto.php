<?php   

include_once('conexion.php');

class Contacto
{

 private $personaId;
 private $nombre;
 private $apellido;
 private $direccion;
 private $telefono;
 private $sexo;
 
 function __construct($personaId=NULL,$nombre=NULL,$apellido=NULL,$telefono=NULL,$direccion=NULL,$sexo=NULL)
	 {
		 //seteo los atributos
		 $this->personaId = $personaId;
		 $this->nombre = $nombre;
		 $this->apellido = $apellido;
		 $this->telefono = $telefono;
		 $this->direccion = $direccion;
		 $this->sexo = $sexo;
	
	
	 }
	 
	public function agregar()
	{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		$sentencia="INSERT INTO contactos (personaId,nombre,apellido,direccion,telefono,sexo)
		VALUES (NULL,'". $this->nombre."','". $this->apellido."','". $this->telefono."','".$this->direccion."','". $this->sexo."');";

		if ($conexion->query($sentencia)) {
			header("Location: ver.php");
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
		}
		 
		 public function editar()
		{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		$sentencia="UPDATE contactos SET nombre = ' $this->nombre', apellido = '$this->apellido', telefono = '$this->telefono', direccion = '$this->direccion', sexo = '$this->sexo' WHERE personaId = '$this->personaId'";
					
		if ($conexion->query($sentencia)) {
			header("Location: ver.php");
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
	}

	public function eliminar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="DELETE FROM contactos WHERE personaId=".$this->personaId;
		if ($conexion->query($sentencia)) {
			header("Location: ver.php");
			
		}
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
	
}

public function buscar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM contactos";
		if($this->nombre!=NULL ||  $this->apellido!=NULL || $this->telefono!=NULL || $this->direccion!=NULL ||$this->sexo!=NULL )
		{
			$sentencia.=" WHERE ";
		
		
		if($this->nombre!=NULL)
		{
			$sentencia.=" nombre LIKE '%$this->nombre%' && ";
		}
		
		if($this->apellido!=NULL)
		{
			$sentencia.=" apellido LIKE '%$this->apellido%' && ";
		}
		
		if($this->telefono!=NULL)
		{
			$sentencia.=" telefono LIKE '%$this->telefono%' && ";
		}
		
		if($this->direccion!=NULL)
		{
			$sentencia.=" direccion LIKE '%$this->direccion%' && ";
		}
		
		if($this->sexo!=NULL)
		{
			$sentencia.=" sexo LIKE '%$this->sexo%' && ";
		}
		
		$sentencia=substr($sentencia,0,strlen($sentencia)-3);	
		
		}
		
		$sentencia.="  ORDER BY apellido,nombre";	
	
			
		return $conexion->query($sentencia);
			
}

  public function getContacto()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM contactos WHERE personaId=".$this->personaId;
		$resultado=$conexion->query($sentencia);
		$elemento = mysqli_fetch_object($resultado); 
		$this->nombre=$elemento->nombre;
		$this->apellido=$elemento->apellido;
		$this->telefono=$elemento->telefono;
		$this->direccion=$elemento->direccion;
		$this->sexo=$elemento->sexo;
		return $this;
			
    }
    
    public function getNombre()
    {
		return $this->nombre;
	}
	
	public function getApellido()
    {
		return $this->apellido;
	}
	
	public function getTelefono()
    {
		return $this->telefono;
	}
	
	public function getDireccion()
    {
		return $this->direccion;
	}
	
	public function getSexo()
    {
		return $this->sexo;
	}
		
 

}
?>
