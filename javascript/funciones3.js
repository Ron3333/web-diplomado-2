
// 10 es un valor primitivo no posee ni propiedades ni metodos
let  a = 10;

function cambiarValor(a){
	// a esta solo e el ambito de la funcion
	a = 20;	
	console.log("a dentro de la funcion: " + a)
}

cambiarValor(a);
console.log(a);

let b = 5

function Mifuncion(){
	b= 2;
}

Mifuncion();
console.log(b);

