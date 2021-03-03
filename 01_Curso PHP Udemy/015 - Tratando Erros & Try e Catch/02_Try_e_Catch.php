<!--CABEÇALHO DA PÁGINA-->

<?php
echo "<hr><h1><center>Tratando Erros Com Try e Catch:</center></h1><hr>";
?>

<!--BREVE INTRODUÇÃO: SERVE PARA O TRATAMENTO DE ERROS, SUPONHA-SE QUE UM BLOCO DE CÓDIGO POSSIVELMENTE POSSA APRESENTAR UM ERRO AO SE DEPARAR COM UM EVENTO, O TRY CATCH JÁ DEIXA PREPARADO O TRATAMENTO PARA ESSE ERRO, CASO VENHA OCORRER TAL PROBLEMA(S)-->

<center>
	
<?php

function trataNome($nome)

{
	if(!$nome)


	{
		throw new Exception("Nome informado não é válido!", 400);
	}

	echo ucfirst($nome) . "<hr>";

}

try 

{
	echo "1ª Verificação: " . "<br>";
	trataNome("João");
	echo "2ª Verificação: " . "<br>";
	trataNome("");
}

catch(Exception $e)

{
	echo $e->getMessage() . "<hr>";
}

finally

{	
	echo "3ª Verificação: " . "<br>";
	echo "Executou o try!" . "<hr>";
}

?>