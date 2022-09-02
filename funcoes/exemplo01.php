<?php

/*função*/function ola(){

	return "ola mundo"; 
}

echo ola(); 

/*subrotina*/function ola2(){

	echo "ola mundo";
}

ola2();

$frase = ola();
echo strlen($frase); 

?>