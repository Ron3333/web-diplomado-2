//Determinar si una palabra es un palíndromo:

let palabra = "radar";

let palabra2= palabra.split("");
console.log(palabra2);
let palabra3 = palabra2.reverse();
console.log(palabra3);
let palabra4 = palabra3.join("");
console.log(palabra4);

let palabraInvertida = palabra.split("").reverse().join("");
console.log(palabraInvertida);
if (palabra === palabraInvertida) {
  console.log("La palabra es un palíndromo");
} else {
  console.log("La palabra no es un palíndromo");
}