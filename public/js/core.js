$(function () {
    //Permite generar el slug del producto
    $("#name").keyup(function () {
        var text = $(this).val();
        text = text.toLowerCase();
        text = text.replace(/[^a-zA-Z0-9]+/g, "-");
        $("#slug").val(text);
    });

    //Time picker inputs horarios
    $("#hour_start").mdtimepicker("setValue", "8:00 AM");
    $("#hour_end").mdtimepicker("setValue", "8:00 PM");

    //Concatena los horarios anteriores en un solo input
    $("#save_business").click(function () {
        var hour = $("#hour_start").val() + ' a '+ $("#hour_end").val();
        $("#schedule").val(hour)
    });

    $("#category-registered").change(function() {
        if(this.checked) {
            $('#modalRegisterCategory').modal('show')
        }
    });

    $("#request-register").click(function() {
        var category = $('#category-name').val();
        $('#modalRegisterCategory').modal('hide')
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/request-category-register",
            method: "POST",   
            beforeSend: function(){
                $('.ajax-loader').css("visibility", "visible");
            },     
            data: {
                category_name : category
            },
            success: function(data){
                alert('Se ha enviado un correo al administrador');
            },
            error: function(errMsg) {
                alert('Ha ocurrido un error, intente nuevamente');
            },
            complete: function(){
                $('.ajax-loader').css("visibility", "hidden");
            }
        });
    });
});
