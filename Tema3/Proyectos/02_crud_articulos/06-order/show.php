<?php

/**
 * show.php
 *
 * permite mostrar la ficha de un articulo.
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

// Obtener el indice del articulo
$indice = $_GET['indice'] ?? '';

// Obtener el articulo seleccionado
$articulo = $articulos[$indice];

// Views
include 'views/show.view.php';