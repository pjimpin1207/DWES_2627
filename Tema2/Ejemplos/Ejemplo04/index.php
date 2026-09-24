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
        <?php
            // comillas doble
            echo "<b>Nombre: " . $nombre . "</b><br>";

            // comillas simple
            echo '<b>Nombre: $nombre </b><br>';

            // solucion uso commillas simples y concatenacion
            echo '<b>Nombre: ' . $nombre . '</b><br>';
        ?>
    </body>
</html>