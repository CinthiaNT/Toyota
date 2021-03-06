<?php
require('resource/fpdf/fpdf.php');

class PDF extends FPDF
{


  function Header()
  {
      // Logo
      $this->Image('resource/images/toyota.jpg',10,8,33);
      // Arial bold 15
      $this->SetFont('Arial','B',15);
      // Movernos a la derecha
      $this->Cell(80);
      // Título
      $this->Cell(30,10,'Mejor vendedor 2019',0,0,'C');
      // Salto de línea
      $this->Ln(20);
  }
  
  // Pie de página
  function Footer()
  {
      // Posición: a 1,5 cm del final
      $this->SetY(-15);
      // Arial italic 8
      $this->SetFont('Arial','I',8);
      // Número de página
      $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
  }
function Contenido($vendedor){
    $this->SetFillColor(0,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(17,1,1);
    $this->SetLineWidth(0);
    $this->SetFont('','B');
    $this->Cell(190,8,$vendedor[0]['nom'].' '.$vendedor[0]['ap'],'LR',0,'C',true);
    $this->Ln(20);
    $this->SetFillColor(255);
    $this->SetTextColor(0);
    $this->SetFont('arial','',10);
    $this->Cell(190,10,'Equipo Toyota felicita a '.$vendedor[0]['nom'].' '.$vendedor[0]['ap'].' por obtener el premio a mejor vendedor 2019','',0,'C',FALSE);
    $this->Ln();
    $this->Cell(190,15,'Con un total de '.$vendedor[0]['ventas'].' unidades vendidas','',0,'C',FALSE);
    $this->Image('resource/images/trofeoVendedor.jpg',60,80);
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->Contenido($vendedor);
$pdf->Output();
?>

