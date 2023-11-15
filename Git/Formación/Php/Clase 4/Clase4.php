<?php
echo "<h1>Ejercicio 1</h1>";

$nombre="un nombre";
echo "una persona tiene  $nombre <br>" ; //etiquetal html dentro de comas del texto al igual que var

$edad="una edad";
echo "una persona tiene  $edad";

$nombre="n";
$edad=1;
echo "una persona tiene de nombre $nombre y edad $edad <br>";

echo "<h1>Ejercicio 2</h1> <br>";
$a=5;
$b=4;
$c=10;

echo "los valores antes son : a=$a b=$b c=$c <br>";
$b=$a;
$c=$b;
$a=$a;
echo "los valores despues son : a=$a B=$b c=$c <br>";

echo "<h1>Ejercicio 3</h1> <br>";
echo "la negación de c es : -$c<br>";
$suma=$a+$b;
echo "la suma de a y b es $suma<br>";
$resta=$c-$a;
echo "la resta de c y a es $resta<br>";
$Multiplicar= $c*$a; 
echo "la multiplicación entre c y a es $Multiplicar<br>";
$Divicion=$a%$c;
echo "la división entre a y c es $Divicion <br>";

echo "<h1>Ejercicio 4</h1> <br>";
$c=11;
for ($i=1; $i<$c; $i++){
    echo "el valor de a en este ciclo es :$i <br>";
   
}
for($i=11; $i>0; $i--){
    echo "el valor de a en este ciclo es :$i <br>";
    } 
    echo "<h1>Ejercicio 5</h1> <br>";
define ("Constante","esta es una constante declarada y asignada.");
echo "la variable  Contiene : ".Constante;

echo "<h1>Ejercicio 6</h1> <br>";
$variable1="valor de variable 1";
$Variabvle2="valor de variable 1";
echo "$variable1<br>$Variabvle2<br>";

echo "<h1>Ejercicio 7</h1> <br>";
$num=3;
$let="3";
$igual=$num==$let;
$identico=$num==$let;
$diferente=$num!=$let;
$noidentico=$num!==$let;

echo "resultado comparación  igual $igual <br>
identeico $identico <br>
diferente $diferente <br>
noidentico $noidentico<br>";


?>