

<?php
/*SELECT * FROM empleados INNER JOIN departamentos ON empleados.e_id = departamentos.d_id;*/
include 'menu.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="carnice.css">
    <link rel="stylesheet" href="ventas.css">
    <img src="imagenes/banner.jpg" class="head__banner">
    <img class="form__fondo" src="imagenes/slider/comprando.jpg"  >
 
    <title>Compras</title>
    <h3 class="carniceria__titulo" >Carrito De Compras</h3>

<?php
if(isset($_SESSION['privileges']) && $_SESSION['privileges']==="1"){ 
    $users=$_SESSION["users"];
    $comprasUsuario="SELECT * FROM `carritos` WHERE 
    Usuarios_correo='$users' and Estadotransaccion_numEstadotransaccion=5";

     
    if($Compras=$con->query($comprasUsuario)) {  
        while($FilaCompras= mysqli_fetch_assoc($Compras)){
            $FilaCompras['total'];
            $FilaCompras['FechaCreacion'];
            $FilaCompras['CantU'];

            (int)$FilaCompras['Mercaderias_numMercaderia'];
            (int)$FilaCompras['numCarritos'];
 
            $Mercaderias_numMercaderia=(int)$FilaCompras['Mercaderias_numMercaderia'];
        
            $Mercaderia="SELECT * FROM `mercaderias` WHERE `numMercaderia`=$Mercaderias_numMercaderia";
            if($CarritoMerc=$con->query($Mercaderia)) {  
                while($FilaMercaderia= mysqli_fetch_assoc($CarritoMerc)){
                $FilaMercaderia['Productos_numProd'];
                $FilaMercaderia['precio'];
                $FilaMercaderia['cantidad'];
                $FilaMercaderia['imagen'];
                $FilaMercaderia['caducidad'];
          
?>
 


 
 
    <table border=1px class="carniceria__lista">
    
     
     
 
    
 
 
</head>
 
<body>
<?php   echo " <td class=lista__item-carniceria>Vence:$FilaMercaderia[caducidad]</td><tr>
               <td class=lista__item-carniceria>Fecha de Compra:$FilaCompras[FechaCreacion]</td><tr> 
               <td class=lista__item-carniceria>Cantidad:$FilaCompras[CantU]</td><tr> 
               <td class=lista__item-carniceria>Pagaste:$FilaCompras[total]</td><tr> 
               ".'<td class=lista__item-carniceria><img src="'.'imagenes/'.$FilaMercaderia['imagen'].'"width="10%" >'."</td><tr>";
        ?>

</table>


<?php  
    }}   }}
 } 
include 'footer.html';
?>

</body>
</html>