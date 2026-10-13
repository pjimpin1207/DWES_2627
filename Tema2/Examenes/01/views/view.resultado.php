<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-calculator"></i>
            <span class="fs-6">Resultados</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content mb-5">
                <table class="table table-bordered">
                    <thead class="table">
                        <tr>
                            <th>Magnitud</th>
                            <th>Valor</th>
                            <th>Unidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Velocidad final</td>
                            <td><?= number_format($v, 2, ',', '.') ?></td>
                            <td>m/s</td>
                        </tr>
                        <tr>
                            <td>Espacio recorrido</td>
                            <td><?= number_format($e, 2, ',', '.') ?></td>
                            <td>m</td>
                        </tr>
                        <tr>
                            <td>Fuerza neta</td>
                            <td><?= number_format($f, 2, ',', '.') ?></td>
                            <td>N</td>
                        </tr>
                        <tr>
                            <td>Energia cinética final</td>
                            <td><?= number_format($ec, 2, ',', '.') ?></td>
                            <td>J</td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-4">
                    <a href="index.php" class="btn btn-primary">
                        </i> Volver
                    </a>
                </div>
            </div>
        </main>

        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Pablo Jimenez Pinto - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>

    </div>
</body>

</html>