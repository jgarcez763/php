<?php

echo "<hr><h1><center>PDO: Begin Transaction, Rollback e Commit:</center></h1><hr>";

$conn4 = new PDO("mysql:dbname=dbphp8;host=localhost", "root", "");

$conn4->beginTransaction();

$stmt = $conn4->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 3;

$stmt->execute(array($id));

//$conn4->rollback();
//$conn4->commit();

if ($conn4->rollback()) 

{
	echo "<hr><h3><center> Rollback Utilizado Com Sucesso! </center></h3><hr>";
}

else

{
	echo "<hr><h3><center> Dados Deletados Com Sucesso! </center></h3><hr>";
}

/*if ($conn4->commit())

{
	echo "<hr><h3><center> Dados Deletados Com Sucesso! </center></h3><hr>";

	echo "<hr><h3><center> Commit Utilizado Com Sucesso! </center></h3><hr>";
}*/



?>