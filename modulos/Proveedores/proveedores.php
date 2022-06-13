<?php
require('../../adodb5/access_public.php');
include_once('../../snippets/head.php');
require 'model.php';

$oProveedores = new Proveedores();
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
                <div class="text-muted"><i>Para crear un nuevo registro deje este campo en blanco</i></div>

                <div class="form-floating pe-0">
                    <select class="form-select" id="idProveedor" name="idProveedor" aria-label="Proveedor Registrados">
                        <?php
                        $db->debug = 0;
                        $array = $oProveedores->getList();
                        echo "<option value='0'>Seleccione el Proveedor a Editar</option>";
                        foreach ($array as $row) {
                            echo "<option value='" . $row['idProveedor'] . "'>" . $row['Nombre'] . "</option>";
                        }
                        ?>
                    </select>
                    <label for="idProveedor" name="idProveedor">Proveedores Registrados</label>
                </div>

                <div class="col-md-4 form-floating pe-0">
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Proveedor" value="" required>
                    <label for="Nombre">* Nombre del Proveedor</label>
                </div>

                <div class="col-md-4 form-floating pe-0">
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" value="" required>
                    <label for="email">* E-mail</label>
                </div>

                <div class="col-md-4 form-floating pe-0">
                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="" required>
                    <label for="telefono">Teléfono</label>
                </div>

                <div class="form-floating pe-0">
                    <select class="form-select" id="activo" name="activo" aria-label="Status del Proveedor">
                        <option value='1'>Activo</option>
                        <option value='0'>Inactivo</option>
                    </select>
                    <label for="activo">Proveedor Activo/Inactivo</label>
                </div>
                    
                <div class="col-md-4 form-floating pe-0">
                    <input type="text" class="form-control disabled" id="fechaCreado" name="fechaCreado" placeholder="Fecha Creación" value="">
                    <label for="fechaCreado">Fecha Creación</label>
                </div>

                <div class="col-md-4 form-floating pe-0">
                    <input type="text" class="form-control disabled" id="fechaActualizado" name="fechaActualizado" placeholder="fecha Actualización" value="">
                    <label for="fechaActualizado">fecha Actualización</label>
                </div>
                
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary btn-lg" type="reset">Limpiar</button>
                    <button class="btn btn-primary btn-lg" type="submit">Guardar</button>
                </div>

                <p class="text-center"><a href="listado.php" title="Ver registros">¿Desea ver el listado de Proveedores?</a></p>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <?php
    include_once('../../snippets/footer.php');
    ?>
    <link href="<?php echo PATH ?>assets/css/register.css" rel="stylesheet">
    <link href="css/proveedores.css" rel="stylesheet">
    <script src="js/proveedores.js"></script>
    <script>
        $(function() {
            $("#pagina").html("Proveedores");
        });
    </script>
</body>

</html>