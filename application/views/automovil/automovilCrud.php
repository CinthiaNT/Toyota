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
			<form class="contact100-form validate-form" name="autos" id="autos" action="<?php echo base_url(); ?>Automovil/valor" method="post">
				<p class="encabezado">A U T O M O V I L</p>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Id *</span>
					<input class="input100" type="text" name="id" placeholder="Id automovil" value="<?=$automovil[0]['id']?>">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Marca *</span>
					<input class="input100" type="text" name="marca" placeholder="Toyota" value="<?=$automovil[0]['marca']?>">
				</div>

				<div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
					<span class="label-input100">Modelo *</span>
					<div>
						<select class="js-select2" name="modelo">
							<option <?php if($automovil[0]['modelo'] == "Prius") echo "selected"?>>Prius</option>
							<option <?php if($automovil[0]['modelo'] == "Yaris") echo "selected"?>>Yaris</option>
							<option <?php if($automovil[0]['modelo'] == "Corolla") echo "selected"?>>Corolla</option>
							<option <?php if($automovil[0]['modelo'] == "Camry") echo "selected"?>>Camry</option>
							<option <?php if($automovil[0]['modelo'] == "C-HR") echo "selected"?>>C-HR</option>
							<option <?php if($automovil[0]['modelo'] == "Hilux") echo "selected"?>>Hilux</option>
							<option <?php if($automovil[0]['modelo'] == "Tacoma") echo "selected"?>>Tacoma</option>
							<option <?php if($automovil[0]['modelo'] == "Mirai") echo "selected"?>>Mirai</option>
							
						</select>
						<div class="dropDownSelect2"></div>
					</div>
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Precio *</span>
					<input class="input100" type="text" name="precio" placeholder="$00.00" value="<?=$automovil[0]['precio']?>">
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">No. Serie *</span>
					<input class="input100" type="text" name="nserie" placeholder="10MNZ3457KGFS" value="<?=$automovil[0]['no_serie']?>">
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Clave Vehicular *</span>
					<input class="input100" type="text" name="clave" placeholder="10MNZ3457KGFS10" value="<?=$automovil[0]['clave_vehicular']?>">
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">En inventario *</span>
					<input class="input100" type="text" name="inventario" placeholder="Ej. 5 unidades" value="<?=$automovil[0]['no_inventario']?>">
				</div>
                <div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Tipo *</span>
					<div>
						<select class="js-select2" name="tipo">
							<option <?php if($automovil[0]['tipo'] == "Hibrido") echo "selected"?>>Hibrido</option>
							<option <?php if($automovil[0]['tipo'] == "SUV'S") echo "selected"?>>SUV'S</option>
							<option <?php if($automovil[0]['tipo'] == "PickUp") echo "selected"?>>PickUp</option>
							<option <?php if($automovil[0]['tipo'] == "Futuro") echo "selected"?>>Futuro</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
                </div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Color exterior*</span>
					<input class="input100" type="text" name="colorExt" placeholder="" value="<?=$automovil[0]['color_exterior']?>">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Color interior*</span>
					<input class="input100" type="text" name="colorInt" placeholder="" value="<?=$automovil[0]['color_interior']?>">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">No. Motor*</span>
					<input class="input100" type="text" name="motor" placeholder="" value="<?=$automovil[0]['no_motor']?>">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Tipo motor*</span>
					<input class="input100" type="text" name="tipoMotor" placeholder="" value="<?=$automovil[0]['tipo_motor']?>">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Procedencia*</span>
					<input class="input100" type="text" name="procedencia" placeholder="" value="<?=$automovil[0]['procedencia']?>">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">No. Cilindros*</span>
					<input class="input100" type="number" name="cilindros" placeholder="" value="<?=$automovil[0]['no_cilindros']?>">
				</div>
				<div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
					<span class="label-input100">Estado *</span>
					<div>
						<select class="js-select2" name="estado">
							<option <?php if($automovil[0]['tipo'] == "Nuevo") echo "selected"?>>Nuevo</option>
							<option <?php if($automovil[0]['tipo'] == "Seminuevo") echo "selected"?>>Seminuevo</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
                </div>
				<div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
					<span class="label-input100">Transmisión *</span>
					<div>
						<select class="js-select2" name="transmision">
							<option <?php if($automovil[0]['tipo'] == "T/M") echo "selected"?>>T/M</option>
							<option <?php if($automovil[0]['tipo'] == "T/A") echo "selected"?>>T/A</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">No. Puertas*</span>
					<input class="input100" type="number" name="puertas" placeholder="" value="<?=$automovil[0]['puertas']?>">
				</div>
				<div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
					<span class="label-input100">Tipo de auto*</span>
					<div>
						<select class="js-select2" name="tipoAuto">
							<option <?php if($automovil[0]['tipo'] == "Pasajeros") echo "selected"?>>Pasajeros</option>
							<option <?php if($automovil[0]['tipo'] == "Carga") echo "selected"?>>Carga</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Capacidad*</span>
					<input class="input100" type="text" name="capacidad" placeholder="" value="<?=$automovil[0]['capacidad']?>">
				</div>
				<div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
					<span class="label-input100">Combustible *</span>
					<div>
						<select class="js-select2" name="combustible">
							<option <?php if($automovil[0]['tipo'] == "Gasolina") echo "selected"?>>Gasolina</option>
							<option <?php if($automovil[0]['tipo'] == "Diesel") echo "selected"?>>Diesel</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Imagen*</span>
					<input class="input100" type="file" name="imagen" placeholder="Imagen" value="<?=$automovil[0]['imagen']?>">
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" value="1" name="1"<?php if($automovil[0]['id'] == ''){echo 'hidden';}?>>
						<span>
							Modificar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" value="2" name="2"<?php if($automovil[0]['id'] != ''){echo 'hidden';}?>>
						<span>
							Guardar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
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
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
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
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>