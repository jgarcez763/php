<?php

require_once("config.php");
// USANDO ESSE COMANDO DO NAMESPACE (USE) QUE FOI CONFIGURADO NO ARQUIVO CONFIG.PHP O CÓDIGO PASSA A SER REFERÊNCIA AO CADASTRO DA PASTA CLIENTE.
use Cliente\Cadastro;

$pessoa01 = new Cadastro();

$pessoa01->setNome("Kenshin Himura");

$pessoa01->setEmail("battosai@retalhador.com");

$pessoa01->setSenha("HittenMitsurugi");

//echo $pessoa01;

//INVOCO O MÉTODO CRIADO NO CADASTRO DE CLIENTES, POIS JÁ É POSSÍVEL CHAMÁ-LO.
echo $pessoa01->registrarVenda();

?>