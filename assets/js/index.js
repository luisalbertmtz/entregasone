$(function(){
    $(".loading").hide();
    $('#frm-login').submit(function (e) {
        e.preventDefault();
        var formData = $("#frm-login").serializeArray();

        $.ajax({
            data: formData,
            type: 'POST',
            dataType: 'script',
            url: 'modulos/Session/index.php?event=LOGIN',
            beforeSend: function () {   
                $('loading').show();
                $("input, button").attr('disabled', true);
            },
            success: function (data) {                
                setTimeout(function(){ 
                    $('.loading').hide();
                    $('input').val("");
                    $("input, button").attr('disabled', false); 
                    $('#usuario').focus();
                    $("#message").hide();
                }, 5000);
            },
            error: function (data) {
                $('.loading').hide();
                $("input, button").attr('disabled', false); 
                $('input').val("");
                $('#usuario').focus();
            }
        }).fail( function( jqXHR, textStatus, errorThrown ) {
            if (jqXHR.status === 0) {
              alert('No se puede realizar la transacción');
            };
        });
    });
})