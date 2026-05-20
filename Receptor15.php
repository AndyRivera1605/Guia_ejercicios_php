<?php
$celsius = $_POST['celsius'];
$fahrenheit = ($celsius * 9/5) + 32;

echo "<center>";
echo "<h1>Resultado de la Conversión</h1>";
echo "<br>";
echo "Temperatura en Celsius: " . $celsius . " °C<br>";
echo"<br>";
echo "Temperatura en Fahrenheit: " . $fahrenheit . " °F";
echo "</center>";
?>