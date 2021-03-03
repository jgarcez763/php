<?php

echo "<hr>";
echo "<h1> Programação Orientada a Objetos: </h1>";
echo "<hr>";

echo "<h2> 01 - Criando Uma Classe: </h2><hr>";
// TODA CLASSE DEVE SER CRIADA COM A PRIMEIRA LETRA EM MAIÚSCULA.
// SE FOR UM NOME COMPOSTO, O INÍCIO DE CADA COMPOSIÇÃO DEVE SER MAIÚSCULA.
class Pessoa {

	public $nome; // # ATRIBUTO #

	public function falar(){ // # MÉTODO #

		return "O meu nome é " .$this->nome; // $this -> SERVE PARA REFERENCIAR ATRIBUTOS DENTRO DE UM MÉTODO.

	}

}

$Johnny = new pessoa(); // CRIAÇÃO DO OBJETO $Johnny
$Johnny->nome = "Johnny Garcez";
echo $Johnny ->falar();


/////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<hr><h2> 02 - Atributos e Métodos: </h2><hr>";

class Carro {
	// DEFINIÇÃO DOS ATRIBUTOS.
	private $modelo;
	private $motor;
	private $ano;
	// MÉTODOS: TEMOS GETTERS(PEGA O VALOR DO ATRIBUTO) E SETTERS(DEFINE O VALOR DO ATRIBUTO).
	public function getModelo() {

		return $this ->modelo;

	}


	public function setModelo($modelo) {

		$this ->modelo = $modelo;

	}

	public function getMotor():float {

		return $this ->motor; 

	}

	public function setMotor($motor) {

		$this ->motor = $motor;

	}

	public function getAno():int {

		return $this ->ano;

	}

	public function setAno($ano) {

		$this ->ano = $ano;

	}
	// MÉTODO exibirCarro(){} QUE CHAMA TODOS OS OUTROS MÉTODOS (MODELO, MOTOR E ANO). 
	public function exibirCarro() {

		return array(

			"modelo" =>$this ->getModelo(),
			"motor" =>$this ->getMotor(),
			"ano" =>$this ->getAno()
		);

	}

}

// INSTANCIANDO UM NOVO OBJETO $gol.
$gol = new Carro();
$gol->setModelo("GOL GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

echo "<br> Print_r: <br><br>";

print_r($gol->exibirCarro());

echo "<br><br>";

echo "<br> Var_dump: <br><br>";

var_dump($gol->exibirCarro());

?>