<?php   

include_once 'conexion.php'; 

class Mesa
{

 private $rendicionId;
 private $materiaId;
 private $fecha;
 
 
 function __construct($rendicionId=NULL,$materiaId=NULL,$fecha=NULL)
	 {
		 //seteo los atributos
		 $this->rendicionId = $rendicionId;
		 $this->materiaId = $materiaId;
		 $this->fecha = $fecha;
		
	 }
	 
	public function agregar()
	{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		$sentencia="INSERT INTO rendiciones (rendicionId,materiaId,fecha)
		VALUES (NULL,". $this->materiaId.",'". $this->fecha."');";

		if ($conexion->query($sentencia)) {
			header("Location: vermesas.php");
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
		}
		 
		 public function editar()
		{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		$sentencia="UPDATE rendiciones SET materiaId = $this->materiaId, fecha =$this->fecha WHERE rendicionId =$this->rendicionId";
		if ($conexion->query($sentencia)) {
			header("Location: vermesas.php");
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
	}

	public function eliminar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="DELETE FROM rendiciones WHERE rendicionId=".$this->rendicionId;
		if ($conexion->query($sentencia)) {
			header("Location: vermesas.php");
			
		}
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
	
}

public function buscar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT rendiciones.*,materias.nombre AS materia FROM rendiciones LEFT JOIN materias ON materias.materiaId=rendiciones.materiaId ";
		if($this->materiaId!=NULL ||  $this->fecha!=NULL )
		{
			$sentencia.=" WHERE ";
		
		
		if($this->materiaId!=NULL)
		{
			$sentencia.=" rendiciones.materiaId=$this->materiaId &&";
		}
		
		if($this->fecha!=NULL)
		{
			$sentencia.=" fecha=$this->fecha  && ";
		}
		
		$sentencia=substr($sentencia,0,strlen($sentencia)-3);	
		
		}
		
		$sentencia.="  ORDER BY fecha";	
		return $conexion->query($sentencia);
			
}

  public function getMesa()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM rendiciones WHERE rendicionId=".$this->rendicionId;
		$resultado=$conexion->query($sentencia);
		$elemento = mysqli_fetch_object($resultado); 
		$this->materiaId=$elemento->materiaId;
		$this->fecha=$elemento->fecha;
		return $this;
			
    }
    
    public function getMateriaId()
    {
		return $this->materiaId;
	}
	
	public function getFecha()
    {
		return $this->fecha;
	}
	
		
 

}
