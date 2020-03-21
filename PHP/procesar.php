<?php

$nombre = $_POST["nombre"];   // Forma de declarar una variable. En este caso recibe lo del formulario en index
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];

echo "El nombre ingresado es ".$nombre." <br>"; // Imprimir
echo "El apellido ingresado es ".$apellido." <br>";
echo "El edad ingresado es ".$edad." <br>";

?>