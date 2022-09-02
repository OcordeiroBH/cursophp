<?php 

function soma(int ...$valores /*declaração de tipos escalares*/):string /*conversao do tipo no return*/{

	return array_sum($valores);

}

echo soma(2,2); 
echo "<br>";
echo soma(2,3,4,5); 
echo "<br>";
echo soma(1.5,3); //como declaramos $valores é int ele vai ignorar o ponto flutuante

?>