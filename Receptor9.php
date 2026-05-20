<?php

$numero = $_POST['numero'];

echo "<h1>Numero Par o Impar</h1>";

if ($numero % 2 == 0) {

    echo "El número $numero es PAR";
} 
else {

    echo "El número $numero es IMPAR";

}

?>