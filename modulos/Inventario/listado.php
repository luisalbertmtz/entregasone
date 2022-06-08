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
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Producto</th>
                        <th scope="col" class="text-center">Cantidad</th>
                        <th scope="col" class="text-center">Opciones</th>
                        <th scope="col" class="text-center">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-center">201</th>
                        <td class="text-center">Sábanas Queen</td>
                        <td class="text-center">-130</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Sábanas</td>

                    </tr>
                    <tr>
                        <th scope="row" class="text-center">206</th>
                        <td class="text-center">Sabana de Bebe</td>
                        <td class="text-center">60</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                    <th scope="row" class="text-center">208</th>
                        <td class="text-center">Toalla Corporal</td>
                        <td class="text-center">150</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                    <th scope="row" class="text-center">210</th>
                        <td class="text-center">Toalla Tapete</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                   
                    </tr>
                    <tr>
                    <th scope="row" class="text-center">206</th>
                        <td class="text-center">Sabana de Bebe</td>
                        <td class="text-center">60</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                        </tr>
                        <tr>
                    <th scope="row" class="text-center">206</th>
                        <td class="text-center">Sabana de Bebe</td>
                        <td class="text-center">60</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                        </tr>
                        <tr>
                    <th scope="row" class="text-center">206</th>
                        <td class="text-center">Sabana de Bebe</td>
                        <td class="text-center">60</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                        </tr>
                        <tr>
                    <th scope="row" class="text-center">206</th>
                        <td class="text-center">Sabana de Bebe</td>
                        <td class="text-center">60</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                        </tr>
                        <tr>
                    <th scope="row" class="text-center">206</th>
                        <td class="text-center">Sabana de Bebe</td>
                        <td class="text-center">60</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                        </tr>
                        <tr>
                    <th scope="row" class="text-center">206</th>
                        <td class="text-center">Sabana de Bebe</td>
                        <td class="text-center">60</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                        </tr>
                        <tr>
                    <th scope="row" class="text-center">206</th>
                        <td class="text-center">Sabana de Bebe</td>
                        <td class="text-center">60</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                        </tr>
                        <tr>
                    <th scope="row" class="text-center">206</th>
                        <td class="text-center">Sabana de Bebe</td>
                        <td class="text-center">60</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                        </tr>
                        <tr>
                    <th scope="row" class="text-center">206</th>
                        <td class="text-center">Sabana de Bebe</td>
                        <td class="text-center">60</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                        </tr>
                  
                </tbody>
              
            </table>
            </div>
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