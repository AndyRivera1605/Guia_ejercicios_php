<?php
$numero1 = $_POST ['numero9'];
$numero2 = $_POST ['numero10'];

echo "<h1> Binevenido Determinaremos tu numero mayor: <br></h1>";

if ($numero1 > $numero2) {
    echo "El numero $numero1 es el numero mayor a $numero2";
}

elseif ($numero1 < $numero2){
    echo "El numero $numero2 es el numero mayor a $numero1";

}

?>