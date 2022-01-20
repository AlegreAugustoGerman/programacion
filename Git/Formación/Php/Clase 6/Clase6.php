<?php
echo"<h1>Clase 6</h1><br>";
echo"<h4>Ejercicio 1</h4>";
$numalea=rand(1,5);
$num=$numalea;
for ($i=$num;$i<11; $i++){
echo"el valor inicial es : $num <br>
pero aumenta $i <br>";
}

echo "<h4>Ejercicio2</h4><br>";
$numaleat=rand(1,10);
$numa=$numaleat;
for ($i=$numa;$i<21 ;$i++){ 
    if($numa%3 !==0){echo"el numero es múltiplo de tres <br>
          aumenta en uno hasta 20 : $i <br>";
          }
    }

    echo "<h4>Ejercicio3</h4><br>";
    $nmalea=rand(1,10);
    for($i=$nmalea;$i<31; ){ $i=$i+3;
        if($i<=31){ 
        echo"aumenta en 3 hasta que sea mayor o igual a 30 : $i<br>";}
       
    }
    echo "<h4>Ejercicio4</h4><br>";
    for ($i=0;$i<10; $i++){
        $nnmalea=rand(1,10);
        /*echo "el numero es $nnmalea ";*/
        if($nnmalea%2 !==0){
            $nnmalea=$nnmalea+5;
            $nnmalea=$nnmalea-3;
            echo "el numero despues de operar es : $nnmalea <br>";}
    }          
    echo "<h4>Ejercicio5</h4><br>";  
    for ($i=0;$i<4; $i++){$aleatori=rand(1,4);
    if ($aleatori===1){echo"imagen <br>";}
    elseif($aleatori===2){echo"<table><th></th><td></td></table>";}
    elseif($aleatori===3){echo"link";}
    elseif($aleatori===4){echo"<p><b>asdsad</b></p>";}
    }
    echo "<h4>Ejercicio6</h4><br>";
    echo"<table border=1px>";
    for($i=1;$i<$nmalea; ){
        echo"<td>".$i;
        $i=$i+1;
        if($i>1){   
        for($c=0;$c<$nmalea; ){
        echo"<td>".$c;
        $c=$c+1;
    }echo"<tr>";}   
}echo"</table>";
        
echo "<h4>Ejercicio7</h4><br>";  
for ($s=1,$i=0;$s<11 && $i<5; $i++){
    echo $s."<br>";
    $s=$s+2;}
echo "<h4>Ejercicio8</h4><br>";
for($i=1;$i<=$nmalea;$i++ ){echo" ".$i;}

echo "<h4>Ejercicio9</h4><br>";

/* no ejecuta el ejercicio algo raro no hay error de sintaxys
echo "<table border=1px>";
echo"";
for ($f=0;$f<5){ 
    echo"<td>".$f;
    $f=$f+1;
    if($f>1){for($c=0;$c<3){ 
            echo"<td>".$c;
            $c=$c+1;}}
            echo"<tr>";
}
echo"</table>";*/
echo "<h4>Ejercicio10</h4><br>";   
?>
