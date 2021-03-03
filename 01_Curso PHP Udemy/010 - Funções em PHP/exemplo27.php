<?php

echo "<h1>Passagem de parâmetros por valor e por referência:</h1>";

echo "<hr>" . "<br>";

echo "<h2>Passagem de parâmetro por valor:</h2>";

$a = 10;

function trocaValor($b){

	 $b += 50;
	 return $b;
}

//Variável chamada fora da função, valendo 10.
echo $a . "<br>";

//Variável chamada de dentro da função, valendo 60.
echo trocaValor($a) . "<br>";

//Variável chamada fora da função novamente, para constatar que ela ainda vale 10, e que só é alterada dentro do escopo da função.
echo $a . "<br>";

echo "<hr>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";

echo "<h2>Passagem de parâmetro por referência:</h2>";

$c = 10;

function trocaValor02(&$d){ // O & indica que a função está sendo passada por referência.

	 $d += 50;
	 return $d;
}

//Variável chamada fora da função, valendo 10.
echo $c . "<br>";

//Variável chamada de dentro da função, valendo 60.
echo trocaValor02($c) . "<br>";

//Variável chamada fora da função novamente, para constatar que agora ela vale 60, pois foi passada a referência de onde ela estava alocada na memória e foi efetuada a função sobre ela.
echo $c . "<br>";

echo trocaValor02($c) . "<br>";
echo trocaValor02($c) . "<br>";
echo trocaValor02($c) . "<br>";
echo trocaValor02($c) . "<br>";

echo $c . "<br>";

echo "<hr>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";

echo "<h2>Mais exemplos sobre passagens por referência</h2>";

$pessoa = array(

	'nome'=>"Sakura Chan",
	'idade'=>22
); 

// Um foreach com um & comercial, sinalizando a passagem por referência no valor do array.

foreach ($pessoa as &$value) {

// Função gettype, para pegar o tipo de dado de $value, se for inteiro, recebe $value += 10.

	if (gettype($value) === 'integer') $value += 10; 
		
	echo $value . '<br>';
}

print_r($pessoa);

?>