<?php

echo "<hr><h1><center>DAO - Select:</center></h1><hr>";

class Usuario 

{
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;
	public $horaAtual;

	// DECLARAÇÃO DOS MÉTODOS SETTERS:

	public function setIdusuario($idusuario)

	{
		$this->idusuario = $idusuario;
	}


	public function setDeslogin($deslogin)

	{
		$this->deslogin = $deslogin;
	}	


	public function setDessenha($dessenha)

	{
		$this->dessenha = $dessenha;
	}

	public function setDtcadastro($dtcadastro)

	{
		$this->dessenha = $dtcadastro;
	}

	// DECLARAÇÃO DOS MÉTODOS GETTERS:


	public function getIdusuario()

	{
		return $this->idusuario;
	}


	public function getDeslogin()

	{
		return $this->deslogin;
	}	


	public function getDessenha()

	{
		return $this->dessenha;
	}

	public function getDtcadastro()

	{
		return $this->dtcadastro;
	}

	//CRIAÇÃO DO MÉTODO DE EXIBIÇÃO DOS DADOS:

	public function exibirDados()

	{
		echo "O ID desse usuário é: " . $this->idusuario . "<hr>"   
	
		. "O login desse usuario é: " . $this->deslogin . "<hr>" . "A senha desse usuario é: "

		. $this->dessenha . "<hr>" . "E a data de cadastro é: " . $this->dtcadastro . "<hr>";
	
	}

}

$horaAtual = new DateTime();
$cadastro001 = new Usuario();

$cadastro001->setIdusuario(001);
$cadastro001->setDeslogin("Login001");
$cadastro001->setDessenha("Senha001");
$cadastro001->setDtcadastro("");

$cadastro001->exibirDados();

//$cadastro001->exibirDados();

?>