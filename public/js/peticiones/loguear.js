function ocultar(){
  setTimeout(function(){
     document.getElementById('result').innerHTML = '';
    },2000);  
}

  $(document).ready(function(){
    $('#login').click(function(){
      var usuario = $('#usuario').val();
      var contrasena = $('#contrasena').val();
      if($.trim(usuario).length > 0 && $.trim(contrasena).length > 0){
        $.ajax({
          url:"./controladores/loguear.php",
          method:"POST",
          data:{usuario:usuario, contrasena:contrasena},
          cache:"false",
          beforeSend:function() {
            $('#login').html("Conectando...");
          },
          success:function(data) {
            $('#login').html("Login");
            if (data=="1") {
              $(location).attr('href','index_log.php');
            } else {
              $("#result").html("<div class='alert alert-dismissible alert-danger'><strong>¡Error!</strong> los datos son incorrectos.</div>");
              $('input').val('');
              ocultar();
        }
          }
        });
      };
    });
});