<?php

echo "<hr><h1><center>PDO: Atualizando Dados De Uma Tabela:</center></h1><hr>";

$conn3 = new PDO("mysql:dbname=dbphp8;host=localhost", "root", "");

$stmt = $conn3->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :id");

$login = "Caramujo Africano";
$password = "CaraAfri";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":id", $id);

$stmt->execute();

echo "<hr><h3><center> Dados Atualizados Com Sucesso! </center></h3><hr>";

?>