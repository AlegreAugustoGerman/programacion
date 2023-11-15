/*
JavaScript solo tiene 3 tipos de datos
Int,String,Bolean

Variables Reglas escritura
tienen que comenzar por letra,simbolo o caracter _
solo puede contener numeros letras $ y _
son case sensitive
no deben llamarse igual que palabras reservadas
se recomienda nombre descriptivo a la variable

iniciar variable  var variable=0;   
 o var puntiacion   
 puntuacion=0;
declarar varias seguidas 
var variable=0,variable2=5,jugador="alguien";

también 
var jugador,record,puntuacion
jugador=nombre;
record=1200;
puntuacion=20;

se concatena   variables simbolos etc con el + igual que en java
alert ("La Puntuación fue de : " +puntuacion+ "del jugador : " + jugador);

CONVERTIR VARIABLES   Funcion predef Number

producto"5";
precio:400;

totalProductos:Number(producto)*precio;

mesclar html con javascript e imprimir 
var Nombre, Apellido; Nombre = "J Andrés"; Apellido = "Valencia";
document.write("<p>El nombre es "+Nombre+" "+Apellido+"</p>");

document.write("<p>");
 document.write(`Bienvenido: ${nombre} ${apellido}. 
  </br>Te gustaría tener ${edad} años.`);
 document.write("</p>");


que el usuario ingrese los valores para devolverlos y mostrarlos 
por pantalla con prompt 

var nombre=prompt("Introduce tu nombre por favor");
var apellido=prompt("Introduce tu apellido por favor");

OPERADORES  INCREMENTO DECREMENTO

OPERADOR                QUÉ HACE               		     SINTAXYS
+=			INCREMENTA EN X EL VALOR DE UNA VARIABLES    RECORD +=10
-=			DECREMENTA EN X EL VALOR DE UNA VARIABLES    RECORD -=7
*=			MULTIPLICA EN X EL VALOR DE UNA VARIABLES    RECORD *=3

/=			DIVIDE EN X EL VALOR DE UNA VARIABLES 		 RECORD /=4
++ 			AUMENTA EN 1 EL VALOR DE UNA VARIABLES 		 RECORD ++
--			DECREMENTA EN 1 EL VALOR DE UNA VARIABLE     RECORD --

var nombre=prompt("INTRODUCE TU nombre POR FAVOR");
var edad=prompt("INTRODUCE TU edad POR FAVOR");
var resultado=prompt(" POR FAVOR INTRODUCE EL NUMERO DE AÑOS QUE RESTARTE PARA VOLVER EN EL TIEMPO");
edad-=resultado;





*/