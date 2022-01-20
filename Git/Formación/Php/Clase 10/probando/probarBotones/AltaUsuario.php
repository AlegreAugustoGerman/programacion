<?php
include_once 'index.php';
include_once 'Consultas.php';
if($_POST){			
/*Obtengo datos del formulario*/  
    $numUsuario=$_POST["dni"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $cargo=$_POST["cargo"];
    $telefono=$_POST["telefono"];
    if(isset($numUsuario) && isset($nombre) && isset($apellido)&& isset($cargo)&& isset($telefono) )
    {alta($numUsuario,$nombre,$apellido,$cargo,$telefono,$conexion);}
 
/*
    ultimo alta usuario SELECT * FROM usuarios ORDER BY numUsuarios DESCLIMIT 1;
    primer alta usuario SELECT * FROM usuarios LIMIT 1;
    falta robar lo siguiente dentro de una función que llame si se crea otro usuario */
           $MostrarAlta="SELECT * FROM usuarios";
       if ($resultado=$conexion->query($MostrarAlta)) {
        $v=1;
        for($i=0;$i<$v;$i++){ 
echo"<h1>Usuarios<h1><br>".
"<table border=1px>".
"<th>Nombre</th>".
"<th>Apellido</th>".
"<th>Dni</th>".
"<th>Tipo</th>".
"<th>Teléfono</th><tr>";

if ($fila = mysqli_fetch_assoc($resultado)) {
    
    echo "<tr>"."<td>".$fila["nombre"]."</td>"
    ."<td>".$fila["apellido"]."</td>"
    ."<td>".$fila["numUsuarios"]."</td>"
    ."<td>".$fila["cargo"]."</td>"
    ."<td>".$fila["telefono"]."</td>"
    ."</table>";

}   }   


}     
}

?> 