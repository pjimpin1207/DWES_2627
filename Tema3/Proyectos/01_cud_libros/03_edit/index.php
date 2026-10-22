<?php


/* index.php-Pagina principl del proyecto CRUD de libros
Muestra una lista de libros y permite agregar, editar y eliminar libros

@pckage CRUD libros
@author Pablo Jiménez
@version 1.0


Tabla libros
    -id(INT, PRIMARY_KEY, AUTO_INCREMENT)
    -titulo(VARCHAR, 255, NOT NULL)
    -autor(VARCHAR, 255, NOT NULL)
    -editorial(VARCHAR, 100, NOT NULL)
    -generos
    -precios

    */

// cargar librerias
require_once "libs/fuctions.php";

//Models

//Negociado
$libros = getLibros();

//Views
include "views/index.view.php";

?>