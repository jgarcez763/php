<?php

echo "<h1>ARRAY:</h1>";

$frutas = array ("Banana", "Manga", "Melância", "Uva");

print_r($frutas);

echo "<h4>Quando o array possui apenas uma dimensão, ele é considerado um vetor, pra ele ser considerado um array, precisa ter mais de uma dimensão, para ser um array bi-dimensional, tri-dimensional e assim por diante.</h4>";

//////////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";

echo "<h2>Outro Exemplo de Array:</h2>";

$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);

print_r($array);

echo "<br><br>Note que o índice 3 é definido duas vezes, e retêm seu último valor 13. O índice 4 é definido depois do índice 8, e o índice gerado depois dele foi 9, uma vez que o maior índice era 8.

	Esse exemplo cria um array com o índices a partir do 1.";

//////////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";

echo "<h2>Exemplo de array bi-dimensional:</h2>";

$carros [0][0] = "GM";
$carros [0][1] = "COBALT";
$carros [0][2] = "ONIX";
$carros [0][3] = "CAMARO";

$carros [1][0] = "FORD";
$carros [1][1] = "FIESTA";
$carros [1][2] = "FUSION";
$carros [1][3] = "ECO SPORT";

echo $carros [0][3];

echo "<h2>Para saber qual o último elemento de um array: </h2>";

echo end($carros[1]);

//////////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";

echo "<h2>Exemplo de array bi-dimensional 2:</h2>";

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

print_r($pessoas);

// Aqui temos o print_r() puxando apenas o nome do elemento na posição 0 do array.

print_r($pessoas [0]['nome']);


//////////////////////////////////////////////////////////////////////////////////////////////


?>