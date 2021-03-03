<?php

//Tabém conhecidos como controles de fluxo de usuários ou controles de decisão, as estruturas de controle são elementos importantíssimos e fundamentais para qualquer linguagem de programação.

echo "<h2>Estruturas Condicionais:</h2>";
 
 echo "<h1>IF com ELSE:</h1>";

 $qualSuaIdade = 30;
 $idadeCrianca = 12;
 $idadeMaior = 18;
 $idadeMelhor = 65;

if ($qualSuaIdade < $idadeCrianca){
 		echo "Criança!!!" . " ";
 }

else{
 	echo "Não é Criança! </br>";
 }

if ($qualSuaIdade > $idadeMaior){
		echo "Maior de Idade!!!" . " " . "</br>";
}

if ($qualSuaIdade > $idadeMelhor){
		echo "Melhor Idade!!!" . " ";
}

//////////////////////////////////////////////////////////////////////////////////////////////

 echo "<h1>ELSE IF:</h1>";

echo "<h3>Quando for dada mais de uma condição o ideal é usar else if:</h3>";

 $qualSuaIdade = 30;
 $idadeCrianca = 12;
 $idadeMaior = 18;
 $idadeMelhor = 65;

if ($qualSuaIdade < $idadeCrianca){
 		echo "Criança" . " ";
 }

else if ($qualSuaIdade < $idadeMaior){
		echo "Adolescente" . " " . "</br>";
}

else if ($qualSuaIdade > $idadeMaior){
		echo "Adulto" . " ";
}

else {
		echo "Idoso";
}

echo $qualSuaIdade;

?>