<?php include_once "encabezado2.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT ventas.total, ventas.fecha, ventas.id, GROUP_CONCAT(	productos.codigo, '..',  productos.descripcion, '..', productos_vendidos.cantidad SEPARATOR '__') AS productos FROM ventas INNER JOIN productos_vendidos ON productos_vendidos.id_venta = ventas.id INNER JOIN productos ON productos.id = productos_vendidos.id_producto GROUP BY ventas.id ORDER BY ventas.id;");
$ventas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>


<div class="container mt-5" class="table-responsive">
	<div class="row justify-content-center" class="responsive">
		<div class="col-md-12">


			<div class="card mt-5">
				<div class="card-header" class="col-xs-12">
					Historial de recepcion
				</div>

				<div class="table-responsive">

					<div class="p-3" class="table-responsive">
						<table class="table align-middle" class="table table-striped ">
							<table class="table">
								<div class="container">
									<div class="col-xs-12">

										Realizar otra recepcion
										<div>
											<a class="btn btn-success" href="./vender.php">Nueva <i class="fa fa-plus"></i></a>
										</div>
										
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>Número</th>
													<th>Fecha</th>
													<th>Productos vendidos</th>
													<th>Eliminar</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($ventas as $venta) { ?>
													<tr>
														<td><?php echo $venta->id ?></td>
														<td><?php echo $venta->fecha ?></td>
														<td>
															<table class="table table-bordered">
																<thead>
																	<tr>
																		<th>Código</th>
																		<th>Descripción</th>
																		<th>Cantidad</th>
																	</tr>
																</thead>
																<tbody>
																	<?php foreach (explode("__", $venta->productos) as $productosConcatenados) {
																		$producto = explode("..", $productosConcatenados)
																	?>
																		<tr>
																			<td><?php echo $producto[0] ?></td>
																			<td><?php echo $producto[1] ?></td>
																			<td><?php echo $producto[2] ?></td>
																		</tr>
																	<?php } ?>
																</tbody>
															</table>
														</td>

														<td><a onclick="return confirm('Estas seguro de eliminar')" class="text-danger" href="<?php echo "eliminarVenta.php?id=" . $venta->id ?>"><i class="bi bi-trash3-fill"></i></td>

													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
								<?php include_once "pie.php" ?>