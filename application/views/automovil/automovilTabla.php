<div>
<table id="tablaUsuario">
  <thead>
    <tr style="width=80%">
      <th colspan="11">A U T Ó M O V I L</th>
    </tr>
    <tr>
      <th width="10%">#</th>
      <th width="10%">Marca</th>
      <th width="10%">Modelo</th>
      <th width="10%">Precio</th>
      <th width="10%">Existencia</th>
      <th width="10%">Color</th>
      <th width="10%">Tipo</th>
      <th width="10%">Capacidad</th>
      <th width="10%">Combustible</th>
      <th width="10%"></th>
      <th width="10%"></th>  
    </tr>
  </thead>
  <tbody>    
    <br> 
    <?php
      foreach ($autos as $key) {
    ?>  
      <tr>
      <th scope="row" style="color: #000000;"><?= $key['id']?></th>
      <td style="color: #000000;"><?= $key['marca']?></td>
      <td style="color: #000000;"><?= $key['modelo']?></td>
      <td style="color: #000000;"><?= $key['precio']?></td>
      <td style="color: #000000;"><?= $key['no_inventario'] ?></td>
      <td style="color: #000000;"><?= $key['color_exterior']?></td>
      <td style="color: #000000;"><?= $key['transmision']?></td>
      <td style="color: #000000;"><?= $key['capacidad']?></td>
      <td style="color: #000000;"><?= $key['combustible']?></td>

      <td><form action = '<?= base_url('')?>Automovil/editar' method = 'post'><button type="submit" class="sin_borde" value="<?=$key['id']?>" id="editar" name="editar"><img class="icono_chico" src="<?= base_url(); ?>resource/images/edit.png"></button></form></td>
      <td><form action = '<?= base_url('')?>Automovil/eliminar' method = 'post'><button type="submit" class="sin_borde" value="<?=$key['id']?>" id="eliminar" name="eliminar" onclick="return confirmacion('¿Está seguro que desea eliminar automovil?')"><img class="icono_chico" src="<?= base_url(); ?>resource/images/delete.png"></button></form></td>
    </tr>
    <?php
      }
    ?> 
  </tbody>
</table>
<center>
  <button class="boton_inferior" name="agregar" id="agregar" onclick="window.location='<?php echo base_url(); ?>Automovil/agregar'">Agregar</button>
  <button class="boton_inferior" name="reporte" id="reporte" onclick="window.location='<?php echo base_url(); ?>Automovil/reporte'" target="_blank">Ver listado de automóviles</button>
</center>
    </div>