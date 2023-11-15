<?php   

include_once('conexion.php');

class Cliente
{

 private $clienteId;
 private $nombre;
 private $apellido;
 private $direccion;
 private $telefono;
 
 
 function __construct($clienteId=NULL,$nombre=NULL,$apellido=NULL,$telefono=NULL,$direccion=NULL)
	 {
		 //seteo los atributos
		 $this->clienteId = $clienteId;
		 $this->nombre = $nombre;
		 $this->apellido = $apellido;
		 $this->telefono = $telefono;
		 $this->direccion = $direccion;
		
	
	 }
	 
	public function agregar()
	{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		$sentencia="INSERT INTO clientes (clienteId,nombre,apellido,direccion,telefono)
		VALUES (NULL,'". $this->nombre."','". $this->apellido."','". $this->telefono."','".$this->direccion."');";

		if ($conexion->query($sentencia)) {
			header("Location: verclientes.php");
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
		}
		 
		 public function editar()
		{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		$sentencia="UPDATE clientes SET nombre = ' $this->nombre', apellido = '$this->apellido', telefono = '$this->telefono', direccion = '$this->direccion' WHERE clienteId = '$this->clienteId'";
					
		if ($conexion->query($sentencia)) {
			header("Location: verclientes.php");
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
	}

	public function eliminar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="DELETE FROM clientes WHERE clienteId=".$this->clienteId;
		if ($conexion->query($sentencia)) {
			header("Location: verclientes.php");
			
		}
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
	
}

public function buscar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM clientes";
		if($this->nombre!=NULL ||  $this->apellido!=NULL || $this->telefono!=NULL || $this->direccion!=NULL )
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
		
		$sentencia=substr($sentencia,0,strlen($sentencia)-3);	
		
		}
		
		$sentencia.="  ORDER BY apellido,nombre";	
		
		return $conexion->query($sentencia);
			
}

  public function getCliente()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM clientes WHERE clienteId=".$this->clienteId;
		$resultado=$conexion->query($sentencia);
		$elemento = mysqli_fetch_object($resultado); 
		$this->nombre=$elemento->nombre;
		$this->apellido=$elemento->apellido;
		$this->telefono=$elemento->telefono;
		$this->direccion=$elemento->direccion;
		return $this;
			
    }
    
      public function getClienteId()
    {
		return $this->clienteId;
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
	

		
 

}
?>
