<?php include 'views/layouts/head.php'; ?>
<?php include 'views/partials/header.php'; ?>
<?php include 'views/partials/menu.php'; ?>

<main>
    <h3 class="mb-3">Añadir Nuevo Artículo</h3>
    <form action="create.php" method="POST" class="border p-4 bg-light rounded">
        <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="Descripcion" name="Descripcion" required>
        </div>
        <div class="mb-3">
            <label for="Modelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="Modelo" name="Modelo" required>
        </div>
        <div class="mb-3">
            <label for="Categoria" class="form-label">Categoría</label>
            <select class="form-select" id="Categoria" name="Categoria" required>
                <option value="" disabled selected>Selecciona una categoría...</option>
                <?php foreach($categorias as $cat): ?>
                    <option value="<?= htmlspecialchars($cat) ?>"><?= htmlspecialchars($cat) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="Unidades" class="form-label">Unidades</label>
                <input type="number" class="form-control" id="Unidades" name="Unidades" required min="0">
            </div>
            <div class="col-md-6 mb-3">
                <label for="Precio" class="form-label">Precio (€)</label>
                <input type="number" class="form-control" id="Precio" name="Precio" required step="0.01" min="0">
            </div>
        </div>
        
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar Artículo</button>
    </form>
</main>

<?php include 'views/partials/footer.php'; ?>
<?php include 'views/layouts/javascript.php'; ?>
