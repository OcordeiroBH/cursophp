<?php 

class Cadastro{

	private $nome; 
	private $email; 
	private $senha; 

	public function getNome(){

		return $this->nome;
	}

	public function getEmail(){

		return $this->email; 
	}

	public function getSenha(){

		return $this->senha;
	}

	public function setNome($n){

		$this->nome = $n; 
	}

	public function setEmail($e){

		$this->email = $e;
	}

	public function setSenha($s){

		$this->senha = $s;
	}

	public function __toString(){

		return	json_encode(

				array(

						"nome"=>$this->nome,
						"email"=>$this->email,
						"senha"=>'********'
					)
			);
	}
}



?>