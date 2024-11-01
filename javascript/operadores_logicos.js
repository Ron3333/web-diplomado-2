let a = true;
let b = false;

let resultado = a && b ;
console.log(resultado);

resultado = a || b ;
console.log(resultado);

console.log(!resultado);

let x = 2;
let y = 5;


resultado = (x > y ) && ( x < y );
console.log("resultado AND: " +resultado);

resultado = (x > y ) || ( x < y );
console.log("resultado OR: " +resultado);

resultado = !( (x > y ) || ( x < y ) );
console.log("resultado OR-NOT: " +resultado);