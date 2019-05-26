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
      $this->Cell(30,10,'Cartera de clientes',0,0,'C');
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
// Cargar los datos
function LoadData($file)
{
    // Leer las líneas del fichero
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Tabla coloreada
function FancyTable($header, $clientes)
{
    // Colores, ancho de línea y fuente en negrita
    $this->SetFillColor(0,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(17,1,1);
    $this->SetLineWidth(0);
    $this->SetFont('','B');
    // Cabecera
    $w = array(50,18, 35,40,50);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],15,$header[$i],1,0,'C',true);
    $this->Ln();
    // Restauración de colores y fuentes
    $this->SetFillColor(243,197,197);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
    $fill = false;
    foreach($clientes as $row)
    {
        $this->Cell($w[0],8,$row['razon_social'],'LR',0,'L',$fill);
        $this->Cell($w[1],8,$row['regimen_fiscal'],'LR',0,'L',$fill);
        $this->Cell($w[2],8,$row['rfc'],'LR',0,'L',$fill);
        $this->Cell($w[3],8,$row['telefono'],'LR',0,'L',$fill);
        $this->Cell($w[4],8,$row['correo'],'LR',0,'L',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Línea de cierre
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
// Títulos de las columnas
$header = array('Razon social', 'Regimen', 'RFC', 'Telefono','Correo');
// Carga de datos
//$data = $pdf->LoadData('resource/fpdf/paises.txt');
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->FancyTable($header,$clientes);
$pdf->Output();
?>

