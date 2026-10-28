<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo artículo</title>

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
            <span class="fs-6">CRUD de artículos</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">

                <h2 class="mb-4">Añadir artículo</h2>

                <form action="create.php" method="POST">

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">
                            Descripción
                        </label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    </div>

                    <div class="mb-3">
                        <label for="modelo" class="form-label">
                            Modelo
                        </label>
                        <input type="text" class="form-control" id="modelo" name="modelo" required>
                    </div>

                    <div class="mb-3">
                        <label for="categorias" class="form-label">
                            Categorías
                        </label>
                        <input type="text" class="form-control" id="categorias" name="categorias"
                            placeholder="Ej.: telefonía, fotografía" required>
                        <div class="form-text">
                            Separa las categorías con comas.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="unidades" class="form-label">
                            Unidades
                        </label>
                        <input type="number" class="form-control" id="unidades" name="unidades" min="0" step="1"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">
                            Precio (€)
                        </label>
                        <input type="number" class="form-control" id="precio" name="precio" min="0" step="0.01"
                            required>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i>
                        Añadir artículo
                    </button>

                    <a href="index.php" class="btn btn-secondary">
                        <i class="bi bi-x-circle"></i>
                        Cancelar
                    </a>

                </form>

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