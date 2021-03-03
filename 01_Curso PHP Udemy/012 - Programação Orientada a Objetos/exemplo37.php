<?php

echo "<hr><h1>Herança:</h1><hr>";

class Documento 

{
	private $numero;

	public function setNumero($n)

	{
		$this ->numero = $n;
	}

	public function getNumero()

	{
		return $this ->numero;
	}
}

class Cpf extends Documento 

{
	//VALIDA O CPF E RETORNA EM BOOLEANO
	public function validar():bool
	
	{
		$numeroCpf = $this ->getNumero();
		return true;
	}	
}

$doc = new Cpf;

$doc ->setNumero("112233445-66");

var_dump($doc ->validar());

echo "<br>";

echo $doc ->getNumero();

?>