$(document).ready(function(){
    $('#cancelar, #validar').hide();
    $('#enviar').click(function(){
        $('#telefono, #correo').prop('disabled',false);
         $('#telefono, #correo').val('');
        $('#enviar').hide();
        $('#validar, #cancelar').show();
    });

    $('#cancelar').click(function(){
        $(location).attr('href','info.php');
    });

    $('.cambiar').hide();

   $('#cambio').on('change', function(){
        if($(this).is(':checked') ){
           $('.cambiar').show(); 
        } else {
             $('.cambiar').hide();
        }
   });

   $('#validar').click(function(){
    var telefono, correo, usuario;
    telefono = $('#telefono').val();
    correo = $('#correo').val();
    if($.trim(telefono).length > 0 && $.trim(correo).length > 0){
     $.ajax({
       url: './controladores/modificar_info.php',
       method: 'POST',
       data: {telefono:telefono, correo:correo},
       cache: false,
       beforeSend: function(){
           $('#validar').val('Validando la informacion');
       }, 
       success: function(data){
            $('#validar').val('Validar Información');
            if(data){
                $('#result').html(data);
            }
       }
        });
    }
});
});