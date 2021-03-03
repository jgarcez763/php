<!--CABEÇALHO DA PÁGINA-->

<?php
echo "<hr><h1><center>Tratando Erros Com Try e Catch:</center></h1><hr>";
?>

<!--BREVE INTRODUÇÃO: SERVE PARA O TRATAMENTO DE ERROS, SUPONHA-SE QUE UM BLOCO DE CÓDIGO POSSIVELMENTE POSSA APRESENTAR UM ERRO AO SE DEPARAR COM UM EVENTO, O TRY CATCH JÁ DEIXA PREPARADO O TRATAMENTO PARA ESSE ERRO, CASO VENHA OCORRER TAL PROBLEMA(S)-->

<center>
	
<?php

// TRY CRIA UMA NOVA EXCEPTION PARA UM DETERMINADO ERRO + UM CÓDIGO PARA ESTE ERRO:
try 

{
	throw new Exception("Ocorreu um erro!", 400);
}

// O CATCH CAPTURA ESSE ERRO E JOGA EM UMA VARIÁVEL, NO BLOCO DO CATCH PODE-SE RETORNAR AS INFORMAÇÕES DO ARQUIVO EM OBJETO, JSON, CONFORME EXEMPLO. 
catch (Exception $e)

{
	echo json_encode(array(

		"Mensagem"=>$e->getMessage() . "<hr>",
		"Linha"=>$e->getLine() . "<hr>",
		"Arquivo"=>$e->getFile() . "<hr>",
		"Codigo"=>$e->getCode() . "<hr>"

	));
}

?>