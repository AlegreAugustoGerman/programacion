<?php
 
 include '../config.php';
 include BASE_DIR. '/Controlador/Funciones.php';
 
  
 
if ($_POST){

    $correo=$_POST["user"]; 
    $passw=$_POST["passw"];
  
   $passw_cifrado=password_hash($passw,PASSWORD_DEFAULT);
   
    if(isset($correo)&&isset($passw)){
    Ingresar($correo,$passw,$passw_cifrado,$con);
    echo "envio correcto";
  /*Aunque inicio la funcion mas arriba no me retorna debidamente
  el valor de sesion por lo que lo intentare debajo de donde tengo declarada
  la funcion como con la conexión
    $Privi=Ingresar($correo,$passw,$passw_cifrado,$con);  */
     
    }else{echo "envio incorrecto";}
  } 


?>