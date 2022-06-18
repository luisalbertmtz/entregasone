<?php
require('../../adodb5/access_public.php');
include_once('../../snippets/head.php');
require 'model.php';

$oArticulos = new Articulos();
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

                <div class="form-floating pe-0 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <select class="form-select" id="idProducto" name="idProducto" aria-label="Artículos Registrados" required>
                        <?php
                        $db->debug = 0;
                        $array = $oArticulos->getList();
                        echo "<option value=''>Seleccione el Artículo a Entregar</option>";
                        foreach ($array as $row) {
                            echo "<option value='" . $row['idProducto'] . "'>" . $row['Nombre'] . "</option>";
                        }
                        ?>
                    </select>
                    <label for="idProducto">* Artículos Registrados</label>
                </div>

                <div class="form-floating pe-0 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <select class="form-select" id="idProveedor" name="idProveedor" aria-label="Proveedor Registrados" required>
                        <?php
                        $db->debug = 0;
                        $array = $oArticulos->getProveedores();
                        echo "<option value=''>Seleccione el Proveedor</option>";
                        foreach ($array as $row) {
                            echo "<option value='" . $row['idProveedor'] . "'>" . $row['Nombre'] . "</option>";
                        }
                        ?>
                    </select>
                    <label for="idProveedor">* Proveedores que recibe</label>
                </div>

                <div class="form-floating pe-0 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <textarea class="form-control" placeholder="Deje sus comentarios" id="Comentario" name="Comentario" style="height: 100px"></textarea>
                    <label for="Comentario">Comentarios</label>
                </div>

                <div class="col-md-4 form-floating pe-0 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <input type="number" class="form-control" min="0" id="cantidad" name="cantidad" placeholder="Cantidad" value="" required>
                    <label for="cantidad">* Cantidad entregada</label>
                </div>

                <div class="d-grid gap-2 pe-0">
                    <button class="btn btn-secondary btn-lg" type="reset">Limpiar</button>
                    <button class="btn btn-success btn-lg" type="submit">Entregar</button>
                </div>

                <p class="text-center"><a href="reporte.php" title="Ver registros">¿Desea ver el reporte de Entregas?</a></p>

            </form>
        </div>
        </form>
    </main>

    <!-- Footer -->
    <?php
    include_once('../../snippets/footer.php');
    ?>
    <link href="<?php echo PATH ?>assets/css/register.css" rel="stylesheet">
    <link href="css/entregas.css" rel="stylesheet">
    <script src="js/entregas.js"></script>
    <script>
        $(function() {
            $("#pagina").html("Entregas");
        });
    </script>
</body>

</html>