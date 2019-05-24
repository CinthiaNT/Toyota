<script src="<?= base_url();?>resource/js/jquery-1.12.4.js"></script>
<script src="<?= base_url();?>resource/js/popper.min.js" ></script>
<script src="<?= base_url();?>resource/js/bootstrap.min.js"></script>
<script src="<?= base_url();?>resource/js/main.js"></script>
<!--<script type="text/javascript" charset="utf8" src="<?= base_url();?>resource/js/jquery.dataTables.js"></script>-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>



<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaUsuario').DataTable();
    });

    function confirmacion(mensaje) {
    	return confirm( mensaje );
    }
</script>