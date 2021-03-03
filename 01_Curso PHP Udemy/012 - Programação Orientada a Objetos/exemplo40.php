<?php

echo "<hr><h1> Polimorfismo: </h1><hr>";

abstract class Animal

{
	public function falar()

	{
		return "Som";
	}

	public function movimento()

	{
		return "Anda";
	}
}

class Cachorro extends Animal

{
	public function falar()

	{
		return "Late, Uiva";
	}
}

class Gato extends Animal

{
	public function falar()

	{
		return "Mia";
	}
}

class Passaro extends Animal

{
	public function movimento()

	{
		return "Voa, " . parent::movimento(); // PALAVRA RESERVADA PARENTE PARA CHAMAR UM MÉTODO DA CLASSE PAI, OS :: POIS ESTÁ ACESSANDO O MÉTODO ESTÁTICO.
	}

	public function falar()

	{
		return "Canta, Pia, Cacareja, Pode reproduzir sons humanos";
	}
}

echo "<u><h3>Caracteristicas do Cachorro:</h3></u>";

$Pluto = new Cachorro();
echo $Pluto->falar();
echo "<hr>";
echo $Pluto->movimento();
echo "<hr>";

echo "<u><h3>Caracteristicas do Gato:</h3></u>";

$Garfield = new Gato();
echo $Garfield->falar();
echo "<hr>";
echo $Garfield->movimento();
echo "<hr>";

echo "<u><h3>Caracteristicas do Passaro:</h3></u>";

$Pica_pau = new Passaro();
echo $Pica_pau->falar();
echo "<hr>";
echo $Pica_pau->movimento();
echo "<hr>";

?>