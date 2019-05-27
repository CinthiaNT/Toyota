<table id="tablaUsuario">
  <thead>
    <tr style="width=100%">
      <th colspan="7">C O B R A N Z A</th>
    </tr>
    <tr style="width=100%">
      <?php $plazo = $datosVenta[0]['plazo'];
            $meses = $datosVenta[0]['mensualidades_pagadas'];
            $faltantes = $plazo - $meses; ?>
      <th colspan="7">Mensualidades Faltantes = <?= $faltantes?></th>
    </tr>
    <tr>
      <th width="5%" class="centrado">#</th>
      <th width="28%" class="centrado">Fecha Pago</th>
      <th width="16%" class="centrado">Mensualidades Abonadas</th>
      <th width="16%" class="centrado">Monto Mensualidad</th>
      <th width="16%" class="centrado">Total Pago</th>
      <th width="16%" class="centrado">ID Venta</th>
      <th width="5%" class="centrado"></th>  
    </tr>
  </thead>
  <tbody>    
    <br> 
    <?php    
      foreach ($cobranzas as $key) {
    ?>  
      <tr>
      <th><?= $key['idCob']?></th>
      <td><?= $key['fechaCob']?></td>
      <td><?= $key['mensualidades_abonadas']?></td>
      <td>$<?= $key['mensualidad_con_interes']?></td>
      <td>$<?= ($key['mensualidades_abonadas']*$key['mensualidad_con_interes'])?></td>
      <td><?= $key['id_compra']?></td>

      <td><form action = '<?= base_url('')?>Cobranza/reporte' method = 'post'><button type="submit" class="sin_borde" value="<?=$key['idCob']?>" id="reporte" name="reporte"><img class="icono_chico" src="<?= base_url(); ?>resource/images/factura.png"></button></form></td>     
    </tr>
    <?php
      }      
    ?> 
  </tbody>
</table>

<center><form action = '<?= base_url('')?>Cobranza/agregar' method = 'post'><button type="submit" class="boton_inferior" value="<?=$datosVenta[0]['id']?>" name="agregar" id="agregar" <?php if($plazo == $meses){echo 'disabled';}?>>Realizar Abono</button></form></center>
