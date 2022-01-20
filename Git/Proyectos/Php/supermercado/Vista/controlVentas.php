<?php
include 'menuAdmin.php';
if(isset($_SESSION['privileges']) && $_SESSION['privileges']==="2"){ 


    $ventasRealizadas="SELECT * FROM `ventas` ";
    if($Ventas=$con->query($ventasRealizadas)) {  
        if($FilaVentas= mysqli_fetch_assoc($Ventas)){
            $FilaVentas['numVentas'];
            $FilaVentas['total'];
            $FilaVentas['FechaVenta'];
            $FilaVentas['Carritos_numCarritos'];
            $FilaVentas['Estadotransaccion_numEstadotransaccion'];
        
        $VentasLista=array("numVentas"=>$FilaVentas['numVentas'],
        "total"=>$FilaVentas['total'],"FechaVenta"=>$FilaVentas['FechaVenta'],"numCarritos"=>$FilaVentas['Carritos_numCarritos'],"numEstadotransaccion"=>$FilaVentas['Estadotransaccion_numEstadotransaccion']);
    $_SESSION['Ventas']=$VentasLista;    
    }}
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="carnice.css">
    <link rel="stylesheet" href="ventas.css">
    <img src="imagenes/banner.jpg" class="head__banner">
    <title>ControlVentas</title>
    <img class="form__fondo" src="imagenes/slider/comprando.jpg"  >
 
    <h1 class="carniceria__titulo">Control Ventas</h1>
    <table class="carniceria__lista">
    
    <?php
    foreach ($_SESSION['Ventas'] as $key => $value) {?>
 
    
 
 
</head>
 
<body>
<?php   echo "  
        <td class=lista__item-carniceria>$key</td>
        <td class=lista__item-carniceria>$value</td><tr>
         
        "; } ?>
</body>
</table>
</html>

<?php  } ?>