<?php 
//VARIAVEIS PRE DEFINIDAS = ARRAYS SUPERGLOBAIS


$nome = (int)/*convertendo o get para int*/$_GET["a"];//pegar a informação de uma variavel //toda informação vinda por GET vai ser string
var_dump($nome);

//http://localhost:8080/variaveis/exemplo04.php?a=123&b=456
//url da pagina ? variaveis que quero puxar(query string) & adicionanando outra variavel

// URL(UNIFORM RESOURCE LOCATOR) divididas em varias partes (URI - UNIFORM RESOURCE IDENTIFIER)
//URL = PROTOCOLO(HTTP,HTTPS,FTP....)+DOMINIO+PEF(CAMINHO DO SITE OU SERVIDOR)+QUERYSTRING

$ip = $_SERVER["REMOTE_ADDR"]; //pegar qual o ip do computador que está acessando //pega informação do ambiente=CLIENTE+SERVIDOR
echo $ip; 

$ip = $_SERVER["SCRIPT_NAME"];
echo $ip; 


?>