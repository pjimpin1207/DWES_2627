<?php

/**
 * create.php
 *
 * permite crear un articulo a partir de los datos enviados desde el formulario.
 *
 * @package  CUD Articulos
 * @author   Pablo Jiménez Pinto
 * @version  1.0
 *
 * Tabla articulos:
 *   - id
 *   - descripcion
 *   - modelo
 *   - categorias
 *   - unidades
 *   - precio
 */

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado

// Extraer los datos del formulario
$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo = htmlspecialchars($_POST['modelo'] ?? '');
$categorias = htmlspecialchars($_POST['categorias'] ?? '');
$unidades = htmlspecialchars($_POST['unidades'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? '');

// Proceso de validación de los datos del formulario

// Obtener el array de articulos existente
$articulos = get_articulo();

// Obtener id del nuevo articulo creado
$new_articulo_id = end($articulos)['id'] + 1;

// Crear array asociativo del nuevo articulo
$new_articulo = [
    'id' => $new_articulo_id,
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'categorias' => explode(', ', $categorias),
    'unidades' => $unidades,
    'precio' => $precio
];

// Agregar el nuevo articulo al array de articulos
$articulos[] = $new_articulo;

// Views
include 'views/index.view.php';