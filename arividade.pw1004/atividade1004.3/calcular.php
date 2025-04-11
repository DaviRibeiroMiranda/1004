<?php
$numero = rand(0,100);
$nu = rand(0,100);
$n = 0;

echo "<h2>Resultado:</h2>";
echo "numero base é $numero <br>";
echo "$nu <br>";

while ($nu != $numero) {
    $n++;
	echo "$nu <br>";
    $nu = rand(0,100);
}

echo "$n vezer que o programa rodou <br>";
?>
