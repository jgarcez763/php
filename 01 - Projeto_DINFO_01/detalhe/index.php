<?php 
    if (!isset($_GET['id'])){
        header('location: ../listar');
    }
    session_start();
    include_once("..\database\Conexao.php");
    $id = $_GET['id'];
    $Result_Tbprojeto = "SELECT * FROM tabela_projetos WHERE ID_Projeto = '$id'";
    $result = $conn -> query($Result_Tbprojeto);
    		include_once("..\HTML\Menu_Externo.php");
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            $id_responsavel = $row['responsavel'];
            $dateCriacao = strtotime( $row['dtAbertura'] );
            $criacao = date('d/m/Y', $dateCriacao);

            if(!$row['dtConclusao']) {
                $concluido = "Em andamento";
            }else {
                $dateConcluido = strtotime( $row['dtConclusao'] );
                $concluido = date('d/m/Y', $dateConcluido);

                

                
            }
            

            echo '<br>Nome do projeto: ' .$row['nomeProjeto'];
            echo '<br>Descriçãod o projeto: ' . $row['descricao'];
            echo '<br>Data de Criação do projeto: ' . $criacao;
            echo "<br>Data de conclusão: $concluido";

            $responsavel = $conn -> query("SELECT * FROM usuario WHERE id = $id_responsavel");
            while($dados = $responsavel->fetch_assoc()) {

                echo '<br>Responsavel pelo projeto: '. $dados['nome'];

            }



    }
    }
    else{
        header('location: ../listar');
    }
?>
<br>
<br>

<form action="criarAtividade.php" method="post">
<input type="text" name="Nome_Ativ" placeholder="Nome da Atividade">
<input type="hidden" name="FK_Id_Projeto" value="<?php echo $id;?>">
Data prevista para terminar<input type="date" name="dtConcPrev" placeholder="Data prevista para termianr">
<button type="submit"> Cadastrar </button>
</form>

<?php 
$Result_TbAtividade = "SELECT * FROM tabela_atividades_projeto WHERE Fk_Id_Projeto = '$id'";
$atividades = $conn -> query($Result_TbAtividade);
?>
<ul>
    <?php
            if ($atividades->num_rows > 0) {
                // output data of each row
                while($atividade = $atividades->fetch_assoc()) {
                    
                    echo '<li>';

                        echo $atividade['Nome_Ativ'];

                        echo '<a href="#"> Concluir </a>';
                    echo '</li>';

                }
            }
    ?>
</ul>