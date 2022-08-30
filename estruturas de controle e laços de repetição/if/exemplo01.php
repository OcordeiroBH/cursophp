<?php

$qualIdade = 69;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;


if ($qualIdade < $idadeCrianca/*condição*/) {

/*se a condição for verdade o bloco aqui de dentro será execurado*/

echo "crianca";

}
elseif ($qualIdade < $idadeMaior){
	echo "adolescente"; 
} 
else if ($qualIdade < $idadeIdoso) {
	echo "adulto";
}
else {
	echo "idoso" ; 
}
echo "<br>";
echo ($qualIdade < $idadeMaior)?"Menor de idade":"maior de idade" ; 

//operador ternario // (condicao) ? bloco se for verdadeiro : bloco se nao for verdadeiro

?>