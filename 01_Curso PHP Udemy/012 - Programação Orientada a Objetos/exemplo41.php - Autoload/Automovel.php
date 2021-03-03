<?php

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

?>