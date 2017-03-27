/*var nombre, apellido, documento, telefono, correo, contrasena, repetir_contra;
nombre = document.getElementById('nombre');
apellido = document.getElementById('apellido');
documento = document.getElementById('numero_documento');
telefono = document.getElementById('telefono');
correo = document.getElementById('email');
contrasena = document.getElementById('contrasena');
repetir_contra =document.getElementById('re_contrasena');*/


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
        var expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-z0-9-])+.)+([a-zA-Z0-9-]{2,4})+$/;
        if (!expresion.test(dato)) {
            elemento.className='error';
        } else {
        elemento.className='form-input';
        }
	}
}