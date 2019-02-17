$(document).ready(function() {
    $('#files').on('change', '.input_file', function() {
        if($('.input_file').length < 5) {
            $('#files').append(
                "<input type='file' name='images[]' class='input_file'>"
            );
        }
        else {
            $('#error').html('Nombre de photos maximum atteint');
        }
    });

    (function(){
        var width_slick = $('.img-car').width();
        var height = width_slick*9/16;
        $('.img-container').css('height', height);
    })();

    $('.slider').slick({
        dots: true
    });
});