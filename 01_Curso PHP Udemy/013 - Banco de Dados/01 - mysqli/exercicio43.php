<?php

echo "<hr><h1>Classe Mysqli e o PHP7:</h1><hr>";

// mysqli É UMA CLASSE NATIVA DO PHP, AS RESPCTIVAS INFORMAÇÕES SÃO: SERVIDOR, USUÁRIO, SENHA E O BANCO QUE VAI SER ACESSADO:
$conn = new mysqli("localhost", "root", "", "dbphp8");

if($conn->connect_error)

{
	echo "Error " . $conn->conect_error;
}

echo "<hr><h2>Inserção de Dados no Banco com o Prepare:</h2><hr>";

// PREPARE FAZ UM ESBOÇO PRÉVIO DO QUE SERÁ LANÇADO NO BANCO.
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");
// BIND_PARAM VAI ARMAZENAR OS TIPOS DE DADOS QUE ESTARÃO EM VALUES(?,?) E NA SEQUENCIA, OS DADOS.
$stmt->bind_param("ss", $login, $pass);

// O COMANDO BIND_PARAM SÓ RECEBE OS DADOS POR REFERÊNCIA, POR ISSO NÃO FOI PASSADO OS VALORES DIRETAMENTE COMO PARÂMETRO.
$login = "user";
$pass = "12345";

// COMANDO EXECUTE APLICA AS ALTERAÇÕES NO BANCO.
$stmt->execute();

// COM O COMANDO DO STATEMENT PRONTO, BASTA CODIFICAR A ALTERAÇÃO DESEJADA À IR AO BANCO E USAR O COMANDO EXECUTE, EXEMPLO:

$login = "karka";
$pass = "Sonamongo";

$stmt->execute();


?>