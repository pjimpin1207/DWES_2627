<?php
session_start();
require_once 'libs/funciones_articulos.php';

$id = $_GET['id'] ?? 0;
$indice = get_indice_articulo_por_id($_SESSION['articulos'], $id);

if ($indice != -1) {
    array_splice($_SESSION['articulos'], $indice, 1);
}
