<?php 

function ola(){

	$argumentos = func_get_args(); //vai adicionando varios argumentos na funcao na forma de array
	return $argumentos;  
}

var_dump(ola("bomdia", 10)); 


?>