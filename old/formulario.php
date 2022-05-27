<?php include_once "encabezado2.php" ?>



<div class="container mt-5" class="table-responsive">
    <div class="row justify-content-center" class="responsive">
        <div class="col-md-12">


            <div class="card mt-5">
                <div class="card-header" class="col-xs-12">
                    <h1 class="text-center">NUEVO PRODUCTO</h1>
                </div>

                <div class="table-responsive">

                    <div class="p-3" class="table-responsive">
                        <table class="table align-middle" class="table table-striped ">
                            <table class="table">
                                <div class="container">
                                    <div class="col-xs-12">

                                        <form method="post" action="nuevo.php">
                                            <label for="codigo">Nombre del prodcuto:</label>
                                            <input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

                                            <label for="descripcion">Descripción:</label>
                                            <textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"></textarea>

                                            <label for="existencia">Existencia:</label>
                                            <input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
                                            <br><br><input class="btn btn-primary" type="submit" value="Guardar">
                                        </form>
                                    </div>
                                </div>
                                <?php include_once "pie.php" ?>