<?php

$palabra = $_POST['palabra'];

$cantidad = strlen($palabra);

echo "<h1>Resultado</h1>";
echo "La palabra ingresada es: " . $palabra;
echo "<br><br>";
echo "La cantidad de letras es: " . $cantidad;

?>