<?php

echo "<h2>Variáveis Pré-Definidas ou Super Globais:</h2>";

echo "<h3>Obtendo uma váriável pela URL:</h3>";
$nome = $_GET["a"];

var_dump($nome);

/* O método $_GET[""] obtém as informações que são levadas até a URL(Uniform resourses locator), neste exemplo usamos o elemento que será obtido de a, e o tipo padrão de dado que será obtido será string, a não ser que seja definido como (int)$_GET[""] e podemos obter as inofrmações desse a da seguinte forma: ?a=Tchubirabiron, após o fim da url.
*/

// É possível retornar mais de uma variável pelo método $_GET[""], por exemplo: ?a=Tchubirabiron&b=Tchotchomary.

echo "<h3>Obtendo o IP do usuário que está acessando a URL:</h3>";
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;

echo "<h3>Obter a página que está sendo acessada pelo usuário:</h3>";
$pg = $_SERVER['SCRIPT_NAME'];
echo $pg;

?>