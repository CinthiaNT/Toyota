<table id="tablaUsuario">
  <thead>
    <tr style="width=100%">
      <th colspan="11">A U T O M O V I L</th>
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

      <td><button>Editar</button></td>
      <td><button>Eliminar</button></td>
    </tr>
    <?php
      }
    ?> 
  </tbody>
</table>