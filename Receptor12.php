<?php

$base = $_POST['base'];
$altura = $_POST['high'];

$area = $base * $altura;

echo "<center>";
echo "<h1>Resultado del area del rectangulo</h1>";
echo "La base es: " . $base . "<br>";
echo "La altura es: " . $altura . "<br>";
echo "El área del rectángulo es: " . $area;
echo "</center>";

?>