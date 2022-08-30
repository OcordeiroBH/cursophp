<?php 
$total = 150;
$desconto = 0.9; 
// do while executa ao menos uma vez
// se for usar o while com numeros precisa de um contator senao vai virar um loop infinito
do {
	$total *= $desconto; 
} while ($total > 100);

echo $total;


?>