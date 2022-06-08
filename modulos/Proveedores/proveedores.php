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
                        <th scope="col" class="text-center">Nombre de Proveedor</th>
                        <th scope="col" class="text-center">Numero de contacto</th>
                        <th scope="col" class="text-center">Opciones</th>
                        <th scope="col" class="text-center">Opciones</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-center">01</th>
                        <td class="text-center">Lavanderia la Unica</td>
                        <td class="text-center">962443030</td>
                        <td class="text-center">Modificar</td>
                        <td class="text-center">Eliminar</td>

                    </tr>
             
                  
                </tbody>
              
            </table>
            </div>