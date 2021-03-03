<?php

echo "<h1>Funções no PHP 7 - Novidades!</h1>";

echo "<h2>Fazendo soma automática de múltiplos valores com inteiros - (Declaração de tipos escalares):</h2>";

function soma(int ...$valores){

	return array_sum($valores);
}

	echo soma(2, 2) . "<br>";
	echo soma(1739, 1234) . "<br>";
	echo soma(50.4, 30.4) . "<br>";
	echo soma(5, 5, 5, 5, 5) . "<br>";

echo "<br><hr>";
///////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";

echo "<h2>Fazendo soma automática de múltiplos valores com float - (Declaração de tipos escalares):</h2>";

function float(float ...$valores2){

		return array_sum($valores2);
}
	echo float(5.5, 4.7, 7.9) . "<br>";
	echo float(4.4, 5.5, 4.8) . "<br>";
	echo float(8.5, 18.7, 66.9) . "<br>";
	echo float(4.4, 15, 4.8) . "<br>";

echo "<br><hr>";
///////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";

echo "<h2>Conversão do tipo no retorno dos dados:</h2>";

function trocaTipo(int ...$valores3):string { // Esse trecho do código (:string) faz a conversão do tipo de dado de int para string.

		return array_sum($valores3);

}

echo trocaTipo(35, 32, 19) . "<br>";
echo trocaTipo(10, 10, 30) . "<br>";
echo trocaTipo(35, 32, 19) . "<br>";
echo var_dump(trocaTipo(10, 10, 30)); // O var_dump(); confirma a conversão de dado de int para string, mesmo os valores sendo numéricos.

?>