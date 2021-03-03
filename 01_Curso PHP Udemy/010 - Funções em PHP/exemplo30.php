<?php

echo "<h1> Função Anônima: </h1>";

//Processo Lento

function test($callback){

	$callback();

}

test(function(){

	echo "Terminou!";

});

echo "<br><br><hr><br><hr>";

echo "<h1> Outro Exemplo de Função Anônima: </h1>";

$f1 = function($a){

	var_dump($a);

};

$f1('Oi');

//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////

echo "<br><br><hr><br><hr>";

echo "<h1> Função 'Date': </h1>";

echo "Neste formato com 'y' minúsculo a data será apresentada com o ano em 2 dígitos.<br>";
echo date("d/m/y");

echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////

echo "Neste formato com 'Y' maiúsculo a data será apresentada com o ano em 4 dígitos.<br>";
echo date("d/m/Y");

echo "<br><br><hr><br>";

//////////////////////////////////////////////////////////////////////////////////////////////

echo "<h3> O mesmo pode ser visto com a definição das horas: </h3>";

echo "Aqui o 'H' representa hora, 'i' minuto (por ser a segunda letra de minute) e 's' segundo: <br>";
echo date("d/m/Y H:i:s");

echo "<br><br><hr><br>";

//////////////////////////////////////////////////////////////////////////////////////////////

echo "Agora a representação do formato date com as letras em maiúsculas:<br>";
echo date("D/M/Y H:i:s");

echo "<br><br><hr><br>";

echo "<h1> Função 'Time': </h1>";

// Apenas a definição da função time(); sem parâmetros, irá exibir o timestamp, que é a contagem em segundos desde 1 de janeiro de 1970.

// OBS: Timestamp é o marco zero em segundos, contados a partir do dia 01/01/1970.
echo time();

echo "<br>";

// Ao colocar o timestamp como segundo parAmento da função date, retornará a data atual do momento correspondente ao timestamp, desde 1º de janeiro de 1970.
echo date("d/m/y H:i:s" , 1607210454);

echo "<br><br><hr><br>";

echo "<h1> Convertendo uma data específica em Timestamp: </h1>";

$ts = strtotime('2001-09-11');
echo '<br>';
echo date('l, d/m/Y', $ts);

echo "<br><br><hr><br>";

echo "<h2> Outros exemplos de uso do strtotime na conversão de strings em timestamp: </h2>";

// NESSE EXEMPLO O STRTOTIME ESTÁ CONVERTENDO '+1 WEEK' PARA A PRÓXIMA SEMANA: 
$ts2 = strtotime('+1 week');
echo "<br>";
echo date('l, d/m/Y', $ts2);

echo "<br><br><hr><br>";

// NESSE EXEMPLO O STRTOTIME ESTÁ CONVERTENDO '+30 DAYS' PARA O PRÓXIMO MÊS: 
$ts3 = strtotime('+30 days');
echo "<br>";
echo date('l, d/m/Y', $ts3);

echo "<br>"."<hr><hr>"."<br>";

?>