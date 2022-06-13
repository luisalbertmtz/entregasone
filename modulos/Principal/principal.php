<?php
ob_start();
require('../../adodb5/access_private.php');
ob_end_clean();
include_once('../../snippets/head.php');
?>

<body class="d-flex flex-column h-100">
  <!-- Begin page content -->
  <main class="flex-shrink-0 container w-100">

    <!-- Header -->
    <?php
    include_once('../../snippets/header.php');
    ?>

    <div class="">
      <div class="list-group">
        <a href="../../modulos/Inventario/listado.php" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Inventario</h5>
            <small><i class="bi bi-card-checklist"></i></small>
          </div>
          <p class="mb-1">Ver inventario</p>
          <small></small>
        </a>
        <a href="../../modulos/Entrega/registro.php" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Entrega</h5>
            <small><i class="bi bi-box-arrow-right"></i></small>
          </div>
          <p class="mb-1">Registre una entrega.</p>
          <small></small>
        </a>
        <a href="../../modulos/Recepcion/registro.php" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Recepción</h5>
            <small class="text-muted"><i class="bi bi-box-arrow-in-left"></i></small>
          </div>
          <p class="mb-1">Registre una recepción</p>
          <small class="text-muted"></small>
        </a>
        <a href="../../modulos/Ayuda/ayuda.php" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Ayuda</h5>
            <small class="text-muted"><i class="bi bi-question-circle"></i></small>
          </div>
          <p class="mb-1">Sección de Ayuda, manual de usuario</p>
          <small class="text-muted"></small>
        </a>
        <a href="../../modulos/Session/logout.php" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Salir</h5>
            <small class="text-muted"><i class="bi bi-x-octagon-fill"></i></small>
          </div>
          <p class="mb-1">Cerrar sesión</p>
        </a>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php
    include_once('../../snippets/footer.php');
  ?>

  <!-- Plugins y scripts-->
  <link href="<?php echo PATH ?>assets/css/estadisticas.css" rel="stylesheet">
 
</body>

</html>