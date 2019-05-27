<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toyota</title>
        <link rel="stylesheet" href="<?= base_url(); ?>resource/css/normalize.css">
        <link rel="stylesheet" href="<?= base_url(); ?>resource/css/skeleton.css">
        <link rel="stylesheet" href="<?= base_url(); ?>resource/css/custom.css">
        <link rel="stylesheet" href="<?= base_url(); ?>resource/css/estilo.css">


        <!--===============================================================================================-->
            <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/vendor/animate/animate.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/vendor/noui/nouislider.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/css/util.css">
            <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/css/main.css">
            <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>resource/css/estilo.css">
        <!--===============================================================================================-->
        <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">!-->
        <link href="<?= base_url(); ?>resource/images/favicon.PNG" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    </head>
<body>
  <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" name="cotizacion" id="cotizacion" action="" method="post">
        <p class="encabezado">C A T Á L O G O</p>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" style="background-color: #fff; border: none;">
          <!-- DIV VACÍO PARA QUE HAYA CAMBIO DE LÍNEA-->
        </div>

        <?php
                  
                   foreach ($automoviles as $key) {
                      if($key['imagen'] == null){
                                    $imagen = "default.png";
                                  }else{
                                    $imagen = $key['imagen'];
                                  }
                ?>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Please Type Your Name">
          <!--<span class="label-input100">Id *</span>
          <input class="input100" type="number" name="id" id="id" placeholder="Id cotización" value="" readonly>-->
          <img class="" src="<?= base_url();?>resource/images/<?= $imagen?>" alt="Card image cap" style="width: 350px; height: 350px; padding: 20px 20px 20px 20px;" ><!--padding: 20px 20px 20px 20px;-->
          <h1 class="" style="">Marca: <?= $key['marca']?></h1>
          <h1 class="" style="">Modelo: <?= $key['modelo']?></h1><!--color: #007a33;-->
          <h1 class="" style="">Precio: $<?= $key['precio']?></h1>
          <h1 class="" style="">Tipo: <?= $key['tipo']?></h1>
          <h1 class="" style="">Cilindros: <?= $key['no_cilindros']?></h1>
          <h1 class="" style="">Combustible: <?= $key['combustible']?></h1>
          <h1 class="" style="">Transmisión: <?= $key['transmision']?></h1>
          <div class="container-contact100-form-btn">
            <button class="contact100-form-btn">
              <span>
                Actualizar y Descargar
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              </span>
            </button>
          </div>
        </div>

        <?php
          }
        ?>


      </form>

        <!--<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Fecha *</span>
          <input class="input100" type="date" name="fecha" id="fecha" placeholder="Fecha cotización" value="" required>
        </div>

        <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
          <span class="label-input100">Vendedor *</span>
          <div>-->
            <!--<select class="js-select2" name="id_vendedor" id="id_vendedor">
                            <?php for($i = 0; $i < $numVendedores[0]['totalVendedores']; $i++){ ?>
                              <option <?php if($cotizacion[0]['id_vendedor'] == $vendedores[$i]['id']){ ?> selected <?php } ?> value="<?=$vendedores[$i]['id']?>"><?php echo $vendedores[$i]['nombre'].' '.$vendedores[$i]['apellidos']; ?></option>
                  <?php } ?>
            </select>
            <div class="dropDownSelect2"></div>-->
          <!--</div>
                </div>

                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
          <span class="label-input100">Cliente *</span>
          <div>-->
            <!--<select class="js-select2" name="id_cliente" id="id_cliente">
                            <?php for($i = 0; $i < $numClientes[0]['totalClientes']; $i++){ ?>
                              <option <?php if($cotizacion[0]['id_cliente'] == $clientes[$i]['id']){ ?> selected <?php } ?> value="<?=$clientes[$i]['id']?>"><?php echo $clientes[$i]['razon_social']; ?></option>
                  <?php } ?>
            </select>
            <div class="dropDownSelect2"></div>-->
          <!--</div>
                </div>

                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
          <span class="label-input100">Automóvil *</span>
          <div>-->
            <!--<select class="js-select2" name="id_automovil" id="id_automovil">
                            <?php for($i = 0; $i < $numAutomoviles[0]['totalAutomoviles']; $i++){ ?>
                              <option <?php if($cotizacion[0]['id_automovil'] == $automoviles[$i]['id']){ ?> selected <?php } ?> value="<?=$automoviles[$i]['id']?>"><?php echo $automoviles[$i]['modelo']; ?></option>
                  <?php } ?>
            </select>
            <div class="dropDownSelect2"></div>-->
          <!--</div>
                </div>

                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
          <span class="label-input100">Precio $*</span>
          <div>-->
            <!--<select class="js-select2" name="precio" id="precio" disabled="true">
                            <?php for($i = 0; $i < $numAutomoviles[0]['totalAutomoviles']; $i++){ ?>
                              <option <?php if($cotizacion[0]['id_automovil'] == $automoviles[$i]['id']){ ?> selected <?php } ?> value="<?=$automoviles[$i]['precio']?>"><?php echo $automoviles[$i]['precio']; ?></option>
                  <?php } ?>
            </select>
            <div class="dropDownSelect2"></div>-->
          <<!--/div>
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Descuento $*</span>
          <input class="input100" type="number" name="descuento" id="descuento" placeholder="Descuento $" value="" required>
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Subtotal $*</span>
          <input class="input100" type="number" name="subtotal" id="subtotal" placeholder="Subtotal $" value="" required readonly>
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Comisión $*</span>
          <input class="input100" type="number" name="comision" id="comision" placeholder="Comisión $" value="" required>
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Precio Neto $*</span>
          <input class="input100" type="number" name="precio_neto" id="precio_neto" placeholder="Precio Neto $" value="" required readonly>
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Enganche %*</span>
          <input class="input100" type="number" name="enganche" id="enganche" placeholder="Enganche %" value="" required>
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Importe del Enganche %*</span>
          <input class="input100" type="number" name="importeEnganche" id="importeEnganche" placeholder="Importe del Enganche %" value="" required readonly>
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Tasa %*</span>
          <input class="input100" type="number" name="tasa" id="tasa" placeholder="Tasa %" value="" required>
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Plazo meses*</span>
          <input class="input100" type="number" name="plazo" id="plazo" placeholder="Plazo meses" value="" required>
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Precio final $*</span>
          <input class="input100" type="number" name="precio_final" id="precio_final" placeholder="Precio final $" value="" required readonly>
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Mensualidad sin interés $*</span>
          <input class="input100" type="number" name="mensualidad_sin_interes" placeholder="Mensualidad sin interés $" value="" id="mensualidad_sin_interes" required readonly>
        </div>

        <div class="wrap-input100 dis-none validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Interés $*</span>
          <input class="input100" type="number" name="interes" id="interes" placeholder="Interés $" value="">
        </div>

        <div class="wrap-input100 dis-none validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Mensualidad con interés $*</span>
          <input class="input100" type="number" name="mensualidad_con_interes" id="mensualidad_con_interes" placeholder="Mensualidad con interés $" value="">
        </div>

        <div class="wrap-input100 dis-none validate-input bg1 rs1-wrap-input100">
          <span class="label-input100">Oculto</span>
          <input class="input100" type="text" name="oculto" id="oculto" placeholder="Oculto" value="">
        </div>
      </form>-->

      <!--<div class="container-contact100-form-btn">
        <button class="contact100-form-btn" value="generar" name="generar" id="generar">
          <span>
            Generar Amortización
            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
          </span>
        </button>
      </div>
      <div class="container-contact100-form-btn">
        <button class="contact100-form-btn" <?php if($cotizacion[0]['id'] == ''){echo 'hidden';}?>>
          <span onclick="valor1();">
            Actualizar y Descargar
            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
          </span>
        </button>
      </div>
      <div class="container-contact100-form-btn">
        <button class="contact100-form-btn" <?php if($cotizacion[0]['id'] == ''){echo 'hidden';}?>>
          <span onclick="valor2();">
            Realizar Venta
            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
          </span>
        </button>
      </div>
      <div class="container-contact100-form-btn">
        <button class="contact100-form-btn" <?php if($cotizacion[0]['id'] != ''){echo 'hidden';}?>>
          <span onclick="valor3();">
            Guardar y Descargar
            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
          </span>
        </button>
      </div>-->
    </div>
  </div>
