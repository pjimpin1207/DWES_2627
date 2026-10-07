<?php
echo "<h1>Ejercicio 3 - isset()</h1>";

// Declaración de variables
$valor1  = 10;
$valor2 ="";
$valor3=false;

$valor4= null;
$valor5 = null;
$valor6 = null;


echo "<h2>Valores TRUE</h2>";

echo "Variable 1: ";
var_dump(isset($valor1));

echo "Variable 2: ";
var_dump(isset($valor2));

echo "Variable 3: ";
var_dump(isset($valor3));


// Valores FALSE

echo "<h2>Valores FALSE</h2>";

echo "Variable 4: ";
var_dump(isset($valor4));

echo "Variable 5: ";
var_dump(isset($valor5));

echo "Variable 6: ";
var_dump(isset($valor6));

?>