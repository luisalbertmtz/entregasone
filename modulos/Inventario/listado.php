<?php
require('../../adodb5/access_private.php');
include_once('../../snippets/head.php');
require 'model.php';

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
        <div class="container">
        <div class="table-responsive">
            <table class="table caption-top table-hover table-striped" id="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $db->debug = 0;
                        $array = $oInventario->getInventario();
                        foreach ($array as $row) {
                            if(intval($row['total']) < 0 ){
                                echo "<tr>";
                                    echo "<td class='text-left'>" . $row['idProducto'] . "</td>";
                                    echo "<td class='text-left'>" . $row['Nombre'] . "</td>";
                                    echo "<td class='text-left'>" . $row['Proveedor'] . "</td>";
                                    echo "<td class='text-left'>" . $row['total'] . "</td>";  
                                echo "</tr>";
                            }                            
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
            $("#pagina").html("Pendientes de Rec.");
        });
    </script>
         <script>
        $(document).ready( function () {
    $('#table').DataTable();
} );
    </script>
</body>

</html>