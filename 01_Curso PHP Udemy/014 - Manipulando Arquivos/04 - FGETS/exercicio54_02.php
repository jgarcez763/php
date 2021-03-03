<?php

$filename = "logo.png";

// FILE_GETS_CONTENTS INCORPORA AS FUNÇÕES: FOPEN, FREAD(PASSANDO TODO O FILE_SIZE) E O FCLOSE, TODOS ESSES RECURSOS APENAS POR ELE.
$base64 = file_get_contents($filename);

// FINFO CLASSE INTERNA QUE PEGA AS INFORMAÇÕES DO TIPO DO ARQUIVO:
// FILEINFO_MIME_TYPE CONSTANTE NATIVA QUE PEGA AS INFORMAÇÕES DO TIPO MIME DO ARQUIVO:
$fileinfo = new finfo(FILEINFO_MIME_TYPE);

// RETORNA O TIPO E A EXTENSÃO DO ARQUIVO EM QUESTÃO:
$mimetype = $fileinfo->file($filename);

// PADRÃO P/ FORMATAÇÃO DE SAÍDA EM BASE64:

// ECHO USADO ANTES DA CRIAÇÃO DO MIMETYPE:
// echo "data:image/png;base64," . $base64;

// ECHO USADO DEPOIS DA CRIAÇÃO DO MIMETYPE:
// echo "data:". $mimetype .";base64," . $base64;

// INCORPORAÇÃO DO CÓDIGO PARA DENTRO DA VARIÁVEL $BASE64ENCODE:
$base64Encode = "data:". $mimetype .";base64," . $base64;

echo $base64Encode;

?>

<a href="<?=$base64Encode?>" target="_blank">Link Para Imagem:</a>
<img src="<?=$base64Encode?>">

<!--ESSE CÓDIGO ESTÁ CORRETO, MAS POR ALGUM MOTIVO NÃO ESTÁ FUNCIONANDO NOS NAVEGADORES CHROME, OPERA GX E EDGE, NÃO TESTEI EM OUTROS-->