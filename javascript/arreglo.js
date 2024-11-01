

let autos = ["Mercedes Benz", "Ferrari", "Fiat", "Toyota", "Ford"];

console.log(autos[5]);

console.log("La longitud del array : "+ autos.length);

/*
for (let i = 0; i < autos.length ; ++i) {
	  console.log("Mi arreglo en la posicion  " +i+ " es: "+  autos[i]);
}
*/

autos[2]="Chevett";
console.log(autos);

autos.push("Honda");

console.log(autos);

let b = autos.pop();

console.log(autos);

b = autos.pop();
console.log(b);
console.log(autos);

let c = autos.shift();

console.log(c);

console.log(autos);

console.log(typeof autos);

console.log(Array.isArray(autos));

console.log(autos instanceof Array);








