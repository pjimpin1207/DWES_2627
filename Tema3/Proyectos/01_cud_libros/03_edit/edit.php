<?php

/*
 * edit.php
 * Permite editar un libro existente en la lista de libros.
 *
 * @package CRUD libros
 * @author Pablo Jiménez
 * @version 1.0
 */

// Cargar librerías
require_once __DIR__ . "/libs/fuctions.php";

// Obtener el ID desde la URL o desde el formulario
$id = filter_input(INPUT_GET, 'indice', FILTER_VALIDATE_INT);

if ($id === null || $id === false) {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
}

// Validar el ID
if ($id === false || $id === null || $id < 1) {
    die("ID de libro no válido");
}

// Obtener el libro
$libro = getLibro($id);

// Comprobar que el libro existe
if ($libro === null) {
    die("El libro no existe");
}

// Si se ha enviado el formulario, recoger los datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = trim($_POST['titulo'] ?? '');
    $autor = trim($_POST['autor'] ?? '');
    $editorial = trim($_POST['editorial'] ?? '');
    $genero = trim($_POST['genero'] ?? '');
    $precio = filter_input(INPUT_POST, 'precio', FILTER_VALIDATE_FLOAT);

    // Validar los datos
    if (
        $titulo === '' ||
        $autor === '' ||
        $editorial === '' ||
        $genero === '' ||
        $precio === false ||
        $precio === null ||
        $precio < 0
    ) {
        $error = "Completa todos los campos correctamente y revisa el precio.";
    } else {
        // Actualizar los datos del libro en memoria
        $libro['titulo'] = $titulo;
        $libro['autor'] = $autor;
        $libro['editorial'] = $editorial;
        $libro['genero'] = array_map('trim', explode(',', $genero));
        $libro['precio'] = $precio;

        $mensaje = "Los datos se han validado correctamente. Para conservar los cambios al recargar la página, necesitas guardar los libros en una sesión, un archivo o una base de datos.";
    }
}

// Cargar la vista
require_once __DIR__ . "/views/edit.view.php";

?>