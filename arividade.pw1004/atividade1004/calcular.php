<?php
$numero = $_POST['numero'] ?? 0;
$cem = 0;
$ci = 0;
$vi = 0;
$de = 0;
$do = 0;
$um = 0;

echo "<h2>Resultado:</h2>";

while ($numero >= 100) {
    $cem++;
    $numero -= 100;
}

while ($numero >= 50) {
    $ci++;
    $numero -= 50;
}

while ($numero >= 20) {
    $vi++;
    $numero -= 20;
}

while ($numero >= 10) {
    $de++;
    $numero -= 10;
}

while ($numero >= 2) {
    $do++;
    $numero -= 2;
}

while ($numero >= 1) {
    $um++;
    $numero -= 1;
}

echo "$cem notas de 100 <br>";
echo "$ci notas de 50 <br>";
echo "$vi notas de 20 <br>";
echo "$de notas de 10 <br>";
echo "$do notas de 2 <br>";
echo "$um notas de 1 <br>";
?>
