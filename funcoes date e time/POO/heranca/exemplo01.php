<?php 

class Documento {

	private	$numero; 
	
	public function getNumero(){

		return $this->numero;
	}

	public function setNumero($n) {

		$this->numero = $n; 
	}
}

class CPF extends Documento {

	public function validarCPF():bool {

		//validacao cpf
		$this->getNumero();
		return true; 
	}

}

$doc = new CPF; 
$doc->setNumero("16133351721");
var_dump($doc->validarCPF());


?>