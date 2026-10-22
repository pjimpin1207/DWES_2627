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

// obtener el array existentes
$libros = getLibros();

// obtener el id del nuevo libro creado
$new_book_id = obtener_id_nuevo_libro($libros);

// crear array asociativo de los datos del formulario
$new_book = [
    'id' => $new_book_id,
    'titulo' => $titulo,
    'autor' => $autor,
    'editorial' => $editorial,
    'genero' => explode(',', $genero),
    'precio' => $precio
];

// Agregar el nuevo libro al array de libros
$libros[] = $new_book;



//Negociado

//Views
include "views/index.view.php";