</body>




<!--<div class="container 'sombra' mt-5 pt-2" background="#FF00FF">          
      <div class="row m-1 pt-2  col-12 justify-content-center">

        <div class="col-12">
          <br>
        <table class="col-12" cellspacing="20px">
            <tbody>
            	  <?php
            	     $cont = 3;
      				     foreach ($automoviles as $key) {
      				        if($cont == 3){	
    			      ?>
                <tr class="col-md-small-xl-12">
                  <?php
    			  	       $cont=00;
    			  	    }?>
	                    <td class="col-md-small-xl-4">
	                       <div class="card-deck caja">
                            <div class="card" style="width: 18rem; height: 30rem;">
                                <?php
                                  if($key['imagen'] == null){
                                    $imagen = "default.png";
                                  }else{
                                    $imagen = $key['imagen'];
                                  }
                                ?>
                                <img class="pequenia" src="<?= base_url();?>resource/images/<?= $imagen?>" alt="Card image cap" img style="padding: 20px 20px 20px 20px;" >
                                   <div class="card-body">
									                   <h5 class="card-title" style="color: #007a33;"><?= $key['modelo']?></h5>
									                   <p class="card-text" style="color: #000000;"><?= $key['precio']?></p>
                                        <div class="cajabtn">
                                          <a href="<?php base_url();?>Catalog/DetalleProducto/<?php echo $key['id'];?>" class="btn btn-success">Detalles</a>
                                        </div>
									                 </div>
                            </div>
								         </div>
	                    </td>
                    </tr>
		              <?php
		                  $cont++;
		                }
    	            ?> 
    	      </tbody>
        </table>
        </div>
      </div>
</div>-->