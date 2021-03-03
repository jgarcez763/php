<?php

echo "<h1>SWITCH:</h1>";

echo "<h3>Diferente do IF, o switch é usado quando se sabe os valores/resultados que serão exibidos:</h3>";

$diaDasemana = date("w");
echo $diaDasemana . " " . "<br><br>";

switch ($diaDasemana){

		case 0;
		echo "Domingo! <br>";
		break;

		case 1;
		echo "Segunda-feira! <br>";
		break;

		case 2;
		echo "Terça-feira! <br>";

		case 3;
		echo "Quarta-feira! <br>";
		break;

		case 4;
		echo "Quinta-feira! <br>";
		break;

		case 5; 
		echo "Sexta-feira! <br>";
		break;

		case 6;
		echo "Sábado! <br>";
		break;

		default:
		echo "Data Inválida! <br>";
		break;

}
echo "</br>";
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "</br>";

$diaDasemana02 = 8; //date("w");
echo $diaDasemana02 . " ";

switch ($diaDasemana02){

		case 0;
		echo "Domingo!";
		break;

		case 1;
		echo "Segunda-feira!";
		break;

		case 2;
		echo "Terça-feira!";

		case 3;
		echo "Quarta-feira!";
		break;

		case 4;
		echo "Quinta-feira!";
		break;

		case 5; 
		echo "Sexta-feira!";
		break;

		case 6;
		echo "Sábado! <br>";
		break;

		default:
		echo "Data Inválida! <br>";
		break;

}

?>

