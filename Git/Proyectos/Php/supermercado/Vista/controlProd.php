 
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="controlProdAdmin.css">
    <title>Lacteos</title>
</head>

<body>
<?php include 'menuAdmin.php'; ?>
    <h3 class="carniceria__titulo" >Control Productos</h3>

<?php  
if(isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="2"){?>
<?php
/*include 'Funciones.php';*/
$MostrarLista="SELECT *   FROM mercaderias ";
 
$v=0; 
if($resultado=$con->query($MostrarLista)) {  
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $v=0;
        $fila["numMercaderia"];   
     if($v<$fila["numMercaderia"]){ 
    $v=$v+1;
?>

<section class="cont_lista-carniceria">
    <ol class="carniceria__lista">

        <?php $nombres="SELECT * FROM `mydbsupermercado`.`productos` WHERE numProd=$fila[Productos_numProd]";
        if($nom=$con->query($nombres)) {  
            while ($fil = mysqli_fetch_assoc($nom))   {  
                ?>
        <li class="lista__item-carniceria"><?php echo "Producto : "."$fil[nombre]".""; ?></li>
            <?php }   }?>
        
        <?php $medicion="SELECT * FROM `mydbsupermercado`.`mediciones` WHERE numMediciones=$fila[Mediciones_numMediciones]";
                if($medir=$con->query($medicion)) {  
                    while ($fi = mysqli_fetch_assoc($medir))   {  
        ?>
        <li class="lista__item-carniceria"><?php echo"$fi[nombre] : "."$fila[peso]".""; ?></li>
                    <?php }} ?>

        <li class="lista__item-carniceria"><?php echo"Precio $ : "."$fila[precio]".""; ?></li>

        <?php $aditiv="SELECT * FROM `mydbsupermercado`.`aditivos` WHERE `numAditivos` =$fila[Aditivos_numAditivos]";
                        if($adi=$con->query($aditiv)) {  
                            while ($f= mysqli_fetch_assoc($adi))   {  
         ?>
        <li class="lista__item-carniceria"><?php echo "Descripción : ".$f[' nombres'].""; ?></li>
                            <?php }} ?>

        <li class="lista__item-carniceria"><?php echo"Vence : "."$fila[caducidad]".""; ?></li>
        <li class="lista__item-carniceria"><?php echo '<img src="'.'imagenes/'.$fila["imagen"].'" width="100" heigth="100">'?></li>
        <?php   ?>
        <li class="lista__item-carniceria"><?php echo  "<input   type=number placeholder=Cantidad >";?></li>
        <li class="lista__item-carniceria"><a href="" class="carniceria__link-comprar">Comprar</a></li>
         
         
     
    </ol>
</section>
    
<?php }}} ?>
<?php }else{header("Location:formUserCreat.php");} ?>
</body>
</html>