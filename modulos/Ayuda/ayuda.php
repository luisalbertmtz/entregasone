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
        <div class="card text-bg-primary mb-5" style="max-width: 18rem;">
            <div class="card-header text-center">Ver el inventario</div>
            <div class="card-body">
                <p class="card-text">Presionar el menu del lado derecho superior de la pantalla, 
                    hacer click en la segunda opcion Inventario.</p>
            </div>
        </div>
        <div class="card text-bg-info mb-5" style="max-width: 18rem;">
            <div class="card-header text-center">Ver el catagolo</div>
            <div class="card-body">
            <p class="card-text">Presionar el menu del lado derecho superior de la pantalla, 
                hacer click en la opcion catalogo posteriro a ello hacer click en Articulo.</p>
            </div>
            
        </div>
        <div class="card text-bg-info mb-5" style="max-width: 18rem;">
            <div class="card-header text-center">Dar la alta a un Proveedor</div>
            <div class="card-body">
            <p class="card-text">Presionar el menu del lado derecho superior de la pantalla, 
                hacer click en la opcion catalogo posteriro a ello hacer click en Proveedores.</p>
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
        $(function() {
            $("#pagina").html("Ayuda");
        });
    </script>


</body>

</html>