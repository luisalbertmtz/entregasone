<?php
require('../../adodb5/access_private.php');
include_once('../../snippets/head.php');
require 'model.php';
require '../Inventario/model.php';

$oInventario = new Inventario();
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
        <div class="container-fluid">
        <div class="table-responsive">
            <table class="table caption-top table-hover table-striped" id="table">
                <thead>
                    <tr>
                        <th class="text-center"scope="col">#</th>
                        <th class="text-center"scope="col">Usuario entega</th>
                        <th class="text-center"scope="col" style="min-width: 140px;">Proveedor recibe</th>
                        <th class="text-center"scope="col">Producto</th>
                        <th class="text-center"scope="col">Cantidad</th>
                        <th class="text-center"scope="col" style="min-width: 180px;">Fecha</th>
                        <th class="text-center"scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $db->debug = 0;
                        $array = $oInventario->getEntrega();
                        foreach ($array as $row) {
                            echo "<tr>";
                                echo "<td class='text-center'>" . $row['idInventario'] . "</td>";
                                echo "<td class='text-center'>" . $row['Usuario'] . "</td>";
                                echo "<td class='text-center'>" . $row['Proveedor'] . "</td>";
                                echo "<td class='text-center'>" . $row['Producto'] . "</td>";
                                echo "<td class='text-center'>" . $row['cantidad'] . "</td>";
                                echo "<td class='text-center'>" . $row['fechaCreacion'] . "</td>";
                                echo "<td class='text-center'><button class='btn-transparent'><i class='bi bi-pen'></i></button></td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    </main>

    <!-- Footer -->
    <?php
    include_once('../../snippets/footer.php');
    ?>
    <link href="<?php echo PATH ?>assets/css/register.css" rel="stylesheet">
    <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $("#pagina").html("Reporte de Entregas");
        });
    </script>
        <script>
        $(document).ready( function () {
    $('#table').DataTable();
} );
    </script>
</body>

</html>