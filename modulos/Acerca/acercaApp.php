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
            <div class="card-header text-center">Inventarios One v1.0</div>
            <div class="card-body">
                <p class="card-text">
                    Inventarios One, nació de la necesidad de entrega y recepcion de Blancos (Sabanas,Toallas,Wafles etc.).<br />
                    Dicha necesidad nos motivó a ser mas efecientes, a minimizar procesos y realizar la transicion del papel a la tecnología, 
                    misma que se utiliza de manera cotidiana. 
                </p>
                <p class="card-text">
                    App inventarios One fue realizada por diversas tecnologias como PHP 7, adodb5, Javascript, JSON, Ajax, Bootstrap 5.2.<br /> 
                </p>
                <p class="card-text">
                    Así mismo se realizo con una base de datos MYSQL basado en la tecnologia MARIA DB.
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