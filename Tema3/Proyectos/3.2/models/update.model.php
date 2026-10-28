<?php
session_start();
require_once 'libs/funciones_articulos.php';

$id = $_POST['id'] ?? 0;
$indice = get_indice_articulo_por_id($_SESSION['articulos'], $id);

if ($indice != -1) {
    $_SESSION['articulos'][$indice]['Descripcion'] = $_POST['Descripcion'];
    $_SESSION['articulos'][$indice]['Modelo'] = $_POST['Modelo'];
    $_SESSION['articulos'][$indice]['Categoria'] = $_POST['Categoria'];
    $_SESSION['articulos'][$indice]['Unidades'] = (int)$_POST['Unidades'];
    $_SESSION['articulos'][$indice]['Precio'] = (float)$_POST['Precio'];
}
