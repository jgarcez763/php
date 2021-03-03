<?php

echo "<h1>Constante com Array:</h1>";

define("BANCO_DE_DADOS", [
	'127.0.0.1',
	'root',
	'password',
	'test',
]);

print_r(BANCO_DE_DADOS);

echo "<hr>";
////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";

echo "<h2>Constantes já definidas pelo PHP:</h2>";

// Exibe a versão que está sendo usada pelo PHP.
echo PHP_VERSION;

echo "<br>"; 

// Barra de separação de diretório do Windows "\" para quando for migrar para base linux, onde a barra é ao contrário.
echo DIRECTORY_SEPARATOR; 

?>