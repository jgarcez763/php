<?php

echo "<h1>Link do exemplo21:</h1>";

require_once("config.php");

// (Função substituída pela do arquivo "config.php") session_start();

// Para remover uma variável de sessão sem remover a sessão do usuário: session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

// Para remover tanto a variável quanto o usuário da sessão (Tudo quanto é dado ele joga fora): session_destroy();

?>