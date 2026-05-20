<?php
$precio = $_POST['precio'];
$iva = $precio * 0.13;
$total = $precio + $iva;

echo "<center>";
echo "<h1>Resultado</h1>";
echo "Precio del producto: $" . $precio;
echo "<br><br>";
echo "IVA: $" . $iva;
echo "<br><br>";
echo "Total a pagar: $" . $total;
echo "</center>";
?>