<?php

/*
 * fuctions.php
 * Contiene las funciones del proyecto CRUD de libros.
 *
 * @package CRUD libros
 * @author Pablo Jiménez
 * @version 1.0
 */

// Devuelve todos los libros
function getLibros(): array
{
    return array(
        array(
            'id' => 1,
            'titulo' => 'El Principito',
            'autor' => 'Antoine de Saint-Exupéry',
            'editorial' => 'Destino',
            'genero' => array('Novela', 'Infantil'),
            'precio' => 10.99
        ),
        array(
            'id' => 2,
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'editorial' => 'Alianza Editorial',
            'genero' => array('Novela', 'Distopía'),
            'precio' => 20.99
        ),
        array(
            'id' => 3,
            'titulo' => 'El Código Da Vinci',
            'autor' => 'Dan Brown',
            'editorial' => 'Planeta',
            'genero' => array('Novela', 'Misterio'),
            'precio' => 30.99
        )
    );
}

// Devuelve un libro buscando por su ID
function getLibro(int $id): ?array
{
    $libros = getLibros();

    foreach ($libros as $libro) {
        if ($libro['id'] === $id) {
            return $libro;
        }
    }

    return null;
}

// Devuelve el siguiente ID disponible
function obtener_id_nuevo_libro(array $libros): int
{
    $last_id = 0;

    foreach ($libros as $libro) {
        if ($libro['id'] > $last_id) {
            $last_id = $libro['id'];
        }
    }

    return $last_id + 1;
}

?>