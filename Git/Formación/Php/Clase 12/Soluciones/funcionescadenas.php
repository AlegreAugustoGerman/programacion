<?php
include 'header.html';
$mensaje="solo se que no se nada";
$nombre="Pedro";
echo "<h3>Strlen</h3>";
echo strlen($mensaje);

echo "<h3>str_word_count</h3>";
echo str_word_count($mensaje,0);
echo "<br>";
echo print_r(str_word_count($mensaje,1));
echo "<br>";
echo print_r(str_word_count($mensaje,2));

echo "<h3>substr_count</h3>";
echo substr_count($mensaje,'se');

echo "<h3>strpos</h3>";
echo strpos($mensaje,'l');

echo "<h3>strrpos</h3>";
echo strrpos($mensaje,'l');

echo "<h3>explode</h3>";
echo print_r(explode(" ",$mensaje));
echo "<br>";
echo print_r(explode("s",$mensaje));

echo "<h3>strtoupper</h3>";
echo strtoupper($mensaje);

echo "<h3>strtolower</h3>";
echo strtolower($mensaje);

echo "<h3>ucfirst</h3>";
echo ucfirst($mensaje);

echo "<h3>str_replace</h3>";
echo str_replace(" ","_",$mensaje);
echo "<br>";
echo str_replace("se","sé",$mensaje);

echo "<h3>substr</h3>";
echo substr($mensaje,1,5);
echo "<br>";
echo substr($mensaje,strlen($mensaje)-3,strlen($mensaje));

echo "<h3>strrev</h3>";
echo strrev($mensaje);


include 'footer.html';

?>
