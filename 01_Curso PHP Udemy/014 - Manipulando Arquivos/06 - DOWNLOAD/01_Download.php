<!--CABEÇALHO DA PÁGINA-->

<?php
echo "<hr><h1><center>Download de Arquivos:</center></h1><hr>";
?>

<center>

<?php

$link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

// COMANDO PARA AQUISIÇÃO DO ARQUIVO EM SEU FORMATO BINÁRIO, PODE SER UM ARQUIVO LOCAL:
$content = file_get_contents($link);

// INTERPRETA UMA URL E RETORNA OS SEUS COMPONENTES:
$parse = parse_url($link);

// RETORNA APENAS A PARTE QUE CORRRESPONDE AO NOME DO ARQUIVO DE UM CAMINHO/PATH:
$basename = (basename($parse["path"]));

// CRIAÇÃO DO ARQUIVO COM O PARAMETRO "W+" PARA UMA CRIAÇÃO LIMPA:
// NESSE ARQUIVO QUE É GERADO O NOME DO ARQUIVO QUE SERÁ SALVO, O $BASENAME, PODERIA SER SUSBTITUÍDO POR QUALQUER NOME QUE FOSSE O DESEJADO!
$file = fopen($basename, "w+");

// ESCREVENDO O ARQUIVO NO DISCO RÍGIDO:
$escrita = fwrite($file, $content); 

// FECHAMENTO DO ARQUIVO:
fclose($file);

?>
<img src="<?=$basename?>">;
</center>