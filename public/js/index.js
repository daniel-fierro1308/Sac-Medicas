new WOW().init();

$(document).ready(function(){
    $('#login1').hide();
    $('#login').click(function(){
        $('#login1').toggle(1000);
    });

    $('#registro1').hide();
    $('#registro').click(function(){
        $('#registro1').toggle(1000);
    });

    $('#contacto1').hide();
    $('#contacto').click(function(){
        $('#contacto1').toggle(1000);
    })
});