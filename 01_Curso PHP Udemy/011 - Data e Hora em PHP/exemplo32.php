<?php

echo "<h1> Definindo a Configuração Regional Com Setlocale: </h1>";

// Mudar as configurações de localização para português PT-BR.
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

// Mesmo padrão do date(), mas com formatações diferentes. 
echo strftime("%A 07 de %B");

/* Como podemos ver no exemplo acima, %A se refere aos dias da semana por extenso
 E %B se refere ao mês do ano escrito por extenso.*/

echo "<br><br><hr><br>";

// Para que as iniciais comecem em maiúsculas, é colocar um 'ucwords', exemplo:
echo ucwords(strftime("%A 07 de %B"));

echo "<br><br><hr>";

echo "<h1> Classe DateTime: </h1>";

// NESSA LINHA 24, EU ESTOU INSTANCIANDO UM NOVO DATETIME ATRAVÉZ DA VARIÁVEL $dt:
$dt = new datetime();
// AQUI ESTOU FORMATANDO A VÁRIÁVEL JÁ INSTANCIADA PARA O FORMATO DATETIME:
echo $dt -> format("d/m/Y H:i:s");

echo "<br><br><hr>";

ECHO "<h2> Manipulando o tempo sobre a data atual: </h2>";

// AQUI NESTA LINHA 31, EU ESTOU CRIANDO UMA INSTÂNCIA DE DATEINTERVAL PARA $PERIODO, ONDE P É O PERIODO E D SÃO OS DIAS, PORTANTO PERIODO DE 15 DIAS.
$periodo = new dateinterval("P15D");

// AQUI EU ESTOU ADICIONANDO O PARÂMETRO $periodo EM $dt.
$dt -> add($periodo);

// AO INVOCAR $dt JÁ FOI ACRESCENTADO MAIS 15 DIAS SOBRE A DATA. 
echo $dt -> format("d/m/Y H:i:s");

?>