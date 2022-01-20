<?php   

include_once 'conexion.php'; 

class Materia
{

 private $materiaId;
 private $nombre;
 
public function buscar()
	{
		$nuevaConexion=new Conexion();
		$conexion=$nuevaConexion->getConexion();
		
		$sentencia="SELECT * FROM materias";
		$sentencia.="  ORDER BY nombre";	
		return $conexion->query($sentencia);
			
	}

  

}
