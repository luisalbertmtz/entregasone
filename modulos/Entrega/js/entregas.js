$(document).ready(function () {

    $('#formRegister').on("submit", function (e) {
        e.preventDefault();
        var formData = $(this).serializeArray();
        
        $.ajax({
            data: formData,
            type: 'POST',
            dataType: 'text',
            url: 'index.php?event=SET_INVENT',
            beforeSend: function () {
                $("button[type='submit']").attr('disabled', true).html('Espere...');
                $("input").attr('disabled', true);
            },
            success: function (data) {
                $("button[type='submit']").attr('disabled', false).html('Guardar');
                $("input").attr('disabled', false);
                $("form")[0].reset();
                alert(data);
                //window.location.href = "registro.php";
            },
            timeout: 15000
        }).fail(function (jqXHR, textStatus, errorThrown) {
            alert('No se puede realizar la transacción');
        });
    });
});

