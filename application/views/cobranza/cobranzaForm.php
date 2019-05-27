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
	<?php $plazo = $datosVenta[0]['plazo'];
          $meses = $datosVenta[0]['mensualidades_pagadas'];
          $faltantes = $plazo - $meses; ?>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" name="cobranza" id="cobranza" action="<?php echo base_url(); ?>Cobranza/valor" method="post">
				<p class="encabezado">C O B R A N Z A</p>
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Mensualidades Faltantes</span>
					<input class="input100" type="number" name="faltantes" id="faltantes" placeholder="Mensualidades Faltantes" value="<?=$faltantes?>" readonly>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Please Type Your Name">
					<span class="label-input100">Id *</span>
					<input class="input100" type="number" name="id" id="id" placeholder="Id abono" value="<?=$cobranza[0]['id']?>" required readonly>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Fecha *</span>
					<input class="input100" type="date" name="fecha" id="fecha" placeholder="Fecha" value="<?=$cobranza[0]['fecha']?>" required>
				</div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Mensualidades Abonadas *</span>
					<input class="input100" type="number" name="mensualidades_abonadas" id="mensualidades_abonadas" placeholder="Mensualidades Abonadas" value="<?=$cobranza[0]['mensualidades_abonadas']?>" onkeyup="calcular();" required>
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Monto Mensualidad $*</span>
					<input class="input100" type="number" name="mensualidad_con_interes" id="mensualidad_con_interes" placeholder="Monto Mensualidad $" value="<?=$datosVenta[0]['mensualidad_con_interes']?>" required readonly>
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Total Pago $*</span>
					<input class="input100" type="number" name="total_pago" id="total_pago" placeholder="Total Pago $" value="" required readonly>
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">ID Venta *</span>
					<input class="input100" type="number" name="id_compra" id="id_compra" placeholder="ID Venta" value="<?=$cobranza[0]['id_compra']?>" required readonly>
                </div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="guardar" id="guardar">
						<span>
							Guardar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

	<script type="text/javascript">
		function calcular(){
			var faltantes = document.getElementById('faltantes').value;
			var abonadas = document.getElementById('mensualidades_abonadas').value;

			if(parseInt(faltantes) < parseInt(abonadas)){
				alert('Por favor escribe un número menor de mensualidades a abonar');
				document.getElementById('mensualidades_abonadas').value = '';
			}

			abonadas = document.getElementById('mensualidades_abonadas').value;
			var monto = document.getElementById('mensualidad_con_interes').value;
			var total = abonadas * monto;
			document.getElementById('total_pago').value = total;
		}
	</script>

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