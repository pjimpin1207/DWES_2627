<?php
session_start();
require_once 'libs/funciones_articulos.php';

if (!isset($_SESSION['articulos'])) {
    $_SESSION['articulos'] = generar_tabla_articulos();
}

$query = strtolower($_GET['q'] ?? '');

if (empty($query)) {
    $articulos = $_SESSION['articulos'];
} else {
    $articulos = array_filter($_SESSION['articulos'], function($art) use ($query) {
        foreach($art as $val) {
            if (strpos(strtolower(strval($val)), $query) !== false) {
                return true;
            }
        }
        return false;
    });
}

$total_articulos = count($articulos);
