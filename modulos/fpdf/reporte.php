<?php


require "conexion.php";
require "plantilla.php";

$sql = "SELECT idinventario,idUsuario,Comentario,cantidad FROM inventario";
$resultado = $mysqli->query($sql);


$pdf = new PDF("P", "mm", "letter");
$pdf->AliasNbPages();
$pdf->SetMargins(10, 10, 10);
$pdf->AddPage();


$pdf->SetFont("Arial", "B", 9);

$pdf->Cell(10,5, "ID", 1, 0,"C");
$pdf->Cell(70,5, "Usuario", 1, 0,"C");
$pdf->Cell(70,5, "Comentario", 1, 0,"C");
$pdf->Cell(50,5, "Cantidad", 1, 1,"C");



$pdf->SetFont("Arial","", 9);

while ($fila = $resultado->fetch_assoc()){
    
$pdf->Cell(10,5,$fila['idinventario'], 1, 0,"C");
$pdf->Cell(70,5,$fila['idUsuario'], 1, 0,"C");
$pdf->Cell(70,5,$fila['Comentario'], 1, 0,"C");
$pdf->Cell(50,5,$fila['cantidad'], 1, 1,"C");
}

$pdf->Output();

?>