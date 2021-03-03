<?php

echo "<hr><h1><center>DAO - Select:</center></h1><hr>";

class Usuario 

{
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	// DECLARAÇÃO DOS MÉTODOS SETTERS:

	public function setIdusuario($value)

	{
		$this->idusuario = $value;
	}


	public function setDeslogin($value)

	{
		$this->deslogin = $value;
	}	


	public function setDessenha($value)

	{
		$this->dessenha = $value;
	}

	public function setDtcadastro($value)

	{
		$this->dtcadastro = $value;
	}

	// DECLARAÇÃO DOS MÉTODOS GETTERS:


	public function getIdusuario()

	{
		return $this->idusuario;
	}


	public function getDeslogin()

	{
		return $this->deslogin;
	}	


	public function getDessenha()

	{
		return $this->dessenha;
	}

	public function getDtcadastro()

	{
		return $this->dessenha;
	}

	// CRIAÇÃO DE UM MÉTODO EXTRA:

	public function loadById($id)

	{
		
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuario WHERE idusuario = :ID", array(

			":ID" =>$id

		));
	
		// UM IF PARA SABER SE EXISTE ALGUM VALOR NA CHAVE:

		if(count($results) > 0)

		{
			$this->setData($results[0]);
		}

	}

	// MÉTODO PARA LISTAR TODOS OS DADOS DE UMA TABELA:

	public static function getList()

	{
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
	}

	// MÉTODO PARA BUSCAR UMA LISTA DE USUÁRIOS POR LOGIN:

	public function search($login)

	{
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(

			':SEARCH'=>"%".$login."%"

		));
	}

	// MÉTODO CRIADO PARA FORNECER ALGUNS DADOS PARA OUTROS MÉTODOS:

	public function setData($data)

	{

			$row = $results[0];
			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));

	}

	// MÉTODO PARA OBTER OS DADOS DE UM USUÁRIO AUTENTICADO:

	public function login($login, $password)

	{

		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuario WHERE deslogin = :LOGIN AND dessenha = :PASSAWORD", array(

			":LOGIN"=>$login,
			":PASSWORD"=>$password

		));

				if(count($results) > 0)

		{
			$this->setData($results[0]);
		}

		else

		{
			throw new Exception("Login e/ou senha inválido!");
		}

	}

	// MÉTODO INSERT, PARA ADICIONAR DADOS NO BANCO:

	public function insert()

	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(

			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha()
		));

		if (count($results) > 0)

		{
			$this->setData($results[0]);
		}

	}

	// MÉTODO UPDATE, PARA ALTERAR UM USUÁRIO NA TABELA, NESSE CASO, ALTERANDO O LOGIN E A SENHA ATRAVÉS DA BUSCA PELO ID:

	public function update($login, $password)

	$this->getDeslogin($login);
	$this->getDessenha($password);

	{
		$sql = new Sql();

		$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(

			':LOGIN'=>$this->getDeslogin();
			':PASSWORD'=>$this->getDessenha();
			':ID'=>$this->getIdusuario();
		));
	}

	public function delete()

	{
		$sql = new Sql();

		$sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID" array(

			':ID'=>$this->getIdusuario();

		));

		$this->setIdusuario(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(new DateTime());

	}

	// MÉTODO __CONSTRUCT, PARA TODA VEZ EM QUE UM OBJETOI FOR INSTANCIADO DE USUARIO, RECEBA LOGIN E SENHA DIRETO POR PARAMETRO.

	public function __construct($login = "", $password = "")

	{
		$this->getDeslogin($login);
		$this->getDessenha($password);
	}

	// MÉTODO __TOSTRING PARA EXIBIR NA TELA O OBJETO COMO JSON:

	public function __toString()

	{
		return json_encode(array(

			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

		));

	}

}

?>