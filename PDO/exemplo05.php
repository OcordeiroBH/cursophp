<?php 

$conn = new PDO ("mysql:dbname=dbphpset;host=127.0.0.1","root","");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 3;

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Dados excluidos com sucesso";


?>