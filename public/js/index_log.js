$(document).ready(function(){
    $('#videos1').hide();
    $('#videos').click(function(){
        $('#videos1').toggle(1000);
    });

     $('#imagen1').hide();
    $('#imagen').click(function(){
        $('#imagen1').toggle(1000);
    });

    $('#informacion1').hide();
    $('#informacion').click(function(){
        $('#informacion1').toggle(1000);
    });
});