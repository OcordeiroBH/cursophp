<?php 

function ola($texto = "Bruno"){


	return "ola $texto"; 
}

echo ola(""); 
echo ola(); 

function ola2($texto){

	return "ola $texto";

}
echo ola2("Bruno"); 


function ola3($texto = "Bruno" /*valor padrao*/, $periodo = "Bom dia"){
	return "ola $texto $periodo <br>"; 
}
// caso o argumento da funcao nao tenha um valor padrao é necessario informar o valor quando se chama a funcao. 
echo ola3();
echo ola3("","Boa noite");
echo ola3("Ricardo", "Boa tarde");
echo ola3("Joao", "");


?>