<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado - Proyecto 2.2</title>
    <!-- boostrap 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-3">
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-calculator"></i>
            <span class="fs-5">Resultado Proyecto 2.2 - Lanzamiento Proyectiles</span>
        </header>

        <main>
            <div class="content mb-5">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th colspan="2">Valores Iniciales:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Velocidad Inicial</td>
                            <td><?= number_format($velocidad_inicial, 2, ',', '.') ?> m/s</td>
                        </tr>
                        <tr>
                            <td>Angulo Inclinación</td>
                            <td><?= number_format($angulo_lanzamiento, 2, ',', '.') ?>º</td>
                        </tr>
                        <tr class="table-dark">
                            <th colspan="2">Resultados:</th>
                        </tr>
                        <tr>
                            <td>Angulo Radianes</td>
                            <td><?= number_format($angulo_radial, 5, ',', '.') ?> Radianes</td>
                        </tr>
                        <tr>
                            <td>Velocidad Inicial X</td>
                            <td><?= number_format($velocidad_inicial_horizontal, 2, ',', '.') ?> m/s</td>
                        </tr>
                        <tr>
                            <td>Velocidad Inicial Y</td>
                            <td><?= number_format($velocidad_inicial_vertical, 2, ',', '.') ?> m/s</td>
                        </tr>
                        <tr>
                            <td>Alcance Máximo del Proyectil:</td>
                            <td><?= number_format($alcance_maximo, 2, ',', '.') ?> m</td>
                        </tr>
                        <tr>
                            <td>Tiempo de Vuelo del proyectil:</td>
                            <td><?= number_format($tiempo_vuelo, 2, ',', '.') ?> s</td>
                        </tr>
                        <tr>
                            <td>Altura Máxima del Proyectil:</td>
                            <td><?= number_format($altura_maxima, 2, ',', '.') ?> m</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Botón Volver -->
                <div class="mt-3">
                    <a href="index.php" class="btn btn-primary">Volver</a>
                </div>
            </div>
        </main>

        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Pablo Jiménez Pinto - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>
    </div>
</body>

</html>