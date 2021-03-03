<?php

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

?>