<?php
    require ('adodb5/access_public.php');
    include_once('snippets/head.php');
?>

<body class="d-flex flex-column h-100 text-center">
    <!-- Main -->
    <main class="form-signin flex-shrink-0">
        <form>
            <img class="mb-4" src="assets/img/logo_onehoteles.png" alt="" width="100" height="auto">
            <h1 class="h3 mb-3 fw-normal">Control de Inventario</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Usuario" autocomplete="false">
                <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="false">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Recordar sesión
                </label>
            </div>
            <a href="principal.php" class="w-100 btn btn-lg btn-primary" type="button">Ingresar</a>
        </form>
    </main>

    <!-- Footer -->
    <?php
      include_once('snippets/footer.php');
    ?>

</body>
</html>