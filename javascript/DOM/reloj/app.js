console.log("Reloj");

const  mostrarReloj = ()=>{
    let fecha = new Date();
    let hr = formatoDigCero(fecha.getHours());
    let min = formatoDigCero(fecha.getMinutes());
    let seg = formatoDigCero(fecha.getSeconds());
    document.getElementById('hora').innerHTML = `${hr}:${min}:${seg}`;

    const meses = ['Ene', 'Feb', 'Mar', 'Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic' ];
    const dias =['Dom','Lun','Mar','Mie','Jue','Vie','Sab'];
    let diaSemana = dias[fecha.getDay()];
    let dia = fecha.getDate();
    let mes = meses[fecha.getMonth()];
    let fechaTexto = `${diaSemana}, ${dia}, ${mes}`;
    document.getElementById('fecha').innerHTML = fechaTexto;
    document.getElementById('contenedor').classList.toggle('animar');
}

const formatoDigCero = (digito)=>{
    if(digito < 10){
        digito = '0' + digito;
    }
    return digito;
}

setInterval(mostrarReloj, 1000);

