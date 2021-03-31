
<?php session_start();

include_once("../database/Conexao.php");



$nome = filter_input(INPUT_POST, 'Nome_Ativ', FILTER_SANITIZE_STRING);
$id_projeto = filter_input(INPUT_POST, 'FK_Id_Projeto', FILTER_SANITIZE_STRING);
$dtConcPrev = filter_input(INPUT_POST, 'dtConcPrev', FILTER_SANITIZE_STRING);

$id_atividade = filter_input(INPUT_POST, 'id_Atividade', FILTER_SANITIZE_STRING);


$desc = filter_input(INPUT_POST, 'descicao', FILTER_SANITIZE_STRING);


$updAtividade = "UPDATE tabela_atividades_projeto SET Nome_Ativ='$nome', dtConcPrev='$dtConcPrev', descricao='$desc' WHERE ID_Ativ_Projeto='$id_atividade'";
$update = mysqli_query($conn, $updAtividade);

var_dump($id_atividade);

if ($update) {
    echo "
    <script> 
    alert('Dados Alterados com Sucesso')  
    window.location.href = '$home\detalhe\?id=$id_projeto'  
    </script>";
    
    
                
  } else {
    echo "
    <script> 
    alert('Erro ao Salvar')  
    window.location.href = '$home\detalhe\?id=$id_projeto'  
    </script>";
  }