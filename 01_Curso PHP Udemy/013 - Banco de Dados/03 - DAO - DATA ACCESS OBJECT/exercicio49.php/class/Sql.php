<?php

echo "<hr><h1><center>PDO - DAO - Data Access Object:</center></h1><hr>";

// UMA CLASSE "SQL" QUE ESTENDE DE PDO, QUE É UMA CLASSE NATIVA DO PHP.

class Sql extends PDO 

{
	private $conn;

// MÉTODO CONSTRUCT CRIADO, PARA ASSIM QUE UM NOVO OBJETO FOR INSTANCIADO JÁ SEJA CONECTADO AO BANCO DE DADOS.

	public function __construct()

	{
		$this->conn = new PDO("mysql:dbname=dbphp8;host=localhost", "root", "");
	}

	private function setParams($statment, $parameters = array())

	{
		foreach ($parameters as $key => $value) 

		{
			$this->setParam($statment, $key, $value);	
		}

	}

	private function setParam($statment, $key, $value)

	{
		$statment->bindParam($key, $value);
	}

	public function query($rawQuery, $params = array())

	{	// COMO É UMA CLASSE ESTENDIDA DE PDO, É POSSÍVEL O USO DO PREPARE:
		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
	}

	public function select($rawQuery, $params = array()):array

	{
		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

}

// ESSE CÓDIGO ESTÁ DANDO CONFLITO COM A VERSÃO 8 DO PHP, NA VERSÃO 7 ELE RODA NORMALMENTE.

?>