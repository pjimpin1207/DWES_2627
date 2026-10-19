<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 3.3 - Tabla de Libros</title>

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
            <i class="bi bi-book"></i>
            <span class="fs-6">Actividad 3.3 - Tabla de Libros</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content mb-5">

                <!-- Encabezado grande similar a la captura -->
                <div class="bg-light p-4 mb-4 rounded border">
                    <h1 class="display-4 fw-normal text-secondary">Actividad 3.3</h1>
                    <p class="lead text-muted mb-0">Gestión Tabla Libros</p>
                </div>

                <h4 class="mb-3">Tabla Libros</h4>

                <!-- Tabla HTML para mostrar los libros -->
                <div class="table-responsive">
                    <table class="table table-hover border-bottom">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Titulo</th>
                                <th>Autor</th>
                                <th>Genero</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Bucle para recorrer la matriz de datos y pintar las filas -->
                            <?php foreach ($libros as $libro): ?>
                            <tr>
                                <td><?= $libro['id'] ?></td>
                                <td><?= $libro['titulo'] ?></td>
                                <td><?= $libro['autor'] ?></td>
                                <td><?= $libro['genero'] ?></td>
                                <td><?= $libro['precio'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </main>

        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light border-top">
            <div class="container">
                <span class="text-muted">
                    &copy; 2026 Pablo Jiménez Pinto - DWES - 2º DAW - Curso 26/27
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