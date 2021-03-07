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
});
