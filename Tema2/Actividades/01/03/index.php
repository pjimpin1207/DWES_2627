<?php
/* 
    Actividad 2.1.3
    Descripción de las variables:
        - Dos variables de tipo string
        - Una variable con el resultado de la concatenación
    Alumno: Pablo
    Fecha : 05/10/2026
*/

// modelo
// include 'model.index.php';

// lógica de la aplicación
$cadena1 = "Bienvenido al módulo de Desarrollo Web ";
$cadena2 = "en Entorno Servidor (DWES).";

// Concatenación de ambas variables
$resultado = $cadena1 . $cadena2;
?>

<!-- vista -->
<?php include 'view.index.php'; ?>