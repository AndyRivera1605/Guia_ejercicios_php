<?php

$dolares = $_POST['dolares'];
$euros = $dolares * 0.92;
echo "<center>";
echo "<h1>Resultado de la Conversión</h1>";
echo "Cantidad en dólares: $" . $dolares;
echo "<br><br>";
echo "Cantidad en euros: €" . $euros;
echo "</center>";
?>