<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 3.2</title>

    <!-- CSS Bootstrap 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Iconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="container mt-3">

        <!-- Cabecera -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">
                Actividad 3.2 - Formulario de registro con acceso según usuario
            </span>
        </header>

        <!-- Contenido principal -->
        <main>
            <div class="content">

                <h2>Acceso de usuario</h2>

                <!-- Menú dinámico según el perfil -->
                <ul class="nav nav-tabs mb-4">

                    <?php if ($perfil === 'admin'): ?>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Añadir</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Eliminar</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Actualizar</a>
                    </li>



                    <?php elseif ($perfil === 'edit'): ?>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="#">Añadir</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Actualizar</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Consultar</a>
                    </li>

                    <?php elseif ($perfil === 'user'): ?>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Consultar</a>
                    </li>

                    <?php endif; ?>

                </ul>

                <!-- Detalles del usuario -->
                <div class="card">

                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Detalles del usuario</h4>
                    </div>

                    <div class="card-body">

                        <p>
                            <strong>Nombre de usuario:</strong>
                            <?= htmlspecialchars($usuario, ENT_QUOTES, 'UTF-8') ?>
                        </p>

                        <p>
                            <strong>Email:</strong>
                            <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>
                        </p>

                        <p>
                            <strong>Contraseña:</strong>
                            <?= str_repeat('*', min(strlen($password), 12)) ?>
                        </p>

                        <p>
                            <strong>Perfil:</strong>
                            <?= htmlspecialchars(ucfirst($perfil), ENT_QUOTES, 'UTF-8') ?>
                        </p>

                    </div>

                </div>

            </div>
        </main>

        <!-- Pie de página -->
        <footer class="mt-5 py-3 bg-light">
            <div class="container">
                <span class="text-muted">
                    &copy; 2026 Pablo Jiménez Pinto - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

    </div>

    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

</body>

</html>