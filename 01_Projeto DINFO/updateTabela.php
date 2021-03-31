<?php
include('config.php');
include('database/Conexao.php');


$atividades = "ALTER TABLE tabela_atividades_projeto ADD `dtAbertura` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP";

if (!$conn->query($atividades)) {
    echo "Erro na criação da Tabela Projetos";
}else{
    echo "Alterado";
}

header("Location: ./");