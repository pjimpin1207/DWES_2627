<?php

echo "<h1>Ejercicio 2.2.2 - is_null()</h1>";

// Declaración de variables
$valor1 = null;
$valor2 = NULL;
$valor3 = null;

$valor4 = 10;
$valor5 = "Hola";
$valor6 = false;


// Valores TRUE
echo "<h2>Valores true</h2>";

echo "Variable 1: ";
var_dump(is_null($valor1));

echo "Variable 2: ";
var_dump(is_null($valor2));

echo "Variable 3: ";
var_dump(is_null($valor3));


// Valores FALSE
echo "<h2>Valores false</h2>";

echo "Variable 4: ";
var_dump(is_null($valor4));

echo "Variable 5: ";
var_dump(is_null($valor5));

echo "Variable 6: ";
var_dump(is_null($valor6));

?>