<?php

echo "<h1>Sessão no PHP 7</h1>";

require_once("config.php");

// (Função substituída pela do arquivo "config.php") session_start();

$_SESSION['nome'] = "Saitama";

?>