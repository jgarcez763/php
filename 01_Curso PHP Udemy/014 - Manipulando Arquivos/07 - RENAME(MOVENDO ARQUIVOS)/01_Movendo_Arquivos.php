<!--CABEÇALHO DA PÁGINA-->

<?php
echo "<hr><h1><center>Movendo Arquivos:</center></h1><hr>";
?>
<center>
	
<?php

$dir1 = "Folder_01";
$dir2 = "Folder_02";

// SE OS FOLDER NÃO EXISTEM, SERÃO CRIADOS:
if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

// SE O ARQUIVO NÃO EXISTIR, SERÁ CRIADO:
if(!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) 

	{
		
		
		$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");	
		fwrite($file, date("Y/m/d H:i:s"));
		fclose($file);

	}

rename(
		$dir1 . DIRECTORY_SEPARATOR . $filename, // ORIGEM 
		$dir2 . DIRECTORY_SEPARATOR . $filename // DESTINO
	  );

?>

</center>