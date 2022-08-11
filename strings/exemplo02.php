<?php 

$nome = "joao rangel"; 

echo $nome; 

$nome =  strtoupper($nome); //coloca a string toda em maiuscula (str to upper)
echo $nome; 
echo "<br>"

$nome =  strtolower($nome); //coloca a string toda em minuscula (str to lowe)
echo $nome; 
echo "<br>"

$nome = ucwords($nome); // deixa a primeira letra de cada palavra em maiscula
echo $nome; 
echo "<br>"

$nome = ucfirst($nome); // deixa apenas a primeira palavra em maiuscula (paragrafo como exemplo)
echo $nome; 
echo "<br>"

?>