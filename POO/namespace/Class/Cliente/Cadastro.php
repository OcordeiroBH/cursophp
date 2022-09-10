<?php 

namespace Cliente; //criando o namespace cliente

class Cadastro extends \Cadastro{

	public function venda($value){

		echo "Venda registrada de: ".$value." para: ".$this->getNome(); //parent::getNome tbm resolveria o problema
	}
}



?>