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
				<p class="encabezado">C O T I Z A C I Ó N</p>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" style="background-color: #fff; border: none;">
					<!-- DIV VACÍO PARA QUE HAYA CAMBIO DE LÍNEA-->
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Please Type Your Name">
					<span class="label-input100">Id *</span>
					<input class="input100" type="number" name="id" id="id" placeholder="Id cotización" value="<?=$cotizacion[0]['id']?>" readonly>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Fecha *</span>
					<input class="input100" type="date" name="fecha" id="fecha" placeholder="Fecha cotización" value="<?=$cotizacion[0]['fecha']?>" required>
				</div>

				<div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
					<span class="label-input100">Vendedor *</span>
					<div>
						<select class="js-select2" name="id_vendedor" id="id_vendedor">
                            <?php for($i = 0; $i < $numVendedores[0]['totalVendedores']; $i++){ ?>
                            	<option <?php if($cotizacion[0]['id_vendedor'] == $vendedores[$i]['id']){ ?> selected <?php } ?> value="<?=$vendedores[$i]['id']?>"><?php echo $vendedores[$i]['nombre'].' '.$vendedores[$i]['apellidos']; ?></option>
        					<?php } ?>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
                </div>

                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
					<span class="label-input100">Cliente *</span>
					<div>
						<select class="js-select2" name="id_cliente" id="id_cliente">
                            <?php for($i = 0; $i < $numClientes[0]['totalClientes']; $i++){ ?>
                            	<option <?php if($cotizacion[0]['id_cliente'] == $clientes[$i]['id']){ ?> selected <?php } ?> value="<?=$clientes[$i]['id']?>"><?php echo $clientes[$i]['razon_social']; ?></option>
        					<?php } ?>
						</select>
						<!--<div class="dropDownSelect2"></div>-->
					</div>
                </div>

                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
					<span class="label-input100">Automóvil *</span>
					<div>
						<select class="js-select2" name="id_automovil" id="id_automovil">
                            <?php for($i = 0; $i < $numAutomoviles[0]['totalAutomoviles']; $i++){ ?>
                            	<option <?php if($cotizacion[0]['id_automovil'] == $automoviles[$i]['id']){ ?> selected <?php } ?> value="<?=$automoviles[$i]['id']?>"><?php echo $automoviles[$i]['modelo']; ?></option>
        					<?php } ?>
						</select>
						<!--<div class="dropDownSelect2"></div>-->
					</div>
                </div>

                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
					<span class="label-input100">Precio $*</span>
					<div>
						<select class="js-select2" name="precio" id="precio" disabled="true">
                            <?php for($i = 0; $i < $numAutomoviles[0]['totalAutomoviles']; $i++){ ?>
                            	<option <?php if($cotizacion[0]['id_automovil'] == $automoviles[$i]['id']){ ?> selected <?php } ?> value="<?=$automoviles[$i]['precio']?>"><?php echo $automoviles[$i]['precio']; ?></option>
        					<?php } ?>
						</select>
						<!--<div class="dropDownSelect2"></div>-->
					</div>
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Descuento $*</span>
					<input class="input100" type="number" name="descuento" id="descuento" placeholder="Descuento $" value="<?=$cotizacion[0]['descuento']?>" required>
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Subtotal $*</span>
					<input class="input100" type="number" name="subtotal" id="subtotal" placeholder="Subtotal $" value="" required readonly>
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Comisión $*</span>
					<input class="input100" type="number" name="comision" id="comision" placeholder="Comisión $" value="<?=$cotizacion[0]['comision']?>" required>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Precio Neto $*</span>
					<input class="input100" type="number" name="precio_neto" id="precio_neto" placeholder="Precio Neto $" value="<?=$cotizacion[0]['precio_neto']?>" required readonly>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Enganche %*</span>
					<input class="input100" type="number" name="enganche" id="enganche" placeholder="Enganche %" value="<?=$cotizacion[0]['enganche']?>" required>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Importe del Enganche %*</span>
					<input class="input100" type="number" name="importeEnganche" id="importeEnganche" placeholder="Importe del Enganche %" value="" required readonly>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Tasa %*</span>
					<input class="input100" type="number" name="tasa" id="tasa" placeholder="Tasa %" value="<?=$cotizacion[0]['tasa']?>" required>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Plazo meses*</span>
					<input class="input100" type="number" name="plazo" id="plazo" placeholder="Plazo meses" value="<?=$cotizacion[0]['plazo']?>" required>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Precio final $*</span>
					<input class="input100" type="number" name="precio_final" id="precio_final" placeholder="Precio final $" value="<?=$cotizacion[0]['precio_final']?>" required readonly>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Mensualidad sin interés $*</span>
					<input class="input100" type="number" name="mensualidad_sin_interes" placeholder="Mensualidad sin interés $" value="<?=$cotizacion[0]['mensualidad_sin_interes']?>" id="mensualidad_sin_interes" required readonly>
				</div>

				<div class="wrap-input100 dis-none validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Interés $*</span>
					<input class="input100" type="number" name="interes" id="interes" placeholder="Interés $" value="<?=$cotizacion[0]['interes']?>">
				</div>

				<div class="wrap-input100 dis-none validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Mensualidad con interés $*</span>
					<input class="input100" type="number" name="mensualidad_con_interes" id="mensualidad_con_interes" placeholder="Mensualidad con interés $" value="<?=$cotizacion[0]['mensualidad_con_interes']?>">
				</div>

				<div class="wrap-input100 dis-none validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Oculto</span>
					<input class="input100" type="text" name="oculto" id="oculto" placeholder="Oculto" value="">
				</div>

				<div class="wrap-input100 validate-input bg1" id="HTMLtoPDF">
					<table class="label-input100" name="tablaPagos" id="tablaPagos" style="width: 100%;">
					</table>
				</div>
				
			</form>

			<div class="container-contact100-form-btn">
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
			</div>
		</div>
	</div>

	<!--<script> var variableJS = "contenido de la variable javascript";</script>-->

<?php
/*$PHPvariable =  "<script> document.write(variableJS) </script>";
echo "PHPvariable = ".$PHPvariable;*/
?>

	<script type="text/javascript">
		function valor1(){
			document.getElementById('oculto').value = 1;
			enviar();
		}

		function valor2(){
			document.getElementById('oculto').value = 2;
			enviar();
		}

		function valor3(){
			document.getElementById('oculto').value = 3;
			enviar();
		}

		function enviar(){
			document.cotizacion.action="<?= base_url(); ?>Cotizacion/valor";
			document.cotizacion.submit();
		}
	</script>

	<script src="<?= base_url(); ?>resource/js/cotizacion.js"></script>

<!--===============================================================================================-->
	<!--<script src="vendor/jquery/jquery-3.2.1.min.js"></script>-->
<!--===============================================================================================-->
	<!--<script src="vendor/animsition/js/animsition.min.js"></script>-->
<!--===============================================================================================-->
	<!--<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
<!--===============================================================================================-->
	<!--<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>-->
<!--===============================================================================================-->
	<!--<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>-->
<!--===============================================================================================-->
	<!--<script src="vendor/countdowntime/countdowntime.js"></script>-->
<!--===============================================================================================-->
	<!--<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>-->
<!--===============================================================================================-->
	<!--<script src="js/main.js"></script>-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>-->

</body>