<?php
//ini_set("display_errors",1);
//error_reporting(E_WARNING | E_NOTICE);
/*include "archivo.php";
$v=8/0;
echo $nombre;
echo "Hola";*/

class Clase
{
	function __destruct()
	{
		echo "Destruyendo...";
	}
}

function gestorDeErrores($error,$mensaje,$fichero,$linea)
{
	echo "Ha ocurrido el error".$mensaje." en la linea ".$linea. "del archivo ".$fichero."<br>";
}

set_error_handler("gestorDeErrores");

//trigger_error("Esto es una advertencia<br>",E_USER_WARNING);

$clase=new Clase();

$v=5/0 or exit(23);



echo "Hola";
