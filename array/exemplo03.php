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

print_r($pessoas); 
echo "<br>"
print_r($pessoas[0]['nome']); 



  ?>