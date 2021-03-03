<?php

echo "<h1>Localizando o caminho onde são salvas as informações de ID</h1>";

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

switch(session_status()) {

case PHP_SESSION_DISABLED:
	echo "As sessões estão desabilitadas:";
	break;

case PHP_SESSION_NONE:
	echo "se as sessões estiverem habilitadas, mas nenhuma existir.";
	break;

case PHP_SESSION_ACTIVE:
	echo "se as sessões estiverem habilitadas, e uma existir.";
	break;
}

?>