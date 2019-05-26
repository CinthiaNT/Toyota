<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reporte Cotización</title>
</head>
<body onload="HTMLtoPDF(); location.href='<?= base_url(); ?>Cotizacion';">
	<div id="HTMLtoPDF">
		<div>
			<p style="display: inline-block; text-align: right; font-size: 15px;"><b>Fecha <?=$datos[0]['fecha']?></b></p>
			<img src="<?= base_url(); ?>resource/images/toyota.jpg" style="width: 127px; height: 44px; display: inline-block;">
			<p style="display: inline-block; text-align: center; font-size: 20px;"><b>Cotización No. <?=$datos[0]['idCC']?></b></p>
		</div>
		<div>
			<p style="font-size: 18px;"><b>Datos del cliente</b></p>
		</div>
		<div>
			<p><b>Cliente: </b><?=$datos[0]['razon_social']?>&nbsp;&nbsp;|&nbsp;&nbsp;<b>Régimen Fiscal: </b><?=$datos[0]['regimen_fiscal']?>&nbsp;&nbsp;|&nbsp;&nbsp;<b>RFC: </b><?=$datos[0]['rfc']?></p>
		</div>
		<div>
			<p style="font-size: 18px;"><b>Datos del vehículo</b></p>
		</div>
		<div>
			<p><b>Marca: </b><?=$datos[0]['marca']?>&nbsp;&nbsp;|&nbsp;&nbsp;<b>Modelo: </b><?=$datos[0]['modelo']?>&nbsp;&nbsp;|&nbsp;&nbsp;<b>Color: </b><?=$datos[0]['color_exterior']?></p>
		</div>
		<div>
			<p><b>Transmisión: </b><?=$datos[0]['transmision']?>&nbsp;&nbsp;|&nbsp;&nbsp;<b>Procedencia: </b><?=$datos[0]['procedencia']?>&nbsp;&nbsp;|&nbsp;&nbsp;<b>Estado: </b><?=$datos[0]['estado_vehiculo']?></p>
		</div>
		<div>
			<p style="font-size: 18px;"><b>Datos del vendedor</b></p>
		</div>
		<div>
			<p><b>Nombre: </b><?=$datos[0]['nombre']?> <?=$datos[0]['apellidos']?>&nbsp;&nbsp;|&nbsp;&nbsp;<b>Correo: </b><?=$datos[0]['correoVen']?></p>
		</div>
		<table border="1" style="width: 100%;">
			<?php
				echo "<thead>";
				echo "<tr>";
				echo "<th>";
				echo "No.";
				echo "</th>";
				echo "<th>";
				echo "Fecha";
				echo "</th>";
				echo "<th>";
				echo "Concepto";
				echo "</th>";
				echo "<th>";
				echo "Abono";
				echo "</th>";
				echo "<th>";
				echo "Interés";
				echo "</th>";
				echo "<th>";
				echo "Mensualidad";
				echo "</th>";
				echo "<th>";
				echo "Saldo";
				echo "</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				foreach ($amortizacion as $key) {
					echo "<tr>";
					echo "<td>";
					echo $key["numero"];
					echo "</td>";
					echo "<td>";
					echo $key["fecha"];
					echo "</td>";
					echo "<td>";
					echo $key["concepto"];
					echo "</td>";
					echo "<td>";
					echo $key["abono"];
					echo "</td>";
					echo "<td>";
					echo $key["interes"];
					echo "</td>";
					echo "<td>";
					echo $key["mensualidad"];
					echo "</td>";
					echo "<td>";
					echo substr($key["saldo"], 1);
					echo "</td>";
					echo "</tr>";
				}
				echo "</tbody>";
			?>
		</table>
	</div>

	<script src="<?= base_url(); ?>resource/js/jspdf.js"></script>
	<script src="<?= base_url(); ?>resource/js/jquery-2.1.3.js"></script>
	<script src="<?= base_url(); ?>resource/js/pdfFromHTML.js"></script>

</body>
</html>