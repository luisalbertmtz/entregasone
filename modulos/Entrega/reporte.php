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
                <table class="table caption-top table-hover table-striped" id="table" class="Display">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">#</th>
                            <th class="text-center" scope="col">Usuario entega</th>
                            <th class="text-center" scope="col" style="min-width: 140px;">Proveedor recibe</th>
                            <th class="text-center" scope="col">Producto</th>
                            <th class="text-center" scope="col">Cantidad</th>
                            <th class="text-center" scope="col" style="min-width: 180px;">Fecha</th>
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
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                    <tfoot>
                    <tr>
                            <th class="text-center" scope="col">#</th>
                            <th class="text-center" scope="col">Usuario entega</th>
                            <th class="text-center" scope="col" style="min-width: 140px;">Proveedor recibe</th>
                            <th class="text-center" scope="col">Producto</th>
                            <th class="text-center" scope="col">Cantidad</th>
                            <th class="text-center" scope="col" style="min-width: 180px;">Fecha</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <?php
        include_once('../../snippets/footer.php');
    ?>

    <!--Extend dataTable plugin -->
    <script src="<?php echo PATH_BACKEND ?>assets/js/dataTable/jquery.dataTables.min.js"></script>
    <script src="<?php echo PATH_BACKEND ?>assets/js/dataTable/dataTables-responsive.min.js"></script>
    <script src="<?php echo PATH_BACKEND ?>assets/js/dataTable/fixedHeader-dataTables.min.js"></script>
    <script src="<?php echo PATH_BACKEND ?>assets/js/dataTable/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo PATH_BACKEND ?>assets/js/dataTable/dataTables-rowGroup.min.js"></script>
    <script src="<?php echo PATH_BACKEND ?>assets/js/dataTable/rowGroup-dataTables.min.js"></script>
    <script src="<?php echo PATH_BACKEND ?>assets/js/dataTable/dataTables.select.min.js"></script>
    <script src="<?php echo PATH_BACKEND ?>assets/js/dataTable/dataTables.buttons.min.js"></script>
    <script src="<?php echo PATH_BACKEND ?>assets/js/dataTable/buttons.colVis.min.js"></script>
    <script src="<?php echo PATH_BACKEND ?>assets/js/dataTable/jszip.min.js"></script>
    <script src="<?php echo PATH_BACKEND ?>assets/js/dataTable/buttons.html5.min.js"></script>
    <script src="<?php echo PATH_BACKEND ?>assets/js/dataTable/buttons.print.min.js"></script>
    <script src="<?php echo PATH_BACKEND ?>assets/js/dataTable/dataTables.fixedColumns.min.js"></script>
        
    <!--Data Table CSS-->
    <link rel="stylesheet" href="<?php echo PATH_BACKEND ?>assets/css/dataTable/datatables.css">
    <link rel="stylesheet" href="<?php echo PATH_BACKEND ?>assets/css/dataTable/fixedHeader.dataTables.css">
    <link rel="stylesheet" href="<?php echo PATH_BACKEND ?>assets/css/dataTable/responsive.dataTables.css">
    <link rel="stylesheet" href="<?php echo PATH_BACKEND ?>assets/css/dataTable/rowGroup.dataTables.css">
    <!--link rel="stylesheet" href="<?php echo PATH_BACKEND ?>assets/css/dataTable/buttons.dataTables.min.css"-->
    <link rel="stylesheet" href="<?php echo PATH_BACKEND ?>assets/css/dataTable/dataTables-pag.css">
    <link href="<?php echo PATH ?>assets/css/register.css" rel="stylesheet">
    
    <script>
        var table;
        $(function() {
            $("#pagina").html("Reporte de Blanco sucios");
            table = $('#table').DataTable({
                fixedHeader: true,
                stateSave: true,
                "language": {
                    "select": {
                        "rows": "<br /> %d seleccionado(s)"
                    },
                    "lengthMenu": "Mostrando _MENU_ registros por página",
                    "zeroRecords": "No hay resultados",
                    "info": "Mostrando _PAGE_ páginas de _PAGES_. <br />Total: _TOTAL_ registros",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(Filtrando _MAX_ registros en total)",
                    "search": "Filtrar:",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                },
                "order": [
                    [0, 'desc']
                ],
                fixedColumns:   {
                    left: 1
                },
                "columnDefs": [],
                responsive: true,
                fixedHeader: false,
                dom: 'Blfrtip',
                buttons: [{
                    extend: 'excelHtml5',
                    text: 'Exportar a Excel',
                    className: 'btn btn-sm btn-primary',
                    title: '',
                    messageTop: 'Listado',
                    orientation: 'landscape',
                    pageSize: 'letter',
                    footer: true
                }]
            });

            $('div.dataTables_filter input, .dataTables_length > label > select').addClass('form-control-dataTable');
        });
    </script>
</body>

</html>