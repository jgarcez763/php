<?php
echo "<h2>Tipos Básicos</h2>";

echo "<h3>String:</h3>";

$nome = "Johnny";
$site = 'google.com.br';

echo "<h3>Inteiro:</h3>";

$ano = 1992;
$mes = 03;

echo "<h3>Ponto Flutuante:</h3>";

$salario = 5500.99;

echo "<h3>Booleano:</h3>";

$bloqueado = false;

//////////////////////////////////////////////////////////////////////////

echo "<h2>Tipos Compostos</h2>";

echo "<h3>Array:</h3>";

$frutas = array ("abacaxi", "laranja", "manga");
echo $frutas[2];

echo "<h3>Objeto:</h3>";
$nascimento = new datetime();
echo "<br/>"; //Quebra de linha!
var_dump($nascimento);

//////////////////////////////////////////////////////////////////////////

echo "<h2>Tipos Especiais</h2>";

echo "<h3>Resources:</h3>";

$arquivo = fopen("exemplo03.php", "r");
var_dump($arquivo);

echo "<h3>Nulo:</h3>";
$nulo = null;
$vazio = ""

?>