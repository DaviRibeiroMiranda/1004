<?php
$numero = $_POST['numero'] ?? 0;
$nu = rand(0,10);
$n = 0;

echo "<h2>Resultado:</h2>";

while ($nu >= 1) {
    $n++;
    $nu -= $numero;
}

echo "$n vezer que o programa rodou <br>";
?>
