<?php

echo "<hr><h1><center>Removendo Arquivos Com Unlink():</center></h1><hr>";
// CRIANDO O ARQUIVO COM FOPEN:
$file = fopen("Log02.txt", "a+");

// INSERINDO DADOS NO ARQUIVO CRIADO COM FWRITE:
fwrite($file, "Esta é a data atual:\n" . date("d/m/Y H:i:s") . "\r\n\n");

// FECHANDO O ARQUIVO COM FCLOSE:
fclose($file);

// REMOVENDO O ARQUIVO COM UNLINK:
//unlink("Log02.txt");

echo "<hr><h3><center>" . "Arquivo Log02.txt foi criado com sucesso!" . "</center></h3><hr>";

// echo "<hr><h3><center>" . "Arquivo Log02.txt foi removido com sucesso!" . "</center></h3><hr>";


?>