$(document).ready(function () {

    $("#ncontrol").focus();


    $('#btnEnviar').slideUp();

    $(".programa").change(function () {
        selected = false;
        $('.programa').each(function () {
            if (this.checked) {
                selected = true;
            }
        });

        if (selected) {

            $('#btnEnviar').slideDown();
            $('.programa').attr('required', false);
        } else {
            $('#btnEnviar').slideUp();
            $('.programa').attr('required', true);

        }
    });

});



