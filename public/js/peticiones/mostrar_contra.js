$(document).ready(function(){

    $('#mostrar').click(function(){
        $('#ocultar').show();
        $('#mostrar').hide();
        $('#contrasena').removeAttr("type", "password");
        $('#contrasena').prop("type", "text");
    });
    $('#ocultar').click(function(){
        $('#mostrar').show();
        $('#ocultar').hide();
        $('#contrasena').removeAttr("type", "text");
        $('#contrasena').prop("type", "password");
    });
});