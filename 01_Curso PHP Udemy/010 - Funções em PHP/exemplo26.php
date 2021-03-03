<?php

echo "<h1>Funções para Usuário</h1>";

echo "<h2>Sintaxe Básica da Função:</h2>";

function Olá(){

	return "Olá Mundo!";

}

echo Olá() . "<br>";
echo Olá() . "<br>";

echo "<hr>";
//////////////////////////////////////////////////////////////////////////////
echo "<hr>";

function salario(){

	return 946.00;
}

echo "João recebe" . " R$ " . salario() * 3 . ",00";

echo "<hr>";
/////////////////////////////////////////////////////////////////////////////
echo "<hr>";

echo "<h1>Parâmetros de Funções:</h1>";

function Alô($texto = "Mundo!", $periodo = "Bom Dia!"){

	return "Alô" . " " . $texto . " " . $periodo . "<br>";

}

echo Alô();

echo Alô ("Kurilin!");

echo "Olá Bulma" . "<br>";

echo Alô("Mundo!");

echo Alô("Mundo!", "Boa noite!");

echo Alô("", "Good Morning!");

echo "<hr>";
/////////////////////////////////////////////////////////////////////////////
echo "<hr>";

echo "<h1>Func_get_args()</h1>";

function Oláá(){

	$argumentos = func_get_args();
	return $argumentos;
}

var_dump(Oláá("Bom dia!", 10));

?>