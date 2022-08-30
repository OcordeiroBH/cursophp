<?php
include "json02.php"; 
$json;
$json2 = '[{"nome":"Joao","idade":20},{"nome":"Ricardo","idade":42}]'; 


$data = json_decode($json, true /*sem esse parametro true ele vai jogar diretamente como objeto, nao como array*/);

$data2 = json_decode($json2);

print_r($data); 
echo "<hr>";
print_r ($data2);

  ?>