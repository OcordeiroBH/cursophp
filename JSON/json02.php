<?php 

$pessoas = array();

array_push($pessoas, array(

	'nome' => 'Joao' ,
	'idade' => 20
	)
);

array_push($pessoas, array(

	'nome' => 'Ricardo',
	'idade' => 42
	)
);

$json = json_encode($pessoas);

?>