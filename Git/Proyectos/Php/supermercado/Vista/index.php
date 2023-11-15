<?php

include '../config.php';
include BASE_DIR. '/Controlador/Funciones.php';
 
 if (isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="2"){header("Location:gestionAdmin.php");}
 if (isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="1"){
?>
<!DOCTYPE html> 
<html lang="en" lang="es-ar"> 
<head>
<meta charset="UTF-8">
<meta name="charset" content="iso-8859-1">
<meta name="descriptiom" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="index.css">
<title>menu</title>
</head>
<body>

<header class="head">
     
    <nav class="nav">
        <img src="imagenes/banner.jpg" class="head__banner">
        <ol class="menu-list">
            <li class="menu__item"> <h1 class="link__titulo">Supermarket</h1> 
            </li>
          <!--<img src="/-1-FrontEnd/imagenes/Super/shopping-cart-309592_1280.png" 
            class="link__icon">-->
        </ol>
        <ol class="menu-list">
            <li class="menu__item --texto-inclinado"><a href="index.php" class="item__link">Inicio</a></li>
            <li class="menu__item --texto-inclinado"><a href="ProdCategoria.php" class="item__link">Categoria</a></li>
            <li class="menu__item --texto-inclinado"><a href="#contacto" class="item__link">Contacto</a></li>
             
        </ol>
        <ol class="menu-list">
        <?php  if (isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="1"){}else{   ?>
            <li class="menu__item --texto-inclinado"><a href="formUserCreat.php" class="item__link">Crear</a></li>
        <?php } ?> 

            <li class="menu__item --texto-inclinado"><a href="detallecarrito.php" class="item__link">Carrito</a></li>

          <?php if (isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="1"){?>   
            <li class="menu__item --texto-inclinado"> 
<?php echo"<form method=POST action=../Modelo/cerrarsesion.php>"."<input type=submit name=cerrarsesion  value=Cerrar Class=--boton menu__item --texto-inclinado >"."</form>"?></li>
           <?php  }  ?>  

        </ol>
    </nav>
    <img src="imagenes/shopping-cart-309592_1280.png" 
    class="link__icon">
</header>
<?php include 'carritoAnimado.html' ?>
<section>
 
<?php include 'slider.html' ?>
</section>
 
<?php include 'ubicacion.html' ?>   
<?php include 'footer.html' ?>
<a name="contacto"></a>



</body>
 
<?php 
 }else{header("Location:formUserCreat.php");}
?>
</html>