<?php   

include_once 'conexion.php'; 

class Rendicion
{

 private $rendiciones_alumnosId;
 private $rendicionId;
 private $alumnoId;
 private $nota;
 
 
 function __construct($rendiciones_alumnosId=NULL,$rendicionId=NULL,$alumnoId=NULL,$nota=NULL)
	 {
		 //seteo los atributos
		 $this->rendiciones_alumnosId = $rendiciones_alumnosId;
		 $this->rendicionId = $rendicionId;
		 $this->alumnoId=$alumnoId;
		 $this->nota = $nota;
		
	 }
	 
	public function agregar()
	{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		$sentencia="INSERT INTO rendiciones_alumnos (rendiciones_alumnosId,rendicionId,alumnoId,nota)
		VALUES (NULL,". $this->rendicionId.",". $this->alumnoId.",". $this->nota.");";

		if ($conexion->query($sentencia)) {
			header("Location: verrendiciones.php");
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
		}
		 
		 public function editar()
		{
		
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();

		$sentencia="UPDATE rendiciones_alumnos SET rendicionId = $this->rendicionId, alumnoId =$this->alumnoId, nota= $this->nota WHERE rendiciones_alumnosId =$this->rendiciones_alumnosId";
		if ($conexion->query($sentencia)) {
			header("Location: verrendiciones.php");
		}else
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
	}

	public function eliminar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="DELETE FROM rendiciones_alumnos WHERE rendiciones_alumnosId=".$this->rendiciones_alumnosId;
		echo $sentencia;
		if ($conexion->query($sentencia)) {
			header("Location: verrendiciones.php");
			
		}
		{
			return $sentencia."<br>"."Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error;
		}
		
	
}

public function buscar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT rendiciones_alumnos.*,CONCAT(alumnos.nombre,' ',alumnos.apellido) AS alumno, rendiciones.fecha,materias.nombre AS materia FROM rendiciones_alumnos 
		INNER JOIN rendiciones ON rendiciones.rendicionId=rendiciones_alumnos.rendicionId
		INNER JOIN alumnos ON alumnos.alumnoId=rendiciones_alumnos.alumnoId
		INNER JOIN materias ON materias.materiaId=rendiciones.materiaId ";
		
		if($this->rendicionId!=NULL ||  $this->alumnoId!=NULL ||  $this->nota!=NULL)
		{
			$sentencia.=" WHERE ";
		
		
		if($this->rendicionId!=NULL)
		{
			$sentencia.=" rendiciones_alumnos.rendicionId=$this->rendicionId &&";
		}
		
		if($this->alumnoId!=NULL)
		{
			$sentencia.=" rendiciones_alumnos.alumnoId=$this->alumnoId  && ";
		}
		
		if($this->nota!=NULL)
		{
			$sentencia.=" rendiciones_alumnos.nota=$this->nota  && ";
		}
		
		$sentencia=substr($sentencia,0,strlen($sentencia)-3);	
		
		}
		
		$sentencia.="  ORDER BY fecha";	
		return $conexion->query($sentencia);
			
}

  public function getRendicion()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM rendiciones_alumnos WHERE rendiciones_alumnosId=".$this->rendiciones_alumnosId;
		$resultado=$conexion->query($sentencia);
		$elemento = mysqli_fetch_object($resultado); 
		$this->rendicionId=$elemento->rendicionId;
		$this->alumnoId=$elemento->alumnoId;
		$this->nota=$elemento->nota;
		return $this;
			
    }
    
    public function getRendicionId()
    {
		return $this->rendicionId;
	}
	
	public function getAlumnoId()
    {
		return $this->alumnoId;
	}
	
	public function getNota()
    {
		return $this->nota;
	}
	
	
		
 

}
