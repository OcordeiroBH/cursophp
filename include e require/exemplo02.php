<?php 
include "exemplo01.php"; //coloco somente o nome pq o arquivo está no mesmo diretorio(pasta), senão seria "../inc/exemplo01.php"

require "exemplo01.php";
/*o require obriga que o arquivo incluido no codigo exista e que ele esteja funcionando corretamente, dá um erro fatal*/

/*caso no for usar o recurso de intranet para usar o include_path(pasta que pode usar usada como diretorio de inclusao do servidor) para puxar informações tbm, melhor usar o require que te obriga as coisas estarem corretas. */
require_once "exemplo01.php"; //caso houver inclusao de um arquivo mais de uma vez, esse comando vai ignorar o que veio duplicado 
$resultado = somar(10,25);

echo $resultado; 

?>