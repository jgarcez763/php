<?php

echo "<hr><h1><center>PDO: Inserindo Dados No Banco:</center></h1><hr>";

// INSTANCIANDO UMA NOVA CONEXÃO AO BANCO DE DADOS MYSQL COM O PDO:

$conn2 = new PDO("mysql:dbname=dbphp8;host=localhost", "root","");

// PREPARAÇÃO DA QUERY:

$stmt = $conn2->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "Papagaio Falastrao";
$password = "PapaFala";

// RELACIONANDO OS PARÂMETROS COM AS VARIÁVEIS POR MEIO DE BINDPARAM:

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

// EXECUÇÃO DA QUERY:

$stmt->execute();

echo "<hr><h3><center>Dados Inseridos Com Sucesso!</center></h3><hr>";

?>