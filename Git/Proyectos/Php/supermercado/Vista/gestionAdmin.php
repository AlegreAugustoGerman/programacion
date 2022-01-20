<?php
include 'menuAdmin.php';
 /*include 'IniciarUsuario.php';*/
 
/*var_dump($_SESSION["privileges"]);*/
/*var_dump($datos);*/
 

if(isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="2"){ 
?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gestionAdmin.css">
 
    <title>Admin</title>
</head>
<body>
 
<h2 class="tabla_titulo">Administrador</h2>

<img class="form__fondo" src="imagenes/loquenecesitas.jpg">


<!--<div class="tabla-usuarios">-->
     
<!--<div class="tabla_header-usuarios">ID </div>
<div class="tabla_header-usuarios">dni </div>
<div class="tabla_header-usuarios">nombre </div>
<div class="tabla_header-usuarios">apellido </div>
<div class="tabla_header-usuarios">edad </div>
<div class="tabla_header-usuarios">fechnac </div>
<div class="tabla_header-usuarios">correo </div>
<div class="tabla_header-usuarios">contraseña </div>
<div class="tabla_header-usuarios">Cargos</div> 
<div class="tabla_header-usuarios">Paises</div>
<div class="tabla_header-usuarios">Opciones</div>-->
<table class="tabla-usuarios"> 
<tr> 
<th size="100%"  class="tabla_header-usuarios" >Id</th>
<th size="1%"  class="tabla_header-usuarios" >dni</th>
<th size="1%"  class="tabla_header-usuarios" >nombre</th>  
<th size="1%"  class="tabla_header-usuarios" >apellido</th>
<th size="1%"  class="tabla_header-usuarios" >edad</th>
<th size="1%"  class="tabla_header-usuarios" >fechnac</th>  
<th size="1%"  class="tabla_header-usuarios" >correo</th> 
<!--<th size="1%"  class="tabla_header-usuarios" >contraseña</th>-->
<th size="1%"  class="tabla_header-usuarios" >Cargo</th>
<th size="1%"  class="tabla_header-usuarios" >Pais</th>
 
<th  colspan=2 class="tabla_header-usuarios" >Opciones</th>
 
</tr> 



<?php
/*include 'Funciones.php';*/
$MostrarLista="SELECT *   FROM usuarios";

$v=0;
if($resultado=$con->query($MostrarLista)) {  
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $v=0;
        $fila["numUsuarios"];   
     if($v<$fila["numUsuarios"]){ 
    $v=$v+1;
        
 
?>
 
      
      
    <!-- <div class="tabla_item-usuarios">  <?php /* echo $fila["numUsuarios"];?></div>
     <div class="tabla_item-usuarios"><?php echo $fila["dni"];?></div>
     <div class="tabla_item-usuarios"><?php echo $fila["nombre"];?></div>
     <div class="tabla_item-usuarios"><?php echo $fila["apellido"];?></div>
     <div class="tabla_item-usuarios"><?php echo $fila["edad"];?></div>
     <div class="tabla_item-usuarios"><?php echo $fila["fechnac"];?></div>
     <div class="tabla_item-usuarios"><?php echo $fila["correo"];?></div>
     <div class="tabla_item-usuarios"><?php echo $fila["Cargos_numCargos"];?></div>   
     <div class="tabla_item-usuarios"><?php echo $fila["Paises_numPaises"]; */ ?></div>  --> 
    <?php echo"<td size=1% class=tabla_item-usuarios>$fila[numUsuarios]" ?> 
    <?php echo"<td size=1% class=tabla_item-usuarios>$fila[dni]" ?> 
    <?php echo"<td><input size=5% class=tabla_item-usuarios type=text   value='$fila[nombre]'>"; ?>
    <?php echo"<td><input size=5% class=tabla_item-usuarios type=text   value='$fila[apellido]'>"; ?>
    <?php echo"<td><input size=5% class=tabla_item-usuarios type=text   value='$fila[edad]'>"; ?>
    <?php echo"<td size=1% class=tabla_item-usuarios>$fila[fechnac]"?> 
    <?php echo"<td size=1% class=tabla_item-usuarios>$fila[correo]" ?> 
    <?php echo"<td><input size=4% class=tabla_item-usuarios type=text   value='$fila[Cargos_numCargos]'>"; ?>
    <?php echo"<td size=1% class=tabla_item-usuarios>$fila[Paises_numPaises]" ?> 
 

    <?php   
        echo"<form action=../Modelo/ModificarUsuario.php METHOD=POST>";
        echo"<input size=0% type=hidden name=num  value='$fila[numUsuarios]'>";
        echo"<input size=0% type=hidden name=nombre value='$fila[nombre]'>";
        echo"<input size=0% type=hidden name=apellido value='$fila[apellido]'>";
        echo"<input size=0% type=hidden name=edad value='$fila[edad]'>";
        echo"<input size=0% type=hidden name=cargo value='$fila[Cargos_numCargos]'>";
        echo "<td ><input class=Option-boton type=submit value=Actualizar>";
        echo"</form>";
    ?>   
     
    
       <?php 
        echo"<form action=../Modelo/BajaUsuario.php METHOD=POST>";
        echo"<input size=0% type=hidden name=EliminarDni value='$fila[numUsuarios]'>";
        echo "<td ><input class=Option-boton type=submit value=Eliminar>";
        echo"</form>";?>  

 
 <tr>
 

     
 
<?php }}}   ?>
</table>
     
</body>
     <?php }elseif($_SESSION["privileges"]==="1"){header("Location:index.php");}
     else{header("Location:formUserCreat.php");}
     ?>
</html>


 