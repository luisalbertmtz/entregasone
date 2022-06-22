<?php
  header('Refresh: 3; URL=../../index.php');
  require('../../adodb5/access_private.php');
  include_once('../../snippets/head.php');
  require '../Bitacora/model.php';
  require 'model.php';
?>

<body class="d-flex flex-column h-100">
  <!-- Header-->
  <?php include_once('../../snippets/header.php'); ?>

  <!-- Principal-->
  <main class="container">

    <!-- Login-->
    <form class="form-signin">
      <h2 class="text-center font-weight-bold">Fin de Sesión</h2>
      
      <!-- Formulario-->
      <div class="content-form" style="display: block">
        <p class="text-muted text-center"><i>Gracias por utilizar la App de Control de Inventario One.</i></p>
        
        <div class="text-center content-session-close">
          <i class="flaticon-ui font-icon session-icons"></i>
        </div>

        <!-- <div class="form-group">
          <h3 class="text-center font-weight-bold">Su sesión ha finalizado<br /> Lo esperamos pronto</h3>
        </div>-->
        
        <br />
        <div class="text-center">
          <a class="btn btn-lg btn-primary" href="<?php echo PATH_BACKEND; ?>admin/index.php" title="Ingresar al Sistema">Login</a>
          <?php
            $oSession = new Login();
            $oSession->closeSession();
          ?>
        </div>

      </div>
      
    </form>
    
  </main>

   <!-- Footer -->
   <?php
    include_once('../../snippets/footer.php');
    ?>
</body>
  <script>
    $(function(){
      $("#back").hide();
    });
  </script>

</html>


