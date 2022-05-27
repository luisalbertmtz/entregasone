<?php
session_start();
include_once "encabezado2.php";
if (!isset($_SESSION["carrito"])) $_SESSION["carrito"] = [];
$granTotal = 0;
?>

<div class="container mt-5" class="table-responsive">
	<div class="row justify-content-center" class="responsive">
		<div class="col-md-12">


			<div class="card mt-5">
				<div class="card-header" class="col-xs-12">
					Recepcion de blancos
				</div>

				<div class="table-responsive">

					<div class="p-3" class="table-responsive">
						<table class="table align-middle" class="table table-striped ">
							<table class="table">
								<?php
								if (isset($_GET["status"])) {
									if ($_GET["status"] === "1") {
								?>
										<div class="alert alert-success">
											<strong>¡Correcto!</strong> Datos guardados correctamente
										</div>
										<?php
										header('Refresh: 2; URL=listar.php');
										?>
									<?php
									} else if ($_GET["status"] === "2") {
									?>
										<div class="alert alert-info">
											<strong>Recepcion cancelada</strong>
										</div>
										<?php
										header('Refresh: 2; URL=listar.php');
										?>
									<?php
									} else if ($_GET["status"] === "3") {
									?>
										<div class="alert alert-info">
											<strong>Ok</strong> Producto quitado de la lista
										</div>
										<?php
										header('Refresh: 2; URL=listar.php');
										?>
									<?php
									} else if ($_GET["status"] === "4") {
									?>
										<div class="alert alert-warning">
											<strong>Error:</strong> El producto que buscas no existe
										</div>
										<?php
										header('Refresh: 2; URL=vender.php');
										?>
									<?php
									} else if ($_GET["status"] === "5") {
									?>
										<div class="alert alert-danger">
											<strong>Error: </strong>El producto está agotado
										</div>
										<?php
										header('Refresh: 2; URL=listar.php');
										?>
									<?php
									} else {
									?>
										<div class="alert alert-danger">
											<strong>Error:</strong> Algo salió mal mientras se realizaba la venta
										</div>
										<?php
										header('Refresh: 2; URL=listar.php');
										?>
								<?php
									}
								}
								?>

								<div class="container">
									<div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
										<form method="post" action="agregarAlCarritorecepcion.php">
											<label for="codigo">Nombre producto</label>
											<input autocomplete="off" autofocus class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe nombre de producto">
										</form>

										<br><br>
										<table class="table table-bordered table-hover">
											<thead>
												<tr>
													<th>ID</th>
													<th>Código</th>
													<th>Descripción</th>
													<th>Cantidad</th>
													<th>Quitar</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($_SESSION["carrito"] as $indice => $producto) {
													$granTotal += $producto->cantidad;
												?>
													<tr>
														<td><?php echo $producto->id ?></td>
														<td><?php echo $producto->codigo ?></td>
														<td><?php echo $producto->descripcion ?></td>
														<td><?php echo $producto->cantidad ?></td>
														<td><a onclick="return confirm('Estas seguro de eliminar')" class="text-danger" href="<?php echo "quitarDelCarrito.php?indice=" . $indice ?>"><i class="bi bi-trash3-fill"></i></td>

													</tr>
												<?php } ?>
											</tbody>
										</table>

										<h3>Total: <?php echo $granTotal; ?></h3>
										<form action="./terminarVentarecepcion.php" method="POST">
											<input name="total" type="hidden" value="<?php echo $granTotal; ?>">
											<button type="submit" class="btn btn-success">Terminar entrega</button>
											<a href="./cancelarVenta.php" class="btn btn-danger">Cancelar entrega</a>
										</form>
									</div>
								</div>
					</div>
					<?php include_once "pie.php" ?>