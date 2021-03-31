<?php
    session_start();
    include_once("..\database\Conexao.php");
    if (!isset($_GET['id_atividade'])){
        header('location: ../listar');
    }
    $id_projeto = $_GET['id_projeto'];
    $id_atividade = $_GET['id_atividade'];


    $Result_TbAtividade = "SELECT * FROM tabela_atividades_projeto WHERE ID_Ativ_Projeto = '$id_atividade'";
    $atividades = $conn -> query($Result_TbAtividade);

    if ($atividades->num_rows > 0) {
                

        // output data of each row
        while($atividade = $atividades->fetch_assoc()) {
            $export_data = $atividade;
            $id_usuario_atividade = $atividade['Fk_ID_Usuario'];
            
            $dateStr = strtotime( $export_data['dtConcPrev']  );
            $export_data['dtConcPrev'] = date('Y-m-d', $dateStr);
            
            
            if ($atividade['dtConcEfet'] != null){
                header("location: ..\detalhe\?id=$id_projeto");

            }else{
                $concluido = false;
            }
            
            if($id_usuario_atividade != $_SESSION['id']){
                header("location: ..\detalhe\?id=$id_projeto");
                }

             //var_dump($atividade);
        }
    }


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../detalhe/style.css">
    <title>Editar Atividade</title>
</head>
<body>
<?php
    		include_once("..\HTML\Menu_Externo.php");
?>
<div id="atividades-container">

<form action="updateAtividade.php" method="post">
<b>Nome da atividade</b>
<input type="text" name="Nome_Ativ" value="<?= $export_data['Nome_Ativ']?>">
<b>Data prevista para terminar</b>
<input type="date" name="dtConcPrev" value="<?= $export_data['dtConcPrev']?>">
<input type="hidden" name="id_Atividade" value="<?= $id_atividade ?>">
<input type="hidden" name="FK_Id_Projeto" value="<?= $id_projeto ?>">


<b>Descrição da atividade</b>
<input type="text" name="descicao" value="<?= $export_data['descricao'] ?>">
<button type="submit"> Salvar </button>
</form>
</div>
</body>
</html>