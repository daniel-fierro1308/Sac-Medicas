var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-z0-9-])+.)+([a-zA-Z0-9-]{2,4})+$/;
var passExp = /(?=[#$-/:-?{-~!"^_`\[\]a-zA-Z]*([0-9#$-/:-?{-~!"^_`\[\]]))(?=[#$-/:-?{-~!"^_`\[\]a-zA-Z0-9]*[a-zA-Z])[#$-/:-?{-~!"^_`\[\]a-zA-Z0-9]{4,}/;

function revisar(elemento){
    if(elemento.value==""){
        elemento.className = "error";
    } else {
        elemento.className = "form-input";
    }
} 

function revisaremail(elemento) {
    if (elemento.value!=""){
        var dato = elemento.value;
        if (!expresion.test(dato)) {
            elemento.className='error';
        } else {
        elemento.className='form-input';
        }
	}
}

function revisarContra(element){
    if(element.value!=""){
        var contra = element.value;
        if(!passExp.test(contra)){
            element.className= 'error';
        } else {
            element.className = 'form-input';
        }
    }
}

function validar(form) {
   if(form.nombre.value == '' || form.apellido.value == '' || form.documento.value == '' || form.telefono.value == '' || form.correo.value == '' || form.contrasena.value == '' || form.re_contrasena == '') {
        document.getElementById('alerta').innerHTML = "<div class='alert alert-danger role='alert''>"+ "Por favor complete todos los campos " + "</div>";
        setTimeout(function(){
            document.getElementById('alerta').innerHTML = "";
        },2000);
      return false;
   } else if(!expresion.test(form.correo.value)){
        document.getElementById('alerta').innerHTML = "<div class='alert alert-danger role='alert''>"+ "El correo ingresado no es válido" + "</div>";
        setTimeout(function(){
            document.getElementById('alerta').innerHTML = "";
        },2000);
      return false;
   } else if(!passExp.test(form.contrasena.value)){
       document.getElementById('alerta').innerHTML = "<div class='alert alert-danger role='alert''>"+ "La contraseña ingresada no es válida" + "</div>";
        setTimeout(function(){
            document.getElementById('alerta').innerHTML = "";
        },2000);
      return false;
   } else if(form.contrasena.value != form.re_contrasena.value) {
         document.getElementById('alerta').innerHTML = "<div class='alert alert-danger role='alert''>"+ "Las contraseñas no coinciden, por favor vuelva a intentar" + "</div>";
        setTimeout(function(){
            document.getElementById('alerta').innerHTML = "";
        },2000);
        form.contrasena.value = "";
        form.re_contrasena.value = "";
      return false;
   } else {
       document.getElementById('alerta').innerHTML = "<div class='alert alert-danger role='alert''>"+ "Se ha registrado correctamente!!" + "</div>";
        setTimeout(function(){
            document.getElementById('alerta').innerHTML = "";
        },2000);
   }
}
