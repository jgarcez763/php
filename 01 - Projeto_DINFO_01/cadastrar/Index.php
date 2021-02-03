<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!--meta charset para utilização de caracteres especiais-->
	<meta charset="utf-8">
	<title>CRUD - CADASTRAR PROJETO DINFO</title>
	
	<link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
	<?php
		include_once("..\HTML\Menu_Externo.php");
	?>
	<center>
	<hr><h1> CADASTRAR PROJETO - DINFO: </h1><hr> 
	<?php
		
		if(isset($_SESSION['msg']))
		{
		   echo $_SESSION['msg'];
		   unset($_SESSION['msg']);
		}

	?>
	<br><br>
	
	<form method="POST" action="..\database\Processa.php">
	

		<input type="text" name="Consulta_Projeto" placeholder="Digite o nome do Projeto">
		
		<input type="text" name="Consulta_Descricao" placeholder="Digite a Descrição">

		

		<input type="submit" value="Cadastrar Projeto">

	</form>
</center>
</body>
</html>

