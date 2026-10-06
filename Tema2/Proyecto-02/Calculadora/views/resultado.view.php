<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tema 2 Proyecto 1</title>
    <!-- boostrap 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-3">
        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-calculator"></i>
            <span class="fs-5">Tema 2 Proyecto 2</span>
        </header>
        <!-- contenido principal  de la aplicación -->
        <main>
            <div>
                <!-- Formulario de la calculadora -->
                <form method="post">
                    <!-- Campo valor 1 -->
                    <div class="mb-3">
                        <label for="valor1" class="form-label">Valor 1:</label>
                        <input type="number" class="form-control" step="0.01" placeholder="0.01" value="<?= $valor1 ?>"
                            readonly>
                    </div>
                    <!-- Campo valor 2 -->
                    <div class=" mb-3">
                        <label for="valor2" class="form-label">Valor 2:</label>
                        <input type="number" class="form-control" step="0.01" placeholder="0.01" value="<?= $valor2 ?>"
                            readonly>
                    </div>
                    <!-- Campo resultado -->
                    <div class="mb-3">
                        <label for="resultado" class="form-label"><?= $operacion ?></label>
                        <input type="number" class="form-control" step="0.01" placeholder="0.01"
                            value="<?= $resultado ?>" readonly>
                    </div>
                    <!-- botones de acción -->
                    <div class="btn-group" role="group">
                        <button type="submit" class="btn btn-warning" name="operacion" value="dividir"
                            formaction="index.php">Nueva operación</button>
                    </div>
                </form>
            </div>
        </main>

        <footer class="footer mt-auto py-3 fixed-bottom bg-light  ">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Pablo Jiménez Pinto - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>