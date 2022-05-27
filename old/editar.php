<?php
if (!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if ($producto === FALSE) {
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>

<div class="container mt-5" class="table-responsive">
	<div class="row justify-content-center" class="responsive">
		<div class="col-md-12">


			<div class="card">
				<div class="card-header" class="col-xs-12">
					<h2 class="text-center">PRODUCTO A EDITAR</h2>
				</div>


				<div class="table-responsive">

					<div class="p-3" class="table-responsive">
						<table class="table align-middle" class="table table-striped ">
							<table class="table">
								<div class="col-xs-12">

									<form method="post" action="guardarDatosEditados.php">
										<input type="hidden" name="id" value="<?php echo $producto->id; ?>">

										<label for="codigo">Nombre del producto:</label>
										<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

										<label for="descripcion">Descripción:</label>
										<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"><?php echo $producto->descripcion ?></textarea>

										<label for="existencia">Existencia:</label>
										<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
										<br><br><input class="btn btn-info" type="submit" value="Guardar">
										<a class="btn btn-warning" href="./listar.php">Cancelar</a>
									</form>
								</div>
					</div>
				</div>

			</div>

			<?php include_once "pie.php" ?>