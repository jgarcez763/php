<?php

echo "<h1>Require:</h1>";

require "inc/exemplo08.php";
$resultado = somar(10, 20);
echo $resultado;

echo "<h3>Teoricamente possui a mesma função que o include, mas com algumas diferenças:
 O Require necessita que o arquivo que está sendo requerido exista e que esteja funcionando perfeitamente.</h3>";

?>