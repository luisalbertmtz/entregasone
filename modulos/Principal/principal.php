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

    <!-- Entregas -->
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <a class="navbar-brand" href="../../modulos/Entrega/registro.php"><img src="<?php echo PATH; ?>assets/img/entrega-blancos.jpg" class="card-img-top" alt="Entrega de Blancos"></a>
            <div class="card-body">
              <h5 class="card-title">BLANCOS SUCIOS</h5>
              <p class="card-text">Registrar una entrega</p>
            </div>
          </div>
        </div>

        <!-- Recepcion -->
        <div class="col">
          <div class="card">
            <a class="navbar-brand" href="../../modulos/Recepcion/registro.php"><img src="<?php echo PATH; ?>assets/img/recepcion-blancos.jpg" class="card-img-top" alt="Entrega de Blancos"></a>
            <div class="card-body">
              <h5 class="card-title">BLANCOS LIMPIOS</h5>
              <p class="card-text">Registrar una recepción</p>
            </div>
          </div>
        </div>
        
        <!-- Reporte de pendientes -->
        <div class="col">
          <div class="card">
            <a class="navbar-brand" href="../../modulos/Inventario/listado.php"><img src="<?php echo PATH; ?>assets/img/reporte.jpg" class="card-img-top" alt="Entrega de Blancos"></a>
            <div class="card-body">
              <h5 class="card-title">REPORTE DE PENDIENTES</h5>
              <p class="card-text">Visualizar</p>
            </div>
          </div>
        </div>

             <!-- Reporte del dia -->
             <div class="col">
          <div class="card">
            <a class="navbar-brand" href="../../modulos/fpdf/reporteDia.php"target="_blank" rel="noopener noreferrer"><img src="<?php echo PATH; ?>assets/img/imprimir.jpg" class="card-img-top" alt="Entrega de Blancos"></a>
            <div class="card-body">
              <h5 class="card-title">REPORTE DEL DIA</h5>
              <p class="card-text">Imprimir PDF</p>
            </div>
          </div>
        </div>
             <!-- Reporte de pendientes -->
             <div class="col">
          <div class="card">
            <a class="navbar-brand" href="../../modulos/Entrega/reporte.php"><img src="<?php echo PATH; ?>assets/img/reporte2.jpg" class="card-img-top" alt="Entrega de Blancos"></a>
            <div class="card-body">
              <h5 class="card-title">REPORTE DE BLANCO SUCIOS</h5>
              <p class="card-text">visualizar</p>
            </div>
          </div>
        </div>
             <!-- Reporte de pendientes -->
             <div class="col">
          <div class="card">
            <a class="navbar-brand" href="../../modulos/Recepcion/reporte.php"><img src="<?php echo PATH; ?>assets/img/reporte1.jpg" class="card-img-top" alt="Entrega de Blancos"></a>
            <div class="card-body">
              <h5 class="card-title">REPORTE DE BLANCOS LIMPIOS</h5>
              <p class="card-text">visualizar</p>
            </div>
          </div>
        </div>
  </main>

  <!-- Footer -->
  <?php
  include_once('../../snippets/footer.php');
  ?>

  <!-- Plugins y scripts-->
  <link href="<?php echo PATH ?>assets/css/estadisticas.css" rel="stylesheet">
  <script>
    $(function() {
      $("#back").css("visibility", "hidden");
    });
  </script>

</body>

</html>