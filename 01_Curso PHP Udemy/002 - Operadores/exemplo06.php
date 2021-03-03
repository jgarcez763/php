<?php

echo "<h2>Operadores PHP:</h2>";
echo "<h3>Operadores de String:</h3>";

$nome = "Zangetsu"; // = É um operador de atribuição.
echo $nome . " " . "Alguma coisa"; // . É um operador de concatenação.

echo "</br>";

$nome .= " " . "Bankai"; // .= Significa usar a mesma váriável e mais o que vem após. (Concatenação + Atribuição). 
echo $nome;

echo "</br>";
$valorTotal = 0;
$valorTotal += 100;
$valorTotal += 25;
$valorTotal *= 0.2;
echo $valorTotal;

//////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<h3>Operadores Aritméticos:</h3>";

$a = 10;
$b = 5;

echo "a = 10 e b = 5" . "</br>" . "</br>";

echo $a + $b . " " . "É a soma de a + b" . "</br>";

echo $a - $b . " " . "É a diferença de a - b" . "</br>";

echo $a * $b . " " . "É a multiplicação de a * b" . "</br>";

echo $a / $b . " " . "É a divisão de a / b" . "</br>";

echo $a % $b . " " . "É o módulo de a % b" . "</br>";

echo $a ** $b . " " . "É a potenciação de a elevado a b" . "</br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<h3>Operadores de Comparação:</h3>";

$x = 30;
$y = 55;
$z = 55;

echo "x = 30, y = 55 e z = 55" . "</br>" . "</br>";

echo "x > y" . " é "; 
var_dump($x > $y);
echo "</br>";

echo "x < y" . " é ";
var_dump($x < $y);
echo "</br>";

echo "x é igual (==) a y?" . " é ";
var_dump($x == $y);
echo "</br>";

echo "y é igual (==) a z?" . " é ";
var_dump($y == $z);
echo "</br>";

echo "<h4>== faz a comparação entre valores e não entre tipos, por exmplo: 55 é == a 55, mas 55 não é == a 55.0</h4>";

echo "x é idêntico a y" . " é ";
var_dump($x === $y);
echo "</br>"; 

echo "<h4>=== faz comparação de identidade dos tipos de dados, por exemplo: int === int, string === string</h4>";

echo "x é diferente de y" . " é ";
var_dump($x != $y);
echo "</br>"; 

echo "o tipo de dado de x é diferente do tipo de dado de y" . " é ";
var_dump($x !== $y);
echo "</br>"; 

//////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<h3>Operadores PHP 7</h3>";
echo "Operador Space Ship <=>:" . "</br> </br>";

echo "Se a primeira variável for maior retorna 1, se forem iguais retorna 0 e se a segunda for maior, retorna -1" . "</br>";
echo "x <=> y" . " retorna " . "</br>";
var_dump($x <=> $y);
echo "<br>" . "</br>";

echo "Operador Null Coalescing ??:" . "</br>" . "</br>";
echo "Ele vasculha as variáveis, se for nula ele ignora até achar uma variável com valor:";
echo "</br> </br>";

$a = NULL;
$b = NULL;
$c = 10;

echo "a = NULL" . "</br>" . "b = NULL" . "</br>" . "c = 10" . "</br> </br>";

echo $a ?? $b ?? $c;

//////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<h3>Operadores Incrementais e Decrementais:</h3>";

echo "<h4>Pós-Incremento:</h4>";

$a = 10;
$a ++;
echo $a . "</br>";

echo $a -- . "</br>";
echo "</br>" . $a . "</br>";
echo $a . "</br>";


echo "<h4>Pré-Incremento:</h4>";

echo "</br>" . ++ $a . "</br>";
echo $a . "</br>";

echo "</br>" . -- $a . "</br>";
echo $a . "</br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<h3>Ordem de execução dos Operadores:</h3>";

$resultado = 10 + 3 / 2;
echo $resultado;
echo "</br>" . "Sem os () para definir qual a ordem de operação, ele executa pela ordem natural da matemática, divisão e 
multiplicação tem prioridade na execução." . "</br>";

echo "</br>";

$resultado2 = (10 + 3) / 2;
echo $resultado2;
echo "</br>" . "Agora foi executada primeiro a operação que está dentro dos parênteses." . "</br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<h3>Operadores Lógicos:</h3>";

$logico01 = (10 + 3) / 2 > 5 && 10 + 5 < 3;
var_dump($logico01);
echo "</br>";

$logico02 = (10 + 3) / 2 > 5 && 10 + 5 < 20;
var_dump($logico02);
echo "</br>";

echo "O && é o mesmo que 'e' e significa que todas as expressões tem que ser verdadeiras para para que toda a expressão seja 
verdadeira, se uma das partes da expressão for falsa, todo o restante será falso." . "</br>" . "</br>";

$logico01 = (10 + 3) / 2 > 5 || 10 + 5 < 3;
var_dump($logico01);
echo "</br>";

$logico02 = (10 + 3) / 2 > 5 || 10 + 5 < 20;
var_dump($logico02);
echo "</br>";

echo "O || é o mesmo que 'ou' e significa que ou uma ou outra parte da expressão se for verdadeira o resultado será verdadeiro ao 
retornar o valor booleano.";

//////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<h3>Operador Ternário:</h3>";

$qualAidade = 14;
$menorIdade = 12;
$maiorIdade = 18;
$melhorIdade = 65;

echo ($qualAidade < $maiorIdade)?"Adolescente":"Maior de Idade";
// Esse é um operador de condição, onde (fica a condição), ? = então e : = senão. 

?>