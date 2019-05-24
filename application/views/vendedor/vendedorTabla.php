<center><h1 class="letra_blanca">Vendedores</h1></center>

<table id="tablaUsuario">
  <thead>
    <tr>
      <th width="6%" class="centrado">Id Vendedor</th>
      <th width="28%" class="centrado">Nombre</th>
      <th width="28%" class="centrado">Apellidos</th>
      <th width="28%" class="centrado">Correo</th>
      <th width="5%" class="centrado">Editar</th>
      <th width="5%" class="centrado">Eliminar</th>  
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($vendedores as $key) {
    ?>
    <tr>
      <th><?= $key['id']?></th>
      <td><?= $key['nombre']?></td>
      <td><?= $key['apellidos']?></td>
      <td><?= $key['correo']?></td>

      <td><form action = '<?= base_url('')?>Vendedor/editar' method = 'post'><button type="submit" class="" value="<?=$key['id']?>" id="editar" name="editar"><img class="icono_chico" src="<?= base_url(); ?>resource/images/edit.png"></button></form></td>

      <td><form action = '<?= base_url('')?>Vendedor/eliminar' method = 'post'><button type="submit" class="" value="<?=$key['id']?>" id="eliminar" name="eliminar" onclick="return confirmacion('¿Está seguro que desea eliminar al vendedor?')"><img class="icono_chico" src="<?= base_url(); ?>resource/images/delete.png"></button></form></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>

<center><button class="boton_inferior" name="agregar" id="agregar" onclick="window.location='<?php echo base_url(); ?>Vendedor/agregar'">Agregar</button></center>