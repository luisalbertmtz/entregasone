$(document).ready(function () {

    $("#idProducto").on("change", function () {
        var id = $("#idProducto").val();
        $.ajax({
            data: { id: id },
            type: 'POST',
            url: 'index.php?event=GET_ART',
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
                        $("#Nombre").val(obj.Nombre);
                        $("#idCategoria option[value='" + obj.idCategoria + "']").prop('selected', true);
                        $("#idProveedor option[value='" + obj.idProveedor + "']").prop('selected', true);
                        $("#activo option[value='" + obj.activo + "']").prop('selected', true);
                        $("#fechaCreado").val(obj.fechaCreacion).addClass("disabled");
                        $("#fechaActualizado").val(obj.fechaActualizacion).addClass("disabled");                        
                    });
                } else {
                    alert("No hay datos encontrados");
                    $("form")[0].reset();
                }
            },
            timeout: 15000
        }).fail(function (jqXHR, textStatus, errorThrown) {
            $("input").attr('disabled', false);
            $("button[type='submit']").attr('disabled', false).html('Guardar');
            alert('No se puede realizar la transacción');
        });
    });

    $('#formRegister').on("submit", function (e) {
        e.preventDefault();
        var formData = $(this).serializeArray();
        
        $.ajax({
            data: formData,
            type: 'POST',
            dataType: 'text',
            url: 'index.php?event=CREA_ART',
            beforeSend: function () {
                $("button[type='submit']").attr('disabled', true).html('Espere...');
                $("input").attr('disabled', true);
            },
            success: function (data) {
                $("button[type='submit']").attr('disabled', false).html('Guardar');
                $("input").attr('disabled', false);
                window.location.href = "articulos.php";
                alert(data);
            },
            timeout: 15000
        }).fail(function (jqXHR, textStatus, errorThrown) {
            alert('No se puede realizar la transacción');
        });
    });
});

