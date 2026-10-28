<?php include 'views/layouts/head.php'; ?>
<?php include 'views/partials/header.php'; ?>
<?php include 'views/partials/menu.php'; ?>

<main>
    <h3 class="mb-3">Modificar Artículo</h3>
    <form action="update.php" method="POST" class="border p-4 bg-light rounded">
        <!-- Input oculto para el ID que no se puede editar -->
        <input type="hidden" name="id" value="<?= $articulo['id'] ?>">
        
        <div class="mb-3">
            <label class="form-label">ID del Artículo (No editable)</label>
            <input type="text" class="form-control" value="<?= $articulo['id'] ?>" disabled>
        </div>

        <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="<?= htmlspecialchars($articulo['Descripcion']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="Modelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="Modelo" name="Modelo" value="<?= htmlspecialchars($articulo['Modelo']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="Categoria" class="form-label">Categoría</label>
            <select class="form-select" id="Categoria" name="Categoria" required>
                <?php foreach($categorias as $cat): ?>
                    <option value="<?= htmlspecialchars($cat) ?>" <?= ($articulo['Categoria'] == $cat) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($cat) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="Unidades" class="form-label">Unidades</label>
                <input type="number" class="form-control" id="Unidades" name="Unidades" value="<?= $articulo['Unidades'] ?>" required min="0">
            </div>
            <div class="col-md-6 mb-3">
                <label for="Precio" class="form-label">Precio (€)</label>
                <input type="number" class="form-control" id="Precio" name="Precio" value="<?= $articulo['Precio'] ?>" required step="0.01" min="0">
            </div>
        </div>
        
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar Artículo</button>
    </form>
</main>

<?php include 'views/partials/footer.php'; ?>
<?php include 'views/layouts/javascript.php'; ?>
