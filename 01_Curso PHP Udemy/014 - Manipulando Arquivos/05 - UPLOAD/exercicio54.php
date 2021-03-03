<?php
echo "<hr><h1><center>Upload de Arquivos:</center></h1><hr>";
?>

<center>

	<!-- FORMULÁRIO CRIADO PARA REALIZAR UM UPLOAD, O COMANDO ENCTYPE DEFINE QUE OS TIPOS DE ARQUIVOS PODEM SER DIVERSOS -->

	<form method="POST" enctype="multipart/form-data">

	<input type="file" name="fileUpload">
	
	<button type="submit">Send</button>

	</form>

<?php

	if ($_SERVER["REQUEST_METHOD"] === "POST")

{	// ARRAY SUPER GLOBAL $_FILES PARA RECUPERAR OS ARQUIVOS VIA POST:
	$file = $_FILES['fileUpload'];
	// CASO HAJA ALGUM ERRO NO UPLOAD DO ARQUIVO, O IF É EXECUTADO EXIBINDO A MSG DE ERRO:
	if($file["error"])

	{
		throw new Exception("Error:" . $file["error"]);
		
	}

	$dirUploads = "Uploads";

	// VERIFICA SE O DIRETÓRIO EXISTE, CASO NÃO EXISTA, ELE ENTRA NO IF E CRIA O DIRETÓRIO:
	if(!is_dir($dirUploads))

	{
		mkdir($dirUploads);
	}

	// AQUI É O QUE FAZ O UPLOAD ACONTECER:
	if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"]))

	{
		echo "Upload realizado com sucesso!";
	}

	else

	{
		throw new Exception("Não foi possível realizar o upload");
		
	}

}



?>

</center>