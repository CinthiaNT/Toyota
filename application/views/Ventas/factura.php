<?php
require('resource/fpdf/fpdf.php');

class PDF extends FPDF
{


  function Header()
  {
      // Logo
      $this->Image('resource/images/facturaTitle.png',1,5);
      // Arial bold 15
      $this->SetFont('Arial','B',15);
      // Movernos a la derecha
      $this->Cell(80);
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
  function Datos($venta)
  {
      // Colores, ancho de línea y fuente en negrita
    $this->SetFillColor(0,0,0);
    $this->SetTextColor(0);
    $this->SetDrawColor(17,1,1);
    $this->SetLineWidth(0);
    $this->SetFont('Arial','B',10);
    $this->Ln(28);
    $this->Cell(190,5,'Fecha de expedicion: '.$venta[0]['fecha'],'RTL',1,'L',false);
    $this->Cell(190,5,'Lugar de expedicion: Leon, Guanajuato','RL',1,'R',false);
    $this->Cell(190,15,'Vendedor: '.$venta[0]['nombre'].' '.$venta[0]['apellidos'],'RL',1,'R',false);
    $this->Cell(190,10,'Nombre: '.$venta[0]['razon_social'],'RL',1,'L',false);
    $this->Cell(190,10,'Domicilio: '.$venta[0]['direccion'],'RL',1,'L',false);
    $this->Cell(190,10,'Ciudad: Leon, Guanajuato','RL',1,'L',false);
    $this->Cell(190,15,'Telefono: '.$venta[0]['telefono'],'RLB',1,'L',false);
    $this->Ln();
  }
  function Tabla1($header,$venta)
  {
    $this->SetFillColor(0,0,0);
    $this->SetTextColor(255);
    $this->SetLineWidth(0);
    $this->SetFont('arial','B','10');
    // Cabecera
    $w = array(40,40, 40,40,30);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],8,$header[$i],1,0,'C',true);
    $this->Ln();
    // Restauración de colores y fuentes
    $this->SetFillColor(243,197,197);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
    $fill = false;
        $this->Cell($w[0],8,$venta[0]['marca'],'L',0,'C',$fill);
        $this->Cell($w[1],8,$venta[0]['no_serie'],'',0,'C',$fill);
        $this->Cell($w[2],8,$venta[0]['color_exterior'],'',0,'C',$fill);
        $this->Cell($w[3],8,$venta[0]['color_interior'],'',0,'C',$fill);
        $this->Cell($w[4],8,$venta[0]['no_motor'],'R',0,'C',$fill);
        $this->Ln();
        $fill = !$fill;
    $this->Cell(array_sum($w),0,'','');
    $this->Ln();
  }
  function Tabla2($header,$venta)
  {
    $this->SetFillColor(0,0,0);
    $this->SetTextColor(255);
    $this->SetLineWidth(0);
    $this->SetFont('arial','B','10');
    // Cabecera
    $w = array(40,35, 40,25,25,25);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],8,$header[$i],1,0,'C',true);
    $this->Ln();
    // Restauración de colores y fuentes
    $this->SetFillColor(243,197,197);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
    $fill = false;
        $this->Cell($w[0],8,$venta[0]['estado_vehiculo'],'L',0,'C',$fill);
        $this->Cell($w[1],8,$venta[0]['transmision'],'',0,'C',$fill);
        $this->Cell($w[2],8,$venta[0]['modelo'],'',0,'C',$fill);
        $this->Cell($w[3],8,$venta[0]['puertas'],'',0,'C',$fill);
        $this->Cell($w[4],8,$venta[0]['no_cilindros'],'',0,'C',$fill);
        $this->Cell($w[4],8,$venta[0]['tipo'],'R',0,'C',$fill);
        $this->Ln();
        $fill = !$fill;
    $this->Cell(array_sum($w),0,'','');
    $this->Ln();
  }
  function Tabla3($header,$venta)
  {
    $this->SetFillColor(0,0,0);
    $this->SetTextColor(255);
    $this->SetLineWidth(0);
    $this->SetFont('arial','B','10');
    // Cabecera
    $w = array(40,110, 40,);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],8,$header[$i],1,0,'C',true);
    $this->Ln();
    // Restauración de colores y fuentes
    $this->SetFillColor(243,197,197);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
    $fill = false;
        $this->Cell($w[0],8,'1','L',0,'C',$fill);
        $this->Cell($w[1],10,$venta[0]['procedencia'].': '.$venta[0]['marca'].' '.$venta[0]['modelo'].' Capacidad: '.$venta[0]['capacidad'].' '.$venta[0]['tipo_auto'],0,'L',$fill);
        $this->Cell($w[2],8,number_format($venta[0]['precio']),'R',0,'R',$fill);
        $this->Ln();
        $this->Cell(190,50,'','LBR',0,'',$fill);
        $fill = !$fill;
    //$this->Cell(array_sum($w),0,'','B');
  }
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$header = array('Marca', 'No. Serie', 'Color Ext', 'Color Int','No. Motor');
$header2 = array('Estado', 'Transmision', 'Modelo', 'No. Puertas','Cilindros','Tipo');
$header3 = array('Cantidad', 'Descripcion', 'Importe');
$pdf->Datos($venta);
$pdf->Tabla1($header,$venta);
$pdf->Tabla2($header2,$venta);
$pdf->Tabla3($header3,$venta);
$pdf->Output();
?>

