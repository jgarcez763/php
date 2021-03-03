<?php

echo "<hr><h1><center>Lendo e Manipulando Pastas/Diretórios Com PHP:</center></h1><hr>";

$folder = "DIR01";

// IS_DIR É UTILIZADO PARA SABER SE UM DIRETÓRIO EXISTE:
echo "<center>";
if (!is_dir($folder))

{
	// MKDIR = MAKE DIRECTORY
	mkdir($folder);
	echo "Diretório $folder Criado Com Sucesso!";
} 

else

{
	// RMDIR = REMOVE DIRECTORY
	rmdir($folder);
	echo "O Diretório $folder Já Existe! <hr> Foi Removido!";
}
echo "</center><hr>";

?>