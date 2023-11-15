<?php

//Incorrecto
if(1<1)
	echo "Hola";
	echo "Adios";
	
//Correcto

if(0<1)
{
	echo "Hola";
}

//Correcto
if(true){
}

//Correcto
if(true)
{
}

//Identación

//Incorrecto
if(1>0)
{
if(1>2)
{
while($i<2)
{
echo "Hola";
$i++;
}
}
}

if(1>0)
{
	if(1>2)
	{
		while($i<2)
		{
			echo "Hola";
			$i++;
		}
	}
}





