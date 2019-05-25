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
			<form class="contact100-form validate-form" name="autos" id="autos" action="<?php echo base_url(); ?>Vendedor/valor" method="post">
				<p class="encabezado">V E N D E D O R</p>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Id *</span>
					<input class="input100" type="text" name="id" placeholder="Id vendedor" value="<?=$vendedor[0]['id']?>">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Nombre *</span>
					<input class="input100" type="text" name="nombre" placeholder="Nombre(s)" value="<?=$vendedor[0]['nombre']?>">
				</div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Apellido *</span>
					<input class="input100" type="text" name="apellidos" placeholder="Apellido(s)" value="<?=$vendedor[0]['apellidos']?>">
                </div>
                <div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Correo electronico *</span>
					<input class="input100" type="email" name="correo" placeholder="correo@domainname" value="<?=$vendedor[0]['correo']?>">
                </div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" value="1" name="1"<?php if($vendedor[0]['id'] == ''){echo 'hidden';}?>>
						<span>
							Modificar
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" value="2" name="2"<?php if($vendedor[0]['id'] != ''){echo 'hidden';}?>>
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