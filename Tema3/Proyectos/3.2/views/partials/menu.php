<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 rounded border">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Catálogo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="new.php">Añadir Artículo</a>
        </li>
      </ul>
      <form class="d-flex" action="search.php" method="GET">
        <input class="form-control me-2" type="search" name="q" placeholder="Buscar..." aria-label="Search" required>
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
