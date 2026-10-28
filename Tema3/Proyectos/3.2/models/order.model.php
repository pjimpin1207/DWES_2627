<?php
session_start();
require_once 'libs/funciones_articulos.php';

if (!isset($_SESSION['articulos'])) {
    $_SESSION['articulos'] = generar_tabla_articulos();
}

$criterio = $_GET['criterio'] ?? 'id';
$articulos = $_SESSION['articulos'];

if (count($articulos) > 0) {
    $columna = array_column($articulos, $criterio);
    array_multisort($columna, SORT_ASC, $articulos);
}

$total_articulos = count($articulos);
