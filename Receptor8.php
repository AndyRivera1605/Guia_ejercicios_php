<?php
$numero1 = $_POST ['numero11'];
$numero2 = $_POST ['numero12'];

echo "<h1> Binevenido Determinaremos tu numero menor: <br></h1>";

if ($numero1 < $numero2) {
    echo "El numero $numero1 es el numero menor a $numero2";
}

elseif ($numero1 > $numero2){
    echo "El numero $numero1 es el numero mayor a $numero2";

}

?>