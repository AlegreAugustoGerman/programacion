<?php
 include 'menuAdmin.php';
 
if(isset($_SESSION['privileges']) && $_SESSION['privileges']==="2"){ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formProdCreat.css">
   
    <title>Subir Producto</title>
</head>
<body> 
 
    <section class="Section-cont-Productos">
 
        <h2 class="Section__titulo-Productos">
            Agregar Productos </h2>
            
            <h2 class="Section__titulo-Productos">
                En Categorias </h2>  
         
        <form method="POST" action="../Modelo/CrearProducto.php" enctype="multipart/form-data" class="Section__form-Productos">

        <select class="bloque-espaciado-input form__select-producto" name="nombre"  >
                <option value="1">Aceite de Girasol</option>
                <option value="2">Cacao en Polvo</option>
                <option value="3">Jardinera Arcor</option>
                <option value="4">Mermelada de Ciruela</option>
                <option value="5">Mermelada de Durazno</option>
                <option value="6">Tomate Perita en Lata</option>
                <option value="7">Mermelada de Damasco</option>
                <option value="8">Pure de Tomate</option>
                <option value="9">Te en Saquitos</option>
                <option value="10">Arroz Largo Fino</option>
                <option value="11">Arroz Corto Fino</option>
                <option value="12">Yerba Mate</option>
                <option value="13">Fideos Tallarín</option>
                <option value="14">Fideos Caracolas</option>
                <option value="15">Fideos Espaguetis</option>
                <option value="16">Fideos Tirabuzón</option>
                <option value="17">Vino Blanco</option>
                <option value="18">Cerbeza Rubia</option>
                <option value="19">Cerbeza Negra</option>
                <option value="20">Vino Tinto</option>
                <option value="21">Harina 000</option>
                <option value="22">Harina 0000</option>
                <option value="23">Harina Leudante</option>
                <option value="24">Pan Rallado</option>
                <option value="25">Agua Mineral</option>
                <option value="26">Galletitas con Salvado</option>
                <option value="27">Galletitas con Sésamo</option>
                <option value="28">Galletitas de Agua</option>
                <option value="29">Oblea Rellena de Chocolate</option>
                <option value="30">Oblea Rellena de Frutilla</option>
                <option value="31">Leche Entera</option>
                <option value="32">Leche Descremada</option>
                <option value="33">Yogur Vainilla</option>
                <option value="34">Yogur Frutilla</option>
                <option value="35">Yogur Durazno</option>
                <option value="36">Ciruela</option>
                <option value="37">Cereza</option>
                <option value="38">Ananá</option>
                <option value="39">Palta</option>
                <option value="40">Banana</option>
                <option value="41">Repollo</option>
                <option value="42">Lechuga</option>
                <option value="43">Melón</option>
                <option value="44">Carne de Cerdo</option>
                <option value="45">Carne de Oveja</option>
                <option value="46">Carne de Pollo</option>
                <option value="47">Pescado Azul</option>
                <option value="48">Pescado Blanco</option>
                <option value="49">Carne de Res</option>
                <option value="50">Pan Tradicional</option>
                <option value="51">Pan Integral</option>
                <option value="52">Pan Relleno</option>
                <option value="53">Pan de Semillas</option>
                <option value="54">Pan Francés</option>
            </select>

            <select class="bloque-espaciado-input form__select-producto" multiple name="aditivos"  >
            <option value="1">sin tac</option>
            <option value="2">sin azucar</option>
            <option value="3">azucar natural</option>
            <option value="4">glutten</option>
            <option value="5">con grasas</option>
            <option value="6">sin grasas</option>
            <option value="7">sin aditivos</option>
            <option value="8">hydroponico</option>
            <option value="9">sin quimicos</option>
            <option value="10">con quimicos</option>
            <option value="11">criadero</option>
            </select>

            <input class="bloque-espaciado-input form__input-producto" type="number" name="peso" placeholder="Peso del Producto">
            <select class="bloque-espaciado-input form__select-producto"  name="mediciones">
            <option value="1">Miligramo</option>
            <option value="2">Gramo</option>
            <option value="3">Kilo</option>
            <option value="4">Unidad</option>
            <option value="5">Litros</option>
            <option value="6">Centimetros Cubicos</option>
            </select>


            <input class="bloque-espaciado-input form__input-producto" type="number" name="precio" placeholder="Precio del Producto">

            <input class="bloque-espaciado-input form__select-fecha" type="date" name="caducidad"  >
            
            <select class="bloque-espaciado-input form__select-producto" name="areas"  >
                <option value="1">Carniceria</option>
                <option value="2">Verduleria</option>
                <option value="3">Lacteos</option>
                <option value="4">Panaderia</option>
                <option value="5">Bebidas</option>
                <option value="6">Libreria</option>
                <option value="7">Otro</option>
            </select>
            
            <input class="form__input-producto-imagen" type="file" accept="imagenes/"  name="img"  >
            <input class="bloque-espaciado-input form__input-producto" type="number" name="cantidad" placeholder="Cantidad del Producto">
            
            <select class="bloque-espaciado-input form__select-producto" name="proveedores"  placeholder="Proveedor">
            <option value="1">AGD</option>
            <option value="2">BUNGE</option>
            <option value="4">Lacteos</option>
            <option value="3">DULCOR</option>
            <option value="5">ARCOR</option>
            <option value="6">MOLINOS RIO DE LA PLATA</option>
            <option value="7">MORIXE</option>
            <option value="8">PEPSICO</option>
            <option value="9">GERULA</option>
            <option value="10">PRODEA</option>
            <option value="11">BODEGAS NORTON</option>
            <option value="12">ADECO AGRO</option>
            <option value="13">QUILMES</option>
            <option value="14">BAGLEY</option>
            <option value="15">COCA COLA</option>
            <option value="16">ALIMENTOS REFRIGERADOS S.A</option>
            <option value="17">WILLNER S.A</option>
            <option value="18">MASTELLONE HNOS S.A</option>
            <option value="19">MOLINOS</option>
            </select>
            
            <input type="submit" name="save" value="Agregar" class="bloque-espaciado-input form__submit-producto">
        </form>
        <img src="imagenes/loquenecesitas.jpg" class="section__cont__fondo-form" >
    </section>
</body>
<?php
}elseif(isset($_SESSION["privileges"]) && $_SESSION["privileges"]==="1"){
    header("Location:index.php");
}
else{header("Location:formUserCreat.php");}
?>
</html>