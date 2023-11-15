<?php
include '../Vista/menu.php';

if(isset($_POST)){ 
$idCarrito=(int)($_POST['carritoid']);
$idMerc=(int)($_POST['mercaderiaid']);
$users=$_SESSION["users"];

$precioUnidad=(int)$_POST['precio'];
$stockMercaderia=(int)$_POST['stock'];
$totalSeleccion=(int)$_POST['total'];
$Seleccionados=(int)$_POST['cantidad'];

$time=time();
$fecha=date("Y-m-d",$time);
 
$Estadotransacciones=5;
echo "idCarrito";
var_dump($idCarrito);
 
var_dump($idMerc);
echo "<br>precioUnidad";
var_dump($precioUnidad);
echo "<br>stockMercaderia";
var_dump($stockMercaderia);
echo "<br>totalSeleccion";
var_dump($totalSeleccion);
echo "<br>Seleccionados";
var_dump($Seleccionados);

if(isset($_POST['Eliminar'])){
    //actualizar tabla estado desechar
    $ActualizarEstadoSacar="UPDATE `carritos` SET `Estadotransaccion_numEstadotransaccion`=4
    WHERE `numCarritos`=$idCarrito";
            if($ActualizarEstadoDesechar=$con->query($ActualizarEstadoSacar)){echo"ActualizarEstadoDesechar creado";}
            else{echo "ActualizarEstadoDesechar no creado  errores: ".$con->errno." :".$con->error;}
            header("Location:../Vista/detallecarrito.php");
}
if(isset($_POST['Sumar'])){
    $Seleccionados=$Seleccionados+1;
    $totalSeleccion=$totalSeleccion+$precioUnidad;
     
    //actualizar tabla estado agregar
    $ActualizarCantidadSuma="UPDATE `carritos` SET `CantU`='$Seleccionados',`total`='$totalSeleccion',
    `Estadotransaccion_numEstadotransaccion`=1 WHERE `numCarritos`=$idCarrito";
                          if($ActualizarCantidadCarritoSuma=$con->query($ActualizarCantidadSuma)){echo"ActualizarCantidadCarritoSuma creado";}
                          else{echo "ActualizarCantidadCarritoSuma no creado  errores: ".$con->errno." :".$con->error;}
                          header("Location:../Vista/detallecarrito.php");      
}
if(isset($_POST['Restar'])){
    $Seleccionados=$Seleccionados-1;
    $totalSeleccion=$totalSeleccion-$precioUnidad;
    //actualizar tabla estado sacar
    $ActualizarCantidadResta="UPDATE `carritos` SET `CantU`='$Seleccionados',`total`='$totalSeleccion',
    `Estadotransaccion_numEstadotransaccion`=1 WHERE `numCarritos`=$idCarrito";
                      if($ActualizarCantidadCarritoResta=$con->query($ActualizarCantidadResta)){echo"ActualizarCantidadCarritoResta creado";}
                      else{echo "ActualizarCantidadCarritoResta no creado  errores: ".$con->errno." :".$con->error;}
                      header("Location:../Vista/detallecarrito.php");
}
if(isset($_POST['VentaP'])){
     
    $AltaVenta="INSERT INTO `ventas` (`numVentas`, `total`,
    `FechaVenta`, `Carritos_numCarritos`,`Estadotransaccion_numEstadotransaccion`) VALUES 
      (NULL,'$totalSeleccion','$fecha','$idCarrito','$Estadotransacciones')";
                  if($CrearVenta=$con->query($AltaVenta)){echo"AltaVenta creado";

                    $ActualizarEstadoVenta="UPDATE `carritos` SET `Estadotransaccion_numEstadotransaccion`=$Estadotransacciones WHERE `numCarritos`=$idCarrito";   
                    if($ActualizarCarritoVenta=$con->query($ActualizarEstadoVenta)){echo"ActualizarCarritoVenta creado";

                            $stockMercaderia=$stockMercaderia-$Seleccionados;
                            $ActualizarStockMercaderia="UPDATE `mercaderias` SET ,`cantidad`=$stockMercaderia
                            WHERE `numMercaderia`=$idMerc";
                                     if($ActualizarCantidadMercaderia=$con->query($ActualizarStockMercaderia)){echo" ActualizarCantidadMercaderia creado";}else{echo "ActualizarCantidadMercaderia no creado  errores: ".$con->errno." :".$con->error;}
                                            header("Location:../Vista/compras.php");
             }else{echo "<br> ActualizarEstadoVenta no creado  errores: ".$con->errno." :".$con->error;}


    } else{echo "<br> ActualizarCarritoVenta no creado  errores: ".$con->errno." :".$con->error;} 
                 
    }else{echo "<br> AltaVenta no creado  errores: ".$con->errno." :".$con->error;}
        
        
} 
     
 

 



?>