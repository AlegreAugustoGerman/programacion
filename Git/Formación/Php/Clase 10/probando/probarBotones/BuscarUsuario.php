
<html>
<?php
include "index.php";
include "Consultas.php";
?>
<h1>Buscar Un Usuario</h1>
<form action="BuscarUsuario.php" METHOD="POST">
<input type="number" placeholder="Dni" name="buscardni" >
<input type="submit" name="enviar">
</form>
</html>
<?php
//version funcional mas abajo porque no funciona por función

if (isset($_POST)){
    $numUsuario=$_POST['buscardni'];
    $num=$numUsuario;
   $BuscarUsuario="SELECT numUsuarios,nombre,apellido,cargo,telefono 
   FROM usuarios WHERE numUsuarios='$numUsuario'";
   /*if ($resultado=$conexion->query($BuscarUsuario)) {

	echo "<table border>";
    echo "<tr>";
    echo "<th>Dni</th>";
    echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "<th>Cargo</th>";
    echo "<th>Telefono</th>";
    echo "<th colspan=2>Opciones</th>";


    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
          echo "<tr>";
		  echo "<td>".$fila["numUsuarios"]."</td>";
		  echo "<td>".$fila["nombre"]."</td>";
		  echo "<td>".$fila["apellido"]."</td>";
          echo "<td>".$fila["cargo"]."</td>";
          echo "<td>".$fila["telefono"]."</td>";
          echo"</form>";

          
}}*/

//echo "<td><iframe src=ModificarFormUsuario.php></iframe></td>";
//boton eliminar
/*
echo"<form action=BajaUsuario.php METHOD=POST>";
echo"<td><input type=hidden name=EliminarDni value='$numUsuario'>";
echo "<input type=submit value=Eliminar></input>";
echo"</form>";*/
 


if ($resultado=$conexion->query($BuscarUsuario)) {

	echo "<table border>";
    echo "<tr>";
    echo "<th>Dni</th>";
    echo "<th>Nombre</th>";
    echo "<th>Apellido</th>"; 
    echo "<th>Cargo</th>";
    echo "<th>Telefono</th>";
    echo "<th colspan=2>Opciones</th>"; 
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
          echo"<form action=ModificarUsuario.php METHOD=POST>";
          echo "<tr>";
          echo "<td>"."<input value=$fila[numUsuarios] name=dni>"."</td>";
          echo "<td>"."<input value=$fila[nombre] name=nombre>"."</td>";
		  echo "<td>"."<input value=$fila[apellido] name=apellido>"."</td>";
          echo "<td>"."<input value=$fila[cargo] name=cargo>"."</td>";
          echo "<td>"."<input value=$fila[telefono] name=telefono>"."</td>";
          echo "<td>"."<input type=submit value=Actualizar></input>"."</td>"."</form>";
          echo"<form action=BajaUsuario.php METHOD=POST>";
            echo"<td><input type=hidden name=EliminarDni value='$numUsuario'>";
            echo "<input type=submit value=Eliminar></input>";
            echo"</form>";
          
}}

}
/*include_once 'Consultas.php';
if (isset($_POST)){
    $numUsuario=$_POST['buscardni'];
    $BuscarUsuarios=buscar($numUsuario,$conexion);}//funcion buscar recibe 2 parametro el di y la conexion
    echo "El Usuario es".$BuscarUsuarios; //esto no imprimira porque retorna true o false pero si quiero

    //ver que ingrese por si escribi mal sería util imprimir $numUsuario y ver que recibi del formulario


       if ($resultado=$conexion->query($BuscarUsuario)) {

	echo "<table border>";
	echo "<tr>";
	echo "<th>Nombre</th>";
    echo "<th>Apellido</th>";
    echo "<th>D.N.I</th>";
    echo "<th>-</th>";
    echo "<th>-</th>";
    echo "</tr>";
	  while ($fila = mysqli_fetch_assoc($resultado)) {
		  echo "<tr>";
		  echo "<td>".$fila["nombre"]."</td>";
		 // echo "<td>".$fila["apellido"]."</td>";
		  echo "<td>".$fila["numUsuarios"]."</td>";
          echo "<td>"."</table>";
    */


/*
lo anterior parecia abordar el problema de acceso a lo obtenido por la consulta pero el detalle esencial es
que $BuscarUsuarios es igual a una funcion que  al ser sql=consulta sql  devuelve true or false 
como la funcion recibe el parametro busca el mismo si quisiera imprimir en todo asi seria $numUsuario
para lo introducido en la busqueda pero si encuentra un registro no es accesible por eso constantes errores
no de sintaxys o sql si de carga de pagina por lo que la consulta no puede ser por funcion y parametro en 
este caso especial si funciona en abm no para listar o buscar un elemento concreto 
*/

/*
if(isset($_POST)){ 
echo"<table border=1px>".
"<td>Dni</td>".$numUsuario."<tr>"."<td>"."</tr>".
"<td>Nombre</td>".$BuscarUsuarios['nombre']."<tr>"."<td>"."</tr>".
"<td>Apellido</td>"."<tr>"."<td>". "</tr>".
"<td>Telefono</td>"."<tr>"."<td>". "</tr>".
"<td>Cargo</td>"."<tr>"."<td>".    "</tr>".
"</table>";
}*/
?>