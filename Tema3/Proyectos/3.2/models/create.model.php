<?php
session_start();
require_once 'libs/funciones_articulos.php';

if (!isset($_SESSION['articulos'])) {
    $_SESSION['articulos'] = generar_tabla_articulos();
}

// Obtener el nuevo id (máximo id actual + 1)
$ids = array_column($_SESSION['articulos'], 'id');
$nuevo_id = empty($ids) ? 1 : max($ids) + 1;

$nuevo = [
    'id' => $nuevo_id,
    'Descripcion' => $_POST['Descripcion'],
    'Modelo' => $_POST['Modelo'],
    'Categoria' => $_POST['Categoria'],
    'Unidades' => (int)$_POST['Unidades'],
    'Precio' => (float)$_POST['Precio']
];

$_SESSION['articulos'][] = $nuevo;
