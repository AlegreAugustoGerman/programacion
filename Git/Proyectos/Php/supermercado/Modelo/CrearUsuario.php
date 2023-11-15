<?php
 include '../config.php';
 include BASE_DIR. '/Controlador/Funciones.php';
 
 
/*si se envian datos por formulario UserCreat Create*/

if ($_POST){
    /*obtengo datos y almaceno en variable*/
    $dni=$_POST["dni"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $edad=$_POST["edad"];
    $fechnac=$_POST["fechnac"];
    $correo=$_POST["user"]; 
    $passw=$_POST["passw"];
    $cargo=$_POST["cargo"];
    $nacionalidad=$_POST["nacionalidad"];

    $passw_cifrado=password_hash($passw,PASSWORD_DEFAULT);
 

  if(isset($dni)&&
      isset($nombre)&&
      isset($apellido)&&
      isset($edad)&&
      isset($fechnac)&&
      isset($correo)&&
      isset($passw)&&
      isset($cargo)&&
      isset($nacionalidad) ){
        
        Alta($dni,
        $nombre,$apellido,$edad,$fechnac,
        $correo,$passw_cifrado,$cargo,
        $nacionalidad,$con);}
  else{echo"no a introducido todos los
  datos solicitados";}
 
}

?>