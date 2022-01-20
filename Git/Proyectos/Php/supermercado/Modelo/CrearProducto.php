<?php
 include '../config.php';
 include BASE_DIR. '/Controlador/Funciones.php';
  
  
if (isset($_POST['save'])){
$nombre=$_POST["nombre"];
$aditivos=$_POST["aditivos"];
$peso=$_POST["peso"];
$mediciones=$_POST["mediciones"];
$precio=$_POST["precio"];
$caducidad=$_POST["caducidad"];
$areas=$_POST["areas"];
$imagen=$_FILES['img']['name']; 
$cantidad=$_POST["cantidad"];
$proveedores=$_POST["proveedores"];


if(isset($nombre)&& isset($aditivos) && isset($peso)&& 
isset($mediciones)&& isset($precio)&& isset($caducidad)&&
isset($areas)&& isset($imagen)&&
isset($cantidad)&& isset($proveedores)&& isset($con) ){   
       
    
AltaP($nombre,$aditivos,$peso,$mediciones,$precio,
$caducidad,$areas,$imagen,$cantidad,$proveedores,$con);

}else{echo"no se enviaron los datos a la funcion";}}


?>