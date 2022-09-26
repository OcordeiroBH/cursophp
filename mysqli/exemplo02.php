<?php 

$conn = new mysqli("127.0.0.1","root","", "dbphpset"); //parametros (local do servidor, usuario, senha, nome do banco) //conectanto no banco

if ($conn->connect_error){

	echo "Error: ".$conn->connect_error;
} //verificando se teve algum erro

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array ();
while ($row = $result->fetch_array(MYSQLI_ASSOC /*vai retornar apenas os dados*/) /*pode ser usado tbm o fetch_assoc*//*verifica se tem algum resultado naquela linha*/ /*um array vazio no php ele vai retornar como false*/) {

	array_push($data, $row); //incluir as linhas em array 
	//var_dump($row);

}

echo json_encode($data);


?>