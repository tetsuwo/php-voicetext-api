$(document).ready(function() {

    $('#play').on('click', function() {
        console.log('play.click');

        $.ajax({
                type : 'post',
                url  : './voice_text_api.php',
                data : $('#api-explorer').serializeArray()
            })
            .then(function(response) {
                console.log('success.response', response);
            })
            .fail(function(response) {
                console.log('failure.response', response);
            });

    });

});
