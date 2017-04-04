function ocultar(){
  setTimeout(function(){
     document.getElementById('result').innerHTML = '';
    },2000);  
}

  $(document).ready(function(){
    $('.more').hide();
    $('#learn').click(function(){
    $('.more').toggle(1000);
});
    $('#login').click(function(){
      var documento = $('#documento').val();
      var contrasena = $('#contrasena').val();
      if($.trim(documento).length > 0 && $.trim(contrasena).length > 0){
        $.ajax({
          url:"./controladores/loguear.php",
          method:"POST",
          data:{documento:documento, contrasena:contrasena},
          cache:"false",
          beforeSend:function() {
            $('#login').val("Conectando...");
          },
          success:function(data) {
            $('#login').val("Login");
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