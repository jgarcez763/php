<?php

require_once("config.php");

// CARREGA UM USUÁRIO:

/*
$root = new Usuario();
$root->loadById(3);
echo $root;
*/

// CARREGA UMA LISTA DE USUÁRIOS:

/*
$lista = Usuario::getList();
echo json_encode($lista);
*/

// CARREGA UMA LISTA DE USUÁRIOS POR LOGIN:

/*
$search = Usuario::search("us");
echo json_encode($search);
*/

// CARREGA UM USUÁRIO AUTENTICADO COM LOGIN E SENHA:

/*
$usuario = new Usuario();
$usuario->login("user", "12345");
echo $usuario;
*/

// CRIANDO UM NOVO USUÁRIO COM INSERT:

/*
$aluno = new Usuario("aluno", "@lun0");

// TRECHO SUBSTITUIDO PELA CRIAÇÃO DO MÉTODO CONSTRUTOR:
// $aluno->setDeslogin("aluno");
// $aluno->setDessenha("@lun0");
 
$aluno->insert();
echo $aluno;
*/

// ALTERANDO UM USUÁRIO NA TABELA

/*
$usuario = new Usuario();
$usuario->loadById(28);
$usuario->update("Professor", "senhadoprofessor");
echo $usuario$;
*/

$usuario = new Usuario();
$usuario->loadById(28);
$usuario->delete();
echo $usuario;

?>