<?php

/*
    Proyecto: Proyecto 2.2 - Cálculo de lanzamientos
    Descripción: Cálculo de lanzamiento proyectiles
        - la altura máxima
        - el tiempo de vuelo
        - la distancia horizontal del proyectil
        - velocidad inicial horizontal
        - velocidad inicial vertical
    Alumno: Pablo Jiménez Pinto
    Fecha: 06/10/2026
*/

// Modelo

// obetener variable gravedad
define('G', 9.8);

//obetenr variables del formulario
$velocidad_inicial = (float) $_POST['velocidad_inicial'] ?? 0;
$angulo_lanzamiento = (float) $_POST['angulo_lanzamiento'] ?? 0;

// convertir angulo en radial
$angulo_radial = deg2rad($angulo_lanzamiento);

// calcular la velocidad inicial horizontal y vertical
$velocidad_inicial_horizontal = $velocidad_inicial * cos($angulo_radial);
$velocidad_inicial_vertical = $velocidad_inicial * sin($angulo_radial);

// tiempo de vuelo del proyectil
$tiempo_vuelo = (2 * $velocidad_inicial_vertical) / G;

// altura máxima del proyectil
$altura_maxima = ($velocidad_inicial_vertical^2) / (2 * G);

// distancia horizontal del proyectil
$distancia_horizontal = $velocidad_inicial_horizontal * $tiempo_vuelo;








// Vista
include 'views/resultado.view.php';