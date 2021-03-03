<?php

echo "<hr><h1>Classe Mysqli e o PHP7 - PT2:</h1><hr>";

// mysqli É UMA CLASSE NATIVA DO PHP, AS RESPCTIVAS INFORMAÇÕES SÃO: SERVIDOR, USUÁRIO, SENHA E O BANCO QUE VAI SER ACESSADO:
$conn = new mysqli("localhost", "root", "", "dbphp8");

if($conn->connect_error)

{
	echo "Error " . $conn->conect_error;
}

echo "<hr><h2>Retornando os dados da tabela em array:</h2><hr>";

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
// OBS: PODE-SE USAR O COMANDO FETCH_ASSOC SEM PARÂMETROS, FUNCIONA DA MESMA FORMA.
// OBS2: O COMANDO FETCH_ARRAY CONVERTE OS DADOS EM ARRAY.
// OBS3: A CONSTANTE PRÉ-DEFINIDA MYSQLI_ASSOC LISTA OS DADOS PUROS DA TABELA, DESCARTANDO OS ÍNDICES E DEMAIS INFORMAÇÕES DO ARRAY.
while ($row = $result->fetch_array(MYSQLI_ASSOC))

{
	var_dump($row);
}

?>