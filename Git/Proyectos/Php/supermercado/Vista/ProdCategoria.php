<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ProdCategoria.css">
    <title>Categorias</title>
</head>
<body> 
    
    <?php include 'menu.php';
          include 'carritoAnimado.html';
    if(isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="1"){ 
    ?>
    <img class="form__fondo" src="imagenes/loquenecesitas.jpg">     
    <section class="seccion-ProdCategorias">
        <h2 class="ProdCategorias__titulo">Categorias</h2>
        <ol class="ProdCategorias__lista">
            <li class="lista__elemento-categorias">
                <a href="carniceria.php" class="elemento__link-categorias">
                    <img src="imagenes/carniceria.jpg"  class="link__imagen-categorias">
                </a>
                 
                <a href="panaderia.php" class="elemento__link-categorias">
                    <img src="imagenes/panaderia.jpg"  class="link__imagen-categorias">
                </a>
                
                <a href="verduleria.php" class="elemento__link-categorias">
                    <img src="imagenes/Verduleria.jpg"  class="link__imagen-categorias">
                </a>
                
                <a href="vinos.php" class="elemento__link-categorias">
                    <img src="imagenes/vinos.jpg"  class="link__imagen-categorias">
                </a>
                
                <a href="lacteos.php" class="elemento__link-categorias">
                    <img src="imagenes/lacteos.jpg"  class="link__imagen-categorias">
                </a>
                
                <a href="" class="elemento__link-categorias">
                    <img src="imagenes/loquenecesitas.jpg"  class="link__imagen-categorias">
                </a>
                
            </li>
        </ol>
    </section>
    <?php include 'footer.html'?>
    <a name="contacto"></a>
</body>
<?php }elseif(isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="2"){
    header("Location:gestionAdmin.php");}else{header("Location:index.php");} ?>
</html>