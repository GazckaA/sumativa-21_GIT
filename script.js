var d;
$(document).ready(function(){
    var interval = setInterval(prueba,1000);
})

function prueba() {
    d = new Date();
    $('#item').html('La hora en este momento es: '+ d.toString());
}