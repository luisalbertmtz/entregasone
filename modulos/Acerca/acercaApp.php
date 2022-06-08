<?php
require('../../adodb5/access_public.php');
include_once('../../snippets/head.php');
require 'model.php';

$oProductos = new Productos();
?>

<body class="d-flex flex-column h-100">
    <!-- Begin page content -->
    <main class="container-fluid">

        <!-- Header -->
        <?php
        include_once('../../snippets/header.php');
        ?>

    </main>
    <div class="container">
        <div class="card text-bg-primary mb-5" style="max-width: 30rem;">
            <div class="card-header text-center">Inventarios One</div>
            <div class="card-body">
                <p class="card-text">Inventarios One, nacio de la necesidad de entrega y recepcion de Blancos(Sabanas,Toallas,Wafles etc...)
            dicha necesidad nos orillo a ser mas efecientes, a minizar procesos realizar la transicion del papel a la tecnologia, misma que se utiliza
            de manera cotidiana. App inventarios One fue realizada por diversas tecnologias como PHP,Json,Ajax,Bootstrap asi mismo se realizo con una 
            base de datos MYSQL basado en la tecnologia MARIA DB.
                </p>
            </div>
        </div>

        </div>
    <!-- Footer -->
    <?php
    include_once('../../snippets/footer.php');
    ?>
    <link href="<?php echo PATH ?>assets/css/register.css" rel="stylesheet">
    <script src="<?php echo PATH_BACKEND ?>assets/js/validaForm.js"></script>
    <script>
        $(function(){
            $("#pagina").html("Acerca de");
        });
    </script>
</body>

</html>