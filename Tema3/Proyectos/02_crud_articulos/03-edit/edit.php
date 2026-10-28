<?php

/**
 * edit.php
 *
 * permite editar un articulo.
 *
 * @package  CUD Articulos
 * @author   Pablo Jiménez Pinto
 * @version  1.0
 */

// Cargar librerias
require_once 'libs/functions.php';

// Obtener el array de articulos
$articulos = get_articulo();

// Obtener el indice del articulo
$indice = $_GET['indice'] ?? '';

// Obtener el articulo seleccionado
$articulo = $articulos[$indice];

// Views
include 'views/edit.view.php';