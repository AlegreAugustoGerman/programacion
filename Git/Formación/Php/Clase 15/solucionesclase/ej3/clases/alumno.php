<?php   

include_once 'conexion.php'; 

class Alumno
{

 private $alumnoId;
 private $nombre;
 private $apellido;
 private $dni;
 private $mail;
 
 
 function __construct($alumnoId=NULL,$nombre=NULL,$apellido=NULL,$dni=NULL,$mail=NULL)
	 {
		 //seteo los atributos
		 $this->alumnoId = $alumnoId;
		 $this->nombre = $nombre;
		 $this->apellido = $apellido;
		 $this->dni = $dni;
		 $this->mail = $mail;
		
	 }
	 
	public function agregar()
	{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		$sentencia="INSERT INTO alumnos (alumnoId,nombre,apellido,dni,mail)
		VALUES (NULL,'". $this->nombre."','". $this->apellido."','". $this->dni."','".$this->mail."');";

		if ($conexion->query($sentencia)) {
			header("Location: veralumnos.php");
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
		}
		 
		 public function editar()
		{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		$sentencia="UPDATE alumnos SET nombre = ' $this->nombre', apellido = '$this->apellido', dni = '$this->dni', mail = '$this->mail' WHERE alumnoId = '$this->alumnoId'";
					
		if ($conexion->query($sentencia)) {
			header("Location: veralumnos.php");
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
	}

	public function eliminar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="DELETE FROM alumnos WHERE alumnoId=".$this->alumnoId;
		if ($conexion->query($sentencia)) {
			header("Location: veralumnos.php");
			
		}
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
	
}

public function buscar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM alumnos";
		if($this->nombre!=NULL ||  $this->apellido!=NULL || $this->dni!=NULL || $this->mail!=NULL )
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
		
		if($this->dni!=NULL)
		{
			$sentencia.=" dni LIKE '%$this->dni%' && ";
		}
		
		if($this->mail!=NULL)
		{
			$sentencia.=" mail LIKE '%$this->mail%' && ";
		}
		
		
		$sentencia=substr($sentencia,0,strlen($sentencia)-3);	
		
		}
		
		$sentencia.="  ORDER BY apellido,nombre";	
	
			
		return $conexion->query($sentencia);
			
}

  public function getAlumnos()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM alumnos WHERE alumnoId=".$this->alumnoId;
		$resultado=$conexion->query($sentencia);
		$elemento = mysqli_fetch_object($resultado); 
		$this->nombre=$elemento->nombre;
		$this->apellido=$elemento->apellido;
		$this->dni=$elemento->dni;
		$this->mail=$elemento->mail;
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
	
	public function getDni()
    {
		return $this->dni;
	}
	
	public function getMail()
    {
		return $this->mail;
	}
	
	
		
 

}
