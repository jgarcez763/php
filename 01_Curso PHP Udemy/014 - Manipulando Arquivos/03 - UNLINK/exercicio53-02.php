<?php

echo "<hr><h1><center>REMOVENDO ARQUIVOS COM UNLINK - PARTE 2</center></h1><hr>";

echo "<center>";

$folder = "DIRETÓRIO_DE_IMAGENS";

// COMANDO !IS_DIR($FOLDER) VERIFICA SE O ITEM NÃO EXISTE POR CONTA DO USO DO OPERADOR ! 
if (!is_dir($folder))

{
	echo "A Pasta $folder Foi Criada Com Sucesso!" . "<hr>";
	mkdir($folder);
}
/*
else

{	
	rmdir($folder);
	echo "A Pasta $folder já Existia!" . "<hr>" . "Mas Foi Removida, Atualize a Página Para Re-Criala" . "<hr>";
}
*/

// SCANDIR, LÊ TODO UM DIRETÓRIO E TRANSFORMA-O EM UM ARRAY:
foreach (scandir($folder) as $item) 

{		
	// !IN_ARRAY() SIGNIFICA DIZER QUE OS ITENS QUE ESTÃO NESSE ARRAY, EXCETO ".","..":

	if(!in_array($item, array(".","..")))

		// UNLINK PARA REMOVER OS ARQUIVOS, "/" POIS A PASTA ESTÁ UM NÍVEL ACIMA DA PASTA ATUAL, $ITEM COMO CADA $ITEM, PELA CONVERSÃO DO FOREACH:
	{
		unlink($folder . "/" . $item);
	}

}

// RECAPITULANDO: 
// O FOREACH, COM O SCANDIR, SCANEIA TODO O FOLDER, CONVERTE CADA ITEM DO $FOLDER EM ARRAY;
// o IF COM O !IN_ARRAY PULA OS ".",".." QUE SERIAM OS NÍVEIS ACIMA, SE ÑÃO FOSSE USADO O OPRADOR !, DARIA TRUE;
// UNLINK($FOLDER . "/" . $ITEM) FAZ A REMOÇÃO DE CADA ITEM, A "/" É PQ A PASTA EM QUESTÃO ESTÁ UM NÍVEL ACIMA;

echo "TUDO OK - A PASTA ESTÁ VAZIA!" . "<hr>";

echo "</center>";

?>