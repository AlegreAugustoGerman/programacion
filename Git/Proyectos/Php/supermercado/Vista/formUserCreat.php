 
<?php

  

if(isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="2"){header("Location:Location:gestionAdmin.php");}
    elseif(isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="1"){header("Location:index.php");}
       else{   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formUserCreat.css">
    <title>Create Account</title>
</head> 
<body>
 
<section class="section-Account">
    <h2 class="Account__title">Create Account</h2>
<form action="../Modelo/CrearUsuario.php" method="POST" class="Account__Create">
 <input type="number" class="Create__item" name="dni"  placeholder="Ingrese Su Dni" required>
 <input type="number" class="Create__item"   name="edad" placeholder="Ingrese Su Edad"required>
 <input type="text" class="Create__item"   name="nombre" placeholder="Ingrese Su Nombre"required>
 <input type="text" class="Create__item"   name="apellido" placeholder="Ingrese Su Apellido"required>
 <input type="date" class="Create__item-select-fechnac"   name="fechnac">
 <select  class="Create__item-select" name="cargo" required>
<option value="2">Empleado</option>
<option value="1">Cliente</option> 
</select> 
<select name="nacionalidad" class="Create__item-select" required>
<option value="1">Argentina</option>
<option value="2">Paraguay</option>
<option value="3">Brasil</option>
<option value="4">EEUU</option>
<option value="5">Mexico</option>
<option value="6">Inglaterra</option>
<option value="7">Alemania</option>
<option value="8">Rusia</option>
<option value="9">Japón</option>
</select>
<input type="email" class="Create__item" name="user"  placeholder="Ingrese un Correo" required>
<input type="password" class="Create__item" name="passw" placeholder="Ingrese cual será su Contraseña" required>
<input type="submit" value="Create User" class="Create__item-select-enviar">
</form>
</section>

<section class="section-Account">
    <h2 class="Account__title">L ogin</h2>

<form action="../Modelo/IniciarUsuario.php" method="POST" class="Account__Create">
 <input type="email" class="Create__item" name="user"  placeholder="Ingrese Su Usuario">
 <input type="password" class="Create__item" name="passw" placeholder="Ingrese Su Contraseña">
<input type="submit" value="Login" class="Create__item-select-enviar">
</form>
</section>
<img class="form__fondo" src="imagenes/loquenecesitas.jpg">
<footer id="footer-usercreate">
<?php include 'footer.html'?></footer>
</body> 
<?php  
       }
?>
</html>