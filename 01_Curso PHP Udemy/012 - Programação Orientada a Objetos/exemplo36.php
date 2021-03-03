<?php

echo "<hr><h1> Encapsulamento: </h1><hr>";

class Pessoa

{
	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados()

	{
		echo $this ->nome . "<br>";
		echo $this ->idade . "<br>";
		echo $this ->senha . "<br>";

	}

}

echo "<h2>Objeto chamando o atributo diretamente:</h2><h3>(Só o que for público, pode ser chamado)</h3>";
$objeto = new Pessoa();
echo $objeto ->nome . "<br>";
/*echo $objeto ->idade;
echo $objeto ->senha;
*/
echo "<h2>Objeto invocando o método verDados:</h2>";
$objeto ->verDados();

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


echo "<hr><h1> Encapsulamento Com Extenção de Classes (Herança): </h1><hr>";

class Pessoa02

{
	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados()

	{
		echo $this ->nome . "<br>";
		echo $this ->idade . "<br>";
		echo $this ->senha . "<br>";

	}

}

// CLASSE PROGRAMADOR QUE EXTENDE DA CLASSE PESSOA02 
class Programador extends Pessoa02

{
// AO REPETIR O MÉTODO VERDADOS NA CLASSE HERDADA PROGRAMADOR, AO INSTANCIAR O OBJETO, O MÉTODO SERÁ INVOCADO DE PROGRAMADOR.
	public function verDados()

	{	
		// COMANDO QUE INFORMA DE QUAL CLASSE O MÉTODO ESTÁ SENDO CHAMADO.
		echo "O método está sendo chamado de " . get_class($this) . "<br>";

		echo $this ->nome . "<br>";
		echo $this ->idade . "<br>";
		echo $this ->senha . "<br>";

	}


}
// OBSERVAMOS QUE APENAS O ATRIBUTO PÚBLICO E PROTEGIDO FORAM EXIBIDOS, O PRIVADO NÃO PODE SER EXIBIDO EM CLASSES DE HERANÇA.
$objeto02 = new Programador();
$objeto02 ->verDados();

?>