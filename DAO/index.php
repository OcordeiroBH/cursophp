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

/*
$usuario = new Usuario(); 
$usuario->login("joao","Bruno123");
echo $usuario;
*/ 

/*Insere um dado no banco
$aluno = new Usuario();
$aluno->setDeslogin('Aluno');
$aluno->setDessenha('A1un0');
$aluno->insert();

echo $aluno; 

*/

/*insere um dado no banco usando metodo construtor

$aluno = new Usuario('Amigo','123654');
$aluno->insert();
echo $aluno;

*/

/*Atualizando uma coluna no banco de dados*/

$usuario = new Usuario();

$usuario->loadById(5);

$usuario->update("Professor","Amigo1234");

echo $usuario;






?>