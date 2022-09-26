<?php 

$conn = new PDO ("mysql:dbname=dbphpset;host=127.0.0.1","root","");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) values (:LOGIN,:PASSWORD)");

$login = "jose";
$password = "senha123";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "inserido com sucesso";


?>