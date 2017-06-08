var asunto, mensaje, template, render;
 asunto = document.getElementById('asunto');
 mensaje = document.getElementById('message');
 template = document.getElementById('mensaje').innerHTML;
render = Handlebars.compile(template);

 function validar_campos(){
     if (asunto.value == "" || mensaje.value == "") {
      document.getElementById('result').innerHTML = render({tipo: 'danger', body: 'Por favor complete los campos para enviar su mensaje'});
      tiempo();
      return false;   
     }
 }
