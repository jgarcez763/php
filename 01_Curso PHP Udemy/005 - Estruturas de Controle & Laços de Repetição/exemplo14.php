<?php

echo "<h1>FOR:</h1>";

echo '<h3>Condição do for: $i = 0; $i < 10; $i++:</h3>';

for ($i = 0; $i < 10; $i++){

echo $i . "</br>";

}

/////////////////////////////////////

echo '<h3>Condição do for: $i = 0; $i <= 10; $i++:</h3>';

for ($i = 0; $i <= 10; $i++){

echo $i . "</br>";

}

/////////////////////////////////////

echo '<h3>Condição do for: $i = 0; $i <= 100; $i+=5; com um if que ignora a contagem de 31 até 69:</h3>';

for ($i = 0; $i <= 100; $i += 5){

if ($i > 30 && $i < 70) continue;

echo $i . "</br>";

}

/////////////////////////////////////

echo '<h3>Condição do for: $i = 0; $i <= 100; $i+=5; com um if que ignora a contagem de 31 até 69 + um if que para a contagem do for quando chega a 90:</h3>';

for ($i = 0; $i <= 100; $i += 5){

if ($i > 30 && $i < 70) continue;

if ($i === 90) break;

echo $i . "</br>";

}

/////////////////////////////////////

echo '<h3>Condição do for: $i=date("Y"); $i > date("Y")-100; $i--:</h3>';

for ($i=date("Y"); $i > date("Y")-100; $i--){

		echo $i . "</br>";
}

?>