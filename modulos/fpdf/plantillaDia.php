<?php

require "fpdf.php";

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image("Picture1.png", 10, 5, 19 );
    // Arial bold 15
    $this->SetFont("Arial","B", 13);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30, 5, "Reporte del Dia Blanco sucios y Blanco limpios", 0, 0, "C");
    //Fecha
    $this->SetFont("Arial","", 12);
    $this->Cell(130, 5, "Fecha: ".date("d/m/Y"), 0, 1, "C");
    // Salto de línea
    $this->Ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}

}


?>