<?php 

$frase = "A repetição é mãe da retenção.";
$palavra = "mãe"; 

$q = strpos($frase,$palavra); //retorna o indice de posicao daonde começa a palavra

var_dump($q);

echo "<br>";

$texto = substr($frase, 0, $q); //retorna o texto escrito (onde buscar, começar em qual posicao, encerrar em qual posiçaõ)

$texto2 = substr($frase, $q+strlen/*função para contar a quantidade de string*/($palavra),strlen($frase)-1); 

echo $texto2; 

//var_dump($q); 


?>