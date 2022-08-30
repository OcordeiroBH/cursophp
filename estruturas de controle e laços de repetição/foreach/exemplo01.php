<?php 
$meses = array (
	"janeiro","fevereiro", "março",  
	"abril","maio", "junho",
	"julho","agosto", "setembro",
	"outubro","novembro", "dezembro"
); 

foreach ($meses as $index => $value) {
	echo $index; 
	echo "<br>"
	echo "o mes é: ".$value;
	echo "<br>";  
}

?>