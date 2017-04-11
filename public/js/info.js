$(document).ready(function(){
    $('#validar').hide();
    $('#enviar').click(function(){
        $('#telefono, #correo, #usuario').prop('disabled',false);
        $('#enviar').hide();
        $('#validar').show();
    });

    $('.cambiar').hide();

   $('#cambio').on('change', function(){
        if($(this).is(':checked') ){
           $('.cambiar').show(); 
        } else {
             $('.cambiar').hide();
        }
   });
});