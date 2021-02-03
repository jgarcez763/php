<?php 

include_once('../config.php');

?>

		<title>Menu Externo</title> 
		<meta charset="utf-8">
		<link href="..\CSS\Estilo.css" rel="stylesheet">



<div id="header"> 
	<div id="menu">
		<div class="menu-content">
		<?php 
			

			echo "<a href='$home/cadastrar'> Cadastrar Projeto </a>";
			echo "<a href='$home/consultar'> Consultar Projeto </a>";
			echo "<a href='$home/listar'> Listar Todos os Projetos </a>";
		?>
		</div>

		<div class="menu-user">

		<?php
			if (isset($_SESSION['nome'])){
				echo $_SESSION['nome'];
				echo "<a href='../login/logout.php'> Logout </a>";
			}
			else{
			echo "<a href='$home/login'> Login </a>";
			echo "<a href='$home/signup'> Cadastrar </a>";
		}
		?>
		</div>

	</div>

</div>

