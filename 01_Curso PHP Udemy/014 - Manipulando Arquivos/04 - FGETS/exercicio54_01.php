<?php

echo "<hr><h1><center>Lendo Arquivos Com Fgets:</center></h1><hr>";

echo "<center>";

// VERIFICAÇÃO PARA SABER SE O ARQUIVO EXISTE:
$filename = "usuarios.csv";

if (file_exists($filename))

{
	$file = fopen($filename, "r");
// IMPLODE, SELECIONA O SEPARADOR ESCOLHIDO PARA FAZER A SEPARAÇÃO, JÁ O EXPLODE É O INVERSO, REMOVE O FORMATO DE SEPARAÇÃO ATUAL, APÓS O USO DO EXPLODE REMOVENDO A VIRGULA COMO SEPARADOR, NESSE CASO, O RETORNO SE DEU EM ARRAY, PORTANTO O $HEADERS SE TORNOU UM ARRAY.

// FGETS FAZ A LEITURA LINHA POR LINHA DO ARQUIVO.	
	$headers = explode(",", fgets($file));

	$data = array();

	// WHILE PARA PEGAR LINHA POR LINHA
	while ($row = fgets($file))

	{
		$rowData = explode(",", $row);
		$linha = array();

		for($i = 0; $i < count($headers); $i++)

		{
			$linha[$headers[$i]] = $rowData[$i];
		}

		array_push($data, $linha);

	}

	fclose($file);

}

json_encode($data);

echo "</center>";

?>