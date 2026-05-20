<?php

$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$subtotal = $cantidad * $precio;
$total = $subtotal;
echo "<center>";
echo "<h1>Factura</h1>";
echo "Cliente: " . $cliente;
echo "<br>";
echo "Producto: " . $producto;
echo "<br>";
echo "Cantidad: " . $cantidad;
echo "<br>";
echo "Precio Unitario: $" . $precio;
echo "<br>";
echo "Subtotal: $" . $subtotal;
echo "<br>";
echo "Total a pagar: $" . $total;
echo "</center>"
?>