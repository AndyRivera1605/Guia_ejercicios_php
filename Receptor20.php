<?php

$numero = $_POST['numero'];
$M = 1;
$suma = 0;

for ($M = 1; $M <= $numero; $M++) {

    $suma = $suma + $M;

}

echo "<h1>Resultado</h1>";
echo "La suma de los números desde 1 hasta " . $numero . " es: " . $suma;

?>