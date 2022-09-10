<?php 

class Pessoa {

	public $nome; //atributo

	public function falar(){

		return "O meu nome é: ".$this->nome;  
	} //metodo
}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();



?>