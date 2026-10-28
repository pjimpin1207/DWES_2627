<?php

/**
 * index.php
 *
 * Controlador principal del proyecto CRUD de artículos.
 * Carga los artículos y muestra la tabla principal.
 *
 * @package CRUD Artículos
 * @version 1.0
 */

// Cargar librerías.
require_once 'libs/functions.php';

// Models: no se utilizan en esta fase.

// Negocio: obtener los artículos.
$articulos = get_articulo();

// Vista: mostrar la tabla.
include 'views/index.view.php';