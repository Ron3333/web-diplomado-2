let miPromesa = new Promise((resolver, rechazar) => {
	let expresion = false;
	if(expresion)
		resolver("resolvio correcto");
	else
		rechazar("se produjo un error");
   });


function resolver(valor){
	console.log(valor);
}

function rechazar(valor){
	console.log(valor);
}

miPromesa.then( (valor) => console.log(valor), error => console.log(error));

miPromesa.then( resolver, rechazar);

miPromesa
.then(valor => console.log(valor))
.catch(error => console.log(error));

let promesa = new Promise((resolver) => {
	console.log("inicio promesa");
	setTimeout(() => resolver("saludos con promesa timeout"), 3000);
	console.log("fin promesa");
});

promesa.then(valor => console.log(valor))

console.log("run programa");

