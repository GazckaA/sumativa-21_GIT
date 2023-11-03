var d;
var mensaje = "";
$(document).ready(function(){
    var interval = setInterval(prueba,1000);
})

function prueba() {
    d = new Date();
    if(d.getHours() < 5 || d.getHours() > 18)mensaje = "BUENAS NOCHES";
    else if(d.getHours() > 4 && d.getHours() < 12)mensaje = "BUENOS DIAS";
    else mensaje = "BUENAS TARDES";
    $('#mensaje').html(mensaje);
    $('#item').html('La hora en este momento es: '+ d.toString().substring(16,24));
}