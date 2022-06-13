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
            
            <div class="table-responsive">
                <table class="table caption-top table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-left">Nombre Completo</th>
                            <th scope="col" class="text-left">Email</th>
                            <th scope="col" class="text-left">Teléfono</th>
                            <th scope="col" class="text-center">Activo</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        $db->debug = 0;
                        $array = $oProveedores->getList();
                        foreach ($array as $row) {
                            echo "<tr>";
                                echo "<td class='text-center'>" . $row['idProveedor'] . "</td>";
                                echo "<td class='text-left'>" . $row['Nombre'] . "</td>";
                                echo "<td class='text-left'>" . $row['email'] . "</td>";
                                echo "<td class='text-left'>" . $row['telefono'] . "</td>";
                                echo "<td class='text-center'>" . ($row['activo'] == 1 ? "Activo":"Inactivo") . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
                            
            <div class="d-grid gap-2">
                <a href="proveedores.php" class="btn btn-primary btn-lg">Regresar</a>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <?php
    include_once('../../snippets/footer.php');
    ?>
    <link href="<?php echo PATH ?>assets/css/register.css" rel="stylesheet">
    <script src="<?php echo PATH_BACKEND ?>assets/js/chartJs/Chart.min.js"></script>
    <script>
        $(function() {
            $("#pagina").html("Proveedores");
        });
    </script>
</body>

</html>