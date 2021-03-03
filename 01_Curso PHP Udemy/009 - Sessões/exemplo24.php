<?php

echo "<hr><h1><center>Forçando a geração de um novo ID de sessão via programação:</center></h1><hr>";

require_once("config.php");

echo "<center>";

echo "<h2>Força o navegador a criar um novo ID de sessão para o usuário:</h2>";

session_regenerate_id();

echo "<h3>Geração do novo ID:</h3>";

echo session_id();

echo "<hr>";

echo "<h3>Exibição do Var_dump da Sessão:</h3>"; 	

var_dump($_SESSION);

echo "<hr>";

echo "</center>";

?>