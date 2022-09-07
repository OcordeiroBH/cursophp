<?php 


echo date("d/m/Y H:i:s", 1662216424);
echo "<br>";

echo time(); /*retorna o timestanp atual com o marco zero do UNIX*/
echo "<br>";

$ts = strtotime("now"); //retorna o time stanp de determinada data
echo $ts; 
$ts2 = strtotime("-5 hours"); //+1 day, essa funcao aceita expressoes
echo "<br>";

echo date("l, d/m/Y H:i:s", $ts2);



?>