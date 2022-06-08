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
                        <th scope="row" class="text-center">208</th>
                        <td class="text-center">Toalla Corporal</td>
                        <td class="text-center">150</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                       
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">208</th>
                        <td class="text-center">Toalla para Mano</td>
                        <td class="text-center">130</td>
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
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Funda</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Funda de Garrafon</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Wafle Queen</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Wafle Twin</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Pie de cama</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Cobertor de Bebe</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Cubre Colchon</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Protector de Almohada</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Roda Pie</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Mop</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Cobijas</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Cobijas</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Cobijas</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Cobijas</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Cobijas</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Cobijas</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Cobijas</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">210</th>
                        <td class="text-center">Cobijas</td>
                        <td class="text-center">110</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>
                    </tr>
                  
                </tbody>
              
            </table>
            </div>
            </div>
        </div>

    </main>