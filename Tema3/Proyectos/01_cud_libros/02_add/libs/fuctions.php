<?php
    
// generame una funcion getLibros que me devuelva los libros con libros reales
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


function obtener_id_nuevo_libro($libros): int
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