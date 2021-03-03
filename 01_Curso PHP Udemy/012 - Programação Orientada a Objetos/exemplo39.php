<?php

echo "<hr><h1>Classe Abstrata:</h1><hr>";

interface Veiculo 

{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function engatarMarcha($marcha);
}

abstract class Automovel implements Veiculo

{
		public function acelerar($velocity)

	{
		echo "O veículo atingiu a marca de " . $velocity . " km/h"; 
	}  

		public function frenar($frenar)

	{
		echo "O veículo frenou na velocidade de " . $frenar ." km/h";
	}

	public function engatarMarcha($marcha)

	{
		echo "O veículo engatou a marcha " . $marcha . " !"; 
	}

}

class Logan extends Automovel

{
	public function abrirPortaf($frente)

	{
		echo "Esse comando destrava as " . $frente . " portas da frente do veículo";
	}

	public function abrirPortat($traseira)

	{
		echo "Esse comando destrava as " . $traseira . " portas de trás do veículo";
	}

}

$Logan = new Logan();
$Logan->acelerar(200);
echo "<hr>";
$Logan->frenar(50);
echo "<hr>";
$Logan->abrirPortaf(2);
echo "<hr>";
$Logan->abrirPortat(2);
echo "<hr>";

echo "<br><br>";

echo "<hr><h2>Não é possível instanciar objetos da classe abstrata, como é demonstrado a seguir:</h2><hr>";

$camaro = new Automovel();
$camaro->acelerar(200);

?>