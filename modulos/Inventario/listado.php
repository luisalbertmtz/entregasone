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
        <?php
            include_once('../../snippets/header.php');
        ?>

        <div class="container">
            <div class="table-responsive">
                <table class="table caption-top table-hover table-striped" id="table" class="Display">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad Pendiente</th>
                            <th scope="col">Cantidad Stock</th>
                            <th scope="col">Proveedor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db->debug = 0;
                        $array = $oInventario->getInventario();
                        
                        foreach ($array as $row) {
                            if (intval($row['total']) <= 0) {
                                echo "<tr>";
                                echo "<td class='text-left'>" . $row['idProducto'] . "</td>";
                                echo "<td class='text-left'>" . $row['Nombre'] . "</td>";
                                echo "<td class='text-left'>" . $row['total'] . "</td>";
                                echo "<td class='text-left'>" . ($row['stockInicial'] + $row['total']) . "</td>";
                                echo "<td class='text-left'>" . $row['Proveedor'] . "</td>";
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
            $("#pagina").html("Pendientes de Rec.");
            table = $('#table').DataTable({
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
                    className: 'btn btn-sm btn-secondary',
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