<?php

/**
 * new.php
 *
 * Permite crear un nuevo articulo.
 * 
 *
 * @package ArticulRUD Libros
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
// Cargar librerías.
require_once 'libs/functions.php';

// Obtener los artículos.
$articulos = get_articulo();

// Mostrar el formulario.
include 'views/new.view.php';