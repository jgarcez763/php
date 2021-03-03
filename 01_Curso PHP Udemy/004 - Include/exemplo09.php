<?php

include "inc/exemplo08.php";
$resultado = somar(10, 20);
echo $resultado;

 echo "<h3>O include possui a função de trazer um arquivo externo para o documento ao qual está sendo chamado o include.
 Diferente do Require que necessita que o arquivo que está sendo requerido exista e que esteja funcionando perfeitamente, o include 
 não faz essa exigência elee usa o include_path para procurar um arquivo quando ele não acha.</h3>";

?>