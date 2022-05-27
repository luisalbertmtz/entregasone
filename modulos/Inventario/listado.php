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
        <div class="table-responsive">
            <table class="table caption-top table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">201</th>
                        <td>Sábanas</td>
                        <td class="text-danger fw-bold text-end">-130</td>
                    </tr>
                    <tr>
                        <th scope="row">206</th>
                        <td>Colchas</td>
                        <td class="fw-bold text-end">60</td>
                    </tr>
                    <tr>
                        <th scope="row">208</th>
                        <td>Cubre almohadas</td>
                        <td class="fw-bold text-end">150</td>
                    </tr>
                    <tr>
                        <th scope="row">208</th>
                        <td>Sábanas</td>
                        <td class="fw-bold text-end">130</td>
                    </tr>
                    <tr>
                        <th scope="row">210</th>
                        <td>Cobijas</td>
                        <td class="fw-bold text-end">110</td>
                    </tr>
                </tbody>
            </table>

            <div class="col">
                <div class="card">
                    <canvas class="p-4" id="inventario" width="300" height="230"></canvas>
                </div>
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
        var chartVM = document.getElementById('inventario').getContext('2d');
          var InventarioGraph = new Chart(chartVM, {
            type: 'bar',
            data: {
              labels: ['Fundas', 'Cubre', 'Sábanas', 'Sobre camas', 'Colchas', 'Edredones'],
              datasets: [{
                data: [60,36,25,17,16,17,19],
                
                borderWidth: 1
              }]
            },
            options: {
              legend: {
                display: false
              },
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true,
                    userCallback: function(label, index, labels) {
                      if (Math.floor(label) === label) {
                        return label;
                      }
                    },
                  }
                }]
              }
            }
        });
    </script>
    <script>
        $(function() {
            $("#pagina").html("Inventario");
        });
    </script>
</body>

</html>