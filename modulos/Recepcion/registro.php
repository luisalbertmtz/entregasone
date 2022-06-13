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

                <div class="form-floating pe-0">
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

                <div class="form-floating pe-0">
                    <select class="form-select" id="idProveedor" name="idProveedor" aria-label="Proveedor Registrados" required>
                        <?php
                            $db->debug = 0;
                            $array = $oArticulos->getProveedores();
                            echo "<option value=''>Seleccione la categoría</option>";
                            foreach ($array as $row) {
                                echo "<option value='" . $row['idProveedor'] . "'>" . $row['Nombre'] . "</option>";
                            }
                        ?>
                    </select>
                    <label for="idProveedor">* Proveedores Registradas</label>
                </div>

                <div class="form-floating pe-0">
                    <textarea class="form-control" placeholder="Deje sus comentarios" id="Comentario" name="Comentario" style="height: 100px"></textarea>
                    <label for="Comentario">Comentarios</label>
                </div>

                <div class="col-md-4 form-floating pe-0">
                    <input type="number" class="form-control" min="0" id="cantidad" name="cantidad" placeholder="Cantidad" value="" required>
                    <label for="cantidad">* Cantidad recibida</label>
                </div>

                <div class="d-grid gap-2 pe-0">
                    <button class="btn btn-secondary btn-lg" type="reset">Limpiar</button>
                    <button class="btn btn-success btn-lg" type="submit">Recibir</button>
                </div>

                <p class="text-center"><a href="../Inventario/listado.php" title="Ver registros">¿Desea ver el reporte de inventario?</a></p>
            </form>
        </div>
        </form>
    </main>

    <!-- Footer -->
    <?php
    include_once('../../snippets/footer.php');
    ?>
    <link href="<?php echo PATH ?>assets/css/register.css" rel="stylesheet">
    <link href="css/recepcion.css" rel="stylesheet">
    <script src="js/recepcion.js"></script>
    <script>
        $(function() {
            $("#pagina").html("Recepción artículo(s)");
        });
    </script>
</body>

</html>