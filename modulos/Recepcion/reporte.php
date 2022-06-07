<?php
require('../../adodb5/access_public.php');
include_once('../../snippets/head.php');
require 'model.php';

$oProductos = new Productos();
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
                        <th scope="col">Producto</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Comentarios</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">201</th>
                        <td>Sábanas</td>
                        <td>Blancos</td>
                        <td>Se entregan sábanas blancas grandes</td>
                        <td>Servicio Express</td>
                        <td>130</td>
                        <td>20/05/2022 13:00 Hrs.</td>
                    </tr>
                    <tr>
                        <th scope="row">206</th>
                        <td>Colchas</td>
                        <td>Blancos</td>
                        <td>Se entregan colchas blancas grandes</td>
                        <td>Servicio Express</td>
                        <td>60</td>
                        <td>21/05/2022 12:00 Hrs.</td>
                    </tr>
                    <tr>
                        <th scope="row">208</th>
                        <td>Cubre almohadas</td>
                        <td>Blancos</td>
                        <td>Se entregan cubre almohadas blancas medianas</td>
                        <td>Servicio Express</td>
                        <td>150</td>
                        <td>23/05/2022 15:30 Hrs.</td>
                    </tr>
                    <tr>
                        <th scope="row">208</th>
                        <td>Sábanas</td>
                        <td>Blancos</td>
                        <td>Se entregan sábanas blancas grandes</td>
                        <td>Servicio Express</td>
                        <td>130</td>
                        <td>25/05/2022 13:00 Hrs.</td>
                    </tr>
                    <tr>
                        <th scope="row">210</th>
                        <td>Cobijas</td>
                        <td>Blancos</td>
                        <td>Se entregan Cobijas negras grandes</td>
                        <td>Servicio Express</td>
                        <td>110</td>
                        <td>26/05/2022 14:00 Hrs.</td>
                    </tr>
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
            $("#pagina").html("Reporte de Recibidas");
        });
    </script>
</body>

</html>