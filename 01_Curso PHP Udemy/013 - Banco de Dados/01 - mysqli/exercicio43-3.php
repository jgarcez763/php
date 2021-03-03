<?php

echo "<hr><h1>Classe Mysqli e o PHP7 - PT2:</h1><hr>";

// mysqli É UMA CLASSE NATIVA DO PHP, AS RESPCTIVAS INFORMAÇÕES SÃO: SERVIDOR, USUÁRIO, SENHA E O BANCO QUE VAI SER ACESSADO:
$conn = new mysqli("localhost", "root", "", "dbphp8");

if($conn->connect_error)

{
	echo "Error " . $conn->conect_error;
}

echo "<hr><h2>Retornando os dados da tabela em json:</h2><hr>";

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC))

{
	array_push($data, $row);
	var_dump($row);
}

echo json_encode();

?>