<?php
    require ('adodb5/access_public.php');
    include_once('snippets/head.php');
?>

<body class="d-flex flex-column h-100 text-center">
    <!-- Main -->
    <main class="form-signin flex-shrink-0">
        <form id="frm-login">
            <img class="mb-4" src="assets/img/logo_onehoteles.png" alt="" width="100" height="auto">
            <h1 class="h3 mb-3 fw-normal">Control de Inventario</h1>
            
            <div id="message"></div>
            
            <div class="form-floating">
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" autocomplete="false" autofocus="true" required>
                <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="false" required>
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Recordar sesión
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">
                <span class="spinner-grow spinner-grow-sm loading" role="status" aria-hidden="true"></span>
                Ingresar
            </button>
        </form>
    </main>

    <!-- Footer -->
    <?php
      include_once('snippets/footer.php');
    ?>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/validaForm.js"></script>
</body>
</html>