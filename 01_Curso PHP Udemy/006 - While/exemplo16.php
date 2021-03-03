<?php

echo "<h2>WHILE:</h2>";

echo "<h3>Geração de número randomico com parada em um número específico:</h3>";

	$condicao = true;

	while ($condicao) {

		$numero = rand(1, 10);
		
		if ($numero === 3) {
		
		echo " <br> TRÊS !!! <br> <br> ";
		$condicao =	false;

		}

			echo $numero . " " . "<br>";
		}

echo "<hr>";

///////////////////////////////////////////////////////////////////////////////////////

echo "<h3>Aplicação de desconto quando atingido um valor específico:</h3>";

	$total = 100;
	$desconto = 0.9;

	do {
		echo $total *= $desconto;
	}

	while ($total > 100);

echo "<hr>";

///////////////////////////////////////////////////////////////////////////////////////

echo "<h3>Mais exemplos de While e Do While:</h3>";


$contador = 1;

while ($contador <= 10) { 
	
	echo "Contador é $contador <br>";

	$contador++;
}

///////////////////////////////////////////////////////////////////////////////////////

echo "<hr>";

$contador = 1;

do {

	echo "Contador é $contador <br>";
	$contador++;

	} while ($contador <= 10);

///////////////////////////////////////////////////////////////////////////////////////

echo "<hr>";

?>