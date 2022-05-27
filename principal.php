<?php
require('adodb5/access_public.php');
include_once('snippets/head.php');
?>

<body class="d-flex flex-column h-100">
    <!-- Begin page content -->
    <main class="flex-shrink-0">

        <!-- Header -->
        <?php
        include_once('snippets/header.php');
        ?>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="assets/img/entrega-blancos.jpg" class="card-img-top" alt="Entrega de Blancos">
                        <div class="card-body">
                            <h5 class="card-title">Entrega</h5>
                            <p class="card-text">Registre una entrega</p>
                            <a href="modulos/Entrega/registro.php" class="btn btn-secondary">Abrir sección</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="assets/img/recepcion-blancos.jpg" class="card-img-top" alt="Entrega de Blancos">
                        <div class="card-body">
                            <h5 class="card-title">Recepción</h5>
                            <p class="card-text">Registre una recepción</p>
                            <a href="modulos/Recepcion/registro.php" class="btn btn-secondary">Abrir sección</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="assets/img/reporte.jpg" class="card-img-top" alt="Reporte de inventario">
                        <div class="card-body">
                            <h5 class="card-title">Inventario</h5>
                            <p class="card-text">Revise el inventario general</p>
                            <a href="modulos/Inventario/listado.php" class="btn btn-secondary">Consultar Reporte</a>
                        </div>
                    </div>
                </div>
                <!--div class="col">
                    <div class="card">
                        <canvas class="p-4" id="inventario" width="300" height="230"></canvas>
                        <div class="card-body">
                            <h5 class="card-title">Inventario</h5>
                            <p class="card-text">Inventario general</p>
                        </div>
                    </div>
                </div-->
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php
    include_once('../../snippets/footer.php');
    ?>

    <!-- Plugins y scripts-->
    <link href="<?php echo PATH ?>assets/css/estadisticas.css" rel="stylesheet">
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

</body>

</html>