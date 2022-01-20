<?php
include_once 'conexion.php';

if((include 'conexion.php')==true){
    echo "se ha incluido la conexion";}
    else{
        echo "error al incluir la conexion";}

  

		//Ejecutar sentencia
		function alta($numUsuario,$nombre,$apellido,$cargo,$telefono,$conexion){ 
		
		$AltaUsuario="INSERT INTO Usuarios (numUsuarios,nombre,apellido,cargo,telefono)
		 VALUES ('$numUsuario','$nombre','$apellido','$cargo','$telefono')";
		if(!$conexion->query($AltaUsuario))
		{ 
			echo "Error al ejecutar la sentencia".$conexion->errno." :".$conexion->error."error 2";
		}else{echo "Inserción realizada con éxito";}echo "<br>";}



		function baja($numUsuarios,$conexion){
		$BajaUsuario="DELETE FROM usuarios WHERE numUsuarios='$numUsuarios'";
		/*en lugar de borrar uno borro toda la tabla aún pasando id borra toda la tabla
		$BajaUsuario="DELETE FROM usuarios WHERE numUsuarios LIKE '%$numUsuario%'";
		*/
		if ($conexion->query($BajaUsuario)) {
			header("Location: BuscarUsuario.php");
			
		}else{return $BajaUsuario."<br>"."Error al ejecutar la BajaUsuario"
			.$conexion->errno." :".$conexion->error;}}
		echo "<br>";




		function modificar($numUsuario,$nombre,$apellido,$cargo,$telefono,$conexion){
		$ModificacionUsuario="UPDATE usuarios SET  nombre='$nombre',apellido='$apellido',
		cargo='$cargo',telefono='$telefono' WHERE numUsuarios='$numUsuario'";  
		if ($conexion->query($ModificacionUsuario)) {
		header("Location: BuscarUsuario.php");}else{
		return $ModificacionUsuario."<br>"."Error al ejecutar la Modificacion Usuario"
		.$conexion->errno." :".$conexion->error;}
	
	function Listar($conexion){

		//$MostrarLista="SELECT * FROM usuarios";
		$MostrarLista="SELECT numUsuarios COUNT FROM usuarios";
		if ($resultado=$conexion->query($MostrarLista)) {
		 //$v=1;
		// for($i=0;$i<$v;$i++){ 
 echo"<h1>Usuarios<h1><br>".
 "<table border=1px>".
 "<th>Nombre</th>".
 "<th>Apellido</th>".
 "<th>Dni</th>".
 "<th>Tipo</th>".
 "<th>Teléfono</th><tr>";
 
 while ($fila = mysqli_fetch_assoc($resultado)) {
	 
	 echo "<tr>"."<td>".$fila["nombre"]."</td>"
	 ."<td>".$fila["apellido"]."</td>"
	 ."<td>".$fila["numUsuarios"]."</td>"
	 ."<td>".$fila["cargo"]."</td>"
	 ."<td>".$fila["telefono"]."</td>"
	 ."</table>";
 
 }   }   
 
 
 }
 
 //SELECT numUsuarios COUNT FROM usuarios;  ESTE MUESTRA LOS ID
//SELECT COUNT(*) FROM usuarios;   ESTE CUENTA LA CANTIDAD DE ID QUE HAY TOTAL
	}
	
		
		/*no funcionan por parametros solo al recibir de un formulario agregando el parametro directamente
		en la consulta sql lo que se intento por funcion no funciona pero sin la funcion si funciona pero 
		no olvidar que genera vulnerabilidades a tratar al avanzar asi entender porque se recomienda programar
		con pdo
		*/
		/*
		function buscar($numUsuario,$conexion){//funciona en sql y en codigo no hay error pero es inoperable
			
		$BuscarUsuario="SELECT nombre,apellido,telefono,cargo,numUsuarios 
		FROM usuarios WHERE numUsuarios='$numUsuario'";	
		//FROM usuarios WHERE numUsuarios LIKE=".$numUsuario;
		//SELECT nombre,apellido,telefono,cargo,numUsuarios FROM usuarios WHERE numUsuarios LIKE '%1234%';
		if ($conexion->query($BuscarUsuario)) {
			header("Location: BuscarMostrar.php");}else{
			return $BuscarUsuario."<br>"."Error al ejecutar la Buscar Usuario"
			.$conexion->errno." :".$conexion->error;}}
	
		function lista($conexion){
		$MostrarUsuarios="SELECT * FROM Usuarios ORDER BY `Usuarios`.`numUsuarios` ASC ";	
		}*/

?>