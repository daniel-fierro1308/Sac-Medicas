var usuario, contrasena, template, render;

usuario = document.getElementById('usuario');
contrasena = document.getElementById('contrasena');
template = document.getElementById('mensaje').innerHTML;
render = Handlebars.compile(template);

function tiempo(){
    setTimeout(function(){
        document.getElementById('alerta').innerHTML = "";
    },2000);
}

function validar_login() {
    if(usuario.value == '' || contrasena.value == ''){
        document.getElementById('alerta').innerHTML = render({tipo: 'danger', body: 'Por favor complete los campos para iniciar sesion'});
        tiempo();
        return false;
    } 
}