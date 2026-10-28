<?php

/**
 * update.php
 *
 * permite actualizar un articulo a partir de los datos enviados desde el formulario.
 *
 * @package  CUD Articulos
 * @author   Pablo Jiménez Pinto
 * @version  1.0
 */

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado

// Extraer los datos del formulario
$indice = $_POST['indice'] ?? '';
$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo = htmlspecialchars($_POST['modelo'] ?? '');
$categorias = htmlspecialchars($_POST['categorias'] ?? '');
$unidades = htmlspecialchars($_POST['unidades'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? '');

// Obtener el array de articulos existente
$articulos = get_articulo();

// Actualizar el articulo seleccionado
$articulos[$indice] = [
    'id' => $articulos[$indice]['id'],
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'categorias' => explode(', ', $categorias),
    'unidades' => $unidades,
    'precio' => $precio
];

// Views
include 'views/index.view.php';