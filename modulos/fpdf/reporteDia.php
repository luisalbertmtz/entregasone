<?php


require "conexion.php";
require "plantillaDia.php";

$sql = "SELECT inv.*, us.nombreCompleto as Usuario, pr.Nombre as Producto,prov.Nombre as Proveedor, cat.Nombre as Categoria, inv.fechaCreacion
            FROM inventario as inv
                INNER JOIN usuarios as us ON inv.idUsuario = us.idUsuario
                INNER JOIN productos as pr ON inv.idProducto = pr.idProducto
                INNER JOIN categorias as cat ON pr.idCategoria = cat.idCategoria
                INNER JOIN proveedores as prov ON inv.idProveedor = prov.idProveedor
                WHERE inv.fechaCreacion  >= curdate() order by cantidad asc ";
$resultado = $mysqli->query($sql);


$pdf = new PDF("P", "mm", "letter");
$pdf->AliasNbPages();
$pdf->SetMargins(10, 10, 10);
$pdf->AddPage();


$pdf->SetFont("Arial", "B", 10);


$pdf->Cell(20,5, "Proveedor", 1, 0,"C");
$pdf->Cell(30,5, "Usuario recibe", 1, 0,"C");
$pdf->Cell(30,5, "Producto", 1, 0,"C");
$pdf->Cell(20, 5, "Categoria", 1, 0, "C");
$pdf->Cell(20,5, "Cantidad", 1, 0,"C");
$pdf->Cell(40, 5, "Comentarios", 1, 0, "C");
$pdf->Cell(32,5, "Fecha", 1, 1,"C");



$pdf->SetFont("Arial","", 9);

while ($fila = $resultado->fetch_assoc()){


$pdf->Cell(20,5,$fila['Proveedor'], 1, 0,"C");
$pdf->Cell(30,5,$fila['Usuario'], 1, 0,"C");
$pdf->Cell(30,5,utf8_decode($fila['Producto']), 1, 0,"C");
$pdf->Cell(20, 5, $fila['Categoria'], 1, 0, "C");
$pdf->Cell(20,5,$fila['cantidad'], 1, 0,"C");
$pdf->Cell(40, 5, $fila['Comentario'], 1, 0, "C");
$pdf->Cell(32,5,$fila['fechaCreacion'], 1, 1,"C");
}
$pdf->Cell(300, 25, utf8_decode('Sello y Firma  ' . "________________________ " . ''), 10, 5, 'C');
$pdf->Output();

?>