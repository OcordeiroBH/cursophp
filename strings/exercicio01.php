<?php
//CODIGO DO EXERCICIO
$name = 'Hcode Treinamentos';

$replace = 'Cursos'; 

//CODIGO RESOLUÇÃO

$new_name = str_replace("Treinamentos",$replace, $name);
echo $new_name; 

echo "<br>";
//CODIGO GABARITO 

$name2 = substr($name,0,strpos($name,'T')).$replace; 
echo $name2; 


?>