<?php
include 'header.html';

echo "<h3>time</h3>";
echo time();
echo "<br>";
echo $_GET['contactoId'];

echo "<h3>date</h3>";
echo date("d/m/y",time());

echo "<br>";
echo date("d-m-y H:i:s",time());

echo "<h3>strftime</h3>";
echo strftime("%d/%m/%y",time());

echo "<h3>setlocale</h3>";
setlocale(LC_NUMERIC,"es_ES");
setlocale(LC_TIME,"es_ES");
setlocale(LC_MESSAGES,"es_ES");
setlocale(LC_ALL,"es_ES");

include 'footer.html';

?>
