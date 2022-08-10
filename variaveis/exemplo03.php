<?php 
//VARIVAEIS DO GRUPO 1
$nome = 'Bruno'; //string
$ano = 1998; //int
$salario = 5500.99; //float;
$bloqueado = false; //booleano

//////////////////////////////////////////////////////////////////////////
//VARIAVEIS DO GRUPO 2
$frutas = array("abacaxi","laranja","manga"); //array
echo $frutas[2];

/*$nascimento = new DateTime(); // varivael do tipo objeto
echo $nascimento;*/

///////////////////////////////////////////////////////////////////////////
//VARIAVEIS DO GRUPO ESPECIAL
echo "</br>";
$arquivo = fopen("exemplo03.php", "r"); //variavel do tipo resource
var_dump($arquivo);

echo "<br/>"

$nulo = NULL; //tipo de variavel nula 


?>