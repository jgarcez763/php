<?php

// NAMESPACE POSSUI UMA FUNÇÃO IDENTICA AO INCLUDE:
namespace Cliente;
// \CADASTRO SIGNIFICA QUE O ARQUIVO QUE SERÁ ACESSADO ESTÁ EM OUTRO DIRETÓRIO:
class Cadastro extends \Cadastro

{
	public function registrarVenda()

	{
		echo "Foi registrada uma venda para o cliente: " . "<br>" . $this->getNome();
	}

}

?>