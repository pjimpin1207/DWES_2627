<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.1 - CRUD Artículos</title>

    <!-- css bootstrap 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Proyecto 3.1 - CRUD Artículos</span>
        </header>

        <!-- Menú principal de la aplicación -->
        <nav class="navbar md:navbar-expand bg-1">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Artículos</a>

                <ul class="nav navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            Listado
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="new.php">
                            Nuevo
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <legend>Tabla de artículos</legend>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
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
                                    <?= $articulo['id'] ?>
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
                                    <?= $articulo['unidades'] ?>
                                </td>

                                <td class="text-end">
                                    <?= number_format($articulo['precio'], 2, ',', '.') ?> €
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="4" class="text-end">Total</td>
                                <td class="text-end">
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
                    Pablo Jiménez Pinto - DWES - 2º DAW - Curso 26/27
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