<?php
session_start();
require_once 'libs/funciones_articulos.php';

// Inicializar la tabla en sesión si no existe
if (!isset($_SESSION['articulos'])) {
    $_SESSION['articulos'] = generar_tabla_articulos();
}

$articulos = $_SESSION['articulos'];

// Por defecto ordenar por id
array_multisort(array_column($articulos, 'id'), SORT_ASC, $articulos);

$total_articulos = count($articulos);
