
let numero_1 = 40;
let numero_2 = 50;

suma(numero_1, numero_2);

function suma(a, b){
	let resultado = a + b;
	console.log("El resultado es: "+ resultado);

}

numero_1 = 20;
numero_2 = 30;

suma(numero_1, numero_2);

function suma2(a, b){
	let resultado = a + b;
	console.log("El valor de resultado 2: "+ resultado);
	return resultado;
}

let a = 5;
let b = 10;
let x = 0;

x = suma2(a, b);

console.log("El valor de x : "+ x);

//Declaración de la función
function miFuncion(a, b){
    return a + b
}



