<!--CABEÇALHO DA PÁGINA-->

<?php
echo "<hr><h1><center>Tratando Erros:</center></h1><hr>";
?>

<!--BREVE INTRODUÇÃO:TRATAMENTO DE ERROS SEM O USO DE TRY E CATCH, SUPONHA-SE QUE UM BLOCO DE CÓDIGO POSSIVELMENTE POSSA APRESENTAR UM ERRO AO SE DEPARAR COM UM EVENTO, OU ALGUM RECURSO DEPRECIADO É POSSÍVEL TRATAR ERROS DE OUTRAS FORMAS-->

<center>
	
<?php

function error_handler($code, $message, $line, $file)

{

	echo json_encode(array(

		'code'=>$code, 
		'message'=>$message,
		'line'=>$line,
		'file'=>$file

	));

}

set_error_handler("error_handler");

$total = 25 / $r;

?>
