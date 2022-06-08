<nav class="navbar navbar-dark bg-dark fixed-top" aria-label="Dark offcanvas navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="<?php echo PATH; ?>assets/img/logo_alt.png" alt="" width="50" height="auto"></a>
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active fw-bold" aria-current="page" href="<?php echo PATH; ?>modulos/Principal/principal.php"><h4 id="pagina">Principal</h4></a>
        </li>
      </ul>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end bg-light" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">Menú</h5>
          <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo PATH; ?>modulos/Principal/principal.php"><i class="bi bi-house-fill me-3"></i> Principal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo PATH?>modulos/Inventario/listado.php"><i class="bi bi-card-checklist me-3"></i>Inventario</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDarkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-box-arrow-right me-3"></i> Entregas
              </a>
              <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDarkDropdown">
                <li><a class="dropdown-item" href="<?php echo PATH?>modulos/Entrega/registro.php"><i class="bi bi-box-arrow-right me-3"></i>Registrar Entrega</a></li>
                <li><a class="dropdown-item" href="<?php echo PATH?>modulos/Entrega/reporte.php"><i class="bi bi-file-earmark-bar-graph me-3"></i>Reporte de Entregas</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDarkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-box-arrow-in-left me-3"></i> Recepciones
              </a>
              <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDarkDropdown">
                <li><a class="dropdown-item" href="<?php echo PATH?>modulos/Recepcion/registro.php"><i class="bi bi-box-arrow-in-left me-3"></i>Registrar Recepción</a></li>
                <li><a class="dropdown-item" href="<?php echo PATH?>modulos/Recepcion/reporte.php"><i class="bi bi-file-earmark-bar-graph me-3"></i>Reporte de Recepciones</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDarkDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-card-checklist me-3"></i> Catálogos
              </a>
              <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDarkDropdown">
                <li><a class="dropdown-item" href="<?php echo PATH?>modulos/Usuarios/usuarios.php"><i class="bi bi-people-fill me-3"></i>Usuarios</a></li>
                <li><a class="dropdown-item" href="<?php echo PATH?>modulos/Proveedores/proveedores.php"><i class="bi bi-person me-3"></i>Proveedores</a></li>
                <li><a class="dropdown-item" href="<?php echo PATH?>modulos/Articulos/articulos.php"><i class="bi bi-plus-circle me-3"></i>Artículo</a></li>
                <li><a class="dropdown-item" href="<?php echo PATH?>modulos/Categorias/categorias.php"><i class="bi bi-bookmark-plus me-3"></i>Categorías</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo PATH?>modulos/Ayuda/ayuda.php"><i class="bi bi-question-circle me-3"></i> Ayuda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo PATH?>modulos/Acerca/acercaApp.php"><i class="bi bi-info-circle me-3"></i> Acerca de la App</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo PATH?>index.php"><i class="bi bi-x-octagon-fill me-3"></i> Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>