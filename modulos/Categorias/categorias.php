<?php
require('../../adodb5/access_public.php');
include_once('../../snippets/head.php');
require '../Proveedores/model.php';
require 'model.php';

$oCategorias = new Categorias();
?>

<body class="d-flex flex-column h-100">
    <!-- Begin page content -->
    <main class="container-fluid">

        <!-- Header -->
        <?php
        include_once('../../snippets/header.php');
        ?>
        <div class="container">

            <form class="row g-3" id="formRegister">
                <div class="text-muted"><i>Para crear un nuevo registro deje este campo en blanco / para modificar selecciona de la lista</i></div>

                <div class="form-floating pe-0 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <select class="form-select" id="idCategoria" name="idCategoria" aria-label="Artículos Registrados">
                        <?php
                            $db->debug = 0;
                            $array = $oCategorias->getListCategorias();
                            echo "<option value='0'>Seleccione el Artículo a Editar</option>";
                            foreach ($array as $row) {
                                echo "<option value='" . $row['idCategoria'] . "'>" . $row['Nombre'] . "</option>";
                            }
                        ?>
                    </select>
                    <label for="idCategoria">Artículos Registrados</label>
                </div>

                <div class="col-md-4 form-floating pe-0 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Categoría" value="" required>
                    <label for="Nombre">* Nombre de la Categoría</label>
                </div>

                <div class="form-floating pe-0 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <select class="form-select" id="activo" name="activo" aria-label="Status del Proveedor">
                        <option value='1'>Activo</option>
                        <option value='0'>Inactivo</option>
                    </select>
                    <label for="activo">Proveedor Activo/Inactivo</label>
                </div>

                <div class="col-md-4 form-floating pe-0 d-none">
                    <input type="text" class="form-control disabled" id="fechaCreado" name="fechaCreado" placeholder="Fecha Creación" value="">
                    <label for="fechaCreado">Fecha Creación</label>
                </div>

                <div class="col-md-4 form-floating pe-0 d-none">
                    <input type="text" class="form-control disabled" id="fechaActualizado" name="fechaActualizado" placeholder="fecha Actualización" value="">
                    <label for="fechaActualizado">fecha Actualización</label>
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-secondary btn-lg" type="reset">Limpiar</button>
                    <button class="btn btn-primary btn-lg" type="submit">Guardar</button>
                </div>

                <p class="text-center"><a href="listado.php" title="Ver registros">¿Desea ver el listado de Categorías?</a></p>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <?php
    include_once('../../snippets/footer.php');
    ?>
    <link href="<?php echo PATH ?>assets/css/register.css" rel="stylesheet">
    <link href="css/categorias.css" rel="stylesheet">
    <script src="js/categorias.js"></script>
    <script>
        $(function() {
            $("#pagina").html("Categorías");
        });
    </script>
</body>

</html>