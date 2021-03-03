<?php
// Comentário de linha
/* Comentário de bloco*/

echo "<h1>01 - Usando Variáveis:</h1>";

//$1nome = "Jubileu"; //Errado!
$nome1 = "Jubileu"; //Certo!

echo "<br/>"; //Quebra de linha!
////////////////////////////////////////////////////////////////////////////////////////////////
echo "<h1>02 - Apagando Variáveis:</h1>";
echo "<br/>"; //Quebra de linha!
////////////////////////////////////////////////////////////////////////////////////////////////
$nome1 = "Jubileu";
unset($nome1);

// Ao tentar exibir a variável $nome1 com echo $nome1; a mesma não será exibida, pois foi apagada da memória com unset($nome1).

if (isset($nome1)) {

		echo $nome1;
}

/*if (isset($nome1)) {
		
		echo $nome1;

} Serve para verificar se uma váriável foi definida ou não e chama-la novamente.
*/
////////////////////////////////////////////////////////////////////////////////////////////////
echo "<h1>03 - Concatenando Variáveis:</h1>";
echo "<br/>"; //Quebra de linha!

$nome2 = "Johnny";
$sobrenome = "Garcêz";
$nomeCompleto = $nome2 . " " . $sobrenome;
echo $nomeCompleto;
// A Concatenação com " " foi para dar o espaço entre a variável $nome2 e a variável $sobrenome.
////////////////////////////////////////////////////////////////////////////////////////////////
echo "<h1>04 - Tipos de dados em PHP:</h1>"; 
echo "<br/>"; 
echo "<br/>";
echo "<h2>São 8 tipos de dados primitivos divididos em 3 grupos, são eles:</h2>";
echo "<br/>"; //Quebra de linha!
echo "<h3>Tipos Básicos:</h3>";
echo "<br/>"; //Quebra de linha!
echo "Inteiro (Parte Numérica)";
echo "<br/>"; //Quebra de linha!
echo "String";
echo "<br/>"; //Quebra de linha!
echo "Ponto Flutuante (Onde são postos as casas decimais dos números)";
echo "<br/>"; //Quebra de linha!
echo "Boolean (Verdadeiro ou Falso)";
echo "<br/>"; //Quebra de linha!
echo "<h3>Tipos Compostos:</h3>";
echo "Array";
echo "<br/>"; //Quebra de linha!
echo "Objeto";
echo "<h3>Tipos Especiais</h3>";
echo "Resource";
echo "<br/>"; //Quebra de linha!
echo "Null";
?>