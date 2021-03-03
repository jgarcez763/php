<?php

echo "<hr><h1>Interface:</h1><hr>";

// INTERFACE É UM MODELO|BASE, QUE SERVIRÁ DE APOIO PELAS CLASSES QUE IRÃO IMPLEMENTAR UM CÓDIGO QUE ESTEJA RELACIONADO A INTERFACE CRIADA.  

interface Veiculo 

{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

// A CLASSE CIVIC IMPLEMENTA A INTERFACE VEICULO:

class Civic implements Veiculo

{
	public function acelerar($veloc)

	{
		echo "A velocidade do veículo atingiu " . $veloc . "km/h";
	}

	public function frenar($velocfr)

	{
		echo "O frenagem do veículo atingiu " . $velocfr . "km/h";
	}

	public function trocarMarcha($marcha)

	{
		echo "O veículo engatou a marcha " . $marcha . "!";
	}
}

$Carro001 = new Civic();
$Carro001->trocarMarcha(1);
echo "<hr>";
$Carro002 = new Civic();
$Carro002->acelerar(170);
echo "<br>";
$Carro002->frenar(15);
echo "<br>";
$Carro002->trocarMarcha("ponto morto");
echo "<hr><br>";

?>