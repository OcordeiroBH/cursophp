<?php 

$conn = new PDO ("mysql:dbname=dbphpset;host=127.0.0.1","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id /*parametro colocado no lugar do ? na query*/));

//$conn->rollback(); //cancela a query

$conn->commit();

echo "Dados excluidos com sucesso";


?>