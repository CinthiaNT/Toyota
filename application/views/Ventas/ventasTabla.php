<table id="tablaUsuario">
  <thead>
    <tr style="width=100%">
      <th colspan="13">V E N T A S</th>
    </tr>
    <tr>
      <th width="5%" class="centrado">#</th>
      <th width="20%" class="centrado">Cliente</th>
      <th width="8%" class="centrado">Automóvil</th>
      <th width="8%" class="centrado">Precio Neto</th>
      <th width="8%" class="centrado">Precio Final</th>
      <th width="8%" class="centrado">Mensualidad</th>
      <th width="8%" class="centrado">Plazo</th>
      <th width="8%" class="centrado">No. Mensualidades pagadas</th>
      <th width="8%" class="centrado">Vendedor</th>
      <th width="5%" class="centrado"></th>
      <th width="5%" class="centrado"></th>  
      <th width="5%" class="centrado"></th>  
    </tr>
  </thead>
  <tbody>    
    <br> 
    <?php
    
      foreach ($ventas as $key) {
        $plazo = $key['plazo'];
        $meses = $key['mensualidades_pagadas'];
    ?>  
      <tr>
      <th><?= $key['idCV']?></th>
      <td><?= $key['razon_social']?></td>
      <td><?= $key['modelo']?></td>
      <td>$<?= $key['precio_neto']?></td>
      <td>$<?= $key['precio_final']?></td>
      <td>$<?= $key['mensualidad_con_interes']?></td>
      <td><?= $key['plazo'] ?> meses</td>
      <td><?= $key['mensualidades_pagadas']?> mes(es)</td>
      <td><?= $key['nombre'].' '.$key['apellidos']?></td>
      

      <td><form action = '<?= base_url('')?>Cobranza' method = 'post'><button type="submit" class="sin_borde" value="<?=$key['id']?>" id="cobranza" name="cobranza"><img class="icono_chico" src="<?= base_url(); ?>resource/images/pagar.png"></button></form></td>
      <td><form action = '<?= base_url('')?>Cotizacion/editar' method = 'post'><button type="submit" class="sin_borde" value="<?=$key['idCV']?>" id="editar" name="cobranza"><img class="icono_chico" src="<?= base_url(); ?>resource/images/factura.png"></button></form></td>
      <td>
        <form action = '<?= base_url('')?>Ventas/eliminar' method = 'post'>
          <button type="submit" class="sin_borde" value="<?=$key['idCV']?>" 
          id="eliminar" name="eliminar" onclick="return confirmacion('¿Está seguro que desea eliminar la venta?')" <?php if($plazo > $meses){echo 'disabled';}?>>
          <img class="icono_chico" src="<?= base_url(); ?>resource/images/delete.png">
          </button>
        </form>
      </td>
      
    </tr>
    <?php
      }
      
    ?> 
  </tbody>
</table>

<center><button class="boton_inferior" name="agregar" id="agregar" onclick="window.location='<?php echo base_url(); ?>Cotizacion'">Generar venta</button></center>


