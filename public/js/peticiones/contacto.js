function tiempo(){
    setTimeout(function(){
        document.getElementById('resultado').innerHTML = "";
    },2000);
}
$(document).ready(function(){
    $('#contacto').click(function(){
        var nombre = $('#nombre').val(),
            email = $('#email').val(),
            validar_email =  /^([a-zA-Z0-9_.-])+@(([a-zA-z0-9-])+.)+([a-zA-Z0-9-]{2,4})+$/;
            telefono = $('#telefono').val(),
            asunto = $('#asunto').val(),
            mensaje = $('#mensaje').val();

    if(nombre == '' || telefono == '' || asunto == '' ||mensaje == ''){
         $('#resultado').html("<div class='alert alert-danger'>Por Favor complete todos los campos</div>");
         tiempo();      
        return false;
    } else if(email == '' || !validar_email.test(email)){
        $('#email').focus();
        return false;
    }  else {
        $.ajax({
            type: 'POST',
            url: './controladores/contactar.php',
            data:{nombre:nombre, email:email, telefono:telefono, asunto:asunto, mensaje:mensaje},
            cache: false,
            beforeSend:function(){
               $('#contacto').val('Enviando Mensaje...');     
            },
            success:function(data){
                $('#contacto').val('Enviar Mensaje');
                if(data){
                    $('#resultado').html(data);
                    $('.msg').val('');
                    tiempo();
                    } else {
                    $('#resultado').html("<div class='alert alert-dismissible alert-danger'><strong>¡Error!</strong> no se ha enviado su mensaje.</div>");
                    tiempo();
                }
            },
        });
    }       
    });
});