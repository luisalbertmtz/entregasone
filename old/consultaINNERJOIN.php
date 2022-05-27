<?php include_once "encabezado2.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container mt-5" class="table-responsive">
	<div class="row justify-content-center" class="responsive">
		<div class="col-md-12">
		

			<div class="card mt-5">
				<div class="card-header" class="col-xs-12">
					Inventario de blancos
				</div>
				<br>

				<div>
					<a class="btn btn-success" href="./formulario.php">Nuevo producto <i></i><i class="fa fa-list-alt"></i></a>
				</div>
				<div class="table-responsive">

					<div class="p-3" class="table-responsive">
						<table class="table align-middle" class="table table-striped " >
							<table class="table">
								<table class="table table-bordered table-hover">
 									<thead> 
										<tr>

											<th class="text-center">ID</th>
											<th class="text-center">CODIGO</th>
											<th class="text-center">DESCRIPCION</th>
											<th class="text-center">EXISTENCIAS</th>
											<th class="text-center">EDITAR</th>
											<th class="text-center">ELIMINAR</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($productos as $producto) { ?>
											<tr>
												<td><?php echo $producto->id ?></td>
												<td><?php echo $producto->codigo ?></td>
												<td><?php echo $producto->descripcion ?></td>
												<td><?php echo $producto->existencia ?></td>
												<td class="text-center"> <a class="text-success" href="editar.php?id=<?php echo $producto->id; ?>"><i class="bi bi-pencil-square"></i></td>
												<td class="text-center"> <a onclick="return confirm('Estas seguro de eliminar')" class="text-danger" href="eliminar.php?id=<?php echo $producto->id; ?>"><i class="bi bi-trash3-fill"></i></td>

											</tr>
										<?php } ?>
									</tbody>
								</table>
					</div>
				</div>
				<?php include_once "pie.php" ?>