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
      <form class="contact100-form validate-form" name="cotizacion" id="cotizacion" action="<?php echo base_url(); ?>Cotizacion/agregar" method="post">
        <?php
          foreach ($automoviles as $key) {
            if($key['imagen'] == null){
              $imagen = "default.png";
            }else{
              $imagen = $key['imagen'];
            }
        ?>
        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Please Type Your Name">
          <img class="" src="<?= base_url();?>resource/images/<?= $imagen?>" alt="Card image cap" style="width: 350px; height: 350px; padding: 20px 20px 20px 20px;" ><!--padding: 20px 20px 20px 20px;-->
          <h3 class="" style="">Marca: <?= $key['marca']?></h3>
          <h3 class="" style="">Modelo: <?= $key['modelo']?></h3><!--color: #007a33;-->
          <h3 class="" style="">Precio: $<?= $key['precio']?></h3>
          <h3 class="" style="">Tipo: <?= $key['tipo']?></h3>
          <h3 class="" style="">Cilindros: <?= $key['no_cilindros']?></h3>
          <h3 class="" style="">Combustible: <?= $key['combustible']?></h3>
          <h3 class="" style="">Transmisión: <?= $key['transmision']?></h3>
          <div class="container-contact100-form-btn">
            <button class="contact100-form-btn" value="<?= $key['id']?>" name="id" id="id">
              <span>
                Realizar Cotización
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              </span>
            </button>
          </div>
        </div>
        <?php
          }
        ?>
      </form>
    </div>
  </div>
</body>