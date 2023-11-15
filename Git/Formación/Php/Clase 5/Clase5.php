<?php
echo "<h1>Clase 5</h1>";
echo "<h4>Ejercicio 1</h4>";
$aleatorio=rand (1,100);
if ($aleatorio>=0){
    echo "numero par : $aleatorio<br>";
}else {echo "el numero es impar : $aleatorio<br>";}

echo "<h4>Ejercicio 2</h4>";
$aleatorio2=rand(1,100);
if ($aleatorio2>=0){
    echo "numero par : $aleatorio2<br>";
}else {echo "el numero es impar : $aleatorio2<br>";}

if ($aleatorio>=0){
    echo "numero par : $aleatorio<br>";
}else {echo "el numero es impar : $aleatorio<br>";}


echo "<h4>Ejercicio 3</h4>";

$aleatorio3=rand(1,100);
if ($aleatorio<$aleatorio2 && $aleatorio<$aleatorio3){
    echo "primer numero menor : $aleatorio <br>";
}elseif($aleatorio2<$aleatorio3){
    echo"primer numero menor : $aleatorio2 <br>";
}else {echo " primer numero menor : $aleatorio3 <br>";};

 
echo "segundo numero medio es : $aleatorio2 <br>" ; //falta arreglar un poco

if ($aleatorio>$aleatorio2 && $aleatorio>$aleatorio3){
    echo "tercer numero mayor : $aleatorio <br>";
}elseif($aleatorio2>$aleatorio3){
    echo"tercer numero mayor : $aleatorio2 <br>";
}else {echo " tercer numero mayor : $aleatorio3 <br>";}  

echo "<h4>Ejercicio 4</h4>";
$aleat=rand(-5,5);
if ($aleat>0){echo"numero positivo : $aleat <br>";}
elseif($aleat<0){echo"numero negativo : $aleat<br>";}
elseif($aleat===0){echo"numero : $aleat es neutro <br>";}

echo "<h4>Ejercicio 5</h4>";
$aleator=rand(1,200);
if ($aleator>=100){echo"este numero es mayor o igual a 100 : $aleator<br>";}else
{echo"$aleator no es mayor o igual a 100 <br>";}

echo "<h4>Ejercicio 6</h4>";
$ale=rand(1,50); //solucion a par etc operación multiple
if ($ale%3 !==0){echo"el numero aletorio divisible por 3 es: $ale<br>";} 
else{echo"el numero no es divisible por 3 : $ale<br>";}

echo "<h4>Ejercicio 7</h4>";
$vocales="b";
if($vocales=="a"){echo"es una vocal $vocales<br>";}else{echo"no es una vocal";}

echo "<h4>Ejercicio 8</h4>";
$diarand=rand(1,7);
$dia=$diarand;
if ($dia==1){echo"el dia es lunes";}elseif ($dia==2){echo"el dia es martes";}
elseif ($dia==3){echo"el dia es miercoles";}elseif ($dia==4){echo"el dia es jueves";}
elseif ($dia==5){echo"el dia es viernes";}if ($dia==6){echo"el dia es sabado";}
elseif ($dia==7){echo"el dia es domingo";}

echo "<h4>Ejercicio 9</h4>";
$mesrand=rand(1,12);
$mes=$mesrand;
if ($mes==1){echo"el dia es enero";}elseif ($mes==2){echo"el dia es febrero";}
elseif ($mes==3){echo"el mes es marzo";}elseif ($mes==4){echo"el mes es abril";}
elseif ($mes==5){echo"el mes es mayo";}if ($mes==6){echo"el mes es junio";}
elseif ($mes==7){echo"el mes es julio";}elseif ($mes==8){echo"el mes es agosto";}
elseif ($mes==9){echo"el mes es septiembre";}elseif ($mes==10){echo"el mes es octubre";}
elseif ($mes==11){echo"el mes es noviembre";}elseif ($mes==12){echo"el mes es diciembre";}

?>
