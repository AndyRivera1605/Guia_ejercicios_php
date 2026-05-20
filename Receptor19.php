<?php

$numero = $_POST['numero'];
$M = 1;
echo "<center>";

if ($numero >= 1 && $numero <= 10) {

    echo "<h1>Tabla del $numero</h1>";

    for ($M = 1; $M <= 10; $M++) {

        echo $numero . " x " . $M . " = " . ($numero * $M) . "<br>";

    }

} else {

    echo "<h1>Error: Solo se permiten números del 1 al 10.</h1>";

}
echo "</center>";
?>