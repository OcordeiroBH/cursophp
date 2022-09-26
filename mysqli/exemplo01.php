<?php 

$conn = new mysqli("127.0.0.1","root","", "dbphpset"); //parametros (local do servidor, usuario, senha, nome do banco)

if ($conn->connect_error){

	echo "Error: ".$conn->connect_error;
}


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)"); //comando que eu quero que seja executado no mysql
$stmt->bind_param("ss", $login, $pass); //tipo de variavel que vai ser recebido, s-string/varchar, i-int, d-double, b-booleano //os valores que eu quero inserir dentro do banco  //essa funcao nao consegue referenciar os valores diretamente. 

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();

?>