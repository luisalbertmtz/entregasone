<?php
    require ('adodb5/access_public.php');
    include_once('snippets/head.php');
?>

<body class="d-flex flex-column h-100 text-center " >
    <!-- Main -->
    <div class="container-fluid mt-5 " >
    <div class="row row-cols- row-cols-md-6 g-4 justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-3 ">
          <div class="card mt-5 col-xs-12 col-sm-12 col-md-12 ">
            <main class="form-signin flex-shrink-0">
        <form id="frm-login">
            <img class="mb-4" src="assets/img/logo_onehoteles.png" alt="" width="230" height="auto">
            <h1 class="h3 mb-3 fw-normal">Control de Inventario.</h1>
            
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
                    <input type="checkbox" value="remember-me"> Recordar sesión.
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">
                <span class="spinner-grow spinner-grow-sm loading" role="status" aria-hidden="true"></span>
                Ingresar
            </button>
        </form>
        </div>
        </div>
        </div>
        </div>
    </main>

    <!-- Footer -->
    <?php
      include_once('snippets/footer.php');
    ?>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/validaForm.js"></script>
</body>
</html>