<?php

/**
 * delete.php
 *
 * permite eliminar un articulo.
 *
 * @package  CUD Articulos
 * @author   Pablo Jiménez Pinto
 * @version  1.0
 */

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado

// Obtener el array de articulos existente
$articulos = get_articulo();

// Obtener el indice del articulo enviado por POST
$indice = $_POST['indice'] ?? '';

// Comprobar que el indice existe
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($articulos[$indice])) {

    // Eliminar el articulo seleccionado
    unset($articulos[$indice]);

    // Reindexar el array de articulos
    $articulos = array_values($articulos);
}

// Views
include 'views/index.view.php';