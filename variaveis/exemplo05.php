<?php 

$nome = "Glaucio"; 

function teste() {			
	global /*palavra reservada*/ $nome; //para a variavel entrar dentro do escopo da função, precisa ser usado em toda função quando não for uma variavel for superglobal
	echo $nome; 
}

teste(); //executando a função 
function teste2() {
	$nome = "Joao"; 
	echo $nome; 
	$nome." Agora o teste2"; //$nome está fora do escopo para essa função
}
teste2();
?>