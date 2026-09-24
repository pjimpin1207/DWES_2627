<?php
    $nombre = "Pablo";
    $apellido = "Jiménez Pinto";
    $edad = 22;
    $poblacion = "Villamartín";
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ficha Alumnos</title>
    </head>
    <body>
        <h1>Ficha Alumnos</h1>
            <!-- Muestra los datos del alumno-->
            Nombre: <?= $nombre ?><br>
            Apellido: <?= $apellido ?><br>
            Edad: <?= $edad ?><br>
            Población: <?= $poblacion ?><br>
    </body>
</html>