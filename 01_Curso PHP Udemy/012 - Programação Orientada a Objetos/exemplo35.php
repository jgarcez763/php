<?php


echo "<hr><h1> Métodos Mágicos: </h1><hr>";

echo "<h2> 01 - Instanciação de Objetos pelo Método Padrão: </h2>";

class Endereco 

{

	private $logradouro;
	private $numero;
	private $cidade;

	public function setLogradouro($lograd)
	
	{
		$this ->logradouro = $lograd;
	}

	public function setNumero($num)

	{
		$this ->numero = $num;
	}

	public function setCidade($cid)

	{
		$this ->cidade = $cid;
	}

	public function getLogradouro()

	{
		return $lograd;
	}

	public function getNumero()

	{
		return $num;
	}

	public function getCidade()

	{
		return $cid;
	}

	public function formataEndereco()

	{
		return "O Endereço deste morador é {$this ->logradouro} Número {$this ->numero} da Cidade de {$this ->cidade}"; 
	}

}

	$morador001 = new Endereco;
	$morador001 ->setLogradouro('Rua Júpiter');
	$morador001 ->setNumero(1003);
	$morador001 ->setCidade('Mesquita');

	echo $morador001 ->formataEndereco();

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	echo "<h2> 02 - Instanciação de Objetos pelo Método Mágico do __construct: </h2>";

	class Endereco02 

	{
		private $rua;
		private $num;
		private $cid;
		
		// O MÉTODO CONSTRUCT É CHAMADO QUANDO UM NOVO OBJETO É INSTANCIADO, OS VALORES QUE O OBJETO VAI RECEBER SÃO OS QUE FORAM PASSADOS COMO PARÂMETRO NO MÉTODO DO CONSTRUCT.
		public function __construct($a, $b, $c)

		{
			$this ->rua = $a;
			$this ->num = $b;
			$this ->cid = $c;
		}

		//O MÉTODO MÁGICO TOSTRING SERÁ CHAMADO PARA CONVERTER O CÓDIGO PARA STRING, PARA SER CHAMADO VIA ECHO.
		public function __toString()

		{
			return $this->rua . ", " . $this->num . " - " . $this->cid . " "; 
		}
		
		// O MÉTODO DESTRUCT É CHAMADO QUANDO UM OBJETO É RETIRADO DA MEMÓRIA, COM O FIM DA EXECUÇÃO OU COM A CHAMADA DO MÉTODO UNSET.
		public function __destruct()
		
		{
			var_dump("DESTRUIR");
		}

	}

$meuEndereco = new Endereco02("Júpiter", 1003, "Mesquita");

echo $meuEndereco;

/*var_dump ($meuEndereco);

unset($meuEndereco);*/

?>