<?php
include '../Vista/menu.php'; 
if(isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="1"){ 

if(isset($_POST['agregar'])){
     
    $id=array($_POST['id']);
    $idProd=array($_POST['idProd']);
    $cantselec=(int)$_POST['cantselec']; 
    $users=$_POST['users'];

    $precioUnidad=(int)$_POST['precio']; 
    $cantidad=(int)$_POST['cantidad'];
    $nombreProd=$_POST['nombreProd'];
    $time=time();
    $fecha=date("Y-m-d",$time);
    $estado=1;


    $correo=$users;
    $numMerc=(int)$id[0];
    $monto=$precioUnidad*$cantselec;
 
   echo "llega por post ".$numMerc." cant ".$cantselec." precio es :".$precioUnidad." su cantidad actual : ".$cantidad." el producto es : ".$nombreProd;
 
    $MostrarCarrito="SELECT Usuarios_correo,numCarritos,total,CantU,Mercaderias_numMercaderia,
    FechaCreacion,Estadotransaccion_numEstadotransaccion FROM `carritos` WHERE Usuarios_correo='$users' and Mercaderias_numMercaderia=$numMerc";
    if($Carrito=$con->query($MostrarCarrito)) {  
       if ($fc= mysqli_fetch_assoc($Carrito)){
                $fc['numCarritos'];
                $fc['Usuarios_correo'];
                (int)$fc['Mercaderias_numMercaderia'];
                (int)$fc['CantU'];
                (int)$fc['total'];
                $fc['FechaCreacion'];

                $numCarritos=(int)$fc['numCarritos'];
                $Mercaderias_numMercaderia=(int)$fc['Mercaderias_numMercaderia'];
                $Usuarios_correo=$fc['Usuarios_correo'];
                $CantU=(int)$fc['CantU'];
                $total=(int)$fc['total'];
                $FechaCreacion=$fc['FechaCreacion'];

                echo" contiene el select carrito : ";
                var_dump ($numCarritos);var_dump ($CantU);var_dump ($total);
                echo"<br>"; 

        if(empty($numCarritos) && empty($Usuarios_correo) &&
           empty($CantU) && empty($total) && empty($FechaCreacion)){

            $crearCarrito="INSERT INTO `carritos` (`numCarritos`, `Usuarios_correo`,
            `Mercaderias_numMercaderia`, `CantU`, `total`,`FechaCreacion`,
                `Estadotransaccion_numEstadotransaccion`) VALUES 
              (NULL,'$correo','$numMerc','$cantselec','$monto','$fecha','$estado')";
            if($crear=$con->query($crearCarrito)){echo"creado";}
            else{echo "no creado  errores: ".$con->errno." :".$con->error;}
            header("Location:../Vista/detallecarrito.php");
            }else{
    
                     if($Mercaderias_numMercaderia===$numMerc){
                        $CarritoCantU=$CantU+$cantselec;
                        $Carritototal=$total+$monto;
                        echo "si es igual imprimir valores operaciones cantidad unidades : ";
                        var_dump($CarritoCantU);
                        echo"valor final";
                        var_dump($Carritototal);
                        $actualizarCarrito="UPDATE `carritos` SET `CantU`='$CarritoCantU',`total`='$Carritototal',`Estadotransaccion_numEstadotransaccion`=1 WHERE `numCarritos`=$numCarritos"; 
                        if($actualizar=$con->query($actualizarCarrito)) { echo"actualizado";}else{echo "no actualizdo errores: ".$con->errno." :".$con->error;}
                           echo "<br><br>"." lo demas que llega es : ".$correo
                           ."<br>".$numMerc."<br>".$cantselec."<br>".$monto."<br>".$fecha."<br>"."estado es : ".
                           $estado;

                           header("Location:../Vista/detallecarrito.php");
                    }else{ 


                       $agregarCarrito="INSERT INTO `carritos` (`numCarritos`, `Usuarios_correo`,
                    `Mercaderias_numMercaderia`, `CantU`, `total`,`FechaCreacion`,
                        `Estadotransaccion_numEstadotransaccion`) VALUES 
                      (NULL,'$correo','$numMerc','$cantselec','$monto','$fecha','$estado')";
                      if($agregar=$con->query($agregarCarrito)){echo"agregado";}
                      else{echo "no agregado  errores: ".$con->errno." :".$con->error;}
                      header("Location:../Vista/detallecarrito.php");
                  
                          }
 
      
                  } 
                                              }else{
                                                $crearCarrito="INSERT INTO `carritos` (`numCarritos`, `Usuarios_correo`,
                                                `Mercaderias_numMercaderia`, `CantU`, `total`,`FechaCreacion`,
                                                    `Estadotransaccion_numEstadotransaccion`) VALUES 
                                                  (NULL,'$correo','$numMerc','$cantselec','$monto','$fecha','$estado')";
                                                if($crear=$con->query($crearCarrito)){echo"creado";}
                                                else{echo "no creado  errores: ".$con->errno." :".$con->error;}
                                                 header("Location:../Vista/detallecarrito.php");}                                 
                                                 }else{
                                                    echo "errores carritos select : ".$con->errno." :".$con->error;}  
                                                     } 
          

   }else{header("Location:formUserCreat.php");}  
?>