$(document).ready(function(){
    $('#cancelar, #validar').hide();
    $('#enviar').click(function(){
        $('#nombre, #apellido ,#telefono, #correo').prop('disabled',false);
        $('#enviar').hide();
        $('#validar, #cancelar').show();
    });

    $('#cancelar').click(function(){
        $(location).attr('href','info.php');
    });

   $('#validar').click(function(){
    var nombre, apellido, telefono, correo;
    nombre = $('#nombre').val();
    apellido = $('#apellido').val();
    telefono = $('#telefono').val();
    correo = $('#correo').val();
    if($.trim(nombre).length > 0 && $.trim(apellido).length > 0 && $.trim(telefono).length > 0 && $.trim(correo).length > 0){
     $.ajax({
       url: './controladores/modificar_info.php',
       method: 'POST',
       data: {nombre:nombre, apellido:apellido, telefono:telefono, correo:correo},
       cache: false,
       beforeSend: function(){
           $('#validar').html('Validando...');
       }, 
       success: function(data){
            $('#validar').html('Validar Información');
            if(data){
                $('#result').html(data);
                tiempo();
                $('#nombre, #apellido, #telefono, #correo').prop('disabled',true);
                 $('#nombre,#apellido,#telefono, #correo').addClass('bien');
                $('#validar, #cancelar').hide();
                 $('#enviar').show();
            } else {
                $("#result").html("<div class='alert alert-dismissible alert-danger'><strong>¡Error!</strong>No se ha podido actualizar la información correctamente.</div>");
              }    
       },error:function(err){
          $('#result').html(err);
          }
        });
    }
});
});