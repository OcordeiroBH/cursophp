<?php

$anoNascimento = 1998;
$nome = "Bruno";
$sobrenome = "Cordeiro";
$nomeCompleto = $nome." ".$sobrenome ;  //concatenando dados, "espaço no meio"

echo $nomeCompleto; 
exit; //para a execução do codigo

/*$1nome = "" // nao pode começar com numero para criar variavel 
$_nome = "" // unico caracter especial permitido para criar variavel

/*BLOCO DE COMENTARIO*/

/*$this // nome reservado*/

echo $anoNascimento;
echo "<br/>"; //quebra de linha 
unset($anoNascimento,$nomeCompleto) ; //eliminando variavel


if(isset($nomeCompleto) /*verificando se existe essa variavel*/){

	echo $nomeCompleto;
}

?>