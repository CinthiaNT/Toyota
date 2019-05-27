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
        $this->Cell(30,10,'Ticket pago de mensualidades',0,0,'C');
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
      $this->Cell(0,0,'','T',0,'C');
      $this->Image('resource/images/FOOTER.jpg',1,260);
      // Número de página
      $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
  }
  function Datos($cobranza)
  {
      // Colores, ancho de línea y fuente en negrita
    $this->SetFillColor(0,0,0);
    $this->SetTextColor(0);
    $this->SetDrawColor(17,1,1);
    $this->SetLineWidth(0);
    $this->SetFont('Arial','B',10);
    $this->Cell(100,5,'Fecha de pago: '.$cobranza[0]['fechaCob'],'RTL',1,'R',false);
    $this->Cell(100,5,'Venta #: '.$cobranza[0]['id_compra'],'RL',1,'L',false);
    $this->Cell(100,10,'Nombre: '.$cobranza[0]['razon_social'],'RL',1,'L',false);
    $this->Cell(100,10,'Domicilio: '.$cobranza[0]['direccion'],'RL',1,'L',false);
    $this->Cell(100,15,'Telefono: '.$cobranza[0]['telefono'],'RLB',1,'L',false);
    $this->Ln();
  }
  function Tabla1($header,$cobranza)
  {
    $this->SetFillColor(0,0,0);
    $this->SetTextColor(255);
    $this->SetLineWidth(0);
    $this->SetFont('arial','B','10');
    // Cabecera
    $w = array(30,40, 35,30);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],8,$header[$i],1,0,'C',true);
    $this->Ln();
    // Restauración de colores y fuentes
    $this->SetFillColor(243,197,197);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
    $fill = false;
        $this->Cell($w[0],10,$cobranza[0]['fechaCob'],'LB',0,'C',$fill);
        $this->Cell($w[1],10,'$'.number_format($cobranza[0]['mensualidad_con_interes']),'B',0,'C',$fill);
        $this->Cell($w[2],10,$cobranza[0]['mensualidades_abonadas'],'B',0,'C',$fill);
        $this->Cell($w[3],10,'$'.number_format($cobranza[0]['mensualidad_con_interes']*$cobranza[0]['mensualidades_abonadas']),'BR',0,'C',$fill);
        $this->Ln();
        $fill = !$fill;
    //$this->Cell(array_sum($w),40,'','BLR');
    $this->Ln();
  }
  
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$header = array('Fecha', 'Monto mensualidad', 'No. mensualidades', 'Total');
$pdf->Datos($cobranza);
$pdf->Tabla1($header,$cobranza);
$pdf->Output();
?>

