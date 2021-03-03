<?php

$nome = "Getsuga";

$nome2 = 'Tenshou';

var_dump($nome);
echo "</br>";

var_dump($nome2);
echo "</br>";

echo "</br>" . "Ou" . "</br>" . "</br>";
var_dump($nome, $nome2);
echo "</br>";

//Aqui veremos a diferença entre aspas duplas e aspas simples:

////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<h3>Interpolação de Variáveis:</h3>";

echo "Se uma váriável estiver escrita dentro de aspas duplas é retornado o valor da váriável, exemplo:";
$nome01 = "Kakaroto </br>";
echo "</br>" . "O nome dele é $nome01" . "</br>";

echo "Se uma váriável estiver escrita dentro de aspas simples é retornada a variavel e não o valor atribuído, exemplo:";
echo '</br> O nome dele é $nome01 </br>';

////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<h3>Transformando Texto em Letras Maiuscúlas:</h3>";

$nome02 = "kakaroto goku";
echo strtoupper($nome02);
echo "</br>";

$nome03 = "PRINCIPE VEGETA";

echo "<h3>Transformando Texto em Letras Minuscúlas:</h3>";
echo strtolower($nome03);
echo "</br>";

echo "<h3>Transformando a Primeira Letra de uma Palavra Maiuscúla:</h3>";
echo ucfirst($nome02);
echo "</br>";

echo "<h3>Transformando a Primeira Letra de cada nome em Maiuscúla:</h3>";
echo ucwords($nome02);
echo "</br>";

////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<h3>Mudando caracteres de uma palavra:</h3>";

$nome04 = "Jubileu";

$nome04 = str_replace("i","1", $nome04);
echo $nome04;
echo "</br>";

echo "<h3>substituindo uma palavra por outra:</h3>";

$nome04 = str_replace("Jub1leu","Jurema", $nome04);
echo $nome04;
echo "</br>";

echo "<h3>substituindo uma palavra por uma variável:</h3>";

$nome04 = str_replace("Jurema","$nome02", $nome04);
echo $nome04;

////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<h3>Retornando a posição de uma palavra por busca:</h3>";

echo $therat = "O rato roeu a roupa do rei de roma";
$rat = strpos($therat, "rei");
echo "</br>";
var_dump($rat);

echo "<h3>Retornando um fragmento de texto pela posição atual/final:</h3>";

$inirat = substr($therat, "0", "$rat");
var_dump($inirat);

echo "<h3>Contando o texto até determinado ponto, ignorando uma palavra ou fragmento de texto específico 
e escrevendo o restante:</h3>";

$king = "rei";
$initrat02 = substr($therat, "$rat" + strlen($king), strlen($therat));
var_dump($initrat02);


////////////////////////////////////////////////////////////////////////////////////////////////////////


?>