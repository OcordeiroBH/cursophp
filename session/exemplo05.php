<?php 
require_once("config.php");
echo session_save_path();  //mostra onde o arquivo temporario está sendo armazenado. 
echo "<br>";
var_dump(session_status());
echo "<br>";

switch(session_status()) {

	case 0 /*funcionaria colocando PHP_SESSION_DISABLED tambem*/: 
	echo "você está desativo da seção"; 
	break;

	case 1:
	echo "você está ativo porém não iniciou a sua seção";
	break;

	default: 
	echo "você está ativo na seção e iniciou a seção";
}

 ?>