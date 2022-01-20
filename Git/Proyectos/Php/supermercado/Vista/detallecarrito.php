<?php          
      
include 'menu.php';    
include 'carritoAnimado.html'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="carnice.css">
</head>
<body>
<h3 class="carniceria__titulo" >Carrito De Compras</h3>

<?php
 
if(isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="1"){ 
$users=$_SESSION["users"];
 
 

$MostrarCarrito="SELECT Usuarios_correo,numCarritos,total,CantU,Mercaderias_numMercaderia,
FechaCreacion,Estadotransaccion_numEstadotransaccion FROM `carritos` WHERE Usuarios_correo='$users' and Estadotransaccion_numEstadotransaccion=1";
if($Carrito=$con->query($MostrarCarrito)) {  
   for ($i=0;$FilaCarrito= mysqli_fetch_assoc($Carrito);){
            $FilaCarrito['numCarritos'];$FilaCarrito['Usuarios_correo'];(int)$FilaCarrito['Mercaderias_numMercaderia'];
            (int)$FilaCarrito['CantU'];(int)$FilaCarrito['total'];$FilaCarrito['FechaCreacion'];
              
           //para resolver problema array vacio contiene algo refundo en valores  
           $numCarritos=(int)$FilaCarrito['numCarritos'];
           $Usuarios_correo=$FilaCarrito['Usuarios_correo'];
           $Mercaderias_numMercaderia=(int)$FilaCarrito['Mercaderias_numMercaderia'];
           $CantU=(int)$FilaCarrito['CantU'];
           $total=(int)$FilaCarrito['total'];

           $FechaCreacion=$FilaCarrito['FechaCreacion'];


  
        //este precio para restar o sumar +1 -1 
        $Mercaderia="SELECT numMercaderia,Productos_numProd,precio,cantidad,imagen,caducidad FROM `mercaderias` WHERE `numMercaderia`=$Mercaderias_numMercaderia";
        if($CarritoMerc=$con->query($Mercaderia)) {  
            if($FilaMercaderia= mysqli_fetch_assoc($CarritoMerc)){
            $FilaMercaderia['numMercaderia'];$FilaMercaderia['Productos_numProd'];
            $FilaMercaderia['precio'];$FilaMercaderia['cantidad'];$FilaMercaderia['imagen'];
            $FilaMercaderia['caducidad'];

            $IdProd=(int)$FilaMercaderia['Productos_numProd'];
            $PrecioUn=(int)$FilaMercaderia['precio'];
            $CantidadStock=(int)$FilaMercaderia['cantidad'];

        $Producto="SELECT numProd,nombre FROM `productos` WHERE `numProd`=$IdProd";
        if($CarritoProd=$con->query($Producto)) {  
            if($FilaProducto= mysqli_fetch_assoc($CarritoProd)){
                $FilaProducto['numProd'];$FilaProducto['nombre'];

                $ProductoNombre=$FilaProducto['nombre'];

           $CarritoLista=array("numCarritos"=>$numCarritos,"Mercaderias_numMercaderia"=>$Mercaderias_numMercaderia,"CantU"=>$CantU,
           "total"=>$total,"FechaCreacion"=>$FechaCreacion,"ProductoNombre"=>$ProductoNombre,
            "PrecioUn"=>$PrecioUn,"CantidadStock"=>$CantidadStock,);
            $i++;
           $_SESSION['Carrito']=$CarritoLista; 

  
            }}}}?>

 
 
<section class="cont_lista-carniceria">
<ol class="carniceria__lista">
    <?php  foreach ($_SESSION['Carrito'] as $key => $value) {  
        echo"<table border=1> <form action=../Modelo/vbCarrito.php method=POST>".
        "<input type=hidden name=carritoid value=$FilaCarrito[numCarritos]>".
        "<input type=hidden name=mercaderiaid value=$Mercaderias_numMercaderia>";
    
        }
             
            
          echo
          "<input type=hidden name=users value=$_SESSION[users]>",
          "<li class=lista__item-carniceria>Producto:<input type=hidden name=nombreProd value=$FilaProducto[nombre]>$FilaProducto[nombre]</td><tr>".
          " <li class=lista__item-carniceria>Precio Unidad: <input type=hidden name=precio value=".$PrecioUn.">$PrecioUn</td><tr>".
          " <li class=lista__item-carniceria>En Stock: <input type=hidden name=stock value=".$CantidadStock.">$CantidadStock</td><tr>".
          " <li class=lista__item-carniceria>Seleccionados: <input type=hidden name=cantidad value=$CantU>$CantU</td><tr>".
          " <li class=lista__item-carniceria>  <input type=hidden name=total value=$total></td><tr>".
          " <li class=lista__item-carniceria>Vence:$FilaMercaderia[caducidad]</td><tr>".
          " <li class=lista__item-carniceria>Selecciono en Fecha:$FechaCreacion</td><tr>".
          " <li class=lista__item-carniceria>".'<img src="'.'imagenes/'.$FilaMercaderia['imagen'].'"width="100" heigth="100">'."</td><tr>".
          
          " <input type=submit name=Eliminar value=Quitar>
            <input type=submit name=Sumar value=+>
            <input type=submit name=Restar value=->
            <input type=submit name=VentaP value=Comprar>
         <li class=lista__item-carniceria>$FilaProducto[nombre] Total: <input type=hidden name=total value=$total>$total</td><tr>
            </form></td>";
          echo " </table><tr> "; 
          
          
 
          
          ?>
 
            </ol>
          </section>
 

 <?php
      
      
      }
      
  }else{ echo "errores detalle consulta : ".$con->errno." :".$con->error;}
   include "footer.html";?>
  <a name="contacto"></a>
  </body>
  <img class="form__fondo" src="imagenes/slider/comprando.jpg"  >
  </html>
 <?php 
}else{header("Location:formUserCreat.php");}  
?>
           

 
    
 