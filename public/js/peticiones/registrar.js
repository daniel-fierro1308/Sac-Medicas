    function desaparecer(){
        setTimeout(function(){
            document.getElementById('result').innerHTML = "";
        },2000);
    }
    
    $(document).ready(function(){            
            $('#enviar').click(function(){
                var nombre, apellido, usuario, telefono, correo, contrasena, re_contrasena;
                nombre = $('#nombre').val();
                apellido = $('#apellido').val();
                usuario = $('#usuario').val();
                telefono = $('#telefono').val();
                correo = $('#correo').val();
                contrasena = $('#contrasena').val();
                re_contrasena = $('#re_contrasena').val();

                if($.trim(nombre).length > 0 && $.trim(apellido).length > 0  && $.trim(usuario).length > 0 && $.trim(telefono).length > 0 && $.trim(correo).length > 0 && $.trim(contrasena).length > 0 && $.trim(re_contrasena).length > 0){
                    $.ajax({
                        url: './controladores/registrar.php',
                        method: 'POST',
                        data: {nombre:nombre, apellido:apellido, usuario:usuario, telefono:telefono, correo:correo, contrasena:contrasena, re_contrasena:re_contrasena},
                        cache: false,
                        beforeSend:function(){
                            $('#enviar').val('Comprobando la informacion...');
                        }, 
                        success:function(data){
                            $('#enviar').val('Registrarme');
                            if(data){
                                $('#result').html(data);
                                $('input').val('');
                                desaparecer();
                            };    
                        }
                    });
                }; 
            });
        });