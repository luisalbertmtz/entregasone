<?php


require "conexion.php";
require "plantilla.php";

$sql = "SELECT inv.*, us.nombreCompleto as Usuario, pr.Nombre as Producto,prov.Nombre as Proveedor, cat.Nombre as Categoria
            FROM inventario as inv
                INNER JOIN usuarios as us ON inv.idUsuario = us.idUsuario
                INNER JOIN productos as pr ON inv.idProducto = pr.idProducto
                INNER JOIN categorias as cat ON pr.idCategoria = cat.idCategoria
                INNER JOIN proveedores as prov ON inv.idProveedor = prov.idProveedor
                WHERE inventario = 2";
$resultado = $mysqli->query($sql);


$pdf = new PDF("P", "mm", "letter");
$pdf->AliasNbPages();
$pdf->SetMargins(10, 10, 10);
$pdf->AddPage();


$pdf->SetFont("Arial", "B", 9);

$pdf->Cell(10,5, "#", 1, 0,"C");
$pdf->Cell(15,5, "Proveedor entrega", 1, 0,"C");
$pdf->Cell(30,5, "Usuario recibe", 1, 0,"C");
$pdf->Cell(50,5, "Producto", 1, 1,"C");
$pdf->Cell(10,5, "Cantidad", 1, 1,"C");
$pdf->Cell(10,5, "Comentarios", 1, 1,"C");
$pdf->Cell(50,5, "Fecha", 1, 1,"C");



$pdf->SetFont("Arial","", 9);

while ($fila = $resultado->fetch_assoc()){

$pdf->Cell(10,5,$fila['idInventario'], 1, 0,"C");
$pdf->Cell(70,5,$fila['Proveedor'], 1, 0,"C");
$pdf->Cell(70,5,$fila['Usuario'], 1, 0,"C");
$pdf->Cell(50,5,utf8_decode($fila['Producto']), 1, 1,"C");
$pdf->Cell(50,5,$fila['cantidad'], 1, 1,"C");
$pdf->Cell(50,5,$fila['Comentario'], 1, 1,"C");
$pdf->Cell(50,5,$fila['fechaCreacion'], 1, 1,"C");
}

$pdf->Output();

?>