
function miFuncion1(){
	console.log("funcion1");
}

function miFuncion2(){
	console.log("funcion2");
}

//miFuncion1();
//miFuncion2();

// FUNCIONES DE TIPO CALLBACK

function imprimir(mensaje){
	console.log(mensaje);
	console.log("Estoy en un Callback");
}

function suma(op1, op2, funcionCallback){
	let res = op1 + op2;
	funcionCallback("Resultado: "+res);
}

suma(5,6, imprimir);

function miFuncionCallback(){
	console.log("saludos asincronos 1 despues de 3  seg");
}

setTimeout(miFuncionCallback,3000 );
setTimeout( function(){console.log("saludos asincronos 2 despues de 4 seg")},4000);
setTimeout( () => console.log("saludos asincronos 3 despues de 2 seg"),2000);

console.log("RUN");



let reloj = () => { 
	let fecha = new Date();
	// template string
	console.log(`${fecha.getHours()}:${fecha.getMinutes()}:${fecha.getSeconds()}`);
}

setInterval(reloj, 1000);


