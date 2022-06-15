<?php
require('../../adodb5/access_public.php');
include_once('../../snippets/head.php');
require 'model.php';

$oCategorias = new Categorias();
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
                <table class="table caption-top table-hover" id="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-left">Nombre</th>
                            <th scope="col" class="text-center">Activo</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        $db->debug = 0;
                        $array = $oCategorias->getListCategorias();
                        foreach ($array as $row) {
                            echo "<tr>";
                                echo "<td class='text-center'>" . $row['idCategoria'] . "</td>";
                                echo "<td class='text-left'>" . $row['Nombre'] . "</td>";
                                echo "<td class='text-center'>" . ($row['activo'] == 1 ? "Activo":"Inactivo") . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
                            
            <div class="d-grid gap-2">
                <a href="categorias.php" class="btn btn-primary btn-lg">Regresar</a>
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
            $("#pagina").html("Categorias");
        });
    </script>
        <script>
        $(document).ready( function () {
    $('#table').DataTable();
} );
    </script>
</body>

</html>