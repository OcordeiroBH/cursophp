<?php 

function test($callback){

	//processo lento	
	$callback(); 
}

test(function(){

	echo "Terminou!"; 
}) //parametro da funcao test é a funcao anonima

?>