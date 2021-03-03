<?php

echo "<hr><h1>Incluindo classes com autoload:</h1><hr>";

function invocarClasses($nomeClasse)

{
	if(file_exists($nomeClasse.".php") === true)
	require_once($nomeClasse.".php");
}
// SPL EXECUTADA COMO STRING:
spl_autoload_register("invocarClasses");
// SPL EXECUTADA COMO FUNÇÃO ANÔNIMA:
spl_autoload_register(function($nomeClasse)

{
	if(file_exists("Teste_Diretorio". DIRECTORY_SEPARATOR .$nomeClasse.".php") === true)
	
	{
		require_once("Teste_Diretorio". DIRECTORY_SEPARATOR .$nomeClasse.".php");
	}

});

$logan2005 = new Logan();
$logan2005->acelerar(170);
echo "<hr>";
$logan2005->frenar(50);
echo "<hr>";

// IMPORTANTE -> SPL === STANDART PHP LIBRARY (OU SEJA, UMA BIBLIOTECA PHP COM VÁRIOS COMANDOS).

?>