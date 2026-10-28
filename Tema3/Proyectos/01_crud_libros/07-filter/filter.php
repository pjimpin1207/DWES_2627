<?php

/**
 * filter.php
 *
 * permite filtrar la tabla libros pa partir de una expresion que se pasa por la url
 *
 * @package    CRUD Libros
 * @author     Pablo Jimenez Pinto
 * @version    1.0
 * 
 * Tabla  libros:
    *  - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    *  - titulo (VARCHAR(255))
    *  - autor (VARCHAR(255))
    *  - editorial (VARCHAR(255))
    *  - generos 
    *  - precio 

*/

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el prompt de busqueda
// filter.php?prompt=cervantes
$prompt = htmlspecialchars($_GET['prompt'] ?? null);

// Validar el prompt de busqueda recibido

// Cargar el array de libros
$libros = get_libros();

// Filtrar el array de libros a traves del prompt
$aux = [];
foreach ($libros as $libro) {
    //Recorro cada campo de libro
    if (array_search($prompt, $libro) !== false) {
        $aux[] = $libro;
    }
}

$libros = $aux;

// Cargo la vista PRINCIPAL PARA MOSTRAR LA TABLA DE LIBROS ORDENADA
require_once 'views/index.view.php';