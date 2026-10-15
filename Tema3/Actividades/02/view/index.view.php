<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 3.2</title>

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
            <i class="bi bi-stack"></i>
            <span class="fs-6">Actividad 3.2 - Formulario de registro con acceso segun usuario</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <h2>Formulario de registro</h2>

                <!-- formulario de registro -->
                <form action="acceso.php" method="POST">
                    <div class="form-group">

                        <!-- campo usuario -->
                        <label for="usuario">Nombre de usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario"
                            placeholder="Introduce el usuario" required>

                        <!-- campo email -->
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Introduce tu email" required>

                        <!-- campo contraseña -->
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Introduce tu contraseña" required>

                        <!-- campo perfil -->
                        <label for="perfil">Perfil de usuario</label>
                        <select class="form-control" id="perfil" name="perfil" required>
                            <?php foreach ($perfiles as $perfil): ?>
                            <option value="<?= htmlspecialchars($perfil) ?>"
                                <?= ($perfil === 'admin') ? 'selected' : '' ?>>
                                <?= ucfirst($perfil) ?>
                            </option>
                            <?php endforeach; ?>
                        </select>

                        <!-- botones de acción -->
                        <button type="reset" class="btn btn-secondary">Borrar</button>
                        <button type="submit" class="btn btn-primary">Acceso</button>
                </form>

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

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>

    </div>
</body>

</html>