<?php

/**
 * edit.php
 *
 * permite editar un libro existente en la tabla de libros
 *
 * @package    CRUD Libros
 * @author     Pablo Jiménez Pinto
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
// Obtener el indice del libro a editar desde la URL
// delete.php?indice=0 - elimino el  primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$libros = get_libros();

// Elimino el libro del array de libros
unset($libros[$indice]);

// cargo la vista principal con el array de libros actualizado
require_once 'views/index.view.php';