<?php
$Edad = $_POST ['numero'];

$Edad_Futuro = $Edad + 10;
echo "<center>";
echo "<h1> Bienvenido Criatura del universo</h1>";
echo "<br>";
echo "Tu edad en un futuro es de: " . $Edad_Futuro;
echo "<br>";


if ($Edad_Futuro >= 30){
    echo "Nombree ya estas algo viejito";
    echo "<br>";

}
    
else {
    echo "Te salvaste por un pelito, aun estas joven pero con una rodilla de Temu";
    
}
echo "</center>";

 ?>