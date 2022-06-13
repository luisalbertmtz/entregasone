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
        <?php
        include_once('../../snippets/header.php');
        ?>
        <div class="container">
        <div class="table-responsive">
            <table class="table caption-top table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col" style="width: 350px">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $db->debug = 0;
                        $array = $oInventario->getEntrega();
                        foreach ($array as $row) {
                            echo "<tr>";
                                echo "<td class='text-center'>" . $row['idInventario'] . "</td>";
                                echo "<td class='text-left'>" . $row['Usuario'] . "</td>";
                                echo "<td class='text-left'>" . $row['Producto'] . "</td>";
                                echo "<td class='text-left'>" . $row['Proveedor'] . "</td>";
                                echo "<td class='text-left'>" . $row['Categoria'] . "</td>";
                                echo "<td class='text-left'>" . $row['cantidad'] . "</td>";
                                echo "<td class='text-center'>" . $row['fechaCreacion'] . "</td>";
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
    <script>
        $(function() {
            $("#pagina").html("Reporte de Entregas");
        });
    </script>
</body>

</html>