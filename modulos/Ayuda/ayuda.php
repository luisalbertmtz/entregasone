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
        <div class="card text-bg-primary">
            <div class="card-header text-center">Entrega de Blancos</div>
            <div class="card-body">
                <p class="card-text">
                    Para registrar una entrega de artículos al Proveedor, debe seguir el siguiente procedimiento.<br />
                <ul>
                    <li>1.- Asegurarse que el proveedor esté registrado, en caso contrario consulte la sección de Catálogos.</li>
                    <li>2.- Seleccionar del menú principal la opción Entregas y del submenú registrar Entrega</li>
                    <li>3.- Asegurese de tener el producto registrado</li>
                    <li>4.- Complete el formulario seleccionando el producto, al hacerlo el campo de Proveedor se completa.</li>
                    <li>5.- Ingrese comentarios adicionales y la cantidad a entregar.</li>
                </ul>
                </p>
            </div>
        </div>
        <div class="card text-bg-primary">
            <div class="card-header text-center">Recepción de Blancos</div>
            <div class="card-body">
                <p class="card-text">
                    Para registrar una recepción de artículos al Proveedor, debe seguir el siguiente procedimiento.<br />
                <ul>
                    <li>1.- Asegurarse que el proveedor esté registrado, en caso contrario consulte la sección de Catálogos.</li>
                    <li>2.- Seleccionar del menú principal la opción Recepción y del submenú registrar Recepción</li>
                    <li>3.- Asegurese de tener el producto registrado</li>
                    <li>4.- Complete el formulario seleccionando el producto, al hacerlo el campo de Proveedor se completa.</li>
                    <li>5.- Ingrese comentarios adicionales y la cantidad recibida.</li>
                </ul>
                </p>
            </div>
        </div>
        <div class="card text-bg-info">
            <div class="card-header text-center">Actualización de Catálogos</div>
            <div class="card-body">
                <p class="card-text">
                    En la aplicación de Inventarios One se manejan diferentes catálogos:
                <ul>
                    <li>Usurios</li>
                    <li>Proveedores</li>
                    <li>Artículos</li>
                    <li>Categorías</li>
                </ul>
                </p>
                <p class="card-text">
                    Si desea crear un nuevo regitros para el catálogo no ingrese el producto para iniciar la búsqueda.<br />
                    Complete el formulario y presione el botón de Guardar<br />
                </p>
            </div>
        </div>
        <div class="card text-bg-primary" >
            <div class="card-header text-center">Reporte de Inventario</div>
            <div class="card-body">
                <p class="card-text">
                    Este reporte muestra el total de artículos registrados con su cantidad de Ingreso o salida<br />
                    Por lo que se realiza un cálculo para sumar de forma aritmética cada registro positivo y negativo y mostrar el tota de cada grupo de Producto 
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
        $(function() {
            $("#pagina").html("Ayuda");
        });
    </script>


</body>

</html>