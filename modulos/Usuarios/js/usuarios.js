$(document).ready(function () {
    toastr.options = {
        "closeButton": true,
        "timeOut": 3000,
        "extendedTimeOut": 0,
        "progressBar": true,
        "preventDuplicates": false,
        "positionClass": "toast-top-center",
        "tapToDismiss": false
    };
    
    $("#idUsuario").on("change", function () {
        var id = $("#idUsuario").val();
        $.ajax({
            data: { id: id },
            type: 'POST',
            url: 'index.php?event=GET_USER',
            dataType: "json",
            beforeSend: function () {
                $("input").attr('disabled', true);
                $("button[type='submit']").attr('disabled', true).html('Espere...');
            },
            success: function (data) {
                $("input").attr('disabled', false);
                $("button[type='submit']").attr('disabled', false).html('Guardar');
                var dataLength = Object.keys(data).length;
                if (dataLength > 0) {
                    $.each(data, function (index, obj) {
                        $("#username").val(obj.username);
                        $("#nombreCompleto").val(obj.nombreCompleto);
                        $("#password").val("");
                        $("#email").val(obj.email);
                        $("#telefono").val(obj.telefono);
                        $("#fechaCreado").val(obj.fechaCreacion).addClass("disabled");
                        $("#fechaActualizado").val(obj.fechaActualizacion).addClass("disabled");
                        $("#idRol option[value='" + obj.idRol + "']").prop('selected', true);
                        $("#activo option[value='" + obj.activo + "']").prop('selected', true);
                    });
                } else {
                    toastr.warning("No hay datos encontrados");
                    $("form")[0].reset();
                }
            },
            timeout: 15000
        }).fail(function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR, textStatus, errorThrow)
            $("input").attr('disabled', false);
            $("button[type='submit']").attr('disabled', false).html('Guardar');
            toastr.danger("No se puede realizar la transacción");
        });
    });

    $('#formRegister').on("submit", function (e) {
        e.preventDefault();
        var formData = $(this).serializeArray();
        
        $.ajax({
            data: formData,
            type: 'POST',
            dataType: 'text',
            url: 'index.php?event=CREA_USER',
            beforeSend: function () {
                $("button[type='submit']").attr('disabled', true).html('Espere...');
                $("input").attr('disabled', true);
            },
            success: function (data) {
                $("button[type='submit']").attr('disabled', false).html('Guardar');
                $("input").attr('disabled', false);
                $("form")[0].reset();
                toastr.success(data);
                setTimeout(function(){
                    window.location.href = "usuarios.php";
                }, 2000);
            },
            timeout: 15000
        }).fail(function (jqXHR, textStatus, errorThrown) {
            toastr.danger("No se puede realizar la transacción");
        });
    });
});

