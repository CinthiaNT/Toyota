<table id="tablaUsuario">
  <thead>
    <tr style="width=100%">
      <th colspan="11">V E N D E D O R</th>
    </tr>
    <tr>
    <th width="25%" class="centrado">Id</th>
      <th width="50%" class="centrado">Nombre</th>
      <th width="25%" class="centrado">Apellidos</th>
      <th width="25%" class="centrado">Correo</th>
      <th width="25%" class="centrado"></th>
      <th width="25%" class="centrado"></th>  
    </tr>
  </thead>
  <tbody>    
    <br> 
    <?php
      foreach ($vendedores as $key) {
    ?>  
      <tr>
      <th><?= $key['id']?></th>
      <td><?= $key['nombre']?></td>
      <td><?= $key['apellidos']?></td>
      <td><?= $key['correo']?></td>

      <td><form action = '<?= base_url('')?>Vendedor/editar' method = 'post'><button type="submit" class="sin_borde" value="<?=$key['id']?>" id="editar" name="editar"><img class="icono_chico" src="<?= base_url(); ?>resource/images/edit.png"></button></form></td>

      <td><form action = '<?= base_url('')?>Vendedor/eliminar' method = 'post'><button type="submit" class="sin_borde" value="<?=$key['id']?>" id="eliminar" name="eliminar" onclick="return confirmacion('¿Está seguro que desea eliminar al vendedor?')"><img class="icono_chico" src="<?= base_url(); ?>resource/images/delete.png"></button></form></td>
    </tr>
    <?php
      }
    ?> 
  </tbody>
</table>

<center>
  <button class="boton_inferior" name="agregar" id="agregar" onclick="window.location='<?php echo base_url(); ?>Vendedor/agregar'">Agregar</button>
  <button class="boton_inferior" name="reporte" id="reporte" onclick="window.location='<?php echo base_url(); ?>Vendedor/reporte'" target="_blank">Ver listado de vendedores</button>
</center>



















