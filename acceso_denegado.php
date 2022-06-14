<?php
require('adodb5/access_public.php');
include_once('snippets/head.php');
?>

<body class="d-flex flex-column h-100 text-center">
    <!-- Main -->
    <main class="form-signin flex-shrink-0">
        <h5 class="text-center font-weight-bold">Permisos de acceso</h5>

        <!-- Formulario-->
        <div class="content-form" style="display: block">
            <p class="text-muted text-center"><i>No cuenta con permisos de acceso a este apartado.</i></p>

            <div class="text-center content-session-close">
                <i class="flaticon-open-padlock font-icon session-icons"></i>
            </div>

            <div class="form-group">
                <h3 class="text-center font-weight-bold">Zona restringida<br /> Ingrese credenciales</h3>
            </div>

            <div class="text-center">
                <img src="<?php echo PATH_BACKEND; ?>assets/img/logo_alt.png" class="loading-img" alt="loading data">
            </div>
            <br />

            <div class="text-center">
                <!--button class="btn btn-sm btn-primary" type="submit">Guardar</button-->
                <a class="btn btn-primary btn-lg" href="<?php echo PATH_BACKEND; ?>index.php" title="Ingresar al Sistema">Login</a>
            </div>
    </main>

    <!-- Footer -->
    <?php
    include_once('snippets/footer.php');
    ?>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/validaForm.js"></script>
    <script>
        $(function(){
        $("#back").hide();
        });
    </script>
</body>

</html>