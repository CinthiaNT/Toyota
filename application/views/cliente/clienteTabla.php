<table id="tablaUsuario">
  <thead>
    <tr>
      <th width="6%" class="centrado">Id Cliente</th>
      <th width="14%" class="centrado">Razón Social</th>
      <th width="14%" class="centrado">Régimen Fiscal</th>
      <th width="14%" class="centrado">RFC</th>
      <th width="14%" class="centrado">Teléfono</th>
      <th width="14%" class="centrado">Dirección</th>
      <th width="14%" class="centrado">Correo</th>
      <th width="5%" class="centrado">Editar</th>
      <th width="5%" class="centrado">Eliminar</th>  
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($clients as $key) {
    ?>
    <tr>
      <th><?= $key['id']?></th>
      <td><?= $key['razon_social']?></td>
      <td><?= $key['regimen_fiscal']?></td>
      <td><?= $key['rfc']?></td>
      <td><?= $key['telefono']?></td>
      <td><?= $key['direccion']?></td>
      <td><?= $key['correo']?></td>

      <td><form action = '<?= base_url('')?>Cliente/editar' method = 'post'><button type="submit" class="" value="<?=$key['id']?>" id="editar" name="editar"><img class="icono_chico" src="<?= base_url(); ?>resource/images/edit.png"></button></form></td>

      <td><form action = '<?= base_url('')?>Cliente/eliminar' method = 'post'><button type="submit" class="" value="<?=$key['id']?>" id="eliminar" name="eliminar" onclick="return confirmacion('¿Está seguro que desea eliminar al cliente?')"><img class="icono_chico" src="<?= base_url(); ?>resource/images/delete.png"></button></form></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>

<center><button class="fondo_rojo letra_blanca sin_borde" name="agregar" id="agregar" onclick="window.location='<?php echo base_url(); ?>Cliente/agregar'">Agregar</button></center>