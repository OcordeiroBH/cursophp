<?php 

$status = rand(0,1);
if ($status == 0){
	$liberado = 1;
	echo $liberado;
}
else {
	$liberado = 0;
	echo $liberado; 
}

?>