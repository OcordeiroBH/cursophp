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

class Programador extends /*so nao extende o que for private na classe Pessoa*/ Pessoa {

	public function verDados(){

		echo get_class($this); //ver de qual classe o metodo está sendo usado
		echo "<br>";

		$dados = array(

			'nome' => $this->nome, 
			'idade' => $this->idade, 
			'$senha' => $this->senha
		);

		print_r($dados); 
	} //senha nao pode ser acessado pq ele é private na classe pessoa 

}

$objeto = new Programador;

$objeto->verDados(); 


?>