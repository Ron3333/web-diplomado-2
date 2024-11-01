let bandera = true;
console.log(bandera);
bandera = false;
console.log(bandera);
console.log(typeof bandera);

function Mifuncion(){};

console.log(typeof Mifuncion);

const objeto = {
	nombre:"Pepe",
	apellido:"tRUENO"
};

console.log(typeof objeto);

let vector = [1,2,3,"Hola"];
console.log(typeof vector);

let x = "";
console.log( "vacio ", x);
console.log(typeof x);

class Persona{
	constructor(nombre, apellido){
		this.nombre=nombre;
		this.apellido=apellido;
	}
}

console.log(Persona);
console.log(typeof Persona);


