//funcion en una expresion
let sumar = function(a, b){ return a + b};

let resultado = sumar(3,5)
console.log(resultado);

let sumaFlecha = (a, b) => a+b;
let funcionMia = a => "Este es un " + a ;
let suma = sumaFlecha(2,7);
console.log(suma);
console.log(funcionMia("Hola"));

let numero_1 = 20;
let numero_2 = 40;
let oper = "suma" // suma, resta, mult, div

let calc = (a,b,oper) => {
		
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

let rest = calc(5,5, "mult");
console.log("El reesultado es: "+ rest);



