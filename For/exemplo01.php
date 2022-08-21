<?php 

for ($i = 0; $i < 10; $i++){

echo $i."<br>"; 

}   // for(inicio/contador; fim; incremento)

for ($i = 0; $i<1000 ; $i+=5) {
	if($i > 200 && $i < 800) continue; //esse continue faz com que pare e execute a proxima repetiçao //se o if tiver apenas uma instrução nao precisa de {}

	if ($i === 900) break; //esse break para o laço de repetição
	echo $i."<br>"; }

?>