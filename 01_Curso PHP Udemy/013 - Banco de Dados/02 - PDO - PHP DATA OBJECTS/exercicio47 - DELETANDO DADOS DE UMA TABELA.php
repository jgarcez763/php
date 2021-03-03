<?php

echo "<hr><h1><center>PDO: Deletando Dados De Uma Tabela:</center></h1><hr>";

$conn4 = new PDO("mysql:dbname=dbphp8;host=localhost", "root", "");

$stmt = $conn4->prepare("DELETE FROM tb_usuarios WHERE idusuario = :id");

$id = 19;

$stmt->bindParam(":id", $id);

$stmt->execute();

echo "<hr><h3><center> Dados Deletados Com Sucesso! </center></h3><hr>";

?>