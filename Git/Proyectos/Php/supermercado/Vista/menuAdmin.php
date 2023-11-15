<?php 
include '../config.php';
include BASE_DIR. '/Controlador/Funciones.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menuAdmin.css">
    <title>MenuAdmin</title>
</head>
<body> 
<div class="cont-admin">
    <ul class="admin-menu">
        <li class="menu__item-admin"><a href="gestionAdmin.php" class="item__link-admin">Usuarios</a></li>
        <li class="menu__item-admin"><a href="controlProd.php" class="item__link-admin">Productos</a></li>
        <li class="menu__item-admin"><a href="formProdCreat.php" class="item__link-admin">Agregar</a></li>
        <li class="menu__item-admin"><a href="controlVentas.php" class="item__link-admin">Ventas</a></li>
        <?php if (isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="2"){?>   
            <li class="menu__item-admin --texto-inclinado"> 
<?php echo"<form method=POST action=../Modelo/cerrarsesion.php>"."<input type=submit name=cerrarsesion  value=Cerrar Class=--boton menu__item --texto-inclinado >"."</form>"?></li>
           <?php  }  ?>  
 
    </ul>
</div>
</body>
</html>