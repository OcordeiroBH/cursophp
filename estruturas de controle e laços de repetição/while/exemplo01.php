<?php 

$condicao = true; 
while ($condicao) {

	$numero = rand(1,10);
	if ($numero === 3){
		echo "FINAMENTE TRES!!";
		$condicao = false; 
	}
	else {
		echo $numero." ";
		echo "<br>";
		echo "Tente novamente";
	}
}


?>