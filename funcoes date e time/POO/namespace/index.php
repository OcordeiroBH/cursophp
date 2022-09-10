<?php 

use Cliente\Cadastro; //classe cadastro que está no namespace cliente

require_once("config.php"); 

$cad = new Cadastro; 
$cad->setNome("Bruno"); 
$cad->setEmail("Brunohc@id.uff.br");
$cad->setSenha("123456");

$cad->venda(30); 

?>