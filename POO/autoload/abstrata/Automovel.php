<?php 

interface Veiculo{

	public function acelerar($velocidade); 
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{

	public function acelerar($v){ //para implementar uma interface o importante é o numero de parametros da funcao nao o nome da variavel 
		echo "o veiculo acelerou até: ".$v." km/h"; 
	}

	public function freiar($v){

		echo "o veiculo precisa freiar, velocidade limite ".$v." atingida";
	}

	public function trocarMarcha($m){

		echo "trocar para marcha: ".$m; 
	}
}

?>