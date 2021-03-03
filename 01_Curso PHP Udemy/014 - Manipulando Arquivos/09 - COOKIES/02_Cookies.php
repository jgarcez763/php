<!--CABEÇALHO DA PÁGINA-->

<!--BREVE INTRODUÇÃO: COOKIES É UM RECURSO QUE QUASE TODAS AS LINGUAGENS DE PROGRAMAÇÃO POSSUEM, E TEM A FINALIDADE DE ARMAZENAREM VALORES TEMPORÁRIOS NO BROWSER, MAS LOCALMENTE, OS COOKIES SÃO ARQUIVOS DE TEXTO DE PEQUENOS TAMANHOS-->

<?php
echo "<hr><h1><center>Recuperando um Cookie:</center></h1><hr>";
?>

<center>
	
<?php

// IF PARA SABER SE O COOKIE EXISTE:
// ARRAY SUPER GLOBAL PARA RECUPERAÇÃO DE TODOS OS COOKIES CRIADOS:
if (isset($_COOKIE["JohnCookie"]))

{
	var_dump($_COOKIE["JohnCookie"]);
}

?>

<!--JASON DECODE PARA EXIBIÇÃO NO FORMATO EM ARRAY--><hr>

<?php

if (isset($_COOKIE["JohnCookie"]))

{	
	// LEMBRANDO A UTILIZAÇÃO DO TRUE, PARA DECODIFICAÇÃO EM ARRAY E NÃO EM OBJETO:
	$cookie_array = json_decode($_COOKIE["JohnCookie"], true);
}

print_r($cookie_array);

echo "<hr>";

print_r($cookie_array["Hcode"]);

echo "<hr>";

?>

