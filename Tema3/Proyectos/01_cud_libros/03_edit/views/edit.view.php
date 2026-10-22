<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Editar libro - CRUD Libros</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container mt-3">

        <!-- Cabecera -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Proyecto 3.1 - CRUD de libros</span>
        </header>

        <!-- Contenido principal -->
        <main>
            <div class="content">

                <h1 class="h4 mb-3">Formulario de editar libros</h1>

                <?php if (isset($error)): ?>
                <div class="alert alert-danger">
                    <?= htmlspecialchars($error) ?>
                </div>
                <?php endif; ?>

                <?php if (isset($mensaje)): ?>
                <div class="alert alert-info">
                    <?= htmlspecialchars($mensaje) ?>
                </div>
                <?php endif; ?>

                <form action="edit.php" method="POST">

                    <!-- ID del libro -->
                    <input type="hidden" name="id" value="<?= (int) $libro['id'] ?>">

                    <div class="mb-3">
                        <label for="titulo" class="form-label">
                            Título
                        </label>

                        <input type="text" class="form-control" id="titulo" name="titulo" maxlength="255"
                            value="<?= htmlspecialchars($libro['titulo']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="autor" class="form-label">
                            Autor
                        </label>

                        <input type="text" class="form-control" id="autor" name="autor" maxlength="255"
                            value="<?= htmlspecialchars($libro['autor']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="editorial" class="form-label">
                            Editorial
                        </label>

                        <input type="text" class="form-control" id="editorial" name="editorial" maxlength="100"
                            value="<?= htmlspecialchars($libro['editorial']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="genero" class="form-label">
                            Géneros
                        </label>

                        <input type="text" class="form-control" id="genero" name="genero"
                            value="<?= htmlspecialchars(implode(', ', $libro['genero'])) ?>"
                            placeholder="Ejemplo: Novela, Misterio" required>

                        <div class="form-text">
                            Separa los géneros mediante comas.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">
                            Precio (€)
                        </label>

                        <input type="number" class="form-control" id="precio" name="precio" min="0" step="0.01"
                            value="<?= htmlspecialchars((string) $libro['precio']) ?>" required>
                    </div>

                    <!-- Botones -->
                    <a href="index.php" class="btn btn-secondary">
                        Cancelar
                    </a>

                    <button type="reset" class="btn btn-warning">
                        Borrar
                    </button>

                    <button type="submit" class="btn btn-primary">
                        Actualizar libro
                    </button>

                </form>

            </div>
        </main>

        <!-- Pie de página -->
        <footer class="mt-5 py-3 bg-light">
            <div class="container">
                <span class="text-muted">
                    &copy; 2026 Pablo Jiménez Pinto -
                    DWES - 2.º DAW - Curso 26/27
                </span>
            </div>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>