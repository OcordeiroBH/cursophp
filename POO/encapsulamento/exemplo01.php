<?php 

class Pessoa {

	public $nome = 'Rasmus Lerdorf'; 
	protected $idade = 48; 
	private $senha = '123456';

	public function verDados(){

		$dados = array(

			'nome' => $this->nome, 
			'idade' => $this->idade, 
			'$senha' => $this->senha
		);

		print_r($dados); 
	}
}

$objeto = new Pessoa;

$objeto->verDados(); 


?>