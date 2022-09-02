<?php 

require_once("config.php");

//session_unset($_SESSION['nome']); excluindo a variavel de sessao
echo $_SESSION['nome'];

session_destroy(); //limpa a variavel e limpa a sessao inteira



?>