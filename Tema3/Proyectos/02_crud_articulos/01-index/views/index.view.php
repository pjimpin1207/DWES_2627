<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.1 - CRUD Artículos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-3">

        <!-- Cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-box-seam"></i>
            <span class="fs-6">Proyecto 3.1 - CRUD Artículos</span>
        </header>

        <!-- Contenido principal -->
        <main>
            <div class="content">
                <legend>Tabla de artículos</legend>

                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead>
                            <tr>
                                <th scope="col" class="text-end">ID</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Categorías</th>
                                <th scope="col" class="text-end">Unidades</th>
                                <th scope="col" class="text-end">Precio</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($articulos as $articulo): ?>
                            <tr>
                                <th scope="row" class="text-end">
                                    <?= htmlspecialchars((string) $articulo['id']) ?>
                                </th>

                                <td>
                                    <?= htmlspecialchars($articulo['descripcion']) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($articulo['modelo']) ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars(implode(', ', $articulo['categorias'])) ?>
                                </td>

                                <td class="text-end">
                                    <?= number_format($articulo['unidades'], 0, ',', '.') ?>
                                </td>

                                <td class="text-end">
                                    <?= number_format($articulo['precio'], 2, ',', '.') ?> €
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="4" class="text-end fw-bold">
                                    Total de artículos
                                </td>

                                <td class="text-end fw-bold">
                                    <?= count($articulos) ?>
                                </td>

                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
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

        <!-- js bootstrap básico 6.0 -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous">
        </script>

    </div>
</body>

</html>