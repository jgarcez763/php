<?php

spl_autoload_register(function($nomeClasse)

{
	$dirClasses = "Classes";
	$filename = $dirClasses . DIRECTORY_SEPARATOR . $nomeClasse . ".php";  

	if (file_exists($filename))

	{
		require_once($filename);
	}

});

?>