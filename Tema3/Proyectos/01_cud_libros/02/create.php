<?php


/* create.php
Formulario para insertar un nuevo libro

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

// Extraer los datos del formulario
$titulo = htmlspecialchars($_POST["titulo"] ?? '');

$autor = htmlspecialchars($_POST["autor"]);

$editorial = htmlspecialchars($_POST["editorial"]);

$genero = htmlspecialchars($_POST["genero"]);

$precio = htmlspecialchars($_POST["precio"]);

// crear array asociativo de los datos del formulario
$new_book = [
    'titulo' => $titulo,
    'autor' => $autor,
    'editorial' => $editorial,
    'genero' => $genero,
    'precio' => $precio
];

// obtener el id del nuevo libro creado
$new_book_id = obtener_id_nuevo_libro(($new_book);



//Negociado

//Views
include "views/new.view.php";

?>