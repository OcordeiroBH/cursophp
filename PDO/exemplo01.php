<?php 

$conn = new PDO("mysql:dbname=dbphpset;127.0.0.1","root","");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin"); //qual query que quero executar no banco

$stmt->execute(); //vai executar a query no banco

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //adiciona as linhas do banco em forma de array, FETCH_ASSOC vai tirar as associacoes do resultado e so mostrar os valores

echo json_encode($results);


?>