<form name="clientes" id="clientes" action="<?php echo base_url(); ?>Cliente/valor" method="post">
	<div class="form-group">
      <label for="id"><strong>Id</strong></label>
      <input type="number" name="id" class="form-control" placeholder="" value="<?=$cliente[0]['id']?>" readonly>
    </div>
	<div class="form-row">
    	<div class="form-group col-md-4">
     		<label for="razon_social"><strong>Razón Social</strong></label>
      		<input type="text" name="razon_social" class="form-control" placeholder="Ingrese Razón Social" value="<?=$cliente[0]['razon_social']?>" required>
    	</div>
    	<div class="form-group col-md-4">
      		<label for="regimen_fiscal"><strong>Régimen Fiscal</strong></label>
     	 	<input type="text" class="form-control" name="regimen_fiscal" placeholder="Ingrese Régimen Fiscal" value="<?=$cliente[0]['regimen_fiscal']?>" required>
    	</div>
    	<div class="form-group col-md-4">
      		<label for="rfc"><strong>RFC</strong></label>
      		<input type="text" class="form-control" name="rfc"  placeholder="Ingrese RFC" value="<?=$cliente[0]['rfc']?>" required>
    	</div>
  	</div>
    <div class="form-row">
    	<div class="form-group col-md-2">
      		<label for="telefono"><strong>Teléfono</strong></label>
      		<input type="number" class="form-control" name="telefono" placeholder="Ingrese Teléfono" value="<?=$cliente[0]['telefono']?>"required>
    	</div>
    	<div class="form-group col-md-6">
      		<label for="direccion"><strong>Dirección</strong></label>
      		<input type="text" class="form-control" name="direccion" placeholder="Ingrese Dirección" value="<?=$cliente[0]['direccion']?>" required>
    	</div>
    	<div class="form-group col-md-4">
      		<label for="correo"><strong>Correo</strong></label>
      		<input type="email" class="form-control" name="correo" placeholder="Ingrese Correo" value="<?=$cliente[0]['correo']?>" required>
    	</div>
	</div>

	<center><button type="submit" class="boton_inferior" value="1" name="1" <?php if($cliente[0]['id'] == ''){echo 'hidden';}?>>Actualizar</button></center>

    <center><button type="submit" class="boton_inferior" value="2" name="2"<?php if($cliente[0]['id'] != ''){echo 'hidden';}?>>Agregar</button></center>

</form>