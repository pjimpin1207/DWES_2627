<?php

/*
    Controlador: multiplicacion.php

    Proyecto: proyecto 2.1 - calculadora básica
    Descripción: Calculadora de operaciones básicas
        - suma
        - resta
        - multiplicación
        - división
        - potencia
        - ...
    Alumno: Pablo Jiménez Pinto
    Fecha: 05/10/2026
*/

// Modelo

// Negociado
// Recoger los valores del formulario
$valor1 = $_POST['valor1'] ?? 0;
$valor2 = $_POST['valor2'] ?? 0;

// Realizar la operación de multiplicación
$resultado = $valor1 * $valor2;

$operacion = 'Multiplicación';

// Vista
include 'views/resultado.view.php';