<?php

echo "<hr><h1><center>DAO - Select:</center></h1><hr>";

class Usuario 

{
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	// DECLARAÇÃO DOS MÉTODOS SETTERS:

	public function setIdusuario()

	{
		$this->idusuario = $value;
	}


	public function setDeslogin()

	{
		$this->deslogin = $value;
	}	


	public function setDessenha()

	{
		$this->dessenha = $value;
	}

	public function setDtcadastro()

	{
		$this->dessenha = $value;
	}

	// DECLARAÇÃO DOS MÉTODOS GETTERS:


	public function getIdusuario($idusuario)

	{
		return $this->idusuario;
	}


	public function getDeslogin($deslogin)

	{
		return $this->deslogin;
	}	


	public function getDessenha($dessenha)

	{
		return $this->dessenha;
	}

	public function getDtcadastro($dtcadastro)

	{
		return $this->dessenha;
	}

	//CRIAÇÃO DO MÉTODO DE EXIBIÇÃO DOS DADOS:

	public function exibirDados()

	{
		echo "O ID desse usuário é: " . $this->idusuario . "<hr>" . "O login desse usuario é: " . $this->deslogin . "<hr>" . "A senha desse usuario é: " . 
		$this->dessenha . "<hr>" . "E a data de cadastro é: " $this->dtcadastro . "<hr>";
	}

}

$cadastro001 = new Usuario();
$cadastro001->setIdusuario(001)
$cadastro001->setDeslogin("Login001");
$cadastro001->setDessenha("Senha001");
$cadastro001->setDtcadastro("TIMESTAMP");

$cadastro001->exibirDados();

?>