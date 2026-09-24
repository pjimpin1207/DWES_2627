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
    <?php
        echo "<b>Nombre: </b>" . $nombre . "</b><br>";
        echo "<b>Apellido: </b>" . $apellido . "</b><br>";
        echo "<b>Edad: </b>" . $edad . "</b><br>";
        echo "<b>Población: </b>" . $poblacion . "</b><br>";
    ?>
    </body>
</html>