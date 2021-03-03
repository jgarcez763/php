<?php

echo "<h2>Escopo de Variáveis:</h2>";
$nome = "Johnny Garcêz";

/*function teste01() {

	echo $nome;

}*/

// Como a variável $nome foi definida fora do escopo da função, no momento em que a função foi invocada na linha 22(teste01()) retornou msg de variável indefinida, pois o escopo de ação da variável é dentro ou fora da função, dependendo de onde a váriavel foi definida.

/////////////////////////////////////////////////////////////////////////////////////////

function teste02() {

	global $nome;
	echo $nome . " - " . "Chamando de dentro da função do teste2 com o global";
}

// O global faz com que a variável que foi definida fora da função seja chamada dentro da função

//teste01();
teste02();

?>