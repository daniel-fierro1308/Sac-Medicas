var telefono, correo, contra, nueva_contra, repe_contra, exp_correo, exp_contra, template, render;
telefono = document.getElementById('telefono');
correo = document.getElementById('correo');
contra = document.getElementById('antigua');
nueva_contra = document.getElementById('nueva');
repe_contra = document.getElementById('repetir');
exp_correo = /^([a-zA-Z0-9_.-])+@(([a-zA-z0-9-])+.)+([a-zA-Z0-9-]{2,4})+$/;
exp_contra = /(?=[#$-/:-?{-~!"^_`\[\]a-zA-Z]*([0-9#$-/:-?{-~!"^_`\[\]]))(?=[#$-/:-?{-~!"^_`\[\]a-zA-Z0-9]*[a-zA-Z])[#$-/:-?{-~!"^_`\[\]a-zA-Z0-9]{4,}/;
template = document.getElementById('mensaje').innerHTML;
render = Handlebars.compile(template);

function revisar(element) {
    if(element.value == ""){
        element.className = "error";
    } else {
        element.className = "form-input";
    }
} 

function revise_correo() {
    if(!exp_correo.test(correo.value)){
        correo.className = "error";
    } else {
        correo.className = "form-input";
    }
} 

function temporal(){
    setTimeout(function(){
        document.getElementById('alerta').innerHTML = "";
    },2000);
}

function validar_datos() {
    if(telefono.value == '' || correo.value == ""){
        document.getElementById('alerta').innerHTML = render({type: 'danger', body: 'Por favor complete todos los campos'});
        temporal();
        return false;
    } else if(!exp_correo.test(correo.value)){
        document.getElementById('alerta').innerHTML = render({type: 'danger', body: 'Por favor ingrese un correo valido'});
        temporal();
        return false;
    }
}

function validar_contra() {
    if(contra.value == '' || nueva_contra.value == '' || repe_contra.value == ''){
        document.getElementById('alerta').innerHTML = render({type: 'danger', body: 'Por favor complete los campos'});
        temporal();
        return false;
    } else if(!exp_contra.test(nueva_contra.value)){
        document.getElementById('alerta').innerHTML = render({type:'danger',body:'La nueva contraseña no es valida por favor intente nuevamente'});
        temporal();
        return false;
        $('.vacio').val('');
    } else if(nueva_contra.value != repe_contra.value) {
        document.getElementById('alerta').innerHTML = render({type: 'danger', body: 'Las contraseñas ingresadas no coinciden'});
        temporal();
        $('.vacio').val('');
        return false;
    }
}
