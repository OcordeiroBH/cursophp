<?php 
$diaDaSemana = date("w"); //retorna o numero
echo $diaDaSemana; 

switch ($diaDaSemana) {

	case 0: echo "Domingo";
	break; 

	case 1: echo "Segunda";
	break;

	case 2: echo "Terca";
	break;

	case 3: echo "Quarta";
	break;

	case 4: echo "Quinta";
	break;

	case 5: echo "sexta";
	break;

	case 6: echo "Sabado";
	break;

	default: echo "dia invalido" ;

}


?>