var datos,hora_exacta, hora, minutos, segundos, hora_conjunta, am_pm;


function Obtener_hora(){
datos = new Date();
hora = datos.getHours(); 
minutos = datos.getMinutes();
segundos = datos.getSeconds();
am_pm = "PM";

minutos = colocar_numero(minutos);
segundos = colocar_numero(segundos);

    if(hora < 12) {
        am_pm = "AM";
    } 
    if(hora > 12){
        hora = hora - 12;
    }

    if(hora == 0){
        hora = 12;
    }

    if(hora < 10){
        hora = "0" + hora;
    }

     hora_exacta = hora + ":" + minutos + ":" + segundos  + " " + am_pm;

    setTimeout("Obtener_hora()", 1000);
    document.getElementById('hora').innerHTML = hora_exacta;
}

function colocar_numero(n){
    if(n < 10){
        n = "0" + n;
    }
    return n;
}

var dia,fechas, año, dia_hoy, fecha_hoy, año_actual;

var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
var dias = ["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"];

function Obtener_fecha(){
    fechas = new Date();
    dia = fechas.getDate();
    año = fechas.getFullYear();

    if(dia<10){
        dia = "0" + dia;
    }
    
    dia_hoy = dias[fechas.getDay()];
    fecha_hoy = dia + " " + "de" + " " + meses[fechas.getMonth()];
    año_actual = "de"+ " " + año;

    document.getElementById('dia').innerHTML = dia_hoy;
    document.getElementById('fecha').innerHTML = fecha_hoy;
    document.getElementById('año').innerHTML = año_actual;
}

window.onload = function(){
    Obtener_hora();
    Obtener_fecha();
}