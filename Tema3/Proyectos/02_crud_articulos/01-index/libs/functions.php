<?php

/*
    Librería: functions.php
    Funciones auxiliares para el proyecto CRUD de artículos.

    Funciones incluidas:
        - get_articulo(): Devuelve un array con todos los artículos.
*/

function get_articulo()
{
    $articulos = [
        [
            'id' => 1,
            'descripcion' => 'Teléfono móvil',
            'modelo' => 'Samsung Galaxy A55',
            'categorias' => ['telefonía'],
            'unidades' => 15,
            'precio' => 349.99
        ],
        [
            'id' => 2,
            'descripcion' => 'Cámara digital',
            'modelo' => 'Canon EOS R50',
            'categorias' => ['fotografía'],
            'unidades' => 8,
            'precio' => 679.00
        ],
        [
            'id' => 3,
            'descripcion' => 'Auriculares inalámbricos',
            'modelo' => 'Sony WH-CH720N',
            'categorias' => ['sonido', 'telefonía'],
            'unidades' => 20,
            'precio' => 89.95
        ]
    ];

    return $articulos;
}