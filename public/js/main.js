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

    $('.slider').slick();
});