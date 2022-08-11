<?php 

function teste(){
	global $resultado; 
	return $resultado = 10 + 3/2; 

}
teste(); 

echo $resultado; 

$resultado > 10 && 10 > 5; // && = e
$resultado > 10 || 10 > 5; // || = ou


?>