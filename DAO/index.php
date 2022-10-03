<?php 

require_once("config.php");

/* 
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */

/*$root = new Usuario();

carrega um unico usuario $root->loagById(1);

echo $root; 

*/

/*$lista = Usuario::getList(); //podemos utilizar desta maneira pq getList é um metodo estatico

carreg uma lista de usuarios

echo json_encode($lista);
*/

/*

Carrega o usuario com um filtro pelo login

$search = Usuario::search("er");

echo json_encode($search);

*/

$sql = new Sql();
$usuario = new Usuario(); 
$usuario->login("joao","Bruno123");
echo $usuario;

?>