<?php


echo '<h3>Condição do for: $i=date("Y"); $i > date("Y")-100; $i--:</h3>';

echo "<h3>Criando um select em HTML:</h3>";

echo "<select>";

for ($i=date("Y"); $i > date("Y")-100; $i--){

		echo '<option value="'.$i.'">'.$i.'</option>';
}

echo "</select>";

///////////////////////////////////////////////////////////////////////////////////////

echo "<h3>Fixando os conhecimentos do código:</h3>";

echo "<select>";

for ($i=date("y"); $i >= date("y")-20; $i--){

		echo '<option value="'.$i.'">'.$i.'</option>';
}

echo "</select>";

///////////////////////////////////////////////////////////////////////////////////////

echo "<h3>FOREACH ou PARA CADA:</h3>";

echo "<h4>foreach para os meses do ano:</h4>";

$meses = array(

	"Janeiro", "Fevereiro", "Março", "Abriu",
	"Maio", "Junho", "Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $mes) {
	
	echo "O mês é: " .$mes. "</br>";

}

///////////////////////////////////////////////////////////////////////////////////////

echo "<h4>foreach para os meses do ano com formato de select:</h4>";

echo "<select>";

$meses = array(

	"Janeiro", "Fevereiro", "Março", "Abriu",
	"Maio", "Junho", "Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $mes) {
	
	echo "O mês é: " .$mes. "</br>";
	echo '<option value="'.$mes.'">'.$mes.'</option>'; 
}

echo "</select>";

echo "<h3>Foreach e formulários:</h3>";

///////////////////////////////////////////////////////////////////////////////////////

?>

	<form>

	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="ok">

	</form>

	<?php

	if (isset($_GET)){

	foreach ($_GET as $key => $value){

		echo "O nome do campo é: " . $key . "</br>";
		echo "O valor do campo é: " . $value;
		echo "<hr>";

		}

	}

///////////////////////////////////////////////////////////////////////////////////////

?>

