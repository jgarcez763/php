<?php
session_start();
include_once("..\database\Conexao.php");
include("../database/require.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!--meta charset para utilização de caracteres especiais-->
	<meta charset="utf-8">
	<title>CRUD - CONSULTAR PROJETO DINFO</title>
	<link href="estilo.css" rel="stylesheet">

</head>

<body>
	<?php
		include_once("..\HTML\Menu_Externo.php");
	?>	
	<center>
	<hr><h1> LISTAR PROJETO - DINFO: </h1><hr> 

<div id="conteudo">

<table>
<tr>
    <th>Nome do Projeto</th>
    <th>Descrição do Projeto</th>
    <th>Data de Abertura</th>
  </tr>
 
  
	<?php
		
		


		if(isset($_SESSION['msg']))
		
		{
		   echo $_SESSION['msg'];
		   unset($_SESSION['msg']);
		}

		// CRIAÇÃO DA QUERY PARA SELECIONAR TODOS OS DADOS DA TABELA_PROJETOS.
		$Result_Tbprojetos = "SELECT * FROM tabela_projetos";
		$Resultado_Tbprojetos = mysqli_query($conn, $Result_Tbprojetos);

		// CRIAÇÃO DE UM WHILE PARA PERCORRER CADA LINHA DAS COLUNAS:
		while($row_tabela_projetos = mysqli_fetch_assoc($Resultado_Tbprojetos))
		

		{ // RETORNO DOS DADOS LINHA POR LINHA:

		$date = strtotime( $row_tabela_projetos['dtAbertura'] );
		$showdate = date('d/m/Y', $date);
		$id = $row_tabela_projetos['ID_Projeto'];
		?>


					<tr class="tabela-linha" id="<?php if($row_tabela_projetos['dtConclusao']){echo 'concluido'; } ?>">
					
				<?php
					
					echo '<td><p id="nome"> <a href="../detalhe?id='.$id.'"> ' . $row_tabela_projetos['nomeProjeto'].'</a></td>';
					echo '<td> <p id="descricao">' . $row_tabela_projetos['descricao'].'</td>';
					//echo 'Responsável: ' . $row_tabela_projetos['responsavel'] . "<br>";
					echo '<td><p>	' . $showdate . '</td>';
					
				?>	
					
					</tr>
				
				
		<?php
		}

	?>
		</table>

	<br><br>
	</div>
</center>
</body>
</html>

