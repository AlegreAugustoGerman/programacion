<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carnice.css">
    <title>Vinos</title>
</head>
<body>
<img class="form__fondo" src="imagenes/vinos.jpg"  >
<?php 
include '../Vista/menu.php'; 
include 'carritoAnimado.html';
if(isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="1"){?>
<h3 class="carniceria__titulo" >Bebidas</h3>
<?php 
/*include 'Funciones.php';*/
$MostrarLista="SELECT *   FROM mercaderias WHERE `Areas_numAreas` = 5";
 
if($resultado=$con->query($MostrarLista)) {  
    for ($i=0;$fila = mysqli_fetch_assoc($resultado); $i++) { 

        $idProd="SELECT * FROM `productos` WHERE numProd=$fila[Productos_numProd]";
        if($id=$con->query($idProd)) {  
            if ($fil=mysqli_fetch_assoc($id))   {

                $medicion="SELECT * FROM `mediciones` WHERE numMediciones=$fila[Mediciones_numMediciones]";
                if($medir=$con->query($medicion)) {  
                    if ($fi=mysqli_fetch_assoc($medir))   { 

                        $aditiv="SELECT * FROM `aditivos` WHERE `numAditivos` =$fila[Aditivos_numAditivos]";
                        if($adi=$con->query($aditiv)) {  
                            if ($f= mysqli_fetch_assoc($adi))   {
                                (int)$fila['precio']; 
                                (int)$fila['cantidad'];
      
        $ListaProducto = array( 
            "numMercaderia"=>$fila['numMercaderia'],
            "Productos_numProd"=>$fil['Productos_numProd'],
            "nombreProd"=>$fil['nombre'],

            "Mediciones_numMediciones"=>$fi['Mediciones_numMediciones'],
            "Medidanombre"=>$fi['nombre'],
            "peso" =>$fila['peso'],

            "Precio"=>(int)$fila['precio'],

            "Aditivos_numAditivos"=>$f['Aditivos_numAditivos'],
             "Descripción"=>$f[' nombres'],

            "cantidad" =>(int)$fila['cantidad'],
             
            "caducidad"=>$fila['caducidad'],

            "imagen" =>$fila['imagen'],

            "user"=>$_SESSION["users"],

            "iteración" =>$i);

             $_SESSION['Lista']=$ListaProducto;
            /* echo "cantidad".$fila['cantidad'];
             echo"precio".$fila['precio']; */
        }}}}}
?> 
<?php  
/* echo $fila['cantidad'].$fila['precio'] ; era por el hidden de los inputs que envia en string
agregue*/
?><section class="cont_lista-carniceria">
<ol class="carniceria__lista">
    <?php  foreach ($_SESSION['Lista'] as $key => $value) {  
        echo"<table border=1> <form action=../Modelo/amCarrito.php method=POST>".
            "<input type=hidden name=id value=$fila[numMercaderia]>   ".
            "<input type=hidden name=idProd value=$fil[Productos_numProd]>";
          }   
          echo
          "<input type=hidden name=users value=$_SESSION[users]>",
          "<li class=lista__item-carniceria>Producto:<input type=hidden name=nombreProd value=$fil[nombre]>$fil[nombre]</td><tr>".
          " <li class=lista__item-carniceria>$fi[Mediciones_numMediciones] </td> <tr>".
          " <li class=lista__item-carniceria>Tipo: <input type=hidden name=nombreMedicion value=$fi[nombre]>$fi[nombre]</td><tr>".
          " <li class=lista__item-carniceria>Cantidad:<input type=hidden name=peso value=$fila[peso]>$fila[peso]</td><tr>".
          " <li class=lista__item-carniceria>Precio: <input type=hidden name=precio value=".$fila['precio'].">$fila[precio]</td><tr>".

          " <li class=lista__item-carniceria>$f[Aditivos_numAditivos]</td><tr>".
          " <li class=lista__item-carniceria>"."Contiene:".$f[' nombres']."</td><tr>".
          " <li class=lista__item-carniceria>Disponible: <input type=hidden name=cantidad value=$fila[cantidad]>$fila[cantidad]</td><tr>".
          " <li class=lista__item-carniceria>Vence:$fila[caducidad]</td><tr>".
       
          " <li class=lista__item-carniceria>".'<img src="'.'imagenes/'.$fila["imagen"].'"width="100" heigth="100">'."</td><tr>".
          " <input type=number name=cantselec></td><tr>".
          " <input type=submit name=agregar value=agregar></form></td>";
          echo " </table><tr> "; 
 
          ?>    </ol>
          </section>
<?php }}} ?>
<?php }else{header("Location:formUserCreat.php");} 

 include "footer.html"; ?>
 <a name="contacto"></a></a>
</body>
</html>