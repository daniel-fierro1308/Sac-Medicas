function tiempo(){
    setTimeout(function(){
        document.getElementById('result').innerHTML = "";
    },2000);
}

$(document).ready(function(){
    $('#cancelar, #validar').hide();
    $('#enviar').click(function(){
        $('#telefono, #correo').prop('disabled',false);
        //  $('#telefono, #correo').val('');
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
                tiempo();
                $('#telefono, #correo').prop('disabled',true);
                 $('#telefono, #correo').addClass('bien');
                $('#validar, #cancelar').hide();
                 $('#enviar').show();
            } else {
                $("#result").html("<div class='alert alert-dismissible alert-danger'><strong>¡Error!</strong>No se ha podido registrar correctamente.</div>");
              }    
       },error:function(err){
          $('#result').html(err);
          }
        });
    }
});
});