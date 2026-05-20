<?php
$nombres = $_POST['nombres'];
$nacimiento = $_POST['fecha'];
$edad = $_POST['edad'];
$Correo = $_POST ['correo'];

echo "<center>";
echo "<h1>Datos del Usuario</h1>";
echo "El nombre completo del usuario es : " . $nombres;
echo "<br><br>";
echo "La fecha de nacimiento del usuario es : " . $nacimiento;
echo "<br><br>";
echo "La edad del usuario es : " . $edad;
echo "<br><br>";
echo"Tu correo electronico es: " . $Correo;
echo "</center>";
?>