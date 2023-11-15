<?php
include 'header.html';

echo "<h3>Constantes</h3>";
echo M_PI;
echo "<br>";
echo M_E;
echo "<br>";
echo M_EULER;

echo "<h3>pow</h3>";
echo pow(2,8);
echo "<br>";
echo pow(2,2);

echo "<h3>sqrt</h3>";
echo sqrt(36);

echo "<h3>log</h3>";
echo log(8,2);

echo "<h3>log10</h3>";
echo log10(100);

echo "<h3>decbin</h3>";
echo decbin(10);

echo "<h3>bindec</h3>";
echo bindec(1010);

echo "<h3>decoct</h3>";
echo decoct(10);

echo "<h3>dechex</h3>";
echo dechex(1010);

echo "<h3>base_convert</h3>";
echo base_convert(1010,2,10);

echo "<h3>min</h3>";
$arreglo=array(1,2,5,3,2);
$contador=0;
foreach($arreglo as $elemento)
{
	if($elemento==2)
	{
		$contador++;
	}
}
echo "La cantidad es ".$contador;
echo max($arreglo);
echo "<br>";
echo max(1,5,7,3,7,2);

echo "<h3>min</h3>";
echo min($arreglo);
echo "<br>";
echo min(1,5,7,3,7,2);

echo "<h3>abs</h3>";
echo abs(-5);
echo "<br>";
echo abs(5);

echo "<h3>round</h3>";
echo round(M_E);
echo "<br>";
echo round(M_E,3);
echo "<br>";
echo round(M_E,2);

echo "<h3>ceil</h3>";
echo ceil(M_E);

echo "<h3>floor</h3>";
echo floor(M_E);

echo "<h3>number_format</h3>";
echo number_format(M_E,3);
echo "<br>";
echo number_format(M_E,2);
echo "<br>";
echo number_format("23423432344.445654",2,",",".");
echo "<br>";
echo number_format("23423432344.445654",2,",","");
echo "<br>";
echo number_format("23423432344.445654",2,".","");

echo "<h3>deg2rad</h3>";
echo deg2rad(180);
echo "<br>";
echo deg2rad(360);

echo "<h3>rad2deg</h3>";
echo  rad2deg(M_PI);
echo "<br>";
echo rad2deg(M_PI*2);

echo "<h3>sin</h3>";
echo sin(90);

echo "<h3>cos</h3>";
echo cos(90);

echo "<h3>tan</h3>";
echo tan(90);

?>

<a href="funcionesfechahora.php?contactoId=25">Link</a>

<?php


include 'footer.html';
?>
