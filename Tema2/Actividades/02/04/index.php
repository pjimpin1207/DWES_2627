<?php

echo "<h1>Ejercicio 2.2.4 - empty()</h1>";

// Declaración de variables
$valor1= "";
$valor2 = 0;
$valor3 = false;

$valor4 = "Hola";
$valor5 =10;
$valor6 = true;


// Valores TRUE

echo "<h2>Valores TRUE</h2>";

echo "Variable 1: ";
var_dump(empty($valor1));

echo "Variable 2: ";
var_dump(empty($valor2));

echo "Variable 3: ";
var_dump(empty($valor3));


// Valores FALSE

echo "<h2>Valores FALSE</h2>";

echo "Variable 4: ";
var_dump(empty($valor4));

echo "Variable 5: ";
var_dump(empty($valor5));

echo "Variable 6: ";
var_dump(empty($valor6));

?>