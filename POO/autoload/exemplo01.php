<?php 

function __autoload($nomeClasse){

	require_once("$nomeClasse.php"; //chama todas as classes, funciona diretamente pq está tudo dentro da mesma pasta.)

}

$carro = new DelRey();


?>