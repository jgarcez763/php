
<?php session_start();

include_once("../database/Conexao.php");



$nome = filter_input(INPUT_POST, 'Nome_Ativ', FILTER_SANITIZE_STRING);
$FK_Id_Projeto = filter_input(INPUT_POST, 'FK_Id_Projeto', FILTER_SANITIZE_STRING);
$dtConcPrev = filter_input(INPUT_POST, 'dtConcPrev', FILTER_SANITIZE_STRING);
$Fk_Id_Usuario = $_SESSION['id'];




$Result_Consulta = "INSERT INTO tabela_atividades_projeto (Nome_Ativ, FK_Id_Projeto, dtConcPrev, Fk_Id_Usuario) 
VALUES ('$nome', '$FK_Id_Projeto', '$dtConcPrev', '$Fk_Id_Usuario')";

$Resultado_Consulta = mysqli_query($conn, $Result_Consulta);

$id = mysqli_insert_id($conn);

if (mysqli_insert_id($conn))

{

	header("location: .\?id=$FK_Id_Projeto");
}

else

{

	header("location: ..\Cadastrar");
}	


?>

?>