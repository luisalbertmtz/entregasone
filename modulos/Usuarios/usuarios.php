<?php
require('../../adodb5/access_public.php');
include_once('../../snippets/head.php');
require 'model.php';

$oUsuarios = new Usuarios();
?>

<body class="d-flex flex-column h-100">
    <!-- Begin page content -->
    <main class="container-fluid">

        <!-- Header -->
        <?php
        include_once('../../snippets/header.php');
        ?>
        <div class="container">
        
            <form class="row g-3" id="formRegister">
                <div class="text-muted"><i>Para crear un nuevo registro deje este campo en blanco</i></div>

                <div class="form-floating pe-0 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <select class="form-select" id="idUsuario" name="idUsuario" aria-label="Usuarios Registrados">
                        <?php
                        $db->debug = 0;
                        $array = $oUsuarios->getList();
                        echo "<option value='0'>Seleccione el Usuario a Editar</option>";
                        foreach ($array as $row) {
                            echo "<option value='" . $row['idUsuario'] . "'>" . $row['nombreCompleto'] . "</option>";
                        }
                        ?>
                    </select>
                    <label for="idUsuario" name="idUsuario">Usuarios Registrados</label>
                </div>

                <div class="col-md-4 form-floating pe-0 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Usuario" value="" required>
                    <label for="username">* Nombre de Usuario</label>
                </div>

                <div class="col-md-4 form-floating pe-0 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto" placeholder="Nombre completo" value="" required>
                    <label for="nombreCompleto">* Nombre Completo</label>
                </div>

                <div class="col-md-4 form-floating pe-0 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" required>
                    <label for="password">* Password</label>
                </div>

                <div class="col-md-4 form-floating pe-0 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" value="" required>
                    <label for="email">* E-mail</label>
                </div>

                <div class="col-md-4 form-floating pe-0 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="" required>
                    <label for="telefono">Teléfono</label>
                </div>

                <div class="form-floating pe-0 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <select class="form-select" id="idRol" name="idRol" aria-label="Rol de usuario">
                        <?php
                        $db->debug = 0;
                        $array = $oUsuarios->getRoles();
                        echo "<option value='0'>Seleccione el Rol</option>";
                        foreach ($array as $row) {
                            echo "<option value='" . $row['idRol'] . "'>" . $row['Nombre'] . "</option>";
                        }
                        ?>
                    </select>
                    <label for="idRol">Roles Registrados</label>
                </div>

                <div class="form-floating pe-0 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <select class="form-select" id="activo" name="activo" aria-label="Status usuario">
                        <option value='1'>Activo</option>
                        <option value='0'>Inactivo</option>
                    </select>
                    <label for="activo">Usuario Activo/Inactivo</label>
                </div>

                <div class="col-md-4 form-floating pe-0 d-none">
                    <input type="text" class="form-control" id="fechaCreado" name="fechaCreado" placeholder="Fecha Creación" value="" disabled>
                    <label for="fechaCreado">Fecha Creación</label>
                </div>

                <div class="col-md-4 form-floating pe-0 d-none">
                    <input type="text" class="form-control" id="fechaActualizado" name="fechaActualizado" placeholder="fecha Actualización" value="" disabled>
                    <label for="fechaActualizado">fecha Actualización</label>
                </div>
                
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary btn-lg" type="reset">Limpiar</button>
                    <button class="btn btn-primary btn-lg" type="submit">Guardar</button>
                </div>

                <p class="text-center"><a href="listado.php" title="Ver registros">¿Desea ver el listado de Usuarios?</a></p>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <?php
    include_once('../../snippets/footer.php');
    ?>
    <link href="<?php echo PATH ?>assets/css/register.css" rel="stylesheet">
    <link href="css/usuarios.css" rel="stylesheet">
    <script src="js/usuarios.js"></script>
    <script>
        $(function() {
            $("#pagina").html("Registro de Usuarios");
        });
    </script>
</body>

</html>