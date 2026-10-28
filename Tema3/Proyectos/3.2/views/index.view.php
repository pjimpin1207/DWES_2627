<?php include 'views/layouts/head.php'; ?>
<?php include 'views/partials/header.php'; ?>
<?php include 'views/partials/menu.php'; ?>

<main>
    <h3 class="mb-3">Listado de Artículos</h3>
    <div class="table-responsive">
        <table class="table table-hover table-striped border">
            <thead class="table-dark">
                <tr>
                    <th><a href="order.php?criterio=id" class="text-white text-decoration-none">ID <i class="bi bi-arrow-down-up"></i></a></th>
                    <th><a href="order.php?criterio=Descripcion" class="text-white text-decoration-none">Descripción <i class="bi bi-arrow-down-up"></i></a></th>
                    <th><a href="order.php?criterio=Modelo" class="text-white text-decoration-none">Modelo <i class="bi bi-arrow-down-up"></i></a></th>
                    <th><a href="order.php?criterio=Categoria" class="text-white text-decoration-none">Categoría <i class="bi bi-arrow-down-up"></i></a></th>
                    <th><a href="order.php?criterio=Unidades" class="text-white text-decoration-none">Unidades <i class="bi bi-arrow-down-up"></i></a></th>
                    <th><a href="order.php?criterio=Precio" class="text-white text-decoration-none">Precio <i class="bi bi-arrow-down-up"></i></a></th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($articulos)): ?>
                    <tr><td colspan="7" class="text-center">No hay artículos disponibles.</td></tr>
                <?php else: ?>
                    <?php foreach($articulos as $art): ?>
                    <tr>
                        <td><?= $art['id'] ?></td>
                        <td><?= htmlspecialchars($art['Descripcion']) ?></td>
                        <td><?= htmlspecialchars($art['Modelo']) ?></td>
                        <td><?= htmlspecialchars($art['Categoria']) ?></td>
                        <td><?= $art['Unidades'] ?></td>
                        <td><?= number_format($art['Precio'], 2, ',', '.') ?> €</td>
                        <td>
                            <a href="edit.php?id=<?= $art['id'] ?>" class="btn btn-warning btn-sm" title="Modificar"><i class="bi bi-pencil"></i></a>
                            <a href="delete.php?id=<?= $art['id'] ?>" class="btn btn-danger btn-sm" title="Eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar este artículo?');"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
            <tfoot>
                <tr><td colspan="7">Número total de artículos: <strong><?= $total_articulos ?></strong></td></tr>
            </tfoot>
        </table>
    </div>
</main>

<?php include 'views/partials/footer.php'; ?>
<?php include 'views/layouts/javascript.php'; ?>
