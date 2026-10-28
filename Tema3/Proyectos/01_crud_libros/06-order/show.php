<?php

/**
 * edit.php
 *
 * permite editar un libro existente en la tabla de libros
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
// Obtener el indice del libro a mostrar desde la URL
// show.php?indice=0 - muestro el  primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$libros = get_libros();

// Obtenemos el libro a mostrar segun el indice recibido
$libro = $libros[$indice];

// Cargo la vista de mostrar con los detalles del libro a mostrar
require_once 'views/show.view.php';