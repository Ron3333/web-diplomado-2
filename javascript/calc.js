let operador = "resta";
let numero_1 = 2;
let numero_2 = 5;
let resultado = 0;

switch(operador){
    case "suma":
   	resultado = numero_1 + numero_2;
   	break;
   	case "resta":
   	resultado = numero_1 - numero_2;
   	break;
   	case "multiplicacion":
   	resultado = numero_1 * numero_2;
   	break;
   	case "division":
   	resultado = numero_1 / numero_2;
   	break;
}

console.log("Resultado de la " + operador +" es: "+resultado );


