<!--CABEÇALHO DA PÁGINA-->

<!--BREVE INTRODUÇÃO: COOKIES É UM RECURSO QUE QUASE TODAS AS LINGUAGENS DE PROGRAMAÇÃO POSSUEM, E TEM A FINALIDADE DE ARMAZENAREM VALORES TEMPORÁRIOS NO BROWSER, MAS LOCALMENTE, OS COOKIES SÃO ARQUIVOS DE TEXTO DE PEQUENOS TAMANHOS-->

<?php
echo "<hr><h1><center>Criando um Cookie:</center></h1><hr>";
?>

<center>
	
<?php

// VAR DATA COM ARRAY CHAVE VALOR.
$data = array(

		"Hcode"=>"Hcode Treinamentos"
);

// CRIAÇÃO DO COOKIE
// 1º PARAMETRO = NOME DO COOKIE
// 2º PARAMETRO = FORMATO DO COOKIE
// 3º PARAMETRO = TEMPO DE DURAÇÃO DO COOKIE, COM TEMPO BASEADO EM UNIX.
setcookie("JohnCookie", json_encode($data), time() + 3600);

echo "Cookie criado com sucesso!";

?>