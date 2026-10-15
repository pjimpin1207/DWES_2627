<?php
/* Tipos de array

colores = array("rojo", "verde", "azul", "amarillo");

*/
$colores = ['rojo', 'verde', 'azul', 'amarillo'];

// acceder a un elemento del array
echo $colores[0] // rojo

// recorrer un array con un bucle for
for ($i = 0; $i < count($colores); $i++) {
    echo $colores[$i] . "<br>";
}

// recorrer con foreach
foreach ($colores as $color) {
    echo $color . "<br>";
}

// añadir un nuevo color
$colores[] = "naranja"; // agrega el elemento "naranja" al final del array

// eliminar un elemento del array
unset($colores[1]); // elimina el elemmento con el indice 1 (verde)

// recorrer array mostrando indice y valor
foreach ($colores as $indice => $color) {
    echo "Índice " . $indice . " Color " . $color . "<br>";
}

// modificar elemtos 
$colores[2] = "violeta";