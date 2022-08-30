<?php

$valorProduto = 14500.00;
$desconto = 5;

if ($valorProduto > 10000) {
	$valorProduto *= (1-$desconto/100);
	echo $valorProduto; 
}

?>