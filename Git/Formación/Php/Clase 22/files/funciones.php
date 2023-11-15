<?php

//Nombre de las funciones

//Deben empezar con minúscula

//Incorrecto
function Nombre()
{
	
}
function NOMBRE()
{
	
}
//Correcto
function nombre()
{
}

//Debe utilizar notacion camello

function nombreDeLaFuncion()
{
}

//Los argumentos deben tener un espacio despues de la coma
//Incorrecto
function nombre($argumento1,$argumento2,$argumento3)
{
}

//Correcto
function nombre($argumento1, $argumento2, $argumento3)
{
}

//Los argumentos que no son obligatorios deben esstar igualados a null

//Incorrecto
function nombre($argumento1, $argumento2, $argumentoOpcional=false)
{
}

//Correcto
function nombre($argumento1, $argumento2, $argumentoOpcional=null)
{
}







