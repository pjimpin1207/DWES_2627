<?php
    
// generame una funcion getLibros que me devuelva los libros con libros reales

function getLibros(): array
{
    return array(
        array('id' => 1, 'titulo' => 'El Principito', 'autor' => 'Antoine de Saint-Exupéry', 'editorial' => 'Destino', 'genero' => 'Novela', 'precio' => 10.99),
        array('id' => 2, 'titulo' => '1984', 'autor' => 'George Orwell', 'editorial' => 'Alianza Editorial', 'genero' => 'Novela', 'precio' => 20.99),
        array('id' => 3, 'titulo' => 'El Código Da Vinci', 'autor' => 'Dan Brown', 'editorial' => 'Planeta', 'genero' => 'Novela', 'precio' => 30.99),
    );
}


?>