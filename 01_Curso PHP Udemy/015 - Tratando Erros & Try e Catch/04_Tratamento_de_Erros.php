<!--CABEÇALHO DA PÁGINA-->

<?php
echo "<hr><h1><center>Tratando Erros:</center></h1><hr>";
?>

<!--BREVE INTRODUÇÃO:TRATAMENTO DE ERROS SEM O USO DE TRY E CATCH, SUPONHA-SE QUE UM BLOCO DE CÓDIGO POSSIVELMENTE POSSA APRESENTAR UM ERRO AO SE DEPARAR COM UM EVENTO, OU ALGUM RECURSO DEPRECIADO É POSSÍVEL TRATAR ERROS DE OUTRAS FORMAS-->

<center>
	
<?php

error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["$nome"];

echo $nome;

?>
