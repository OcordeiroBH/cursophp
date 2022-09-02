<?php 

$a = 10; 
//& passagem de parametro por referencia
function trocaValor(&$b){

	$b = 50;
	return $b;
}

echo $a;
echo trocaValor($a); 
echo "<br>"; 
//variavel é uma coisa, parametro de função é outra

?>