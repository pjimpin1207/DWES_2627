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

// Definir la constante de la Gravedad Universal con valor 9.8
define('G', 9.8); 

// Obtener variables del formulario
$velocidad_inicial = (float) ($_POST['velocidad_inicial'] ?? 0);
$angulo_lanzamiento = (float) ($_POST['angulo_lanzamiento'] ?? 0);

// Convertir ángulo en radianes
$angulo_radial = deg2rad($angulo_lanzamiento);

// Calcular la velocidad inicial horizontal (V0x = V0 * CosA0) y vertical (V0y = V0 * SenA0)
$velocidad_inicial_horizontal = $velocidad_inicial * cos($angulo_radial);
$velocidad_inicial_vertical = $velocidad_inicial * sin($angulo_radial);

// Tiempo de vuelo del proyectil: t = 2 * (V0y / g)
$tiempo_vuelo = (2 * $velocidad_inicial_vertical) / G;

// Altura máxima del proyectil: Ymax = (V0^2 * sen^2(A0)) / 2g
$altura_maxima = pow($velocidad_inicial_vertical, 2) / (2 * G);

// Alcance máximo del proyectil: Xmax = (V0^2 * sen(2*A0)) / g
$alcance_maximo = (pow($velocidad_inicial, 2) * sin(2 * $angulo_radial)) / G;

// Vista
include 'views/resultado.view.php';