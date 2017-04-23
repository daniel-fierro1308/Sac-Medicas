var nombre, apellido, telefono, correo, contra, nueva_contra, repe_contra, exp_correo, exp_contra, template, render;

nombre = document.getElementById('nombre');
apellido = document.getElementById('apellido');
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

function tiempo(){
    setTimeout(function(){
        document.getElementById('result').innerHTML = "";
        document.getElementById('result_contra').innerHTML = "";
    },2000);
}

function validar_datos() {
    if(nombre.value == '' || apellido.value == '' || telefono.value == '' || correo.value == ""){
        document.getElementById('result').innerHTML = render({type: 'danger', body: 'Por favor complete todos los campos'});
        tiempo();
        return false;
    } else if(!exp_correo.test(correo.value)){
        document.getElementById('result'). innerHTML = render({type: 'danger', body: 'El correo ingresado no es valido'});
       $('#correo').val('');
       tiempo(); 
       return false;  
   }
}

function validar_contra() {
    if(contra.value == '' || nueva_contra.value == '' || repe_contra.value == ''){
        document.getElementById('result_contra').innerHTML = render({type: 'danger', body: 'Por favor complete los campos'});
        tiempo();
        return false;
    } else if(!exp_contra.test(nueva_contra.value)){
        document.getElementById('result_contra').innerHTML = render({type:'danger',body:'La nueva contraseña no es valida por favor intente nuevamente'});
        tiempo();
         $('.vacio').val('');
        return false;
    } else if(nueva_contra.value != repe_contra.value) {
        document.getElementById('result_contra').innerHTML = render({type: 'danger', body: 'Las contraseñas ingresadas no coinciden'});
        tiempo();
        $('.vacio').val('');
        return false;
    }
}
