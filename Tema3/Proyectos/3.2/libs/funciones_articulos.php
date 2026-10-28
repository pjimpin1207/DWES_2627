<?php
function generar_tabla_articulos() {
    return [
        ['id' => 1, 'Descripcion' => 'Portátil Gaming', 'Modelo' => 'Asus ROG', 'Categoria' => 'Portátil', 'Unidades' => 10, 'Precio' => 1200.50],
        ['id' => 2, 'Descripcion' => 'Teclado Mecánico', 'Modelo' => 'Logitech G', 'Categoria' => 'Componente', 'Unidades' => 25, 'Precio' => 89.99],
        ['id' => 3, 'Descripcion' => 'Monitor 27"', 'Modelo' => 'LG UltraGear', 'Categoria' => 'Pantalla', 'Unidades' => 15, 'Precio' => 250.00],
        ['id' => 4, 'Descripcion' => 'Impresora Láser', 'Modelo' => 'HP LaserJet', 'Categoria' => 'Impresora', 'Unidades' => 5, 'Precio' => 150.00],
        ['id' => 5, 'Descripcion' => 'PC Sobremesa', 'Modelo' => 'Dell OptiPlex', 'Categoria' => 'PC sobremesa', 'Unidades' => 8, 'Precio' => 800.00]
    ];
}

function generar_tabla_categorias() {
    return ['Portátil', 'PC sobremesa', 'Componente', 'Pantalla', 'Impresora'];
}

function get_indice_articulo_por_id($tabla, $id) {
    foreach($tabla as $index => $articulo) {
        if($articulo['id'] == $id) return $index;
    }
    return -1;
}
