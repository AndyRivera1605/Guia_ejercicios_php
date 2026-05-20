<?php
$nota1 = $_POST['n1'];
$nota2 = $_POST ['n2'];
$nota3 = $_POST ['n3'];

echo "<center>";

echo "<h1>Calcular Promedios</h1>";

$promedio = ($nota1 + $nota2 + $nota3) / 3;

echo "Tu promedio es de: " . round($promedio) . "<br>";

if ($promedio >= 7) {

    echo "<h2>Aprobado</h2>";
} 
else {
    
echo "<h2>Reprobado</h2>";
}
echo "</center>";
?>