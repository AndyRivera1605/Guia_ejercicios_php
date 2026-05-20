<?php
$metros = $_POST['metros'];
$centimetros = $metros * 100;

echo "<center>";
echo "<h1>Resultado de la Conversión</h1>";
echo "Cantidad en metros: " . $metros . "<br>";
echo "Cantidad en centímetros: " . $centimetros;
echo "</center>";
?>