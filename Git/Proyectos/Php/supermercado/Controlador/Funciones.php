<?php
error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(E_ALL);
 function conectar(){ 
 $host="localhost";
 $user="root"; 
 $pass="";
 $mydb="mydbsupermercadoprueba"; 
 
 $conexion=mysqli_connect($host,$user,$pass,$mydb);
 return $conexion;
 }
 
$con=conectar();


function Alta($dni,$nombre,$apellido,
$edad,$fechnac,$correo,$passw_cifrado,$cargo,
$nacionalidad,$con){
      
$Usuario="INSERT INTO usuarios(numUsuarios,dni,nombre,apellido,edad,
fechnac,correo,contrasena,Cargos_numCargos,Paises_numPaises)
VALUES (NULL,'$dni','$nombre','$apellido','$edad','$fechnac',
'$correo','$passw_cifrado','$cargo','$nacionalidad')";
if(!$con->query($Usuario)){
   echo"Usuario o Contraseña en uso";  
}else{
   header("Location:../Vista/index.php");
   echo "Gracias por Registrarse <br>";}  }
 
 

function Ingresar($correo,$passw,$passw_cifrado,$con){
   session_start();
   $Login="SELECT Cargos_numCargos,correo,contrasena FROM usuarios WHERE correo='$correo'";
   $resultado=mysqli_query($con,$Login);
   $registro=mysqli_fetch_assoc($resultado);
   if (password_verify($passw,$registro['contrasena'])){
      echo"verificado<br><br>";
      echo"login correcto<br><br>";

      if($registro["Cargos_numCargos"]==="2")
      {header("Location:../Vista/gestionAdmin.php");}else{echo"inesperado".$con->errno." :".$con->error;}

      if($registro['Cargos_numCargos']==="1")
      {header("Location:../Vista/index.php");}
 
     
     $_SESSION["users"]=$registro["correo"];
     $_SESSION["privileges"]=$registro["Cargos_numCargos"];
     return $_SESSION["users"];
     return $_SESSION["privileges"];
     
}

else{
/*echo"usuario o contraseña incrorrecto";*/
/*header("burro.php");*/
/*echo"no esta registrado".$con->errno." :".$con->error;*/}  }
   

 /*inicializo para poder retornar los valores de sesion pero no retorna ningun valor del  array*/
 /*$correo=$datos[0];
 $passw=$datos[1];
 $passw_cifrado=$datos[2];
 $con=$datos[3];*/

 /*en el navegador me dice indefinido pero deberia retornar el valor
 entonces inicializo nuevos para quitar el error de momento
 */

 $correo=NULL;
 $passw=NULL;
 $passw_cifrado=NULL;
 $con=$con;
 /*inicializando unicamente necesito que me retorne el valor del cargo
 pero da error entonces inicializo nuevamente pero hay error  en password_verify  
 aún cuando no le doy los valores redeclarados en null  */
 Ingresar($correo,$passw,$passw_cifrado,$con);
 

function Cerrar(){
      session_unset();
      session_destroy();
      header("Location:../Vista/formUserCreat.php");
      }


function Baja($numUsuarios,$con){
   $idUser=(int)$numUsuarios;
   $BajaUsuario="DELETE FROM usuarios WHERE numUsuarios='$idUser'";
   if ($con->query($BajaUsuario)) {
      header("Location:../Vista/gestionAdmin.php");
      echo"$numUsuarios";
    
   }else{return $BajaUsuario."<br>"."Error al ejecutar la BajaUsuario"
      .$con->errno." :".$con->error; echo "<br>";}}
 

function modificarUsuario($numUsuarios,$nombre,$apellido,$edad,$cargo,$con){
         $idUser=(int)$numUsuarios;
         $edadUser=(int)$edad;
         $cargoUser=(int)$cargo;
         $ModificacionUsuario="UPDATE usuarios SET  nombre='$nombre', apellido='$apellido',
         edad='$edadUser', Cargos_numCargos='$cargoUser' WHERE numUsuarios='$idUser'"; 

         if ($con->query($ModificacionUsuario)) {
          echo  "<br> nombre : ".$nombre."<br> apellido : ".$apellido.
          "<br> user : ".       
          $idUser.  "<br> edad : ".
          $edadUser.  "<br> cargo : ".
          $cargoUser.  "<br>  ".
          "<br> consulta : ".$ModificacionUsuario;}else{
         return $ModificacionUsuario."<br>"."Error al ejecutar la Modificacion Usuario"
         .$con->errno." :".$con->error;} }
    
 

/*PRODUCTOS PRODUCTOS PRODUCTOS PRODUCTOS*/ 

function AltaP($nombre,$aditivos,$peso,$mediciones,$precio,
$caducidad,$areas,$imagen,$cantidad,$proveedores,$con){

   if(isset($imagen)&& $imagen != ""){
      $tipo=$_FILES['img']['type'];
      $temp=$_FILES['img']['tmp_name'];

      if( !((strpos($tipo,'gif') || strpos($tipo,'png') || strpos($tipo,'jpg') || strpos($tipo,'webp')))){
          echo"formato valido ";
 
   $AgregarProducto="INSERT INTO mercaderias(numMercaderia,Productos_numProd,Aditivos_numAditivos,peso,Mediciones_numMediciones,
   precio,caducidad,Areas_numAreas,imagen,cantidad,Proveedores_numProveedores)
   VALUES(NULL,'$nombre','$aditivos','$peso','$mediciones','$precio','$caducidad','$areas',
   '$imagen','$cantidad','$proveedores')"; 

            move_uploaded_file($temp,'imagenes/'.$imagen);
            echo"COORECTO";

      if($con->query($AgregarProducto)){
         echo"Producto Agregado";
         
      }else{echo"El Producto no se cargo correctamente".
         $con->errno." :".$con->error;}

      }else{echo"formato valido";}

   }else{echo"no es una imagen";}
   header("Location:../Vista/formProdCreat.php");
}
/**  VENTAS FUNCIONES  **/
function AgregarCarrito(){}
function CrearCarrito($correo,$numMerc,$cantselec,$monto,$fecha,$estado,$con){
   $crearCarrito="INSERT INTO `carritos` (`numCarritos`, `Usuarios_correo`,
              `Mercaderias_numMercaderia`, `CantU`, `total`,`FechaCreacion`,
              `Estadotransaccion_numEstadotransaccion`) VALUES 
            (NULL,'$correo','$numMerc','$cantselec','$monto','$fecha','$estado')";
   header("Location:../Vista/pruebacarrito.php");
   echo"correcto";

}
function AltaCarrito(){}

function CacularPrecioProductos(){}
function AltaVenta(){}


 

?>