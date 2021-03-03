<?php

echo "<h1>JSON - Javascript Object Notation:</h1>";

echo "<h3>Os arquivos JSON permitem que haja interoperabilidade entre sistemas, isso quer dizer que é possível que linguagens de 	 
	 programação distintas entre sí, se entendam por meio de arquivos JSON.</h3>";

echo "<h1>JSON ENCODE - Transformando/Convertendo arrays em JSON:</h1>";

$pessoas = array ();

// Aqui temos um array $pessoas e dentro de pessoas temos um array chamado array na posição [0].

array_push($pessoas, array(
		'nome' => 'Nappa',  
		'idade' => 120
));

// Aqui temos um array $pessoas e dentro de pessoas temos um array chamado array na posição [1].

array_push($pessoas, array(
		'nome' => 'Vegeta', 
		'idade' => 125
));

// Aqui temos um array $pessoas e dentro de pessoas temos um array chamado array na posição [2].

array_push($pessoas, array(
		'nome' => 'Freeza',
		'idade' => 400
));

// Aqui temos um array $pessoas e dentro de pessoas temos um array chamado array na posição [3].

array_push($pessoas, array(
		'nome' => 'Kakaroto',
		'idade' => 40
));

// print_r($pessoas); puxando todos os arrays dentro de pessoas.

echo Json_encode($pessoas);

/////////////////////////////////////////////////////////////////////////////////////////////////

echo "<hr>";

echo "<h1>JSON DECODE - Transformando/Convertendo JSON em Arrays:</h1>";

$json = '[{"nome":"Nappa","idade":120},{"nome":"Vegeta","idade":125},{"nome":"Freeza","idade":400},{"nome":"Kakaroto","idade":40}]';

$data = json_decode($json);

var_dump($data);

/////////////////////////////////////////////////////////////////////////////////////////////////



?>