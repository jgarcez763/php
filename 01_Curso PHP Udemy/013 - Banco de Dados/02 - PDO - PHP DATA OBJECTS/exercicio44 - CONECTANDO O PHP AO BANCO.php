<?php

echo "<hr><h1>Conectando o PHP 7 com MySQL usando PDO:</h1><hr>";

// PDO = PHP DATA OBJECT - É UMA CLASSE ESPECIALMENTE DESENVOLVIDA PARA TRABALHAR COM PROCEDIMENTOS RELACIONADOS À BANCO DE DADOS:

$conn = new PDO("mysql:dbname=dbphp8; host=localhost", "root","");

// USO DA CONSTANTE PREPARE, SELECIONANDO A TABELA POR ORDEM DE DESLOGIN:

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

// EXECUÇÃO DO COMANDO:

$stmt->execute();

// FATIANDO AS LINHAS COM FETCHALL, LOGO EM SEGUIDA: 

$result = $stmt->fetchALL(PDO::FETCH_ASSOC);

//var_dump($result);

foreach ($result as $row)

{
	foreach ($row as $key => $value) 

	{
		echo "<strong>" . $key . ":</strong>" . $value . "<br>";	
	}

echo "===============================+><br>";

}

?>