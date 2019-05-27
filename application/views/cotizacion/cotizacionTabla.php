<table id="tablaUsuario">
  <thead>
    <tr style="width=100%">
      <th colspan="11">C O T I Z A C I O N</th>
    </tr>
    <tr>
      <th width="10%" class="centrado">#</th>
      <th width="10%" class="centrado">Precio Neto</th>
      <th width="10%" class="centrado">Enganche</th>
      <th width="10%" class="centrado">Tasa</th>
      <th width="10%" class="centrado">Plazo</th>
      <th width="10%" class="centrado">Precio Final</th>
      <th width="10%" class="centrado">Automóvil</th>
      <th width="10%" class="centrado">Vendedor</th>
      <th width="10%" class="centrado">Cliente</th>
      <th width="10%" class="centrado"></th>
      <th width="10%" class="centrado"></th>  
    </tr>
  </thead>
  <tbody>    
    <br> 
    <?php
      foreach ($cotizaciones as $key) {
    ?>  
      <tr>
      <th><?= $key['idCC']?></th>
      <td>$<?= $key['precio_neto']?></td>
      <td><?= $key['enganche']?>%</td>
      <td><?= $key['tasa']?>%</td>
      <td><?= $key['plazo'] ?> meses</td>
      <td>$<?= $key['precio_final']?></td>
      <td><?= $key['modelo']?></td>
      <td><?= $key['nombre'].' '.$key['apellidos']?></td>
      <td><?= $key['razon_social']?></td>

      <td><form action = '<?= base_url('')?>Cotizacion/editar' method = 'post'><button type="submit" class="sin_borde" value="<?=$key['idCC']?>" id="editar" name="editar"><img class="icono_chico" src="<?= base_url(); ?>resource/images/edit.png"></button></form></td>

      <td><form action = '<?= base_url('')?>Cotizacion/eliminar' method = 'post'><button type="submit" class="sin_borde" value="<?=$key['idCC']?>" id="eliminar" name="eliminar" onclick="return confirmacion('¿Está seguro que desea eliminar la cotización?')"><img class="icono_chico" src="<?= base_url(); ?>resource/images/delete.png"></button></form></td>
    </tr>
    <?php
      }
    ?> 
  </tbody>
</table>

<center><button class="boton_inferior" name="agregar" id="agregar" onclick="window.location='<?php echo base_url(); ?>Cotizacion/agregar'">Agregar</button></center>