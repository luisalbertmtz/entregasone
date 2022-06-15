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
        <head>
        <link rel="stylesheet" href="/assets/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

        </head>


        <?php
        include_once('../../snippets/header.php');
        ?>
        <div class="container">
            
            <div class="table-responsive">
                <table class="table caption-top table-hover" id="table" class="Display">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-left">Nombre Artículo</th>
                            <th scope="col" class="text-left">Categoría</th>
                            <th scope="col" class="text-left">Proveedor</th>
                            <th scope="col" class="text-center">Activo</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        $db->debug = 0;
                        $array = $oArticulos->getListArticulos();
                        foreach ($array as $row) {
                            echo "<tr>";
                                echo "<td class='text-center'>" . $row['idProducto'] . "</td>";
                                echo "<td class='text-left'>" . $row['Nombre'] . "</td>";
                                echo "<td class='text-left'>" . $row['Categoria'] . "</td>";
                                echo "<td class='text-left'>" . $row['Proveedor'] . "</td>";
                                echo "<td class='text-center'>" . ($row['activo'] == 1 ? "Activo":"Inactivo") . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
                            
            <div class="d-grid gap-2">
                <a href="articulos.php" class="btn btn-primary btn-lg">Regresar</a>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <?php
    include_once('../../snippets/footer.php');
    ?>
    <link href="<?php echo PATH ?>assets/css/register.css" rel="stylesheet">
    <script src="<?php echo PATH_BACKEND ?>assets/js/chartJs/Chart.min.js"></script>
    <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(function() {
            $("#pagina").html("Articulos");
        });
    </script>
    <script>
        $(document).ready( function () {
    $('#table').DataTable();
} );
    </script>
</body>

</html>