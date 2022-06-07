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
    <div class="container">
        <form class="row g-3 needs-validation" id="formRegister" novalidate>
            <div class="col-12">
                <label for="articulo" class="form-label">Lista de Artículos</label>
                <input class="form-control form-control-lg" list="datalistOptions" id="articulo" placeholder="Ingrese el nombre a buscar">
                <datalist id="datalistOptions">
                    <option value="Sábanas">
                    <option value="Sobre camas">
                    <option value="Colchas">
                    <option value="Edredones">
                    <option value="Fundas">
                </datalist>
                <div class="d-grid gap-2 mt-2">
                    <button class="btn btn-primary btn-lg" type="submit">Buscar</button>
                </div>
            </div>

            <div class="col-md-4">
                <label for="codigoArticulo" class="form-label">Código de Artículo</label>
                <input type="text" class="form-control form-control-lg" id="codigoArticulo" value="" placeholder="Ingrese artículo a Buscar" required readonly>
                <div class="valid-feedback">
                    ¡Completado!
                </div>
            </div>

            <div class="col-md-4">
                <label for="nombreArticulo" class="form-label">Nombre del Artículo</label>
                <input type="text" class="form-control form-control-lg" id="nombreArticulo" value="" placeholder="Ingrese artículo a Buscar" required readonly>
                <div class="valid-feedback">
                    ¡Completado!
                </div>
            </div>

            <div class="col-md-3">
                <label for="categoria" class="form-label">Categoría</label>
                <select class="form-select form-select-lg" id="categoria" required disabled>
                    <option value="130">Blancos</option>
                </select>
                <div class="invalid-feedback">
                    ¡Seleccione una Categoría por favor!
                </div>
            </div>

            <div class="mb-3">
                <label for="comentarios" class="form-label">Comentarios</label>
                <textarea class="form-control form-control-lg" row="6" id="comentarios" placeholder="Comentarios de la Entrega" required></textarea>
                <div class="invalid-feedback">
                    Ingrese un comentario
                </div>
            </div>

            <div class="col-md-3">
                <label for="categoria" class="form-label">Proveedor</label>
                <select class="form-select form-select-lg" id="categoria" required disabled>
                    <option val="120">Servicio Express</option>
                </select>
                <div class="invalid-feedback">
                    ¡Seleccione un Proveedor por favor!
                </div>
            </div>

            <div class="col-md-3">
                <label for="articulosEntregados" class="form-label">Artículos entregados</label>
                <input type="number" class="form-control form-control-lg" id="articulosEntregados" value="" placeholder="0" required>
                <div class="invalid-feedback">
                    ¡Seleccione la cantidad entregada por favor!
                </div>
            </div>

            <div class="col-12 d-flex justify-content-between mb-5">
                <button class="btn btn-secondary btn-lg" type="reset">Limpiar </button>
                <button class="btn btn-primary btn-lg" type="submit">Guardar</button>
            </div>
            </div>
        </form>
    </main>

    <!-- Footer -->
    <?php
    include_once('../../snippets/footer.php');
    ?>
    <link href="<?php echo PATH ?>assets/css/register.css" rel="stylesheet">
    <script src="<?php echo PATH_BACKEND ?>assets/js/validaForm.js"></script>
    <script>
        $(function(){
            $("#pagina").html("Entregar artículo(s)");
        });
    </script>
</body>

</html>