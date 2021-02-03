<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!--meta charset para utilização de caracteres especiais-->
	<meta charset="utf-8">
	<title>CRUD - CONSULTAR PROJETO DINFO</title>
	<link href="CSS/Estilo.css" rel="stylesheet">
</head>
<body>
	<?php
		include_once("..\HTML\Menu_Externo.php");
	?>
	<center>
	<hr><h1> CONSULTAR PROJETO - DINFO: </h1><hr> 
	<?php
		
		if(isset($_SESSION['msg']))
		{
		   echo $_SESSION['msg'];
		   unset($_SESSION['msg']);
		}

	?>
	<br><br>
	
	<form method="POST" action="..\database\Processa.php">
	
		<label> Nome do Projeto: </label><br>
		<input type="text" name="Consulta_Projeto" placeholder="Digite o nome do Projeto"><br><br>

		<label> Descrição: </label><br>
		<input type="text" name="Consulta_Descricao" placeholder="Digite a Descrição"><br><br>

		<label> Responsável: </label><br>
		<input type="text" name="Consulta_Responsavel" placeholder="Digite o nome do Responsável"><br><br>

		<label> Data de Abertura: </label><br>
		<input type="text" name="Consulta_Abertura" placeholder="Digite a Data de Abertura"><br><br>

		<label> Data de Conclusão: </label><br>
		<input type="text" name="Consulta_Conclusao" placeholder="Digite a Data de Conclusão"><br><br><br>

		<input type="submit" value="Consultar Projeto">

	</form>
</center>
</body>
</html>

