<?php

echo "<h1>Ejercicio 2.2.1 Conversiones de datos en expresiones</h1>";

// Declaración de variables
$entero = 10;
$cadenaNumero = "5";
$float = 5.5;
$cadena = " años";
$booleano = true;


// Multiplicar valor entero con una cadena que contiene un número inicial
echo "<h2>Multiplicar entero con cadena</h2>";
var_dump($entero * $cadenaNumero);


// Sumar valor entero con cadena con número inicial
echo "<h2>Sumar entero con cadena</h2>";
var_dump($entero + $cadenaNumero);


// Sumar valor entero con valor float
echo "<h2>Sumar entero con float</h2>";
var_dump($entero + $float);


// Concatenar valor entero con cadena
echo "<h2>Concatenar entero con cadena</h2>";
var_dump($entero . $cadena);


// Sumar valor entero con valor booleano
echo "<h2>Sumar entero con booleano</h2>";
var_dump($entero + $booleano);

?>