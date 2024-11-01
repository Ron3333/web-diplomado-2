
let numero_1 = 20;
let numero_2 = 40;
let oper = "suma" // suma, resta, mult, div

function calc(a, b , oper){

	let resultado = 0;

	if(oper == "suma"){
		resultado = a + b;
	}else if( oper == "resta"){
		resultado = a - b;
	}else if( oper == "mult"){
		resultado = a * b;
	}else if( oper == "div"){
		resultado = a / b;
	}else{
		resultado = "No es un operador valido";
	}

	return resultado;
}

let resul = calc(numero_1, numero_2, oper);
console.log(resul);

oper = "mult";

resul = calc(numero_1, numero_2, oper);
console.log(resul);


let numbers = [10, 2, 40, 5, 12, 6];


function maxNumero(numbers){

	let maxNumber = numbers[0]; 
	let i = 1; 

	while (i < numbers.length) {
	  if (numbers[i] > maxNumber) {
	    maxNumber = numbers[i];
	  }
	  i++;
	}
	return maxNumber;
}

let max = maxNumero(numbers);
console.log("Maximo numero: " + max);