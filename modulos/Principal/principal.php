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
            <h5 class="card-title">ENTREGAS DE BLANCOS</h5>
            <p class="card-text">Registre una entrega</p>
          </div>
        </div>
      </div>
      

    <!-- Recepcion -->
      <div class="col">
       <div class="card">
          <a class="navbar-brand" href="../../modulos/Recepcion/registro.php"><img src="<?php echo PATH; ?>assets/img/recepcion-blancos.jpg" class="card-img-top" alt="Entrega de Blancos"></a>
          <div class="card-body">
            <h5 class="card-title">RECEPCION DE BLANCOS</h5>
            <p class="card-text">Registre una recepción</p>
          </div>
        </div>
      </div>


      <!-- Ayuda -->
      <div class="col">
       <div class="card">
          <a class="navbar-brand" href="../../modulos/Inventario/listado.php"><img src="<?php echo PATH; ?>assets/img/reporte.jpg" class="card-img-top" alt="Entrega de Blancos"></a>
          <div class="card-body">
            <h5 class="card-title">PENDIENTES</h5>
            <p class="card-text">Entregas/Recepcion</p>
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
    $(function(){
      $("#back").hide();
    });
  </script>

</body>

</html>